<x-guest-layout>
    <x-frontend.small-hero name="Paslaugos"/>
    <section class="w-full p-24">
    <div class="mx-auto container flex flex-col items-center gap-16">
        <h3 class="text-stone-600 text-3xl border-b-2 border-green-700">Veikla</h3>
        <h1 class="text-center text-stone-800 text-4xl">Mūsų produktai</h1>
        <ul class="w-full flex justify-around items-center flex-wrap gap-8 my-16">
            <li class="max-w-xs p-2 text-center">
                <a href="{{ route('home') }}" class="block ">
                    <img src="{{ url('images/web/pagalves.jpg') }}" alt="Diondecor.lt | Aksesuarai" class="w-full h-full drop-shadow-lg hover:drop-shadow-xl p-1  rounded-full hover:grow hover:shadow-lg">
                </a>
                <h2 class="">
                    <a href="{{ route('home') }}" class="text-2xl hover:text-gray-500 no-underline">Aksesuarai</a>
                </h2>
            </li>
            <li class="max-w-xs p-2 text-center">
                <a href="{{ route('home') }}" class="block ">
                    <img src="{{ url('images/web/audiniai.jpg') }}" alt="Diondecor.lt | Audiniai" class="w-full h-full drop-shadow-lg hover:drop-shadow-xl p-1  rounded-full hover:grow hover:shadow-lg">
                </a>
                <h2 class="">
                    <a href="{{ route('home') }}" class="text-2xl hover:text-gray-500 no-underline">Audiniai</a>
                </h2>
            </li>
            <li class="max-w-xs p-2 text-center">
                <a href="{{ route('home') }}" class="block ">
                    <img src="{{ url('images/web/karnizai.jpg') }}" alt="Diondecor.lt | Karnizai" class="w-full h-full drop-shadow-lg hover:drop-shadow-xl p-1  rounded-full hover:grow hover:shadow-lg">
                </a>
                <h2 class="">
                    <a href="{{ route('home') }}" class="text-2xl hover:text-gray-500 no-underline">Karnizai</a>
                </h2>
            </li>
            <li class="max-w-xs p-2 text-center">
                <a href="{{ route('home') }}" class="block ">
                    <img src="{{ url('images/web/uzuolaidos.jpg') }}" alt="Diondecor.lt | Užuolaidos" class="w-full h-full drop-shadow-lg hover:drop-shadow-xl p-1  rounded-full hover:grow hover:shadow-lg">
                </a>
                <h2 class="text-center">
                    <a href="{{ route('home') }}" class="text-2xl hover:text-gray-500 no-underline">Užuolaidos</a>
                </h2>
            </li>
        </ul>

    </div>

</section>

    <section class="w-full bg-stone-800 p-24 mb-24">
        <div class="mx-auto container flex flex-col items-center gap-8 px-4">
            <h1 class="text-center text-white text-4xl font-serif">Mūsų konsultacijos yra nemokamos</h1>
            <p class="text-center text-gray-300 text-lg">Skambinkite mums jau šiandien <a href="tel:{{ $contacts->phone_number_1 }}" class="text-white underline">{{ $contacts->phone_number_1 }}</a> arba susisiekite e-mail</p>
            <a href="mailto:{{ $contacts->email }}"
                data-te-ripple-init
                data-te-ripple-color="light"
                class="diondecor-header-bg w-36 mb-2 flex  gap-1 items-center justify-center px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white hover:text-stone-300 shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
            >
            Kontaktai
            </a>
        </div>
    </section>
</x-guest-layout>