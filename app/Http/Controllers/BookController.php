<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
}
