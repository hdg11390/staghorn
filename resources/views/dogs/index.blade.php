<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('List of Dogs') }}
        </h2>
    </x-slot>

    <div class="py-6">
        @livewire('dogs')
    </div>
</x-app-layout>
