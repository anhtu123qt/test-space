<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div id="app">
            <div class="container">
                <title-content title="Hello {{ auth()->user()->name }} !"></title-content>
            </div>
        </div>
    </x-slot>
</x-app-layout>
