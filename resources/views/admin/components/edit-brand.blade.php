<div>
    @if($isEditModeOn)
    <x-ui.edit-modal class="max-w-3xl">
        <div class="p-5 md:p-10 bg-white">
            <x-validation-errors class="mb-4" />

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <x-label  for="name" value="{{ __('Name') }}" />
                    <x-input wire:model.debounce="brand.name" id="name" class="block mt-1 w-full" type="text" required />
                </div>

                <div>
                    <x-label for="slug" value="{{ __('Slug') }}" />
                    <x-input wire:model.debounce="brand.slug" id="slug" class="block mt-1 w-full" type="text" required />
                </div>


                <div class="col-span-2">
                    <x-label for="parent" value="{{ __('Logo') }}" />

                    @if(!$new_logo && $old_logo)
                        <div class="flex items-center justify-center mb-3">
                            <img class="h-20 h-20 object-contain block" src="{{ $old_logo ?? '' }}">
                        </div>
                    @endif

                    @if($new_logo)
                        <div>
                            <div class="flex items-center justify-center">
                                @if ($new_logo)
                                    <img class="w-20 h-20 object-contain block" src="{{ $new_logo->temporaryUrl() }}">
                                @endif
                            </div>
                            <div class="flex items-center justify-center mt-2">
                                <button wire:click.debounce="removeLogo" type="button" class="inline-flex items-center px-2 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest ">Remove</button>
                            </div>
                        </div>
                    @else
                        <div>
                            <div class="flex items-center justify-center">
                                <label class="w-full flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-gray-800">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="mt-2 text-base leading-normal">Change _logo</span>
                                    <input wire:model="new_logo" type='file' class="hidden" />
                                </label>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-span-2">
                    <x-label for="desc" value="{{ __('Description') }}" />
                    <x-ui.textarea wire:model.debounce="brand.description" id="desc" class="block mt-1 w-full">
                    </x-ui.textarea>
                </div>

                <div class="col-span-2">
                    <x-label  for="metaTitle" value="{{ __('Meta Title') }}" />
                    <x-input wire:model.debounce="brand.meta_title" id="metaTitle" class="block mt-1 w-full" type="text" required />
                </div>

                <div class="col-span-2">
                    <x-label  for="metaTags" value="{{ __('Meta Tags') }}" />
                    <x-input wire:model.debounce="brand.meta_tags" id="metaTags" class="block mt-1 w-full" type="text" required />
                </div>

                <div class="col-span-2">
                    <x-label  for="metaDescription" value="{{ __('Meta Description') }}" />
                    <x-ui.textarea wire:model.debounce="brand.meta_description" id="metaDescription" class="block mt-1 w-full" type="text" required />
                </div>

                <div class="flex gap-3">
                    <div class="block">
                        <label for="isPublished" class="flex items-center">
                            <x-checkbox wire:model.debounce="brand.is_published" id="isPublished" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
                        </label>
                    </div>

                    <div class="block">
                        <label for="is_featured" class="flex items-center">
                            <x-checkbox wire:model.debounce="brand.is_featured" id="is_featured" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Featured') }}</span>
                        </label>
                    </div>
                </div>


                <div class="flex items-center justify-end">
                    <x-button wire:click.debounce="updateBrand" type="button" class="ml-4">
                        {{ __('Update') }}
                    </x-button>
                    <x-button wire:click.debounce="cancelEditMode" type="button" class="ml-4">
                        {{ __('Cancel') }}
                    </x-button>
                </div>
            </div>
            <x-ui.text-loading-spinner loadingText="Uploading..." wire:loading.flex wire:target="new_logo" />
            <x-ui.loading-spinner wire:loading.flex wire:target="cancelEditMode, updateBrand" />
        </div>
    </x-ui.edit-modal>
    @endif
</div>