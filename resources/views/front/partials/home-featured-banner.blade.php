@php 

    $home_featured_banners = \App\Models\Banner::published()->where('show_in_page', 'home-featured')->take(3)->get();

@endphp

@if($home_featured_banners)

    <section class="relative">
        <div class="container relative">
            <div id="grid" class="md:flex w-full justify-center mx-auto mt-4">
                @foreach($home_featured_banners as $banner)
                    <div class="md:w-1/2 p-3 picture-item">
                        <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            
                            @if($loop->first)
                                <img src="{{ $banner->imageUrl('square') }}" class="group-hover:scale-110 transition-all duration-500" alt="">
                            @else 
                                <img src="{{ $banner->imageUrl() }}" class="group-hover:scale-110 transition-all duration-500" alt="">
                            @endif
                    
                            @if($banner->button_text)
                                <div class="absolute bottom-4 start-4">
                                    <a href="{{ $banner->button_link ?? '' }}" class="text-xl font-semibold hover:text-indigo-600 transition-all duration-500">{{ $banner->button_text ?? '' }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endif