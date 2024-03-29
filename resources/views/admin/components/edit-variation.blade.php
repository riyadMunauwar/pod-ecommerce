<div>
    @if($is_edit_mode_on)
    <x-ui.edit-modal class="max-w-xl">
        <div class="p-5 md:pl-10 md:pb-10 md:pr-10 bg-white rounded-md">

            <div class="flex justify-end mb-2">
                <span wire:click.debounce="cancelEditMode" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
            </div>

            <x-validation-errors class="mb-4" />

            <div class="grid grid-cols-1 gap-5">

                <div>
                    <x-label  for="stock" value="{{ __('Stock') }}" />
                    <x-input wire:model.debounce="variation.stock_qty" id="stock" class="block mt-1 h-8 w-full" type="number" />
                </div>


                <div class="block">
                    <label for="is_published" class="flex items-center">
                        <x-checkbox wire:model.debounce="variation.is_published" id="is_published" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
                    </label>
                </div>


                <div class="flex items-center justify-end">
                    <x-button wire:click.debounce="updateVariation" type="button" class="ml-4">
                        {{ __('Update') }}
                    </x-button>
                    <x-button wire:click.debounce="cancelEditMode" type="button" class="ml-4">
                        {{ __('Cancel') }}
                    </x-button>
                </div>
            </div>
            <x-ui.loading-spinner wire:loading.flex wire:target="cancelEditMode, updateVariation" />
        </div>
    </x-ui.edit-modal>
    @endif
</div>