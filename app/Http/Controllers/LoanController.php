<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    private $loan;
    private $user;
    private $book;

    public function __construct(Loan $loan, User $user, Book $book)
    {
        $this->loan = $loan;
        $this->user = $user;
        $this->book = $book;
    }

    public function index()
    {
        $loans = $this->loan->with('user','book')->get();

        return view('loans.index', compact('loans'));
    }

    public function situation(Request $request, $id)
    {
        $loan = $this->loan->with('book')->find($id);
        $idBook = $loan->book->id;

        $book = $this->book->find($idBook);

        $situation = $request->situation;
        
        if ($situation === 'DEVOLVIDO') {
            $book->situation = 0;
            $book->save();
        } else {
            $book->situation = 1;
            $book->save();
        }

        $loan->situation = $situation;

        $loan->save();

        return redirect()->route('loans.index')->with('alter-situation', 'Situação alterada com sucesso!');
    }

    public function create()
    {
        $users = $this->user->all();
        $books = $this->book->all();

        return view('loans.create', compact('users', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate($this->loan->rules(), $this->loan->feedback());
        $idBook = $request->book_id;
        $book = $this->book->find($idBook);

        $book->situation = 1;
        $book->save();

        $dataLoan = $request->all();

        $this->loan->create($dataLoan);

        return redirect()->route('loans.index')->with('create', 'Empréstimo realizado com sucesso!');

    }
}
