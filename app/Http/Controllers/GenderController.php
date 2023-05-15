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
        $dataGenders = $request->all();

        $this->gender->create($dataGenders);

        return redirect()->route('genders.index');

    }

    public function edit($id)
    {
        $gender = $this->gender->find($id);

        return view('genders.edit', compact('gender'));
    }

    public function update(Request $request, $id)
    {
        $dataGenders = $request->all();

        $gender = $this->gender->find($id);

        $gender->update($dataGenders);

        return redirect()->route('genders.index');

    }

    public function destroy($id)
    {
        $gender = $this->gender->find($id);

        $gender->delete();

        return redirect()->route('genders.index');

    }

}
