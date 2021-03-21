<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Privacy Policy') }}
        </h1>
    </x-slot>

    <div class="pt-4 pb-8 bg-gray-100 dark:bg-gray-800">
        <div class="flex flex-col items-center pt-6 sm:pt-0">
            <div
                class="w-full sm:max-w-5xl mt-6 p-6 bg-white dark:bg-gray-900 shadow-md overflow-hidden sm:rounded-lg prose">
                <h2 class="text-xl text-black dark:text-white">{{ __('Who I am?') }}</h2>
                <div class="text-md text-gray-700 dark:text-gray-400">{{ __("I'm a programmer, who likes video games, anime, books, basically a nerd :)") }}</div>

                <h2 class="text-xl text-black dark:text-white">{{ __("What personal data do we collect and why?") }}</h2>
                <h3 class="text-lg text-black dark:text-white">{{ __("Comments") }}</h3>
                <div class="text-md text-gray-700 dark:text-gray-400">
                    {{__("When visitors leave comments on the web, we collect the data shown in the comment form, as well as the visitor's IP address and browser user agent string to help detect spam.")}}
                </div>
                <h3 class="text-lg text-black dark:text-white">{{ __("Media") }}</h3>
                <div class="text-md text-gray-700 dark:text-gray-400">
                    {{__("If you upload images to the web, you should avoid uploading images with location data (EXIF GPS) included. Visitors to the website can download and extract any location data from the images on the website.")}}
                </div>

                <h3 class="text-lg text-black dark:text-white">{{ __("Cookies") }}</h3>
                <div class="text-md text-gray-700 dark:text-gray-400">
                    {{__("If you leave a comment on our site you can choose to save your name, email address and website in cookies. This is for your convenience, so you don't have to fill in your details again when you leave another comment. These cookies will last for one year.")}}
                    <br>
                    {{__("If you have an account and you connect to this site, we will install a temporary cookie to determine if your browser accepts cookies. This cookie does not contain personal data and is deleted when the browser is closed.")}}
                    <br>
                    {{__("When you log in, we will also install various cookies to save your login information and your screen display options. Login cookies last for two days, and screen options cookies last for one year. If you select \"Remember me\", your login will last for two weeks. If you log out of your account, the login cookies will be removed.")}}
                    <br>
                    {{__("If you edit or publish an article, an additional cookie will be saved in your browser. This cookie does not include personal data and simply indicates the ID of the article that you just edited. It expires after 1 day.")}}
                </div>
                <h3 class="text-lg text-black dark:text-white">{{ __("Embedded content from other websites") }}</h3>
                <div class="text-md text-gray-700 dark:text-gray-400">
                    {{ __("Articles on this site may include embedded content (for example, videos, images, articles, etc.). Embedded content from other websites behaves in exactly the same way as if the visitor had visited the other website.") }}
                    <br>
                    {{ __("These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with embedded content if you have an account and are connected to that website.") }}
                </div>
                <h3 class="text-lg text-black dark:text-white">{{ __("Your contact information") }}</h3>
                <div class="text-md text-gray-700 dark:text-gray-400">{{ __("Your information that you provide us will be seen only by the administrators of the site where they have the obligation to respect your confidential data such as your email and full name among others.") }}</div>
            </div>
        </div>
    </div>
</x-app-layout>
