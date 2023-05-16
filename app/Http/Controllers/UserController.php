<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {      
        $request->validate($this->user->rules(), $this->user->feedback());

        $dataUser = $request->all();

        $this->user->create($dataUser);

        return redirect()->route('users.index')->with('create', 'Usuário cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $user = $this->user->find($id);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->user->rules(), $this->user->feedback());

        $dataUser = $request->all();

        $user = $this->user->find($id);

        $user->update($dataUser);

        return redirect()->route('users.index')->with('update', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $user = $this->user->find($id);

        $user->delete();

        return redirect()->route('users.index')->with('destroy', 'Usuário removido com sucesso!');
    }
}
