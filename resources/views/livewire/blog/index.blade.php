<div>
    @if(count($entries) > 0)
        @foreach($entries as $key_entry => $entry)
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden {{ ($key_entry+1) !== count($entries) ? 'mb-8' : '' }}">
                <div class="flex-shrink-0">
                    <a href="{{ route('blog.show.slug',['date'=>date('Y-m-d',strtotime($entry->created_at)),'slug'=>$entry->slug]) }}" class="">
                    <img class="h-48 w-full object-cover lazy"
                         src="{{ asset('img/loading.svg') }}"
                         data-src="{{ $entry->preview_image }}"
                         alt="{{ $entry->name }}">
                    </a>
                </div>
                <div class="flex-1 bg-white dark:bg-gray-900 p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-indigo-600 dark:text-indigo-300">
                            @foreach(explode(',',rtrim($entry->tags,',')) as $tag)
                                <a href="#"
                                   class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200">
                                    {{ $tag }}
                                </a>
                            @endforeach
                        </p>
                        <a href="{{ route('blog.show.slug',['date'=>date('Y-m-d',strtotime($entry->created_at)),'slug'=>$entry->slug]) }}" class="block mt-2">
                            <p class="text-xl font-semibold text-gray-900 dark:text-white">
                                {{ $entry->name }}
                            </p>
                            <p class="mt-3 text-base text-gray-500 dark:text-gray-400">
                                {!! nl2br($entry->preview_content) !!}
                            </p>
                        </a>
                    </div>
                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            <a href="#">
                                <span class="sr-only">{{ $entry->owner->name }}</span>
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <div
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                        <img
                                            class="h-10 w-10 rounded-full object-cover fill-current text-gray-900 dark:text-white lazy"
                                            src="{{ asset('img/loading.svg') }}"
                                            data-src="{{ $entry->owner->profile_photo_url }}"
                                            alt="{{ $entry->owner->name }}"/>
                                    </div>
                                @else
                                    <div
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                        <img
                                            class="h-10 w-10 rounded-full object-cover fill-current text-gray-900 dark:text-white lazy"
                                            src="{{ asset('img/loading.svg') }}"
                                            data-src="{{ asset('img/dd.svg') }}"
                                            alt="{{ $entry->owner->name }}"/>
                                    </div>
                                @endif

                            </a>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                <a href="#" class="hover:underline">
                                    {{ $entry->owner->name }}
                                </a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="{{ $entry->created_at }}">
                                    {{ __('Created') }} {{ $entry->created_at->diffForHumans() }}
                                </time>
                                <div aria-hidden="true">
                                    &middot;
                                </div>
                                <div>
                                    @if($entry->created_at->diffForHumans(null, false, false, 2) !== $entry->updated_at->diffForHumans(null, false, false, 2) )
                                        Modificado {{ $entry->updated_at->diffForHumans() }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{ $entries->links() }}
    @else
        <div class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 overflow-hidden shadow-xl sm:rounded-lg mb-8">
            <div class="p-6">
                {{ __("Nothing to show") }}
            </div>
        </div>
    @endif
</div>
