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

    public function create()
    {
        $users = $this->user->all();
        $books = $this->book->all();

        return view('loans.create', compact('users', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate($this->loan->rules(), $this->loan->feedback());

        $dataLoan = $request->all();

        $this->loan->create($dataLoan);

        return redirect()->route('loans.index')->with('create', 'Empréstimo realizado com sucesso!');

    }
}
