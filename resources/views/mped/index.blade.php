<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('List of Males') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('mped')
    </div>
</x-app-layout>
