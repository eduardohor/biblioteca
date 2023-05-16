<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'loan_date',
        'return_date',
        'situation',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function rules()
    {
        return [
            'user_id' => 'required',
            'book_id' => 'required',
            'loan_date' => 'required|date',
            'return_date' => 'required|date'
        ];
    }

    public function feedback()
    {
        return [
            'user_id.required' => 'O campo usuários é obrigatório',
            'book_id.required' => 'O campo livro é obrigatório',
            'loan_date.required' => 'O campo data de empréstimo é obrigatório',
            'return_date.required' => 'O campo data de entrega é obrigatório',
            'return_date.date' => 'O campo data de empréstimo teve ser uma data válida',
            'return_date.date' => 'O campo data de entrega teve ser uma data válida',
        
        ];
    }

}
