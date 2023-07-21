@php 

    $home_bottom_banner = \App\Models\Banner::published()->where('show_in_page', 'home')->where('name', 'home-bottom')->first();

@endphp

@if($home_bottom_banner)

<!-- Start -->
<section style="background-image: url('{{ $home_bottom_banner->imageUrl() }}')" class="py-28 w-full table relative  bg-center bg-no-repeat bg-cover jarallax" data-jarallax data-speed="0.5">
    <div class="absolute inset-0 bg-slate-900/30"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">

            @if($home_bottom_banner->title)
                <h3 class="mb-4 md:text-4xl text-3xl text-white font-bold">{{ $home_bottom_banner->title ?? '' }}</h3>
            @endif

            @if($home_bottom_banner->sub_title)
                <p class="text-white/80 max-w-xl mx-auto">{{ $home_bottom_banner->sub_title ?? '' }}</p>
            @endif

            @if($home_bottom_banner->button_text)
                <div class="mt-6">
                    <a href="{{ $home_bottom_banner->button_link ?? '' }}" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="mdi mdi-cart-outline"></i> {{ $home_bottom_banner->button_text ?? '' }}</a>
                </div>
            @endif
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@endif