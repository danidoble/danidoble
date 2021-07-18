<div class="w-full">
    <div class="border border-gray-300 dark:border-pink-400 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 dark:focus-within:ring-indigo-300 focus-within:border-indigo-600 dark:focus-within:border-indigo-300 bg-white dark:bg-gray-900 mb-6">
        <label for="search_blog" class="block text-xs font-medium text-gray-900 dark:text-gray-100">{{ __("Search") }}</label>
        <input wire:model.debounce.500ms="search" type="search" name="search" id="search_blog" class="block w-full border-0 p-0 text-gray-900 dark:text-gray-100 placeholder-gray-500 focus:ring-0 sm:text-sm bg-white dark:bg-gray-900" placeholder="{{ __("Search") }}">
    </div>


    <div class="bg-white dark:bg-gray-900 shadow overflow-hidden sm:rounded-md w-full mb-10">
        <ul class="divide-y divide-gray-200 dark:divide-gray-600">
            @if(count($entries) > 0)
                @foreach($entries as $key_entry => $entry)
                    <li>
                        <a href="{{ route('dash.blog.edit',['id'=>$entry->id]) }}" class="block hover:bg-gray-50 dark:hover:bg-gray-700">
                            <div class="flex items-center px-4 py-4 sm:px-6">
                                <div class="min-w-0 flex-1 flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-12 w-12 rounded-full" src="{{ $entry->preview_image }}" alt="{{ $entry->name }}">
                                    </div>
                                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                        <div>
                                            <p class="text-sm font-medium text-indigo-600 truncate dark:text-gray-100">{{ $entry->name }}</p>
                                            <p class="mt-2 flex items-center text-sm text-gray-500">
                                                <!-- Heroicon name: solid/mail -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                                </svg>
                                                <span class="truncate dark:text-pink-400">{{ __('By') }} {{ $entry->owner->name }}</span>
                                            </p>
                                        </div>
                                        <div class="hidden md:block">
                                            <div>
                                                <p class="text-sm text-gray-900 dark:text-gray-100">
                                                    <time datetime="{{ $entry->created_at }}">
                                                        {{ __('Created') }} {{ $entry->created_at->diffForHumans() }}
                                                    </time>
                                                </p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500 dark:text-gray-100">
                                                    @if($entry->created_at->diffForHumans(null, false, false, 2) !== $entry->updated_at->diffForHumans(null, false, false, 2) )
                                                        {{ __("Updated") }} {{ $entry->updated_at->diffForHumans() }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <!-- Heroicon name: solid/chevron-right -->
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
