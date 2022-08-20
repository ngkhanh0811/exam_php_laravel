<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function search(Request $request){
        $search = $request->input('search');
        $books = Book::query()
            ->where('title', 'LIKE', "%{$search}%")->get();
        return view('search', compact('books'));
    }
}
