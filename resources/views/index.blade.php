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
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <th scope="row">{{ $book->id }}</th>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->category }}</td>
                                    <td>{{ $book->description }}</td>
                                    <td>
                                        <button-content btn-class="btn btn-dark w-100 mb-2" btn-name="Edit"
                                            :route="`{{ route('books.edit', [$book->id]) }}`"></button-content>
                                        <button-content btn-class="btn btn-danger w-100" btn-name="Delete"
                                            :route="`{{ route('books.delete', [$book->id]) }}`">
                                        </button-content>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- <list-item :items="{{ $books }}"></list-item> --}}
                <button-content btn-class="btn btn-success" btn-name="Add" route="{{ route('books.create') }}">
                </button-content>
            </div>
        </div>
    </x-slot>
</x-app-layout>
