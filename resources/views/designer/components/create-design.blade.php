<div>


@if($step === 1)
    <!-- Step 1 -->
    <div class="grid grid-cols-1 md:grid-cols-7 md:gap-5">

        <div class="col-span-2">

            <!-- Edit Option -->
            <div class="bg-white p-5 rounded-md  relative">

                <div class="space-y-5 rounded-md">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resize Mode</label>
                        <fieldset class="grid grid-cols-2 gap-4">
                            <legend class="sr-only">Resize Mode</legend>

                            <div>
                                <input
                                type="radio"
                                name="resize_mode"
                                value="free"
                                id="free"
                                class="peer hidden [&:checked_+_label_svg]:block"
                                checked
                                />

                                <label
                                for="free"
                                class="block cursor-pointer rounded-md border border-gray-100 bg-white p-4 text-sm font-medium shadow-sm hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500"
                                >
                                    <div class="flex items-center justify-between">
                                        <p class="text-gray-700">Free</p>

                                        <svg
                                        class="hidden h-5 w-5 text-blue-600"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"
                                        />
                                        </svg>
                                    </div>
                                </label>
                            </div>

                            <div>
                                <input
                                type="radio"
                                name="resize_mode"
                                value="aspect"
                                id="aspect"
                                class="peer hidden [&:checked_+_label_svg]:block"
                                />

                                <label
                                for="aspect"
                                class="block cursor-pointer rounded-md border border-gray-100 bg-white p-4 text-sm font-medium shadow-sm hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500"
                                >
                                    <div class="flex items-center justify-between">
                                        <p class="text-gray-700">Aspect</p>

                                        <svg
                                        class="hidden h-5 w-5 text-blue-600"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"
                                        />
                                        </svg>
                                    </div>
                                </label>
                            </div>
                        </fieldset>
                    </div>

                    <div>
                        <label for="opacity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Opacity {{ $design_opacity }}</label>
                        <input id="opacity" type="range" value="2" min="0" max="9" class="w-full h-1 mb-6 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm dark:bg-gray-700">
                    </div>

                    <div>
                        <label for="rotation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rotate {{ $design_rotate_angel }}</label>
                        <input id="rotation" type="range" value="0" min="-180" max="180" class="w-full h-1 mb-6 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm dark:bg-gray-700">
                    </div>

                    @if(!$design_image)
                    <div>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input wire:model.debounce="design_image" id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div> 
                    </div>
                    @else 
                    <div class="flex justify-center">
                        <div class="relative w-full rounded-md">
                            <img class="block object-contain rounded-md" src="{{ $design_image->temporaryUrl() }}" alt="">
                            <div class="flex items-center justify-center absolute rounded-md inset-0 w-full h-full bg-black opacity-50">
                                <span wire:click.debounce="removeDesign" class="text-white cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>


                <!-- Diable Overlay -->
                @if(!$product_id)
                    <div class="absolute cursor-not-allowed top-0 left-0 w-full h-full bg-black opacity-50"></div>
                @endif

                <!-- Loading State -->
                <div wire:loading wire:target="selectProduct, design_image, removeDesign" class="absolute w-full h-full inset-0 bg-black opacity-50">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex gap-2 items-center justify-center">
                        <p class="text-white text-sm">Loading Editor...</p>
                        <div role="status">
                            <svg aria-hidden="true" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>

        <div class="col-span-3">
            <div class="bg-white p-1 rounded-sm">
                <div id="canvas" class="w-full aspect-square relative">

                    <div id="background" class="absolute w-full h-full inset-0">
                        <img class="block w-full h-full" src="{{ $product_photo ?? asset('assets/images/t-shirt-placeholder.png') }}" alt="">
                    </div>

                    <div wire:ignore id="overlay" class="absolute w-full h-full inset-0"></div>

                    @if($design_image)
                        <div wire:ignore id="design" class="absolute w-20 h-20 top-1/2 left-1/2">
                            <img class="block w-full h-full" src="{{ $design_image->temporaryUrl() }}" alt="">
                            <div class="absolute w-full h-full inset-0 hover:cursor-move hover:border">
                                <div class="resize-handle bg-white"></div>
                            </div>
                        </div>
                    @endif

                    <!-- Diable Overlay -->
                    @if(!$product_id)
                        <div class="absolute cursor-not-allowed top-0 left-0 w-full h-full bg-black opacity-50"></div>
                    @endif
                    <!-- Loading State -->
                    <div wire:loading wire:target="selectProduct, design_image, removeDesign" class="absolute w-full h-full inset-0 bg-black opacity-50">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex gap-2 items-center justify-center">
                            <p class="text-white text-sm">Loading Editor...</p>
                            <div role="status">
                                <svg aria-hidden="true" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-span-2">

            <!-- Product Search Option -->
            <div class="relative bg-white p-5 rounded-md space-y-3">

                <!-- Search Loading Indicator -->
                <div wire:loading wire:target="searchProduct" class="absolute w-full h-full inset-0 z-50 rounded-md">
                    <div style="background-color: rgba(0, 0, 0, .3)" class="rounded-md w-full h-full flex justify-center items-center">
                        <div role="status">
                            <svg aria-hidden="true" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>

                @if($errors->any())
                    <div>
                        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Danger</span>
                            <div>
                                <span class="font-medium">Ensure that these requirements are met:</span>
                                <ul class="mt-1.5 ml-4 list-disc list-inside">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif


                <div>
                    <form wire:submit.prevent="searchProduct" class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.debounce="search" type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search By Product Id or Name" >
                        </div>
                    </form>
                </div>

                <!-- Search Result -->
                <div class="mt-5">
                    @if(count($products) > 0)
                    <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach($products as $product)
                            <li wire:click.debounce="selectProduct({{ $product->id }})" class="py-2 sm:pb-4 cursor-pointer">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="{{ $product->thumbnailUrl('thumb') }}" alt="{{ $product->name ?? '' }}">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            {{ $product->name ?? '' }}
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">

                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        BDT {{ $product->sale_price ?? '' }}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    @else 
                        <span class="text-xs text-gray-400 block text-center">No Available Product !</span>
                    @endif

                </div>
            </div>

            <div class="bg-white p-5 flex justify-end rounded-md mt-5">
                <button
                    wire:click.debounce="setStep(2)"
                    class="hover:border hover:border-blue-400 w-full inline-flex border items-center justify-center gap-2 rounded-md bg-white px-4 py-2 text-sm text-blue-500 shadow-sm focus:relative"
                >
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </span>                    
                    Next
                </button>
            </div>

        </div>

    </div>
    <!-- Step 1 End -->

