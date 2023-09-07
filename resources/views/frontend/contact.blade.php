<x-guest-layout>
    <x-frontend.small-hero name="Kontaktai" />

    <section class="w-full my-24">
        <div class="mx-auto px-4 container  max-w-screen-xl flex flex-col lg:flex-row justify-center lg:justify-around items-center  gap-24 lg:gap-8">

            <ul class="w-90 lg:w-120 shadow-lg h-150 bg-gradient-to-r from-emerald-950 to-emerald-800 px-12 py-6 flex flex-col  gap-4 text-white ">
                <li class="w-full border-b-2 border-lime-100 py-2">
                    <h1 class="w-full text-4xl text-left font-serif text-lime-400">{{ $contacts->site_name }}</h1>
                </li>
                <li>
                    <a href="{{ $contacts->google_maps_link }}" target="_blank" class="flex flex-row gap-4 w-full no-underline hover:text-red-100">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width={1.5} stroke="currentColor" class="w-6 h-6">
                                <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </span>
                        <h2>{{ $contacts->address }}</h2>
                    </a>
                </li>
                <li>
                    <a href="mailto:{{ $contacts->email }}" class="flex flex-row  gap-4 w-full no-underline hover:text-red-100">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width={1.5} stroke="currentColor" class="w-6 h-6">
                                <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </span>
                        <h2>{{ $contacts->email }}</h2>
                    </a>
                </li>
                <li>
                    <a href="tel:{{ $contacts->phone_number_1 }}" class="flex flex-row  gap-4 w-full no-underline hover:text-red-100">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width={1.5} stroke="currentColor" class="w-6 h-6">
                                <path d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                            </svg>
                        </span>
                        <h2>{{ $contacts->phone_number_1 }}</h2>
                    </a>
                </li>
               
                <li class="mt-6">
                    <h1 class="text-xl font-serif text-lime-400">Darbo laikas</h1>
                </li>
                <li>Pirmadieniais - Penktadieniais</li>
                <li>9:00 - 18:00</li>
                <li>Šeštadieniais nedirbame.</li>
                <li>Sekmadieniais nedirbame.</li>
                <li>Švenčių dienomis nedirbame.</li>
            </ul>
            <div class="w-90 lg:w-120 ">
                <div class="mx-auto block max-w-lg bg-white p-6 shadow-lg dark:bg-neutral-700">
                    <form class="flex flex-col gap-4">
                        <div class="col-span-full">
                            <label for="vardas" class="block text-sm font-medium leading-6 text-gray-900">Vardas</label>
                            <div class="mt-2">
                                <input type="text" name="vardas" id="vardas" placeholder="Parašykite savo vardą" autocomplete="vardas" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                            <div class="mt-2">
                                <input type="text" name="email" id="email" placeholder="Parašykite savo email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="message" class="block text-sm font-medium leading-6 text-gray-900">Žinutė</label>
                            <div class="mt-2">
                                <textarea id="message" name="message" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                            
                        </div>

                        <!--Checkbox-->
                        <div class="mb-6 flex min-h-[1.5rem] items-center justify-center gap-4 pl-[1.5rem]">
                            <input class="form-checkbox h-5 w-5 text-lime-950 outline outline-offset-2 focus:outline-emerald-800" type="checkbox" value="" id="terms" />
                            <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="terms">
                                Atsiųsti man šio laiško kopiją
                            </label>
                        </div>

                        <!--Submit button-->
                        <button type="submit" class="dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]] inline-block w-full rounded bg-gradient-to-r from-emerald-950 to-lime-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                            Siųsti
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>
</x-guest-layout>