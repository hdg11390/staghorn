@php
$disabled = $errors->any()|| empty('mped.callName') ? true : false;
@endphp


<div>
    <div class="w-4/5 mx-auto">
        <form wire:submit.prevent='store' class="space-y-4" id="SubmitForm">
            @csrf

            <div class="grid grid-cols-2 gap-4">
        <div class="pb-8">
            <x-jet-label class="px-4 py-1">Call Name:</x-jet-label>
            <x-jet-input wire:model.debounce.500ms="mped.callName" class="block text-xs w-96" name="mped.callName" id="mped.callName" type="text" />
            <x-jet-input-error for='mped.callName' />
            <div class="flex-col items-center px-4 py-1 mt-4">
                <label class=""><span class="text-gray-700 items-center">Is Active</span></label>
                    <input wire:model.debounce.500ms="mped.is_active" type="checkbox" class="form-checkbox rounded text-green-500 mx-2 items-center" />
                <x-jet-input-error for='mped.is_active' />
            </div>
        </div>
        {{-- <div>
            <x-jet-label class="px-4 py-1">Is Active:</x-jet-label>
            <x-jet-input wire:model.debounce.500ms="mped.is_active" class="block text-xs w-96" name="mped.is_active" id="mped.is_active" type="text" />
            <x-jet-input-error for='mped.is_active' />
        </div> --}}
    </div>

        <div class="grid grid-flow-col border shadow-md grid-rows-8 border-staghorn-700 bg-staghorn-100">

            <div class="flex items-center justify-center col-start-1 row-span-2 row-start-4">
                <div>
                    <x-jet-label class="px-4 py-1">Registered Name:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.regName" class="block text-xs w-96" name="mped.regName" id="mped.regName" type="text" />
                    <x-jet-input-error for='mped.regName' />
                </div>
            </div>

            <div class="flex items-center justify-center col-start-2 row-span-4 border-l border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.sire" class="block text-xs w-96" name="mped.sire" id="mped.sire" type="text"  />
                    <x-jet-input-error for='mped.sire' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-2 row-span-4 row-start-5 border-t border-l border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.dame" class="block text-xs w-96" name="mped.dame" id="mped.dame" type="text" />
                    <x-jet-input-error for='mped.dame' />
                </div>
            </div>


            <div class="flex items-center justify-center col-start-3 row-span-2 border-x border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire's Father:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.sFather" class="block text-xs w-96" name="mped.sFather" id="mped.sFather" type="text"  />
                    <x-jet-input-error for='mped.sFather' />
                </div>
            </div>

            <div class="flex items-center justify-center col-start-3 row-span-2 row-start-3 border border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire's Mother:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.sMother" class="block text-xs w-96" name="mped.sMother" id="mped.sMother" type="text"  />
                    <x-jet-input-error for='mped.sMother' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-3 row-span-2 row-start-5 border-x border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Father:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.dFather" class="block text-xs w-96" name="mped.dFather" id="mped.dFather" type="text"  />
                    <x-jet-input-error for='mped.dFather' />
                </div>
            </div>


            <div class="flex items-center justify-center col-start-3 row-span-2 row-start-7 border-t border-x border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Mother:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.dMother" class="block text-xs w-96" name="mped.dMother" id="mped.dMother" type="text"  />
                    <x-jet-input-error for='mped.dMother' />
                </div>
            </div>



            <div class="flex items-center justify-center h-24 col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire's Grandfather(F):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.sfFather" class="block text-xs w-96" name="mped.sfFather" id="mped.sfFather" type="text"  />
                    <x-jet-input-error for='mped.sfFather' />
                </div>
            </div>

           <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
            <div>
                <x-jet-label class="px-4 py-1">Sire's Grandmother(F):</x-jet-label>
                <x-jet-input wire:model.debounce.500ms="mped.sfMother" class="block text-xs w-96" name="mped.sfMother" id="mped.sfMother" type="text"  />
                <x-jet-input-error for='mped.sfMother' />
            </div>
           </div>
            <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire's Grandfather(M):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.smFather" class="block text-xs w-96" name="mped.smFather" id="mped.smFather" type="text"  />
                    <x-jet-input-error for='mped.smFather' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire's Grandmother(M):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.smMother" class="block text-xs w-96" name="mped.smMother" id="mped.smMother" type="text"  />
                    <x-jet-input-error for='mped.smMother' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Grandfather(F):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.dfFather" class="block text-xs w-96" name="mped.dfFather" id="mped.dfFather" type="text"  />
                    <x-jet-input-error for='mped.dfFather' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Grandmother(F):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.dfMother" class="block text-xs w-96" name="mped.dfMother" id="mped.dfMother" type="text"  />
                    <x-jet-input-error for='mped.dfMother' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Grandfather(M):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.dmFather" class="block text-xs w-96" name="mped.dmFather" id="mped.dmFather" type="text"  />
                    <x-jet-input-error for='mped.dmFather' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-4 border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Grandmother(M):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="mped.dmMother" class="block text-xs w-96" name="mped.dmMother" id="mped.dmMother" type="text"  />
                    <x-jet-input-error for='mped.dmMother' />
                </div>
            </div>
        </div>
        </form>
        <div class="m-4">
            <x-buttons.primary wire:target='store' wire:loading.attr='disabled' type="submit" :disabled="$disabled" form="SubmitForm"
            >
                {{ __('Save') }}
            </x-buttons.primary>
        </div>
    </div>
</div>
