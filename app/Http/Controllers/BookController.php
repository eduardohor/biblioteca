<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Gender;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $book;
    private $gender;

    public function __construct(Book $book, Gender $gender)
    {
        $this->book = $book;
        $this->gender = $gender;
    }

    public function index()
    {
        $books = $this->book->with('gender')->get();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        $genders = $this->gender->all();

        return view('books.create', compact('genders'));
    }

    public function store(Request $request)
    {
        $dataBooks = $request->all();

        $this->book->create($dataBooks);

        return redirect()->route('books.index');
    }
}
