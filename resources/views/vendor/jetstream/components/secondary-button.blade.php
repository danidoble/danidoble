<button {{ $attributes->merge(['type' => 'button', 'class' =>
'inline-flex items-center px-4 py-2 bg-white dark:bg-indigo-600 border border-gray-300 dark:border-indigo-700 rounded-md font-semibold text-xs
text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:text-gray-500 dark:hover-text-gray-400 focus:outline-none
focus:border-blue-300 dark:focus:border-blue-600 focus:shadow-outline-blue active:text-gray-800 dark:active:text-gray-300
active:bg-gray-50 dark:active:bg-indigo-700 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
