 <!-- Start -->
 <section class="relative md:py-24 py-16 pt-5">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="relative z-2 transition-all duration-500 ease-in-out sm:-mt-[200px] -mt-[140px] m-0">
                <div class="grid grid-cols-1 mt-8">
                    <div class="tiny-six-item">

                        @foreach($designs as $design)
                            <div class="tiny-slide">
                                <div class="group">
                                    <div class="relative aspect-square overflow-hidden shadow dark:shadow-gray-800">

                                        <x-ui.image :design="$design" src="$design->product->thumbnailUrl('small')" />

                                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                                            <a href="#" class="btn bg-slate-900 border-slate-900 text-white w-full">Add to Cart</a>
                                        </div>

                                        <span class="absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                            <a href="javascript:void(0)" class="text-slate-900 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                                        </span>
                                    </div>

                                    <div class="p-4 pb-0 text-center">
                                        <a href="{{ route('design-detail', ['slug' => $design->slug, 'id' => $design->id]) }}" class="text-lg font-semibold hover:text-indigo-600">{{ $design->title ?? '' }}</a>

                                        <p class="text-slate-400 font-semibold">BDT {{ $design->salePrice() ?? '' }}</p>
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