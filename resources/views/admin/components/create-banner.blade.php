<div class="bg-white p-5 rounded-md">
    <h1 class="font-bold text-xl mb-4">Add Banner</h1>

    <x-validation-errors class="mb-4" />

    <div class="grid grid-cols-1 gap-5">

        <div>
            <x-label for="show_in_page" value="{{ __('Show In Page') }}" />
            <x-ui.select wire:model.debounce="show_in_page" id="show_in_page" class="block h-8 text-xs mt-1 w-full">
                <option value="">Select</option>
                <option value="home-top">Home Top</option>
                <option value="home-bottom">Home Bottom</option>
                <option value="home-featured">Home Featured</option>
            </x-ui.select>
        </div>

        <div>
            <x-label for="banner_link" value="{{ __('Banner Link') }}" />
            <x-input wire:model.debounce="banner_link" id="banner_link" class="block h-8 mt-1 w-full" type="text" />
        </div>

        <div>
            <x-label  for="title" value="{{ __('Title') }}" />
            <x-ui.textarea wire:model.debounce="title" id="title" class="block mt-1 w-full" type="text" />
        </div>

        <div>
            <x-label  for="sub_title" value="{{ __('Sub Title') }}" />
            <x-ui.textarea wire:model.debounce="sub_title" id="sub_title" class="block mt-1 w-full" type="text" />
        </div>

        <div>
            <x-label for="button_text" value="{{ __('Button Text') }}" />
            <x-input wire:model.debounce="button_text" id="button_text" class="block h-8 mt-1 w-full" type="text" />
        </div>

        <div>
            <x-label for="button_link" value="{{ __('Button Link') }}" />
            <x-input wire:model.debounce="button_link" id="button_link" class="block h-8 mt-1 w-full" type="text" />
        </div>

        <div>
            <x-label for="gallery" class="mb-1 block" value="{{ __('Image') }}" />
            @if($image)
            <div class="">
                <div class="flex items-center justify-center">
                    @if ($image)
                        <img class="w-full h-20 rounded-md object-contain block" src="{{ $image->temporaryUrl() }}">
                    @endif
                </div>
                <div class="flex items-center justify-center mt-2">
                    <button wire:click.debounce="removeImage" class="inline-flex items-center px-2 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest ">Remove</button>
                </div>
            </div>
            @else
            <div>
                <div class="flex items-center justify-center">
                    <label class="w-full flex flex-col items-center px-4 py-4 bg-white text-blue rounded-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-gray-800">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-xs leading-normal">Select a Image</span>
                        <input wire:model="image" type='file' class="hidden" />
                    </label>
                </div>
            </div>
            @endif
        </div>

        <div class="block">
            <label for="is_published" class="flex items-center">
                <x-checkbox wire:model.debounce="is_published" id="is_published" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button wire:click.debounce="createBanner" class="ml-4">
                {{ __('Create') }}
            </x-button>
        </div>

    </div>

    <x-ui.text-loading-spinner loadingText="Uploading..." wire:loading.flex wire:target="image" />
    <x-ui.text-loading-spinner loadingText="It will take a time for optimizing image..." wire:loading.flex wire:target="createBanner" />
    <x-ui.loading-spinner wire:loading.flex wire:target="removeImage, createBanner, removeImage" />
</div>
