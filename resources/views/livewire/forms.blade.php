@php
$disabled = $errors->any()|| empty('dog.callName') ? true : false;
@endphp

<div>
    <div class="container max-w-4xl py-4 mx-auto border-2 border-blue-800 rounded-lg shadow-xl h-5/6 bg-blue-50">
        <form wire:submit.prevent='store' class="space-y-4" id="SubmitForm">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div class="pl-4 ">
                    <x-jet-input wire:model.debounce.500ms="dog.callName" class="block w-full" name="dog.callName" id="dog.callName" type="text" placeholder="Call Name" />
                    <x-jet-input-error for='dog.callName' />
                </div>
                <div class="pr-4 ">
                    <x-jet-input wire:model.debounce.500ms="dog.slug" class="block w-full" name="dog.slug" id="dog.slug" type="text" placeholder="Slug" />
                    <x-jet-input-error for='dog.slug' />
                </div>
            </div>

            <div class="px-4 ">
                <x-jet-input wire:model.debounce.500ms="dog.regName" class="block w-full" name="dog.regName" id="dog.regName" type="text" placeholder=" Registered Name" />
                <x-jet-input-error for='dog.regName' />
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="pl-4">
                    <select wire:model="dog.mped_id" class="block w-full text-gray-700 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="0">-- Select Sire --</option>
                        @foreach($mpeds as $mped)
                            <option value="{{ $mped->id }}">{{ $mped->callName }}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for='dog.mped_id' />
                </div>
                <div class="pr-4">
                    <select wire:model="dog.fped_id" class="block w-full text-gray-700 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="0">-- Select Dame --</option>
                        @foreach($fpeds as $fped)
                            <option value="{{ $fped->id }}">{{ $fped->callName }}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for='dog.fped_id' />
                </div>
            </div>
            <div class="px-4">
                <textarea wire:model.debounce.500ms="dog.clearances" name="dog.clearances" id="dog.clearances"  rows="5"
                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder="Clearances"></textarea>
                <x-jet-input-error for='dog.clearances' />
            </div>

            <div class="px-4 ">
                <x-jet-input wire:model.debounce.500ms="dog.pedigree" class="block w-full" name="dog.pedigree" id="dog.pedigree" type="text" placeholder="Pedigree" />
                <x-jet-input-error for='dog.pedigree' />
            </div>

            <div class="px-4 ">
                <x-jet-input wire:model.debounce.500ms="dog.wpage" class="block w-full" name="dog.wpage" id="dog.wpage" type="text" placeholder="Web Page" />
                <x-jet-input-error for='dog.wpage' />
            </div>

            <div class="px-4 ">
                <x-jet-input wire:model.debounce.500ms="dog.pic" class="block w-full" name="dog.pic" id="dog.pic" type="text" placeholder="Picture" />
                <x-jet-input-error for='dog.pic' />
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="pl-4">
                    <input wire:model.debounce.500ms="dog.birthday" type="date"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <x-jet-input-error for='dog.birthday' />
                </div>

                <div class="pr-4">
                    <select wire:model="dog.dogstat" class="block w-full text-gray-700 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="0">-- Select Status --</option>
                        <option value="U">Upcoming</option>
                        <option value="A">Active</option>
                        <option value="R">Retired</option>
                        <option value="RB">Rainbow</option>
                        <option value="G">Greeter</option>
                        <option value="P">Puppy</option>
                    </select>
                    <x-jet-input-error for='dog.dogstat' />
                </div>

                <div class="pl-4">
                    <select wire:model="dog.colour" class="block w-full text-gray-700 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="0">-- Select Colour --</option>
                        <option value="Yellow">Yellow</option>
                        <option value="Black">Black</option>
                        <option value="Chocolate">Chocolate</option>
                    </select>
                    <x-jet-input-error for='dog.colour' />
                </div>

                <div class="pr-4">
                    <select wire:model="dog.sex" class="block w-full text-gray-700 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="0">-- Select Sex --</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                    <x-jet-input-error for='dog.sex' />
                </div>
            </div>

            <div class="px-4">
                <textarea wire:model.debounce.500ms="dog.blurb" name="dog.blurb" id="dog.blurb"  rows="5"
                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder="Notes about dog...."></textarea>
                <x-jet-input-error for='dog.blurb' />
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


