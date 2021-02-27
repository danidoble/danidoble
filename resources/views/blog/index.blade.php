<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                    From the blog
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus
                    atque, ducimus sed.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-12 overflow-hidden gap-x-2">
                <div class="col-span-1 md:col-span-3 lg:col-span-4 xl:col-span-9">
                    @livewire('blog.index')
                </div>
                <!-- ... -->
                <div class="col-span-1 md:col-span-1 lg:col-span-2 xl:col-span-3 ">
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden h-full max-h-screen overflow-auto">
                        <div class="flex-1 bg-white dark:bg-gray-900 p-6 flex flex-col justify-between pb-12 overflow-auto">
                            <div class="flex-1 ">
                                <div class="text-sm font-medium text-indigo-600 dark:text-indigo-300">
                                <div
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200">
                                    {{ __('Ads') }}
                                </div>
                                <div class="">
                                    <!--script type="text/javascript" data-idzone="3464853"
                                            src="https://a.exdynsrv.com/nativeads.js"></script-->
                                </div>
                                </div>
                            </div>
                            <div class="flex-1 ">
                                <div class="text-sm font-medium text-indigo-600 dark:text-indigo-300">
                                    <div
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200">
                                        {{ __('Ads') }}
                                    </div>
                                    <div class="">
                                        <!--script type="text/javascript" data-idzone="3464853"
                                                src="https://a.exdynsrv.com/nativeads.js"></script-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