@endif 


@if($step === 2)

    <!-- Step 2 -->


    <div class="">
        <div class="grid grid-cols-1 md:grid-cols-6 md:gap-5">
            <div class="col-span-4">
                <div class="rounded-md bg-white p-5 md:p-10">
                    <h1 class="font-bold text-xl mb-4">Design Details</h1>
                    
                    <x-validation-errors class="mb-4" />

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div class="col-span-2">
                            <x-label  for="title" value="{{ __('Title') }}" />
                            <x-input wire:model.debounce="title" id="title" class="block mt-1 h-8 w-full" type="text" required />
                        </div>

                        <div class="col-span-2">
                            <x-label for="slug" value="{{ __('Slug') }}" />
                            <x-input wire:model.debounce="slug" id="slug" class="block mt-1 h-8 w-full" type="text" required />
                        </div>

                        <div class="">
                            <x-label for="design_sale_price" value="{{ __('Only Design Sale Price') }}" />
                            <x-input wire:model.debounce="design_sale_price" id="design_sale_price" class="block mt-1 h-8 w-full" type="number"/>
                        </div>

                        <div class="">
                            <x-label for="design_regular_price" value="{{ __('Only Design Regular Price') }}" />
                            <x-input wire:model.debounce="design_regular_price" id="design_regular_price" class="block mt-1 h-8 w-full" type="number"/>
                        </div>

                    </div>
                </div>

                <div class="rounded-md bg-white p-5 md:p-10 md:mt-5">
                    <h1 class="font-bold text-xl mb-4">SEO Details</h1>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <x-label  for="meta_title" value="{{ __('Meta Title') }}" />
                            <x-input wire:model.debounce="meta_title" id="meta_title" class="block mt-1 h-8 w-full" type="text"  />
                        </div>
                        <div class="col-span-2">
                            <x-label  for="meta_tags" value="{{ __('Meta Tags') }}" />
                            <x-input wire:model.debounce="meta_tags" id="meta_tags" class="block mt-1 h-8 w-full" type="text" />
                        </div>
                        <div class="col-span-2">
                            <x-label  for="meta_description" value="{{ __('Meta Description') }}" />
                            <x-ui.textarea wire:model.debounce="meta_description" id="meta_description" class="block mt-1 w-full" type="text" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-span-2">
                <div class="rounded-md bg-white p-5 md:p-10 grid grid-cols-1 gap-5">
                        <div class="space-y-2">
                            <div class="block">
                                <label for="isPublished" class="flex items-center">
                                    <x-checkbox wire:model="is_published" id="isPublished" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
                                </label>
                            </div>
                        </div>

                        <div class="mt-2">
                            <x-label class="mb-1 block" for="gallery" value="{{ __('Resources') }}" />
                            @if($resources)
                            <div class="mt-3">
                                <div>
                                    @if ($resources)
                                        <ul class="space-y-2">
                                            @foreach($resources as $key => $resource)
                                                <li class="flex gap-3 items-center justify-between">
                                                    <span class="text-xs text-blue-400">
                                                        {{ $resource->getClientOriginalName() }}
                                                    </span>

                                                    <span wire:click.debounce="removeResource({{ $key }})" class="text-red-400 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                <div class="flex items-center justify-center mt-3">
                                    <button
                                        wire:click.debounce="removeAllResources"
                                        class="border border-red-400 text-red-400 inline-flex items-center gap-2 rounded-md bg-white px-2 py-1 text-sm shadow-sm focus:relative"
                                    >
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-4 w-4"
                                        >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                        </svg>

                                        Remove All
                                    </button>
                                </div>
                            </div>
                            @else
                            <div class="mt-4">
                                <div class="flex items-center justify-center">
                                    <label class="w-full flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-gray-800">
                                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Upload Reserouces</span>
                                        <input wire:model="resources" type='file' class="hidden" multiple />
                                    </label>
                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="flex items-center justify-between">
                            <x-button wire:click.debounce="setStep(1)" type="button">
                                {{ __('Previous') }}
                            </x-button>

                            <x-button wire:click.debounce="createDesign" type="button">
                                {{ __('Published') }}
                            </x-button>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- End Step 2 -->
