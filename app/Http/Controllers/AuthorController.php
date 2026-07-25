<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(Request $request) {
        $query = Author::withCount('books');

        if ($request->filled('search')) {
            $query->where('name', 'like', "%" . $request->search . "%")
                  ->orWhere('surname', 'like', "%" . $request->search . "%");
        }

        $authors = $query->paginate(10)->withQueryString();

        return view('authors.index', compact('authors'));
    }

    public function show($id)
    {
        $author = Author::with('books')->findOrFail($id);
        $backUrl = url()->previous();

        return view('authors.show', compact('author', 'backUrl'));
    }
}
