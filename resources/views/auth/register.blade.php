<x-gates-layout>

    <div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(https://images.unsplash.com/photo-1616763355603-9755a640a287?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white">{{ __('Curtains') }}</h2>

                        <p class="max-w-xl mt-3 text-gray-300">{{ __('Geriausias užuolaidų salonas Kaune') }}</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">

                    <div class="flex flex-col justify-start items-center">
                        <a href="{{ route('home') }}">
                            <x-frontend.app-logo />
                        </a>
                        <p class="mt-3 text-gray-500 dark:text-gray-300">{{ __('Sukurti naują paskyrą') }}</p>
                    </div>

                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="mt-8">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div>
                                <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">{{ __('Vardas') }}</label>
                                <input type="text" name="name" id="name" placeholder="Vardas" :value="old('name')" required autofocus autocomplete="name" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">{{ __('Email') }}</label>
                                <input type="email" name="email" id="email" placeholder="pavyzdys@pavyzdys.com" :value="old('email')" required autocomplete="username" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <label for="password" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">{{ __('Slaptažodis') }}</label>
                                <input type="password" name="password" id="password" placeholder="Jūsų slaptažodis" required autocomplete="new-password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <label for="password_confirmation" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">{{ __('Patvirtinkite slaptažodį') }}</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Patvirtinkite savo slaptažodį" required autocomplete="new-password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                            @endif

                            <div class="mt-6">
                                <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    {{ __('Registruotis') }}
                                </button>
                            </div>

                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">Jau turite paskyrą? <a href="{{ route('login') }}" class="text-blue-500 focus:outline-none focus:underline hover:underline">{{ __('Prisijungti') }}</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-gates-layout>