@endif


    <x-ui.text-loading-spinner loadingText="It will take a time... we are saving this design and optimizing your image..." wire:loading.flex wire:target="createDesign" />
    <x-ui.text-loading-spinner loadingText="Uploading..." wire:loading.flex wire:target="resources" />
    <x-ui.loading-spinner wire:loading.flex wire:target="setStep, removeAllResources, removeResource" />

</div>


@push('styles')

    <style>
            .resize-handle {
                width: 10px;
                height: 10px;
                background-color: #999;
                position: absolute;
                bottom: -5px;
                right: -5px;
                cursor: nwse-resize;
                display: none;
            }

            #design:hover .resize-handle {
                display: block;
            }

    </style>               

@endpush

@push('scripts')

    <script>

        document.addEventListener("DOMContentLoaded", function () {
            window.addEventListener('init:design-js', function(){
                init()
            })

            init();
        });


        function init(){

            applyOpacity();
            applyRotating();
            applyRezizableDruggable();

        }


        // Helper function
        function el(selector){
            return document.querySelector(selector);
        }


        function getPercentiesValue(total, actual){
            return (actual / total) * 100;
        }

        // Apply Opacity
        function applyOpacity(){

            const opacityRangeEl = el('#opacity');

            function changeOpacityHandeler(event){

                let opacityValue = event.target.value;
                let canvasOverlay = el('#overlay');

                canvasOverlay.style.backgroundColor = 'black';
                canvasOverlay.style.opacity = `.${opacityValue}`;

                @this.set('design_opacity', parseInt(opacityValue));

            }

            opacityRangeEl.addEventListener('input', changeOpacityHandeler);

        }


        // Apply Rotating
        function applyRotating(){
            
            const rotationRangeEl = el('#rotation');

            function rotationHandeler(event){

                let rotatingAngelValue = event.target.value;
                let designEl = el('#design');

                designEl.style.transform = `rotate(${rotatingAngelValue}deg)`;

                @this.set('design_rotate_angel', parseFloat(rotatingAngelValue));

            }

            rotationRangeEl.addEventListener('input', rotationHandeler);
        }



        // Apply Resizable, Druggable
        function applyRezizableDruggable()
        {
            function makeDraggableResizableRotatable(element) {

                let isDragging = false;
                let isResizing = false;

                let dragStartX, dragStartY, resizeStartX, resizeStartY, rotateStartX;
                let offsetX, offsetY, initialWidth, initialHeight;
            
                const parentDiv = el('#canvas');
                const canvasRect = parentDiv.getBoundingClientRect();
                const canvasWidth = canvasRect.width;
                const canvasHeight = canvasRect.height;
                const resizeHandle = element.querySelector(".resize-handle");

            
                element.addEventListener("mousedown", onMouseDown);
                element.addEventListener("touchstart", onTouchStart);
            
                function onMouseDown(e) {

                    if (e.target === resizeHandle) {
                        isResizing = true;
                        const rect = element.getBoundingClientRect();
                        resizeStartX = e.clientX;
                        resizeStartY = e.clientY;
                        initialWidth = rect.width;
                        initialHeight = rect.height;
                    } 
                    else {
                        isDragging = true;
                        dragStartX = e.clientX;
                        dragStartY = e.clientY;
                        offsetX = element.offsetLeft;
                        offsetY = element.offsetTop;
                    }
                
                    document.addEventListener("mousemove", onMouseMove);
                    document.addEventListener("mouseup", onMouseUp);

                }
            
                function onTouchStart(e) {

                    if (e.target === resizeHandle) {
                        isResizing = true;
                        const touch = e.touches[0];
                        const rect = element.getBoundingClientRect();
                        resizeStartX = touch.clientX;
                        resizeStartY = touch.clientY;
                        initialWidth = rect.width;
                        initialHeight = rect.height;
                    } 
                    else {
                        isDragging = true;
                        const touch = e.touches[0];
                        dragStartX = touch.clientX;
                        dragStartY = touch.clientY;
                        offsetX = element.offsetLeft;
                        offsetY = element.offsetTop;
                    }
                
                    element.addEventListener("touchmove", onTouchMove);
                    document.addEventListener("touchend", onTouchEnd);

                }
                
                function onMouseMove(e) {

                    if (isResizing) {
                        const deltaX = e.clientX - resizeStartX;
                        const deltaY = e.clientY - resizeStartY;
                        const newWidth = Math.max(initialWidth + deltaX, 50); // Minimum width of 50px
                        const newHeight = Math.max(initialHeight + deltaY, 50); // Minimum height of 50px
                
                        element.style.width = newWidth + "px";
                        element.style.height = newHeight + "px";

                        // Set livewire component property value
                        const designPercentWidth = getPercentiesValue(canvasWidth, newWidth);
                        const designPercentHeight = getPercentiesValue(canvasHeight, newHeight);

                        @this.set('design_width', designPercentWidth);
                        @this.set('design_height', designPercentHeight);
                     
                    } 
                    else if (isDragging) {

                        const deltaX = e.clientX - dragStartX;
                        const deltaY = e.clientY - dragStartY;
                
                        const maxX = parentDiv.clientWidth - element.clientWidth;
                        const maxY = parentDiv.clientHeight - element.clientHeight;
                
                        const newLeft = Math.min(Math.max(0, offsetX + deltaX), maxX);
                        const newTop = Math.min(Math.max(0, offsetY + deltaY), maxY);
                
                        element.style.left = newLeft + "px";
                        element.style.top = newTop + "px";

                        // Set livewire component public property
                        const designPercentLeft = getPercentiesValue(canvasWidth, newLeft);
                        const designPercentRight = getPercentiesValue(canvasHeight, newTop);

                        @this.set('design_left', designPercentLeft);
                        @this.set('design_top', designPercentRight);

                    }

                }
            
                function onMouseUp() {

                    isDragging = false;
                    isResizing = false;

                    document.removeEventListener("mousemove", onMouseMove);
                    document.removeEventListener("mouseup", onMouseUp);

                }
            
                function onTouchMove(e) {

                    if (isResizing) {

                        const touch = e.touches[0];
                        const deltaX = touch.clientX - resizeStartX;
                        const deltaY = touch.clientY - resizeStartY;
                        const newWidth = Math.max(initialWidth + deltaX, 50); // Minimum width of 50px
                        const newHeight = Math.max(initialHeight + deltaY, 50); // Minimum height of 50px
                
                        element.style.width = newWidth + "px";
                        element.style.height = newHeight + "px";

                        // Set livewire component proeprty value
                        const designPercentWidth = getPercentiesValue(canvasWidth, newWidth);
                        const designPercentHeight = getPercentiesValue(canvasHeight, newHeight);

                        @this.set('design_width', designPercentWidth);
                        @this.set('design_height', designPercentHeight);

                    } 
                     else if (isDragging) {
                        const touch = e.touches[0];
                        const deltaX = touch.clientX - dragStartX;
                        const deltaY = touch.clientY - dragStartY;
                
                        const maxX = parentDiv.clientWidth - element.clientWidth;
                        const maxY = parentDiv.clientHeight - element.clientHeight;
                
                        const newLeft = Math.min(Math.max(0, offsetX + deltaX), maxX);
                        const newTop = Math.min(Math.max(0, offsetY + deltaY), maxY);
                
                        element.style.left = newLeft + "px";
                        element.style.top = newTop + "px";

                        // Set livewire component public property
                        const designPercentLeft = getPercentiesValue(canvasWidth, newLeft);
                        const designPercentRight = getPercentiesValue(canvasHeight, newTop);

                        @this.set('design_left', designPercentLeft);
                        @this.set('design_top', designPercentRight);
                    }
                }
            
                function onTouchEnd() {

                    isDragging = false;
                    isResizing = false;

                    element.removeEventListener("touchmove", onTouchMove);
                    document.removeEventListener("touchend", onTouchEnd);

                }
            
            }
            
            const draggableDivs = document.querySelectorAll("#design");
            draggableDivs.forEach((element) => makeDraggableResizableRotatable(element));
        }


 
    </script>

@endpush