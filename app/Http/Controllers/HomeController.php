<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $books = Book::inRandomOrder();

        $topLikedbooks = Book::orderBy('like_count', 'desc')->take(5)->get();

        $newbooks = Book::orderBy('year_id', 'desc')->take(5)->get();

        $authors = Author::withCount('books')->take(5)->get();

        return view('home.index', compact('books', 'newbooks', 'topLikedbooks', 'authors'));
    }
}
