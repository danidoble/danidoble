
<div class="fixed bottom-4 right-4 btn-switch-theme">
    <button id="btn-sun-theme" class="hidden bg-gray-900 rounded-full p-2 shadow ring ring-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 text-yellow-500">
            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
        </svg>
    </button>
    <button id="btn-moon-theme" class="bg-white rounded-full p-2 shadow ring ring-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 text-gray-900">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
        </svg>
    </button>
</div>

<footer class="bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto pt-12 pb-8 px-4 overflow-hidden sm:px-6 lg:px-8">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
            <div class="px-5 py-2">
                <a href="{{ route('front.page.about') }}" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                    {{ __('About me') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('front.page.faq') }}" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                    {{ __('FAQ') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('front.page.credits') }}" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                    {{ __('Credits') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('terms.show') }}" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                    {{ __('Terms of Service') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('policy.show') }}" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                    {{ __('Privacy Policy') }}
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="{{ route('front.page.contact') }}" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                    {{ __('Contact') }}
                </a>
            </div>
        </nav>
        <div class="mt-8 flex justify-center space-x-6 mb-8">
            @if(env('SOCIAL_FACEBOOK') !== null)
                <a href="{{ env('SOCIAL_FACEBOOK') }}"
                   class="text-gray-400 dark:text-gray-700 hover:text-gray-500 dark:hover:text-gray-400" rel="noopener"
                   target="_blank">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            @endif
            @if(env('SOCIAL_INSTAGRAM') !== null)
                <a href="{{ env('SOCIAL_INSTAGRAM') }}"
                   class="text-gray-400 dark:text-gray-700 hover:text-gray-500 dark:hover:text-gray-400" rel="noopener"
                   target="_blank">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            @endif
            @if(env('SOCIAL_TWITTER') !== null)
                <a href="{{ env('SOCIAL_TWITTER') }}"
                   class="text-gray-400 dark:text-gray-700 hover:text-gray-500 dark:hover:text-gray-400" rel="noopener"
                   target="_blank">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                    </svg>
                </a>
            @endif
            @if(env('SOCIAL_YOUTUBE') !== null)
                <a href="{{ env('SOCIAL_YOUTUBE') }}"
                   class="text-gray-400 dark:text-gray-700 hover:text-gray-500 dark:hover:text-gray-400" rel="noopener"
                   target="_blank">
                    <span class="sr-only">Youtube</span>
                    <svg class="h-6 w-6 fill-current " fill="currentColor" viewBox="0 -77 512.00213 512"
                         aria-hidden="true">
                        <path
                            d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0"/>
                        <path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                    </svg>
                </a>
            @endif
            @if(env('SOCIAL_GITHUB') !== null)
                <a href="{{ env('SOCIAL_GITHUB') }}"
                   class="text-gray-400 dark:text-gray-700 hover:text-gray-500 dark:hover:text-gray-400" rel="noopener"
                   target="_blank">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            @endif
            @if(env('SOCIAL_GOOGLE') !== null)
                <a href="{{ env('SOCIAL_GOOGLE') }}"
                   class="text-gray-400 dark:text-gray-700 hover:text-gray-500 dark:hover:text-gray-400" rel="noopener"
                   target="_blank">
                    <span class="sr-only">Google</span>
                    <svg class="h-6 w-6" fill="currentColor" enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                         aria-hidden="true">
                        <path
                            d="m512 256c0-16.084-1.509-32.183-4.497-47.813-1.348-7.075-7.544-12.188-14.736-12.188h-235.767c-8.291 0-15 6.709-15 15v90c0 8.291 6.709 15 15 15h120.967c-7.537 15.258-17.924 28.497-30.121 39.635l84.78 84.78c48.781-46.475 79.374-111.875 79.374-184.414z"/>
                        <path
                            d="m256 120c29.429 0 57.422 9.346 80.947 27.041 5.947 4.468 14.341 3.926 19.614-1.392l64.014-64.014c2.974-2.974 4.57-7.061 4.38-11.265s-2.124-8.13-5.347-10.84c-45.805-38.392-103.916-59.53-163.608-59.53-87.849 0-165.458 44.654-211.337 112.452l88.048 88.048c21.006-47.316 68.268-80.5 123.289-80.5z"/>
                        <path
                            d="m256 512c57.263 0 109.993-19.2 152.602-51.187l-86.371-86.371c-19.742 11.116-42.306 17.558-66.231 17.558-55.021 0-102.283-33.184-123.289-80.5l-88.048 88.048c45.879 67.798 123.488 112.452 211.337 112.452z"/>
                        <path
                            d="m122.184 277.605c-1.149-7.079-2.184-14.208-2.184-21.605s1.035-14.526 2.184-21.605l-94.124-94.124c-17.808 34.78-28.06 74.045-28.06 115.729s10.252 80.949 28.061 115.728z"/>
                    </svg>

                </a>
            @endif
            @if(env('SOCIAL_TWITCH') !== null)
                <a href="{{ env('SOCIAL_TWITCH') }}"
                   class="text-gray-400 dark:text-gray-700 hover:text-gray-500 dark:hover:text-gray-400" rel="noopener"
                   target="_blank">
                    <span class="sr-only">Twitch</span>
                    <svg class="h-6 w-6" fill="currentColor" enable-background="new 0 0 24 24" viewBox="0 0 24 24"
                         aria-hidden="true">
                        <g>
                            <path
                                d="m.975 4.175v16.694h5.749v3.131h3.139l3.134-3.132h4.705l6.274-6.258v-14.61h-21.434zm3.658-2.09h17.252v11.479l-3.66 3.652h-5.751l-3.134 3.127v-3.127h-4.707z"/>
                            <path d="m10.385 6.262h2.09v6.26h-2.09z"/>
                            <path d="m16.133 6.262h2.091v6.26h-2.091z"/>
                        </g>
                    </svg>
                </a>
            @endif
            @if(env('SOCIAL_TIKTOK') !== null)
                <a href="{{ env('SOCIAL_TIKTOK') }}"
                   class="text-gray-400 dark:text-gray-700 hover:text-gray-500 dark:hover:text-gray-400" rel="noopener"
                   target="_blank">
                    <span class="sr-only">Tiktok</span>
                    <svg class="h-6 w-6" fill="currentColor" enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                         aria-hidden="true">
                        <g>
                            <path
                                d="m480.32 128.39c-29.22 0-56.18-9.68-77.83-26.01-24.83-18.72-42.67-46.18-48.97-77.83-1.56-7.82-2.4-15.89-2.48-24.16h-83.47v228.08l-.1 124.93c0 33.4-21.75 61.72-51.9 71.68-8.75 2.89-18.2 4.26-28.04 3.72-12.56-.69-24.33-4.48-34.56-10.6-21.77-13.02-36.53-36.64-36.93-63.66-.63-42.23 33.51-76.66 75.71-76.66 8.33 0 16.33 1.36 23.82 3.83v-62.34-22.41c-7.9-1.17-15.94-1.78-24.07-1.78-46.19 0-89.39 19.2-120.27 53.79-23.34 26.14-37.34 59.49-39.5 94.46-2.83 45.94 13.98 89.61 46.58 121.83 4.79 4.73 9.82 9.12 15.08 13.17 27.95 21.51 62.12 33.17 98.11 33.17 8.13 0 16.17-.6 24.07-1.77 33.62-4.98 64.64-20.37 89.12-44.57 30.08-29.73 46.7-69.2 46.88-111.21l-.43-186.56c14.35 11.07 30.04 20.23 46.88 27.34 26.19 11.05 53.96 16.65 82.54 16.64v-60.61-22.49c.02.02-.22.02-.24.02z"/>
                        </g>
                    </svg>

                </a>
            @endif
            @if(env('SOCIAL_LINKEDIN') !== null)
                <a href="{{ env('SOCIAL_LINKEDIN') }}"
                   class="text-gray-400 dark:text-gray-700 hover:text-gray-500 dark:hover:text-gray-400" rel="noopener"
                   target="_blank">
                    <span class="sr-only">Linkedin</span>
                    <svg class="h-6 w-6" fill="currentColor" enable-background="new 0 0 24 24" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z"/>
                        <path d="m.396 7.977h4.976v16.023h-4.976z"/>
                        <path
                            d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z"/>
                    </svg>
                </a>
            @endif
            @if(env('SOCIAL_DRIBBLE') !== null)
                <a href="{{ env('SOCIAL_DRIBBLE') }}"
                   class="text-gray-400 dark:text-gray-700 hover:text-gray-500 dark:hover:text-gray-400" rel="noopener"
                   target="_blank">
                    <span class="sr-only">Dribbble</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            @endif
        </div>

        <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <div class="px-5 py-2">
                    <a class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100"
                       rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </div>
            @endforeach
        </nav>
        <p class="mt-2 text-center text-base text-gray-400">
            &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}
        </p>
        <p class="text-center text-xs text-gray-400">
            {{ __('Created by') }} &copy;danidoble.
        </p>
    </div>
</footer>
