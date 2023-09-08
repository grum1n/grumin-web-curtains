<x-guest-layout>
    <x-frontend.small-hero name="Apie Mus" />

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(count($aboutInfo))
            @foreach ($aboutInfo as $info)
            <section class="w-full px-4 py-24">
                <div class="mx-auto  mt-0 container max-w-7xl h-full flex flex-col lg:flex-row justify-center  items-center lg:items-start gap-12">
                    <div class="flex-initial w-full lg:w-1/3 flex-col justify-start items-center  max-w-xs">
                        <img src="{{ asset('images/gallery/'. $info->cover) }}" alt="{{ $info->section_heading }}" class="w-full h-full shadow-lg">
                        <h3 class="text-center pt-4">{{ $info->author }}</h3>
                    </div>
                    <ul class="h-full flex flex-col justify-start items-start gap-8 flex-initial  w-full lg:w-2/3">
                        <li class="w-full">
                            <h2 class="w-full text-center lg:text-left my-6 text-xl text-stone-600 font-serif border-b-2 border-green-700 pb-1 font-normal">{{ $info->section_desc }}.</h2>
                            <h1 class="text-center lg:text-left text-stone-800 text-4xl font-serif">{{ $info->section_heading }}</h1>
                            <p class="text-center lg:text-left text-stone-600 my-6">{{ $info->body }}</p>
                        </li>
                        <li>
                            <h2 class="w-full text-center lg:text-left my-6 text-stone-700 pb-1 text-2xl font-serif">{{ $info->article_heading }}</h2>
                            <p class="text-center lg:text-left text-stone-600">{{ $info->article_body }}</p>
                        </li>
                    </ul>
                </div>
            </section>
            @endforeach
            @endif
        </div>
    </div>

</x-guest-layout>