<x-app-layout>
    <div class="py-12 px-3 md:px-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-12 overflow-hidden gap-x-2">
                <div class="col-span-1 md:col-span-3 lg:col-span-4 xl:col-span-9">
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-black dark:text-white mb-8">{{ $entry->name }}</h1>
                    </div>
                    <div class="text-normal text-gray-800 dark:text-gray-200">
                        {{ $entry->preview_content }}
                    </div>
                    <img class="my-6 object-cover rounded-md w-full lazy shadow-md"
                         src="{{ asset('img/loading.svg') }}"
                         data-src="{{ $entry->preview_image }}"
                         alt="{{ $entry->name }}">
                    <div class="fr-view text-normal text-gray-800 dark:text-gray-200">
                        {!! \App\Http\Controllers\AuxiliarController::imgWysi(nl2br($entry->content)) !!}
                    </div>
                    <ul class="mt-8 mb-4 grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1">
                        <li class="col-span-1 flex flex-col text-center bg-white dark:bg-gray-700 rounded-lg shadow divide-y divide-gray-200 dark:divide-gray-900">
                            <div class="flex-1 flex flex-col p-8">
                                <img class="w-32 h-32 flex-shrink-0 mx-auto bg-transparent rounded-full" src="{{ str_replace('&background=','&size=128&background=',$entry->owner->profile_photo_url) }}" alt="{{ $entry->owner->name }}">
                                <h3 class="mt-6 text-gray-900 dark:text-gray-100 text-sm font-medium">{{ mb_convert_case($entry->owner->name,MB_CASE_TITLE,'UTF-8') }}</h3>
                                <dl class="mt-1 flex-grow flex flex-col justify-between">
                                    <dt class="sr-only">Role</dt>
                                    <dd class="mt-3">
                                        <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ __(mb_convert_case($entry->owner->type,MB_CASE_TITLE,'UTF-8')) }}</span>
                                    </dd>
                                </dl>
                            </div>
                            <div>
                                <div class="-mt-px flex divide-x divide-gray-200 dark:divide-gray-900">
                                    <div class="w-0 flex-1 flex">
                                        <div class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-800 dark:text-gray-100 font-medium border border-transparent rounded-bl-lg hover:text-gray-900 dark:hover:text-gray-50">
                                            {{ \App\Models\Product::where('user_id',$entry->owner->id)->count() }} {{ __("Products posted") }}
                                        </div>
                                    </div>
                                    <div class="-ml-px w-0 flex-1 flex">
                                        <div class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-800 dark:text-gray-100 font-medium border border-transparent rounded-bl-lg hover:text-gray-900 dark:hover:text-gray-50">
                                            {{ __("Joined") }} {{ $entry->owner->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- More people... -->
                    </ul>
                </div>
                @include('blog.aside')
            </div>
        </div>
    </div>


    @section('pre_css')
        <link rel="stylesheet" href="{{ asset('js/wisy/froala/froala_editor.pkgd.min.css') }}">
    @endsection
</x-app-layout>
