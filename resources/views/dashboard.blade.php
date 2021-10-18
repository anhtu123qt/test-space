<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div id="app">
        <div class="container">
            <title-content title="Create Book"></title-content>
            <div class="py-3">
                <input-group name="name" label="Name"></input-group>
                <input-group name="category" label="Category"></input-group>
                <input-group name="description" label="Description"></input-group>
            </div>
        </div>
    </div>
</x-app-layout>
