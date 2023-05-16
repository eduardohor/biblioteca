<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function rules()
    {
        return [
            'name' => 'required|min:5',
        ];
    }

    public function feedback()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'O nome deve ter pelo menos 5 caracteres',    
        ];
    }
}
