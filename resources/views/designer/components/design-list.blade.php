<section class="bg-white mx-auto max-w-screen-xl rounded-md p-5">
    <h1>Designs list</h1>
    <div class="">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative z-20 overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.debounce.350ms="search" type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                        </div>
                    </form>
                </div>
            </div>
            <div class="overflow-x-auto z-20">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Image</th>
                            <th scope="col" class="px-4 py-3">Title</th>
                            <th scope="col" class="px-4 py-3">Design R. Price</th>
                            <th scope="col" class="px-4 py-3">Design S. Price</th>
                            <th scope="col" class="px-4 py-3">Cloth Price</th>
                            <th scope="col" class="px-4 py-3">Printing Cost</th>
                            <th scope="col" class="px-4 py-3">Sale Price</th>
                            <th scope="col" class="px-4 py-3">Categories</th>
                            <th scope="col" class="px-4 py-3">Brand</th>
                            <th scope="col" class="px-4 py-3">Stock</th>
                            <th scope="col" class="px-4 py-3 text-center">Status</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($designs ?? [] as $design)
                            <tr class="border-b dark:border-gray-700">
                                <th scope="row" class="px-4 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img wire:click.debounce="showDesignImageModal({{ $design->id }})" class="cursor-pointer w-8 h-8 border rounded-full object-cover" src="{{ $design->product->thumbnailUrl('thumb') }}" alt="{{ $design->name ?? '' }}">
                                </th>
                                <td class="px-4 py-1">{{ \Illuminate\Support\Str::limit($design->title ?? '', 21, '...') }}</td>
                                
                                <td class="px-4 py-1">
                                    {{ number_format($design->design_regular_price) }}
                                </td>

                                <td class="px-4 py-1">
                                    {{ number_format($design->design_sale_price) }}
                                </td>

                                <td class="px-4 py-1">
                                    {{ number_format($design->product->sale_price) }}
                                </td>
                            
                                <td class="px-4 py-1">
                                    {{ number_format(210) }}
                                </td>
                                
                                <td class="px-4 py-1">
                                    {{ number_format($design->salePrice()) }}
                                </td>

                                <td class="px-4 py-1">
                                    <div class="flex flex-col items-start gap-1">
                                        @foreach($design->categories as $category)
                                            <span class="inline-block bg-purple-100 text-purple-800 text-xs font-medium mr-1 px-1.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">{{ $category->name ?? '' }}</span>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="px-4 py-1">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $design->brand->name ?? 'None' }}</span>
                                </td>
                                <td class="px-4 py-1">
                                    @if($design->product->stock_qty < 10)
                                        <span class="text-red-400">{{ $design->product->stock_qty }}</span>
                                    @else 
                                        <span class="text-green-500">{{ $design->product->stock_qty }}</span>
                                    @endif
                                </td>
                                <td class="px-4 py-1">
                                    @if($design->is_published)
                                        <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Published</span>
                                    @else
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Unpublished</span>
                                    @endif

                                    @if($design->is_featured)
                                        <span class="bg-indigo-100 text-indigo-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">Featured</span>
                                    @endif
                                </td>
                                <td class="px-4 py-1">
                                    <div class="flex items-center gap-1 justify-end">
                                        <button wire:click.debounce="enableDesignEditMode({{ $design->id }})" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </button>
                                        <button wire:click.debounce="confirmDeleteDesign({{ $design->id }})" class="text-red-400" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav class="py-2 mt-5" aria-label="Table navigation">
                {{ $designs->links() }}
            </nav>
        </div>
    </div>
    <x-ui.loading-spinner wire:loading.flex wire:target="search, showDesignImageModal, confirmDeleteDesign, deleteDesign, enableDesignEditMode" />
</section>


@push('modals')
    <livewire:designer.show-design-image-modal />
@endpush