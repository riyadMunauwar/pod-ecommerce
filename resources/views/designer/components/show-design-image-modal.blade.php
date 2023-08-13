<div>
    @if($is_show_design_image_modal)
        <x-ui.edit-modal class="max-w-2xl mt-1/2 md:mt-0">
            <div class="bg-white p-4 rounded-md">
                <div class="flex justify-end items-center">
                    <span wire:click.debounce="hideShowDesignImageModal" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </div>

                <div class="mt-3 relative aspect-square rounded-md">
                    <x-ui.image :design="$design" :src="$design->product->thumbnailUrl('medium')" />
                </div>
            </div>
        </x-ui.edit-modal>
        <x-ui.loading-spinner wire:loading.flex wire:target="hideShowDesignImageModal" />
    @endif
</div>