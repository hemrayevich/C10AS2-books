<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Year;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request) {

        $sortByType = $request->sortBy ? $request->sortBy : 'name';

        $query = Book::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')->orWhere('code', 'like', '%' . $request->search . '%');
        }

        //kategorya filter
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }
        $categories = Category::get();

        //awtor filter
        if ($request->filled('author')) {
            $query->where('author_id', $request->author);
        }
        $authors = Author::get();

        //publisher filter
        if ($request->filled('publisher')) {
            $query->where('publisher_id', $request->publisher);
        }
        $publishers = Publisher::get();

        //yyly filter
        if ($request->filled('year_from')) {
            $query->whereHas('year', function ($q) use ($request) {
                $q->where('year', '>=', $request->year_from); 
            });
        }
        if ($request->filled('year_to')) {
            $query->whereHas('year', function ($q) use ($request) {
                $q->where('year', '<=', $request->year_to);
            });
        }
        $years = Year::get();

        // page_num
        if ($request->filled('page_from')) {
            $query->where('page_number', '>=', $request->page_from);
        }
        if ($request->filled('page_to')) {
            $query->where('page_number', '<=', $request->page_to);
        }

        //sorirowka
        if ($sortByType == 'mostPopular') {
            $query->orderBy('like_count', 'desc');
        } else if ($sortByType == 'newest') {
            $query->orderBy('year_id', 'asc');
        }  else {
            $query->orderBy('name', 'desc');
        }

        $books = $query->paginate(25)->withQueryString();

        $sorts = [
            'newest' => 'Tazeler',
            'mostPopular' => 'Popularnylar',
            'name' => 'Ady'
        ];

        return view('books.index', compact('books', 'categories', 'sorts', 'authors', 'years', 'publishers'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('books.show', compact('book'));
    }
}
