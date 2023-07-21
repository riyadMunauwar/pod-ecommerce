@php

    $products = \App\Models\Product::inRandomOrder()->take(20)->get();

@endphp

<!-- Insta Post Start -->
<div class="container-fluid relative">
    <div class="grid grid-cols-1 relative">

        <div class="tiny-twelve-item">
            @foreach($products as $product)
                <div class="tiny-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-body p-0">
                            <a href="{{ $product->thumbnailUrl('small') }}" class="lightbox d-inline-block" title="">
                                <img src="{{ $product->thumbnailUrl('small') }}" class="" alt="Insta Post">
                                <div class="overlay bg-dark"></div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="absolute top-2/4 -translate-y-2/4 start-2/4 ltr:-translate-x-2/4 rtl:translate-x-2/4 text-center hidden md:block">
            <a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Follow Now</a>
        </div>
    </div><!--end grid-->
</div><!--end container-->
<!-- Insta Post End -->