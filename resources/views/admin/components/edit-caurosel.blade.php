<div>
    @if($is_edit_mode_on)
    <x-ui.edit-modal class="max-w-2xl">
        <div class="p-5 md:p-10 bg-white rounded-md">
            <x-validation-errors class="mb-4" />

            <div class="grid grid-cols-1 gap-5">

                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input wire:model.debounce="caurosel.name" id="name" class="block h-8 mt-1 w-full" type="text" />
                </div>

                <div>
                    <x-label for="show_in_page" value="{{ __('Show In Page') }}" />
                    <x-input wire:model.debounce="caurosel.show_in_page" id="show_in_page" class="block h-8 mt-1 w-full" type="text" />
                </div>

                

                <div class="block">
                    <label for="is_published" class="flex items-center">
                        <x-checkbox wire:model.debounce="caurosel.is_published" id="is_published" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end">
                    <x-button wire:click.debounce="updateCaurosel" type="button" class="ml-4">
                        {{ __('Update') }}
                    </x-button>
                    <x-button wire:click.debounce="cancelEditMode" type="button" class="ml-4">
                        {{ __('Cancel') }}
                    </x-button>
                </div>

            </div>

            <x-ui.loading-spinner wire:loading.flex wire:target="updateCaurosel, cancelEditMode" />
        </div>
    </x-ui.edit-modal>
    @endif
</div>