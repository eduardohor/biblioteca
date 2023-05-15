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
}
