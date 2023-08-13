<div class="container relative">
    <div class="grid grid-cols-1 relative">

        <div class="tiny-five-item">
            @foreach($designs as $design)
                <div class="tiny-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-body p-0">
                            <a href="{{ route('design-detail', ['slug' => $design->slug, 'id' => $design->id]) }}" class="lightbox d-inline-block" title="">
                                <div class="relative overflow-hidden aspect-square">
                                    <x-ui.image :design="$design" :src="$design->product->thumbnailUrl('small')" />
                                </div>
                                <div class="overlay bg-dark"></div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="absolute top-2/4 -translate-y-2/4 start-2/4 ltr:-translate-x-2/4 rtl:translate-x-2/4 text-center hidden md:block">
            <a href="" target="_blank" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Follow Now</a>
        </div>
    </div>
</div>
