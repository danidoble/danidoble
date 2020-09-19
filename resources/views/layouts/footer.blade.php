@include('layouts.svg.wave_down')
<!--Footer-->
<footer class="bg-white">
    <div class="container mx-auto  px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
            <div class="flex-1 mb-6">
                <a class="text-gray-800 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                    @include('layouts.svg.danidoble')
                </a>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">{{ __('Links') }}</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-orange-500">{{ __('FAQ') }}</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#"
                           class="no-underline hover:underline text-gray-800 hover:text-orange-500">{{ __('Help') }}</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#"
                           class="no-underline hover:underline text-gray-800 hover:text-orange-500">{{ __('Terms and conditions') }}</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#"
                           class="no-underline hover:underline text-gray-800 hover:text-orange-500">{{ __('Privacy Policy') }}</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Social</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.facebook.com/Danidoble-104672900885649/" target="_blank" rel="noreferrer"
                           class="no-underline hover:underline text-gray-800 hover:text-orange-500">Facebook</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.youtube.com/danidoble" target="_blank" rel="noreferrer"
                           class="no-underline hover:underline text-gray-800 hover:text-orange-500">YouTube</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://twitter.com/danidoble1" target="_blank" rel="noreferrer"
                           class="no-underline hover:underline text-gray-800 hover:text-orange-500">Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">{{ __('Website') }}</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-orange-500">{{ __('Credits') }}</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-orange-500">{{ __('About me') }}</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#"
                           class="no-underline hover:underline text-gray-800 hover:text-orange-500">{{ __('Contact') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="hidden">
        <a href="https://www.freepik.com/free-photos-vectors/background" class="text-gray-500">
            Background vector created by freepik - www.freepik.com
        </a>
        Iconos diseñados por
        <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a>
        from
        <a href="https://www.flaticon.es/" title="Flaticon"> www.flaticon.es</a>

        <a href='https://www.freepik.com/vectors/people'>People vector created by pikisuperstar - www.freepik.com</a>
    </div>
</footer>
