<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    private $gender;

    public function __construct(Gender $gender)
    {
        $this->gender = $gender;
        
    }
    public function index()
    {
        $genders = $this->gender->all();

        return view('genders.index', compact('genders'));
    }

    public function create()
    {
        return view('genders.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->gender->rules(), $this->gender->feedback());

        $dataGenders = $request->all();

        $this->gender->create($dataGenders);

        return redirect()->route('genders.index')->with('create', 'Gênero cadastrado com sucesso!');

    }

    public function edit($id)
    {
        $gender = $this->gender->find($id);

        return view('genders.edit', compact('gender'));
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->gender->rules(), $this->gender->feedback());

        $dataGenders = $request->all();

        $gender = $this->gender->find($id);

        $gender->update($dataGenders);

        return redirect()->route('genders.index')->with('update', 'Gênero atualizado com sucesso!');

    }

    public function destroy($id)
    {
        $gender = $this->gender->find($id);

        $gender->delete();

        return redirect()->route('genders.index')->with('destroy', 'Gênero removido com sucesso!');

    }

}
