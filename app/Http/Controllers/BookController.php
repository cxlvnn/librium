<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->paginate(10);

        return Inertia::render('Books/Index', [
            'books' => $books,
        ]);
    }

    public function show(Book $book)
    {
        return Inertia::render('Books/Show', ['book' => $book]);
    }

    public function create()
    {
        return Inertia::render('Books/Create');
    }

    public function store(StoreBookRequest $request)
    {
        $book = Auth::user()->books()->create($request->safe()->except('cover'));
        $cover_path = $request->cover->store('covers', 'public');

        $book->update([
            'cover_path' => $cover_path,
        ]);

        return to_route('books.index');
    }
}
