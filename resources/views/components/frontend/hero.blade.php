<section class="mt-0 lg:px-0 lg:py-0 mx-auto mb-24 max-w-9xl flex flex-row flex-wrap 2xl:gap-8">
   <!-- slider -->
   <div class="pt-16 lg:pt-0 flex-3 max-w-243dd max-h-205 swiper mySwiper ">
   <div class="swiper-wrapper">
            @foreach ($sliders as $slider)
            <div class="swiper-slide">
                <img
                    class="w-full h-full object-cover "
                    src="{{ 'images/gallery/' . $slider->cover }}"
                    alt="{{ $slider->title }}"
                >
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next text-slate-50 mt-4"></div>
        <div class="swiper-button-prev text-slate-50 mt-4"></div>
    </div>

    <ul class="mx-auto mt-32 px-0 lg:px-8 flex-1 flex flex-col-reverse items-center">

        @foreach ($servicesPages as $servicesPage)

            <li class="w-80 px-3 pt-5 pb-3 text-left">
                <a href="{{ route('frontendNavLink', $servicesPage->id) }}" class="block relative m-0 h-11 border-b-2 border-green-700 text-gray-900 hover:text-lime-700 cursor-pointer no-underline">
                    <h1 class="m-0 text-3xl font-normal font-serif">{{ $servicesPage->name }}</h1>
                </a>
                <h2 class="pt-3 text-stone-600 text-md">
                    {{ $servicesPage->description }}
                </h2>
            </li>

        @endforeach

       
    </ul>
</section>