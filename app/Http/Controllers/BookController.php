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
        $request->validate($this->book->rules(), $this->book->feedback());

        $dataBooks = $request->all();

        $this->book->create($dataBooks);

        return redirect()->route('books.index')->with('create', 'Livro cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $book = $this->book->with('gender')->find($id);

        $genders = $this->gender->all();

        return view('books.edit', compact('book', 'genders'));
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->book->rules(), $this->book->feedback());

        $dataBooks = $request->all();

        $book = $this->book->find($id);

        $book->update($dataBooks);

        return redirect()->route('books.index')->with('update', 'Livro atualizado com sucesso!');
    }

    public function destroy($id)
    {

        $book = $this->book->find($id);

        $book->delete();

        return redirect()->route('books.index');
    }
}
