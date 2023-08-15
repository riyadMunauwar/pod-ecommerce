<div>
    @if($is_search_mode_on)
        <div class="fixed z-50 inset-0 w-full h-full" style="background-color: rgba(0,0,0,.5)">
            <div class="md:mt-10 relative max-w-xl mx-auto bg-white rounded-bl-md rounded-br-md rounded-tr-0 md:rounded-tl-0 rounded-tr-lg md:rounded-tl-lg p-5">
                <!-- Search Form -->
                <div>
                    <form wire:submit.prevent="searching">
                        <div class="flex items-center justify-center rounded-3xl p-2 bg-gray-200">
                            <button type="submit" class="w-8 text-gray-600 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </button>

                            <input class="flex-1 text-gray-600 bg-transparent border-none focus:border-none focus:ring-0 focus:outline-0 h-6" type="text">

                            <span wire:click.debounce="cancelSearch" class="text-gray-600 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </span>
                        </div>
                    </form>
                </div>

                <!-- List -->
                <div class="mt-5 search-scroll-bar overflow-y-scroll h-96">
                    <div class="grid  gap-4 grid-cols-2 md:grid-cols-3">
                        @foreach($designs as $design)
                            <div>
                                <div class="relative aspect-square">
                                    <x-ui.image :design="$design" :src="$design->product->thumbnailUrl('small')" />
                                </div>
                                <div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-5">
                        {{ $designs->links() }}
                    </div>
                </div>


                <!-- Loading Spinner -->
                <div wire:loading class="absolute inset-0 w-full h-full rounded-md" style="background-color: rgba(0,0,0,.7)" >
                    <div class="text-white absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        Searching...
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>