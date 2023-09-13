<nav x-data="{ open: false }" class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-0 lg:px-5 lg:pl-3">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="w-full flex items-center justify-between">
                <a href="" class="flex ml-3 md:mr-24">
                    <x-frontend.app-logo />
                </a>
                <button @click="open = ! open" class="block sm:hidden items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center">
                <div class="flex flex-col md:flex-row  items-center ml-3">
                    <div :class="{'block': open, 'hidden': ! open }" class="mt-10 sm:mt-0 text-gray-800 sm:text-gray-100 w-full sm:w-32 block sm:block bg-lime-400 sm:bg-transparent">
                        User: {{ Auth::user()->name }}
                    </div>

                    <div x-show="open" :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden pt-2 pb-3 space-y-1 min-w-[200px]">

                        <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="{{ route('pages.index') }}" :active="request()->routeIs('pages.index')">
                            {{ __('Pages') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="{{ route('about.index') }}" :active="request()->routeIs('about.index')">
                            {{ __('About Info') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="{{ route('services.index') }}" :active="request()->routeIs('services.index')">
                            {{ __('Services') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="{{ route('gallery.index') }}" :active="request()->routeIs('gallery.index')">
                            {{ __('Gallery') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="{{ route('contacts.index') }}" :active="request()->routeIs('contacts.index')">
                            {{ __('Contact info') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('contacts.index')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <form method="POST" action="{{ route('logout') }}" x-data class="border-t-2">
                            @csrf
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">{{ __('Log Out') }}</span>
                            </a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>