<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book Store') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div id="app">
            <div class="container">
                <title-content title="Books"></title-content>
                <list-item :items="{{ $books }}"></list-item>
                <button-content btn-class="btn btn-success" btn-name="Add" btn-redirect="create">
                </button-content>
            </div>
        </div>
    </x-slot>
</x-app-layout>
