@extends('layouts.dash')
@section('content')
    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            @if (session('status_ok'))
                <div class="w-full rounded-md bg-green-50 p-4 my-2">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-green-800">
                                {{ __('Entry saved') }}
                            </h3>
                            <div class="mt-2 text-sm text-green-700">
                                <p>
                                    {{ __('You can see your entry clicking button below') }}
                                </p>
                            </div>
                            <div class="mt-4">
                                <div class="-mx-2 -my-1.5 flex">
                                    <a href="{{ session('url_entry') }}"
                                       class="bg-green-300 px-2 py-1.5 rounded-md text-sm font-medium text-green-800 hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-400 focus:ring-green-600">
                                        {{ __('Go to entry') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <x-jet-validation-errors class="mb-4"/>
            <form action="{{ route('dash.blog.update') }}" enctype="multipart/form-data" method="POST" class="w-full">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="md:grid md:grid-cols-6 md:gap-6 w-full">
                    <div class="md:col-span-4">
                        <div class="px-4 sm:px-0">
                            <label for="name"
                                   class="dark:text-white text-lg font-medium leading-6 text-gray-900">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" placeholder="{{ __('Name') }}" value="{{ $entry->name }}"
                                   class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                    <div class="md:col-span-2">
                        <div class="px-4 sm:px-0">
                            <label for="status"
                                   class="dark:text-white text-lg font-medium leading-6 text-gray-900">{{ __('Status') }}</label>
                            <select name="status" id="status"
                                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-md sm:text-sm border-gray-300">
                                <option value="0" {{ intval($entry->status) === 0 ? 'selected' : '' }}>{{ __('Draft') }}</option>
                                <option value="1" {{ intval($entry->status) === 1 ? 'selected' : '' }}>{{ __('Publish') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="md:col-span-2">
                        <div class="px-4 sm:px-0">
                            <label for="comment"
                                   class="dark:text-white text-lg font-medium leading-6 text-gray-900">{{ __('Allow comments?') }}</label>
                            <select name="comment" id="comment"
                                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-md sm:text-sm border-gray-300">
                                <option value="0" {{ intval($entry->comment) === 0 ? 'selected' : '' }}>{{ __('Disable') }}</option>
                                <option value="1" {{ intval($entry->comment) === 1 ? 'selected' : '' }}>{{ __('Allow') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="md:col-span-4">
                        <div class="px-4 sm:px-0">
                            <label for="tags"
                                   class="dark:text-white text-lg font-medium leading-6 text-gray-900">{{ __('Tags') }}</label>
                            <input type="text" name="tags" id="tags" placeholder="{{ __("Tags") }}" value="{{ $entry->tags }}"
                                   class="tagify focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-md sm:text-sm border-gray-300 dark:bg-white bg-white">
                        </div>
                    </div>

                    <div class="md:col-span-6">
                        <div class="px-4 sm:px-0">
                            <label for="preview_content"
                                   class="dark:text-white text-lg font-medium leading-6 text-gray-900">{{ __('Preview content') }}</label>
                            <textarea name="preview_content" id="preview_content" cols="30" rows="10"
                                      class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-md sm:text-sm border-gray-300"
                                      placeholder="{{ __('Preview content') }}">{!! $entry->preview_content !!}</textarea>
                        </div>
                    </div>

                    <div class="md:col-span-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white ">
                                {{ __('Image preview') }}
                            </label>
                            <label for="preview_image"
                                   class="cursor-pointer relative block w-full border-2 border-gray-300 border-dashed rounded-lg pt-0 px-0 pb-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <img src="{{ $entry->preview_image }}" id="preview-preview_image" alt="Preview" class="w-full max-w-xl mb-6 mx-auto">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                     viewBox="0 0 48 48" aria-hidden="true">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span
                                    class="mt-2 block text-sm font-medium text-gray-900 dark:text-gray-50"><span>{{ __('Upload a file') }}</span></span>
                                <span class="text-xs text-gray-500 dark:text-gray-400">
                                    PNG, JPG, GIF, WEBP, SVG {{ __('up to') }} 5MB
                                </span>
                                <input id="preview_image" name="preview_image" type="file" class="sr-only img-dd-preview"
                                       required>
                            </label>
                        </div>
                    </div>

                    <div class="md:col-span-6">
                        <div class="px-4 sm:px-0">
                            <label for="content"
                                   class="dark:text-white text-lg font-medium leading-6 text-gray-900">{{ __('Content') }}</label>
                            <textarea name="content" id="content" class="w-full editor_wysi" cols="30"
                                      rows="10" {{ __('Content') }}>{!! $entry->content !!}</textarea>
                        </div>
                    </div>

                    <div class="md:col-span-6">
                        <div class="px-4 sm:px-0">
                            <button type="submit"
                                    class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('js/wisy/froala/froala_editor.pkgd.min.css') }}">
    <script src="{{ asset('js/wisy/froala/froala_editor.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/wisy/froala/es.js') }}"></script>

    <script>
        const IMAGE_WYSI = '{{ route('dash.image.store') }}';
        //let BASE_URL_COIN = '';
        const wisy_config = {
            language: "es",
            height: 400,
            imageUploadParam: "image",
            imageUploadURL: IMAGE_WYSI,
            imageUploadParams: {_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')},

            //imageDeleteMethod: "DELETE",
            //imageDeleteParams: {_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')},
            //imageDeleteURL: IMAGE_WYSI,

            imageManagerDeleteMethod: "DELETE",
            imageManagerDeleteParams: {_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')},
            imageManagerDeleteURL: IMAGE_WYSI,


            fileUploadParam: "file",
            fileMaxSize: 5242880,
            fileAllowedTypes: ["application/pdf", "application/msword", "video/mp4", "video/webm", "image/gif", "image/jpeg", "image/pjpeg", "image/x-png", "image/png", "image/webp", "image/jfif"],
            fileUpload: !0,
            fileUploadMethod: "POST",
            fileUploadUrl: IMAGE_WYSI,
            fileUploadParams: {_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')},
            filesManagerAllowedTypes: ["application/pdf", "application/msword", "video/mp4", "video/webm", "image/gif", "image/jpeg", "image/pjpeg", "image/x-png", "image/png", "image/webp", "image/jfif"],
            filesManagerMaxSize: 5242880,
            filesManagerUploadParams: {_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')},
            filesManagerUploadURL: IMAGE_WYSI
        };
        let editor = new FroalaEditor('.editor_wysi', wisy_config)

    </script>
    {{--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6"></div>
            </div>
        </div>
    </div>
    --}}
@endsection
