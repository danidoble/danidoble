<x-app-layout>
    <div class="pt-24">
        <div class="max-w-7xl px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <h1 class="text-2xl font-bold text-black dark:text-white">{{ $entry->name }}</h1>
            <div class="text-lg text-gray-800 dark:text-gray-200 py-8 mb-4">
                {{ $entry->preview_content }}
            </div>
            <div class="fr-view">
                {!! $entry->content !!}
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('js/wisy/froala/froala_editor.pkgd.min.css') }}">


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
