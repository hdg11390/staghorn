<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Image to Database') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('img.create')
    </div>
</x-app-layout>
