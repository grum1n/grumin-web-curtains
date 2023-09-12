@props(['name'])
<section class="w-full m-0 p-0">
    <div class="flex flex-col items-center ">
        <img src="{{ url('/images/web/banner.jpg') }}" alt="Diondecor.lt curtains banner" class="w-full h-96" >
        <div class="absolute container top-40  md:top-44 z-10">
            <div class="flex flex-col w-full justify-center items-center ">
                <h1 class="text-black text-5xl my-4 font-serif">{{ $name }}</h1>
                <a 
                    href="{{ route('home') }}"
                    class="text-xl text-stone-800 hover:text-stone-600  inline-block no-underline border-b border-emerald-800 leading-relaxed hover:border-lime-700" 
                >Pagrindinis </a>
            </div>
        </div>
    </div>
</section>