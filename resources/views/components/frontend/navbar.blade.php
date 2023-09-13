<nav 
    x-data="{ open: false, scrollAtTop: true }" 
    class="fixed w-full top-0 md:pt-10 z-50" 
    :class="{ 'md:pt-0 bg-gradient-to-r from-emerald-950 to-lime-600' : !scrollAtTop }" 
    @scroll.window="scrollAtTop = (window.pageYOffset > 50) ? false :true"
    id="navigation"
    >
    <!-- Primary Navigation Menu -->
    <div 
        class="max-w-7xl mx-auto px-0 drop-shadow-[0_1px_0_rgba(0,0,0,0.25)]"
        :class="scrollAtTop ? 'bg-gradient-to-r from-emerald-950 to-lime-600' : 'bg-transparent'"
        >
        <div class="flex justify-between h-full">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center border p-2 bg-white">
                    <a href="/">
                        <x-frontend.app-logo />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Pagrindinis') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('navAbout') }}" :active="request()->routeIs('navAbout')">
                        {{ __('Apie Mus') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('navServices') }}" :active="request()->routeIs('navServices')">
                        {{ __('Paslaugos') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('frontendGallery') }}" :active="request()->routeIs('frontendGallery')">
                        {{ __('Galerija') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                        {{ __('Kontaktai') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden  lg:flex  items-center">
                <a class="flex gap-2 items-center py-1 md:py-3 pl-1 text-xl font-medium align-middle text-lime-100 hover:text-lime-200 no-underline " href="tel:{{ $contacts->phone_number_1 }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" stroke-width={1.5} class="bi bi-telephone-inbound" viewBox="0 0 16 16">
                        <path d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    <span class="mr-4">
                        {{ $contacts->phone_number_1 }}
                    </span>
                </a>
            </div>

            <!-- Hamburger -->
            <div class="mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-lime-100 hover:text-lime-700 hover:bg-lime-100 focus:outline-none focus:bg-lime-100 focus:text-lime-700 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1 min-h-screen w-full top-0 z-50 border-t-2 border-gray-400 px-4 bg-emerald-950">
            <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Pagrindinis') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('navAbout') }}" :active="request()->routeIs('navAbout')">
                {{ __('Apie Mus') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('navServices') }}" :active="request()->routeIs('navServices')">
                {{ __('Paslaugos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('frontendGallery') }}" :frontendGalleryactive="request()->routeIs('frontendGallery')">
                {{ __('Galerija') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                {{ __('Kontaktai') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                {{ __('Prisijunti') }}
            </x-responsive-nav-link>

            <div class="pt-4 pb-1 border-t-2 border-lime-400">
                <a class="flex justify-center gap-2 items-center py-1 md:py-3 pl-1 text-xl align-middle text-lime-400 no-underline hover:text-lime-800" href="tel:+37062275757">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"  stroke-width={1.5} stroke="currentColor" class="w-6 h-6">
                        <path d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                    </svg>
                    <span class="mr-4">
                        +370 622 75757
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>