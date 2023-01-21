<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Male Pedigree to Database') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('fped.create', ['fped' => $fped])
    </div>
</x-app-layout>
