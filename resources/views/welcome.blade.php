<x-app-layout>

    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div
                class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left text-gray-900 dark:text-white">
                <p class="uppercase tracking-loose w-full">danidoble</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">{{ __('Everything you imagine can be reality!') }}</h1>
                <p class="leading-normal text-2xl mb-8">Programador y gamer!</p>


                <a href="" target="_blank" rel="noopener"
                   class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg">
                    YouTube
                </a>
            </div>
            <div class="w-full md:w-3/5 py-6 text-center ">
                <div class="w-full rounded">
                    @include('svg.index.gamer')
                </div>
            </div>
        </div>
    </div>


    {{--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6"></div>
            </div>
        </div>
    </div>
    --}}
</x-app-layout>
