<div class="h-screen flex overflow-hidden bg-gray-100 dark:bg-gray-800" x-data="{ sidebarOpen: false }"
     @keydown.window.escape="sidebarOpen = false">
    <div x-show="sidebarOpen" class="md:hidden"
         x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." style="display: none;">
        <div class="fixed inset-0 flex z-40">
            <div @click="sidebarOpen = false" x-show="sidebarOpen"
                 x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state."
                 x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300"
                 x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0"
                 style="display: none;">
                <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
            </div>
            <div x-show="sidebarOpen" x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                 x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                 class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-200 dark:bg-gray-800"
                 style="display: none;">
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button x-show="sidebarOpen" @click="sidebarOpen = false"
                            class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            style="display: none;">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                    <div class="flex-shrink-0 flex items-center px-4">
                        <x-jet-application-mark class="h-8 w-auto fill-current text-gray-800 dark:text-gray-200"/>
                    </div>
                    @include('layouts.sidebar.menu')
                </div>
                <div class="flex-shrink-0 flex bg-gray-100 dark:bg-gray-700 p-4">
                    <a href="{{ route('profile.show') }}" class="flex-shrink-0 group block">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block h-10 w-10 rounded-full"
                                     src="{{ Auth::user()->profile_photo_url }}"
                                     alt="{{ Auth::user()->name }}"/>
                            </div>
                            <div class="ml-3">
                                <p class="text-base font-medium text-white">
                                    {{ Auth::user()->name }}
                                </p>
                                <p class="text-sm font-medium text-gray-400 group-hover:text-gray-300">
                                    {{ __('View profile') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex-shrink-0 w-14">
                <!-- Force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden md:flex md:flex-shrink-0">
        <div class="flex flex-col w-64">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col h-0 flex-1 bg-white dark:bg-gray-900">
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <x-jet-application-mark class="h-8 w-auto fill-current text-gray-800 dark:text-gray-200"/>
                    </div>
                    @include('layouts.sidebar.menu')
                </div>
                <div class="flex-shrink-0 flex bg-gray-100 dark:bg-gray-700 p-4">
                    <a href="{{ route('profile.show') }}" class="flex-shrink-0 w-full group block">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block h-9 w-9 rounded-full"
                                     src="{{ Auth::user()->profile_photo_url }}"
                                     alt="{{ Auth::user()->name }}"/>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-black dark:text-white">
                                    {{ Auth::user()->name }}
                                </p>
                                <p class="text-xs font-medium text-gray-700 dark:text-gray-300 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                                    {{ __('View profile') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col w-0 flex-1 overflow-hidden">
        <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
            <button @click.stop="sidebarOpen = true"
                    class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <span class="sr-only">Open sidebar</span>
                <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0" x-data=""
              x-init="$el.focus()">
            <div class="py-0 bg-gray-100 dark:bg-gray-800">
                <div class="w-full mx-auto px-0">
                    <div class="sticky top-0 z-10">
                        @livewire('navigation-menu')
                    </div>
                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="bg-white shadow dark:bg-gray-900">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif
                </div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                    @yield('content')

                </div>
                <div class="w-full mx-auto px-0">
                    @include('layouts.footer')
                </div>
            </div>
        </main>
    </div>
</div>
