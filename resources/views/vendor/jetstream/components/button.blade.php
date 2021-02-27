<button {{ $attributes->merge(['type' => 'submit', 'class' =>
'inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold
text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-300
active:bg-gray-900 dark:active:bg-gray-100 focus:outline-none focus:border-gray-900 dark:focus:border-gray-100
focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
