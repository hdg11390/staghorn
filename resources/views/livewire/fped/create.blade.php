@php
$disabled = $errors->any()|| empty('fped.callName') ? true : false;
@endphp

<div>
    <div class="w-4/5 mx-auto">
        <form wire:submit.prevent='store' class="space-y-4" id="SubmitForm">
            @csrf

            <div class="grid grid-cols-2 gap-4">
        <div class="pb-4">
            <x-jet-label class="px-4 py-1">Call Name:</x-jet-label>
            <x-jet-input wire:model.debounce.500ms="fped.callName" class="block text-xs w-96" name="fped.callName" id="fped.callName" type="text" />
            <x-jet-input-error for='fped.callName' />

            <div class="flex-col items-center px-4 py-1 mt-4">
                <label class=""><span class="text-gray-700 items-center">Is Active</span></label>
                    <input wire:model.debounce.500ms="fped.is_active" type="checkbox" class="form-checkbox rounded text-green-500 mx-2 items-center" />
                <x-jet-input-error for='fped.is_active' />
            </div>
        </div>
        {{-- <div class="flex-col items-center">
            {{-- <x-jet-label class="px-4 py-1">Is Active:</x-jet-label>
            {{-- <x-jet-input wire:model.debounce.500ms="fped.is_active" class="block text-xs w-96" name="fped.is_active" id="fped.is_active" type="checkbox" />
            <x-jet-input-error for='fped.is_active' />
        </div> --}}
    </div>

        <div class="grid grid-flow-col border shadow-md grid-rows-8 border-staghorn-700 bg-staghorn-100">

            <div class="flex items-center justify-center col-start-1 row-span-2 row-start-4">
                <div>
                    <x-jet-label class="px-4 py-1">Registered Name:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.regName"
                    class="block text-xs w-96"
                    name="fped.regName"
                    id="fped.regName"
                    type="text"
                    />
                    <x-jet-input-error for='fped.regName' />
                </div>
            </div>

            <div class="flex items-center justify-center col-start-2 row-span-4 border-l border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.sire" class="block text-xs w-96" name="fped.sire" id="fped.sire" type="text"  />
                    <x-jet-input-error for='fped.sire' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-2 row-span-4 row-start-5 border-t border-l border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.dame" class="block text-xs w-96" name="fped.dame" id="fped.dame" type="text" />
                    <x-jet-input-error for='fped.dame' />
                </div>
            </div>


            <div class="flex items-center justify-center col-start-3 row-span-2 border-x border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire's Father:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.sFather" class="block text-xs w-96" name="fped.sFather" id="fped.sFather" type="text"  />
                    <x-jet-input-error for='fped.sFather' />
                </div>
            </div>

            <div class="flex items-center justify-center col-start-3 row-span-2 row-start-3 border border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire's Mother:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.sMother" class="block text-xs w-96" name="fped.sMother" id="fped.sMother" type="text"  />
                    <x-jet-input-error for='fped.sMother' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-3 row-span-2 row-start-5 border-x border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Father:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.dFather" class="block text-xs w-96" name="fped.dFather" id="fped.dFather" type="text"  />
                    <x-jet-input-error for='fped.dFather' />
                </div>
            </div>


            <div class="flex items-center justify-center col-start-3 row-span-2 row-start-7 border-t border-x border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Mother:</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.dMother" class="block text-xs w-96" name="fped.dMother" id="fped.dMother" type="text"  />
                    <x-jet-input-error for='fped.dMother' />
                </div>
            </div>



            <div class="flex items-center justify-center h-24 col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire's Grandfather(F):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.sfFather" class="block text-xs w-96" name="fped.sfFather" id="fped.sfFather" type="text"  />
                    <x-jet-input-error for='fped.sfFather' />
                </div>
            </div>

           <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
            <div>
                <x-jet-label class="px-4 py-1">Sire's Grandmother(F):</x-jet-label>
                <x-jet-input wire:model.debounce.500ms="fped.sfMother" class="block text-xs w-96" name="fped.sfMother" id="fped.sfMother" type="text"  />
                <x-jet-input-error for='fped.sfMother' />
            </div>
           </div>
            <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire's Grandfather(M):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.smFather" class="block text-xs w-96" name="fped.smFather" id="fped.smFather" type="text"  />
                    <x-jet-input-error for='fped.smFather' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Sire's Grandmother(M):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.smMother" class="block text-xs w-96" name="fped.smMother" id="fped.smMother" type="text"  />
                    <x-jet-input-error for='fped.smMother' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Grandfather(F):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.dfFather" class="block text-xs w-96" name="fped.dfFather" id="fped.dfFather" type="text"  />
                    <x-jet-input-error for='fped.dfFather' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Grandmother(F):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.dfMother" class="block text-xs w-96" name="fped.dfMother" id="fped.dfMother" type="text"  />
                    <x-jet-input-error for='fped.dfMother' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-4 border-b border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Grandfather(M):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.dmFather" class="block text-xs w-96" name="fped.dmFather" id="fped.dmFather" type="text"  />
                    <x-jet-input-error for='fped.dmFather' />
                </div>
            </div>
            <div class="flex items-center justify-center col-start-4 border-staghorn-500">
                <div>
                    <x-jet-label class="px-4 py-1">Dame's Grandmother(M):</x-jet-label>
                    <x-jet-input wire:model.debounce.500ms="fped.dmMother" class="block text-xs w-96" name="fped.dmMother" id="fped.dmMother" type="text"  />
                    <x-jet-input-error for='fped.dmMother' />
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

