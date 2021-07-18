<nav class="mt-5 px-2 space-y-1">
    <a href="{{ route('dashboard') }}"
       class="{{ request()->routeIs('dashboard') ? 'bg-gray-900 text-white dark:bg-indigo-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-indigo-900 hover:text-black dark:hover:text-white' }} group flex items-center px-2 py-2 text-base font-medium rounded-md"
    >
        <svg
            class="{{ request()->routeIs('dashboard') ? 'text-white dark:text-gray-300' : 'text-gray-400 dark:text-gray-600 group-hover:text-gray-600 dark:group-hover:text-gray-300' }} mr-4 h-6 w-6"
            x-description="Heroicon name: outline/home"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        {{ __('Dashboard') }}
    </a>

    <div
        x-data="{ open: {{ request()->routeIs('dash.blog.create') || request()->routeIs('dash.blog.edit') || request()->routeIs('dash.blog.list')  ? 'true' : 'false' }} }"
        class="space-y-1">
        <button type="button"
                class="{{ request()->routeIs('dash.blog.create') || request()->routeIs('dash.blog.edit') || request()->routeIs('dash.blog.list')  ? 'bg-purple-900 text-white dark:bg-purple-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-indigo-900 hover:text-black dark:hover:text-white' }} group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                x-state:on="Current" x-state:off="Default" aria-controls="sub-menu-1" @click="open = !open"
                aria-expanded="false" x-bind:aria-expanded="open.toString()"
                x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
            <svg
                class="{{ request()->routeIs('dash.blog.create') || request()->routeIs('dash.blog.edit') || request()->routeIs('dash.blog.list')  ? 'text-white dark:text-gray-300' : 'text-gray-400 dark:text-gray-600 group-hover:text-gray-600 dark:group-hover:text-gray-300' }} mr-4 h-6 w-6"
                x-description="Heroicon name: outline/home"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span class="flex-1">
                  {{ __('Blog') }}
                </span>
            <svg
                class="ml-3 flex-shrink-0 h-5 w-5 transform group-hover:text-gray-400 transition-colors ease-in-out duration-150 text-gray-300"
                viewBox="0 0 20 20" x-state:on="Expanded" x-state:off="Collapsed" aria-hidden="true"
                :class="{ 'text-gray-400 rotate-90': open, 'text-gray-300': !(open) }">
                <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
            </svg>
        </button>
        <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-1"
             x-show="open" style="display: none;">

            <a href="{{ route('dash.blog.create') }}"
               class="{{ request()->routeIs('dash.blog.create') ? 'bg-gray-900 text-white dark:bg-indigo-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-indigo-900 hover:text-black dark:hover:text-white' }} group w-full flex items-center pl-2 pr-2 py-2 text-sm font-medium rounded-md">
                <svg
                    class="{{ request()->routeIs('dash.blog.create') ? 'text-white dark:text-gray-300' : 'text-gray-400 dark:text-gray-600 group-hover:text-gray-600 dark:group-hover:text-gray-300' }} mr-4 h-6 w-6"
                    x-description="Heroicon name: outline/home"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                {{ __('Create') }}
            </a>

            <a href="{{ route('dash.blog.list') }}"
               class="{{ request()->routeIs('dash.blog.list') ? 'bg-gray-900 text-white dark:bg-indigo-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-indigo-900 hover:text-black dark:hover:text-white' }} group w-full flex items-center pl-2 pr-2 py-2 text-sm font-medium rounded-md">
                <svg
                    class="{{ request()->routeIs('dash.blog.list') ? 'text-white dark:text-gray-300' : 'text-gray-400 dark:text-gray-600 group-hover:text-gray-600 dark:group-hover:text-gray-300' }} mr-4 h-6 w-6"
                    x-description="Heroicon name: outline/home"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                {{ __('Edit') }}
            </a>

        </div>
    </div>


</nav>
