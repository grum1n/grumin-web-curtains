<x-app-layout>

    <x-backend.breadcrumb>
        <li class="text-gray-900 dark:text-gray-300 hover:text-gray-400 ">
            <div class="!mr-0 flex items-center text-lg font-medium">
                <a href="{{ route('dashboard') }}" class=""><svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg></a>
            </div>
        </li>
        <li class="inline-flex text-gray-900 dark:text-gray-300 hover:text-gray-400 ">
            <div class="flex items-center gap-2 text-md font-small">
                <span>/ </span>
                <a href="{{ route('contacts.index') }}" class="">{{ __('Contacts') }}</a>
            </div>
        </li>
        <li class="inline-flex text-gray-900 dark:text-gray-300">
            <div class="flex items-center gap-2 text-md font-small">
                <span>/ </span>
                {{ __('Edit') }} 
            </div>
        </li>
    </x-backend.breadcrumb>

    <x-backend.main-container>

        <form class="flex flex-col justify-center items-center h-full" action="{{ route('contacts.update', $contact) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="!z-5 relative flex flex-col rounded-[20px] max-w-[300px] md:max-w-[400px] bg-clip-border shadow-3xl shadow-shadow-500 w-full !p-6 3xl:p-![18px] bg-white undefined">

                <div class="mb-3">
                    <label for="site_name" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Site name</label>
                    <input type="text" id="site_name" name="site_name" value="{{ $contact->site_name }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="site_name" />
                </div>

                <div class="mb-3">
                    <label for="site_logo_big_text" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Site logo - big text</label>
                    <input type="text" id="site_logo_big_text" name="site_logo_big_text" value="{{ $contact->site_logo_big_text }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="site_logo_big_text" />
                </div>

                <div class="mb-3">
                    <label for="site_logo_small_text" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Site logo - small text</label>
                    <input type="text" id="site_logo_small_text" name="site_logo_small_text" value="{{ $contact->site_logo_small_text }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="site_logo_small_text" />
                </div>

                <div class="mb-3">
                    <label for="address" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Address</label>
                    <input type="text" id="address" name="address" value="{{ $contact->address }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="address" />
                </div>

                <div class="mb-3">
                    <label for="google_maps_link" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Google maps link</label>
                    <input type="text" id="google_maps_link" name="google_maps_link" value="{{ $contact->google_maps_link }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="google_maps_link" />
                </div>

                <div class="mb-3">
                    <label for="email" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Email</label>
                    <input type="email" id="email" name="email" value="{{ $contact->email }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="email" />
                </div>

                <div class="mb-3">
                    <label for="phone_number_1" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Phone number 1</label>
                    <input type="text" id="phone_number_1" name="phone_number_1" value="{{ $contact->phone_number_1 }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="phone_number_1" />
                </div>

                <div class="mb-3">
                    <label for="phone_number_2" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Phone number 2</label>
                    <input type="text" id="phone_number_2" name="phone_number_2" value="{{ $contact->phone_number_2 }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="phone_number_2" />
                </div>

                <div class="mb-3">
                    <label for="facebook_acc" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Facebook acc</label>
                    <input type="text" id="facebook_acc" name="facebook_acc" value="{{ $contact->facebook_acc }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="facebook_acc" />
                </div>

                <div class="mb-3">
                    <label for="instagram_acc" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Instagram acc</label>
                    <input type="text" id="instagram_acc" name="instagram_acc" value="{{ $contact->instagram_acc }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="instagram_acc" />
                </div>

                <div class="mb-3">
                    <label for="twitter_acc" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Twitter acc</label>
                    <input type="text" id="twitter_acc" name="twitter_acc" value="{{ $contact->twitter_acc }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="twitter_acc" />
                </div>

                <div class="mb-3">
                    <label for="linkedin_acc" class="text-sm text-navy-700 dark:text-gray-500 font-bold">Linkedin acc</label>
                    <input type="text" id="linkedin_acc" name="linkedin_acc" value="{{ $contact->linkedin_acc }}" class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-gray-200">
                    <x-backend.error-msg name="linkedin_acc" />
                </div>

                <button type="submit" class="middle none center rounded-lg bg-blue-500 py-1 px-6 font-sans text-ss font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                    Update</button>

            </div>
        </form>

    </x-backend.main-container>
</x-app-layout>