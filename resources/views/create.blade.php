<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book Store') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div id="app">
            <div class="container">
                <title-content title="Add Book"></title-content>
                <div class="py-3">
                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <input-group name="name" label="Name"></input-group>
                        <input-group name="category" label="Category"></input-group>
                        <input-group name="description" label="Description"></input-group>
                        <button-content btn-type="submit" btn-name="Create" btn-class="btn btn-success">
                        </button-content>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
