<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreBookRequest;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('index',compact('books'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(StoreBookRequest $request) 
    {
        $book = Book::create($request->all());

        return redirect()->route('books.index');
    }
    public function edit(Request $request,Book $book) 
    {
        try {
            return view('edit',compact('book'));
        } catch (\Throwable $th) {
            Log::error($th);

            return redirect()->back();
        }
    }
    public function update(Request $request,Book $book) 
    {
        try {
            $book->update($request->all());
            $book->save();

            return redirect()->route('books.index');
        } catch(\Throwable $th) {
            Log::error($th);

            return redirect()->back();
        }
    }
    public function destroy(Request $request,Book $book)
    {
        try {
            $book->delete();
            return redirect()->route('books.index');
        } catch(\Throwable $th) {
            Log::error($th);
            return redirect()->back();
        }
    }
}
