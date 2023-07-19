<div>
    <div class="grid grid-cols-7 gap-5">

        <div class="col-span-2">

            <!-- Edit Option -->
            <div class="bg-white p-5 rounded-md">
                <div>
                    <label for="small-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Opacity</label>
                    <input id="small-range" type="range" value="50" class="w-full h-1 mb-6 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm dark:bg-gray-700">
                </div>

                <div>
                    <label for="small-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                    <fieldset class="flex flex-wrap gap-3">
                        <legend class="sr-only">Color</legend>

                        <div>
                            <input
                            type="radio"
                            name="ColorOption"
                            value="ColorBlack"
                            id="ColorBlack"
                            class="peer hidden"
                            checked
                            />

                            <label
                            for="ColorBlack"
                            class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 bg-white px-3 py-2 text-gray-900 hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white"
                            >
                            <p class="text-sm font-medium">Texas Tea</p>
                            </label>
                        </div>

                        <div>
                            <input
                            type="radio"
                            name="ColorOption"
                            value="ColorRed"
                            id="ColorRed"
                            class="peer hidden"
                            />

                            <label
                            for="ColorRed"
                            class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 bg-white px-3 py-2 text-gray-900 hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white"
                            >
                            <p class="text-sm font-medium">Fiesta Red</p>
                            </label>
                        </div>

                        <div>
                            <input
                            type="radio"
                            name="ColorOption"
                            value="ColorBlue"
                            id="ColorBlue"
                            class="peer hidden"
                            />

                            <label
                            for="ColorBlue"
                            class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 bg-white px-3 py-2 text-gray-900 hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white"
                            >
                            <p class="text-sm font-medium">Cobalt Blue</p>
                            </label>
                        </div>

                        <div>
                            <input
                            type="radio"
                            name="ColorOption"
                            value="ColorGold"
                            id="ColorGold"
                            class="peer hidden"
                            />

                            <label
                            for="ColorGold"
                            class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 bg-white px-3 py-2 text-gray-900 hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white"
                            >
                            <p class="text-sm font-medium">Goldtop</p>
                            </label>
                        </div>
                    </fieldset>
                </div>
                <div class="mt-5">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div> 
                </div>
            </div>


        </div>

        <div class="col-span-3">
            <div class="bg-white p-1 rounded-sm">
                <canvas id="canvas" width="200" height="400"></canvas>
            </div>
        </div>

        <div class="col-span-2">
        
            <!-- Product Search Option -->

            <div class="bg-white p-5 rounded-md">

                <div>
                    <x-label for="brand" class="block mb-1" value="{{ __('Categories') }}" />
                    <x-ui.select wire:model.debounce="brand_id" id="brand" class="block text-sm w-full">
                        <option value="">None</option>
                        @foreach($brands ?? [] as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name ?? '' }}</option>
                        @endforeach
                    </x-ui.select>
                </div>

                <div class="mt-5">
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

                <!-- Search Result -->
                <div class="mt-5">
                    @if($products->count() > 0)
                    <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach($products as $product)
                            <li class="py-2 sm:pb-4">
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

        </div>
    </div>
</div>



@push('scripts')

    <script scr="{{ asset('/assets/fabricjs/fabric.min.js') }}"></script>

    <script>


        document.addEventListener("DOMContentLoaded", function () {
            init();
        });


        // function init() {

        //         document.addEventListener("livewire:load", function () {

        //         var canvas = new fabric.Canvas("canvas");

        //         var tshirtImage = "{{ asset('assets/images/t-shirt.png') }}";

        //         fabric.Image.fromURL(tshirtImage, function (img) {
        //             img.scaleToHeight(300);
        //             img.scaleToWidth(300); 
        //             canvas.centerObject(img);
        //             canvas.add(img);
        //             canvas.renderAll();
        //         });

        //         var fabricText = new fabric.Textbox('Hello World', {
        //                 left: 100,
        //                 top: 100,
        //                 fontSize: 20,
        //                 fontFamily: 'Arial',
        //                 fill: 'black'
        //             });

        //         canvas.add(fabricText);
        //         // Example of adding a text object on the canvas
        //         Livewire.on('addText', function (text) {
        //             var fabricText = new fabric.Textbox(text, {
        //                 left: 100,
        //                 top: 100,
        //                 fontSize: 20,
        //                 fontFamily: 'Arial',
        //                 fill: 'black'
        //             });

        //             canvas.add(fabricText);
        //         });

        //     });
        // }


 
    </script>

@endpush