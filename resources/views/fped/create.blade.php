<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Female Pedigree to Database') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('fped.create')
    </div>
</x-app-layout>
