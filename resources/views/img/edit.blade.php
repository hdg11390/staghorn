<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Image in Database') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('img.create', ['img' => $img])
    </div>
</x-app-layout>
