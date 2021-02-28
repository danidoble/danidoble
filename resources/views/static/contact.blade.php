<x-app-layout>
    <div class="py-24">
        <div class="container px-3 mx-auto items-center">
            <div class="relative bg-white dark:bg-gray-700">
                <div class="absolute inset-0">
                    <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50 dark:bg-gray-900"></div>
                </div>
                <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
                    <div class="bg-gray-50 dark:bg-gray-900 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                        <div class="max-w-lg mx-auto">
                            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 dark:text-gray-100 sm:text-3xl">
                                {{ __('Get in touch') }}
                            </h2>
                            <p class="mt-3 text-lg leading-6 text-gray-500 dark:text-gray-300">
                                {{ __('You want to get in touch, send suggestions, complaints, etc. Enter your information in the form below and we will contact you as soon as possible.') }}
                            </p>
                            <dl class="mt-8 text-base text-gray-500 dark:text-gray-300">
                                <div class="mt-3">
                                    <dt class="sr-only">{{ __('Email') }}</dt>
                                    <dd class="flex">
                                        <!-- Heroicon name: outline/mail -->
                                        <svg class="flex-shrink-0 h-6 w-6 text-gray-400"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        <div class="ml-3">
                                            {{ env('EMAIL_SUPPORT') }}
                                        </div>
                                    </dd>
                                </div>
                            </dl>

                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-700 py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                        <div class="max-w-lg mx-auto lg:max-w-none">
                            <x-jet-validation-errors class="mb-4" />
                            <form action="{{ route('front.page.contact.post') }}" method="POST" class="grid grid-cols-1 gap-y-6">
                                @csrf
                                <div>
                                    <label for="name" class="sr-only">{{ __('Full name') }}</label>
                                    <input type="text" name="name" id="name" autocomplete="name" required
                                           @if(Auth::check()) value="{{ Auth::user()->name }}" @endif
                                           class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                           placeholder="{{ __('Full name') }}">
                                </div>
                                <div>
                                    <label for="email" class="sr-only">{{ __('Email') }}</label>
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                           @if(Auth::check()) value="{{ Auth::user()->email }}" @endif
                                           class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                           placeholder="{{ __('Email') }}">
                                </div>
                                <div>
                                    <label for="phone" class="sr-only">{{ __('Phone') }}</label>
                                    <input type="text" name="phone" id="phone" autocomplete="tel"
                                           class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                           placeholder="{{ __('Phone') }}">
                                </div>
                                <div>
                                    <label for="message" class="sr-only">{{ __('Message') }}</label>
                                    <textarea id="message" name="message" rows="4"
                                              class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                              placeholder="{{ __('Message') }}"></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                            class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
