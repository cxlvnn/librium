<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::latest()->when($request->status, fn ($query, $status) => $query->where('status', $status))->paginate(10);

        $books_count = Book::count();
        $reading_count = Book::where('status', 'Reading')->count();

        return Inertia::render('Books/Index', [
            'books' => $books,
            'counts' => [
                'books_count' => $books_count,
                'reading_count' => $reading_count,
            ],
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

    public function edit(Book $book)
    {
        return Inertia::render('Books/Edit', ['book' => $book]);
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->safe()->except('cover'));
        if ($request->has('cover')) {
            $cover_path = $request->cover->store('covers', 'public');
            $book->update([
                'cover_path' => $cover_path,
            ]);
        }

        return to_route('books.show', ['book' => $book]);
    }

    public function destroy(Book $book)
    {
        $book->deleteOrFail();

        return to_route('books.index');
    }
}
