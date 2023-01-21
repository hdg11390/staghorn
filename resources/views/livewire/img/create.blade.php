@php
$disabled = $errors->any()|| empty('fped.callName') ? true : false;
@endphp


 <div class="container max-w-xl py-4 mx-auto border-2 border-blue-800 rounded-lg shadow-xl h-5/6 bg-blue-50">
    <div class="flex items-center justify-center mx-auto">
        <form wire:submit.prevent='store' class="space-y-4" id="SubmitForm">
            @csrf
            <div class="pb-8">
                <x-jet-label class="px-4 py-1">Call Name:</x-jet-label>
                <x-jet-input wire:model.debounce.500ms="img.callName" class="block text-xs w-96" name="img.callName" id="img.callName" type="text" />
                <x-jet-input-error for='img.callName' />
            </div>

            <div class="pb-8">
                <x-jet-label class="px-4 py-1">Image Position:</x-jet-label>
                <x-jet-input wire:model.debounce.500ms="img.img_pos" class="block text-xs w-96" name="img.img_pos" id="img.img_pos" type="text" />
                <x-jet-input-error for='img.img_pos' />
            </div>

            <div class="pb-8">
                <x-jet-label class="px-4 py-1">Image Location:</x-jet-label>
                <x-jet-input wire:model.debounce.500ms="img.pics" class="block text-xs w-96" name="img.pics" id="img.pics" type="text" />
                <x-jet-input-error for='img.pics' />
            </div>

            <div class="pb-8">
                <x-jet-label class="px-4 py-1">Photo By:</x-jet-label>
                <x-jet-input wire:model.debounce.500ms="img.img_by" class="block text-xs w-96" name="img.img_by" id="img.img_by" type="text" />
                <x-jet-input-error for='img.img_by' />
            </div>


        </form>


    </div>
    <div class="pl-20 m-4">
        <x-buttons.primary wire:target='store' wire:loading.attr='disabled' type="submit" :disabled="$disabled" form="SubmitForm"
        >
            {{ __('Save') }}
        </x-buttons.primary>
    </div>
</div>
