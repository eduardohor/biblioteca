<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender_id',
        'name',
        'author',
        'registration_number',
        'situation'
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function rules()
    {
        return [
            'gender_id' => 'required',
            'name' => 'required|min:5',
            'author' => 'required|min:5',
            'registration_number' => 'required|integer'
        ];
    }

    public function feedback()
    {
        return [
            'gender_id.required' => 'O campo gênero é obrigatório',
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'O nome deve ter pelo menos 5 caracteres',
            'author.required' => 'O campo e-mail é obrigatório',
            'author.min' => 'O nome deve ter pelo menos 5 caracteres',
            'registration_number.required' => 'O campo de número de registro é obrigatório',
            'registration_number.integer' => 'O número de registro deve ser um número inteiro',
        ];
    }

}
