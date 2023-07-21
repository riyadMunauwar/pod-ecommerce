@php

    $products = \App\Models\Product::latest()->take(6)->get();

@endphp

<section class="relative md:py-24 py-16">
    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Featured Products</h3>
                <p class="text-slate-400 max-w-xl">Please check the below our latest or popular items</p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="#" class="btn btn-link text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->

        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
        
            @foreach($products as $product)
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
                </div><!--end content-->
            @endforeach

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
            <div class="md:col-span-12 text-center">
                <a href="#" class="btn btn-link text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->