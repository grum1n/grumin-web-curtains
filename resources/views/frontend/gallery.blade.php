<x-guest-layout>
    <x-frontend.small-hero name="Galerija" />

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto flex items-center justify-center flex-wrap pt-4 pb-12" >
            @foreach($images as $image)
                <div class="w-full md:w-80 h-80  flex items-center justify-center " >
                    <a 
                        href="{{ asset('images/gallery/' . $image->cover ) }}"  
                        class="block w-72 h-72 fancybox" 
                        data-caption="{{ $image->title }}" 
                        data-id="{{ $image->id }}" 
                        data-fancybox="gallery"
                    >
                    <img
                        class="w-full h-full object-cover hover:grow hover:shadow-lg"
                        src="{{ asset('images/gallery/' . $image->cover ) }}"
                        alt="{{ asset('images/gallery/' . $image->title ) }}" 
                    >
                    </a>
                </div>
            @endforeach
        </div> 
    </div>
</div>
    
</x-guest-layout>