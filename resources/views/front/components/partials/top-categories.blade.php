<section class="relative pb-8">
    <div class="container relative mt-16">
        <div class="grid grid-cols-1 items-center">
            <h3 class="text-2xl leading-normal font-semibold">Top Categories</h3>
        </div><

        <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 mt-8 gap-[30px]">
            @foreach($topCategories as $category)
                <div class="group relative overflow-hidden hover:shadow-lg hover:dark:shadow-gray-800 rounded-md transition-all duration-500 p-6 text-center">
                    <img src="{{ $category->iconUrl('small') }}" class="rounded-full shadow-md dark:shadow-gray-800 h-20 w-20 block mx-auto mb-2" alt="">

                    <a href="{{ route('category-archieve', ['category_slug' => $category->slug]) }}" class="font-semibold hover:text-indigo-600 text-lg">{{ $category->name ?? '' }}</a>
                </div>
            @endforeach
        </div>
    </div>
</section>