<nav class="mt-5 px-2 space-y-1">
    <a href="{{ route('dashboard') }}"
       class="{{ request()->routeIs('dashboard') ? 'bg-gray-900 text-white dark:bg-indigo-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-indigo-900 hover:text-black dark:hover:text-white' }} group flex items-center px-2 py-2 text-base font-medium rounded-md"
    >
        <svg class="{{ request()->routeIs('dashboard') ? 'text-white dark:text-gray-300' : 'text-gray-400 dark:text-gray-600 group-hover:text-gray-600 dark:group-hover:text-gray-300' }} mr-4 h-6 w-6" x-description="Heroicon name: outline/home"
             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        {{ __('Dashboard') }}
    </a>

    <a href="{{ route('dash.blog.create') }}"
       class="{{ request()->routeIs('dash.blog.create') ? 'bg-gray-900 text-white dark:bg-indigo-800 dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-indigo-900 hover:text-black dark:hover:text-white' }} group flex items-center px-2 py-2 text-base font-medium rounded-md"
    >
        <svg class="{{ request()->routeIs('dash.blog.create') ? 'text-white dark:text-gray-300' : 'text-gray-400 dark:text-gray-600 group-hover:text-gray-600 dark:group-hover:text-gray-300' }} mr-4 h-6 w-6" x-description="Heroicon name: outline/home"
             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        {{ __('Blog') }}
    </a>



</nav>
