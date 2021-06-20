<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 dark:text-gray-100 sm:text-4xl">
                    {{ __("News") }}
                </h2>
                <p class="mt-3 w-full mx-auto text-xl text-gray-500 dark:text-gray-300 sm:mt-4">

                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-12 overflow-hidden gap-x-2">
                <div class="col-span-1 md:col-span-3 lg:col-span-4 xl:col-span-9">
                    @livewire('news.index')
                </div>
                @include('news.aside')
            </div>
        </div>
    </div>
</x-app-layout>
