@php

    $products = \App\Models\Product::inRandomOrder()->take(12)->get();

@endphp
 
 <!-- Start -->
 <section class="relative py-16 pt-5">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="relative z-2 transition-all duration-500 ease-in-out sm:-mt-[200px] -mt-[140px] m-0">
                <div class="grid grid-cols-1 mt-8">
                    <div class="tiny-six-item">

                        @foreach($products as $product)
                            <div class="tiny-slide">
                                <div class="group">
                                    <div class="relative overflow-hidden shadow dark:shadow-gray-800">
                                        <img src="{{ $product->thumbnailUrl('small') }}" class="group-hover:scale-105 transition-all duration-500" alt="">

                                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                                            <a href="#" class="btn bg-slate-900 border-slate-900 text-white w-full">Add to Cart</a>
                                        </div>

                                        <span class="absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                            <a href="javascript:void(0)" class="text-slate-900 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                                        </span>
                                    </div>

                                    <div class="p-4 pb-0 text-center">
                                        <a href="#" class="text-lg font-semibold hover:text-indigo-600">{{ $product->name ?? '' }}</a>

                                        <p class="text-slate-400 font-semibold">BDT {{ $product->sale_price ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        

                    </div>
                </div><!--end grid-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section>