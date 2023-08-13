<section class="relative pt-16">
    <div class="container relative">
        <div class="grid grid-cols-1 items-center">
            <h3 class="text-2xl leading-normal font-semibold">Popular Products</h3>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            @foreach($designs as $design)
                <div class="group">
                    <div class="relative aspect-square overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        
                        <x-ui.image :design="$design" :src="$design->product->thumbnailUrl('small')" />

                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="{{ route('cart') }}" class="btn bg-slate-900 border-slate-900 text-white w-full rounded-md">Add to Cart</a>
                        </div>

                        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)" class="btn btn-icon btn-sm rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="" class="btn btn-icon btn-sm rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="btn btn-icon btn-sm rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('design-detail', ['slug' => $design->slug, 'id' => $design->id]) }}" class="hover:text-indigo-600 text-lg font-semibold">{{ $design->title ?? '' }}</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">{{ $design->salePrice() ?? '' }} <del class="text-red-600">1500</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end content-->
            @endforeach
        </div><!--end grid-->
    </div><!--end container-->
</section>