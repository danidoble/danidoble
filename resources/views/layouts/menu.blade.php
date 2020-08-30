<!--Nav-->
<nav id="header" class="fixed w-full z-30 top-0 text-white">

    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">

        <div class="pl-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
               href="{{ route('home') }}">
                @include('layouts.svg.logo')
                {{ config('app.name', 'danidoble') }}
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center p-1 text-orange-800 hover:text-gray-900">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>
                        Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>

        <div
            class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-1">
                    <a class="inline-block py-2 px-4 no-underline {{ (\Request::route()->getName() == 'products') ? 'text-black font-bold' : 'no-underline hover:text-gray-800 hover:text-underline' }}"
                       href="{{ route('products') }}" aria-label="{{ __('Products') }}">
                        {{ __('Products') }}
                    </a>
                </li>
                <li class="mr-1">
                    <a class="inline-block py-2 px-4 no-underline {{ (\Request::route()->getName() == 'blog') ? 'text-black font-bold' : 'no-underline hover:text-gray-800 hover:text-underline' }}"
                       href="{{ route('blog') }}" aria-label="{{ __('Blog') }}">
                        {{ __('Blog') }}
                    </a>
                </li>

                @guest
                    <li class="mr-1">
                        <a class="inline-block py-2 px-4 no-underline {{ (\Request::route()->getName() == 'login') ? 'text-black font-bold' : 'no-underline hover:text-gray-800 hover:text-underline' }}"
                           href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="mr-1">
                            <a class="inline-block py-2 px-4 no-underline {{ (\Request::route()->getName() == 'register') ? 'text-black font-bold' : 'no-underline hover:text-gray-800 hover:text-underline' }}"
                               href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="mr-1">
                        <a class="inline-block py-2 px-4 no-underline {{ (\Request::route()->getName() == 'logout') ? 'text-black font-bold' : 'no-underline hover:text-gray-800 hover:text-underline' }}"
                           href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>

                    <li class="mr-1">
                        <a href="#"
                           class="inline-block py-2 px-4 no-underline {{ (\Request::route()->getName() == 'account') ? 'text-black font-bold' : 'no-underline hover:text-gray-800 hover:text-underline' }}"
                           title="{{ __('My account') }}" aria-label="{{ __('My account') }}"
                        >
                            <img src="{{ asset('img/svg/usuarios.svg') }}" alt="{{ Auth::user()->name }}" class="h-6 w-6 lazy">
                        </a>
                    </li>
                @endguest
                    <li class="mr-1">
                        <a class="inline-block py-2 px-4 no-underline {{ (\Request::route()->getName() == 'cart') ? 'text-black font-bold' : 'no-underline hover:text-gray-800 hover:text-underline' }}"
                           href="{{ route('cart') }}" aria-label="{{ __('Cart') }}">
                            <img src="{{ asset('img/svg/carro.svg') }}" alt="{{ __('Cart') }}" class="h-6 w-6 inline-block">
                        </a>
                    </li>
            </ul>
            <button id="navAction" class="hidden"></button>
        </div>
    </div>

    <hr class="border-b border-gray-100 opacity-25 my-0 py-0"/>
</nav>

