<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'email' => 'required|email'
        ];
    }

    public function feedback()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'O nome deve ter pelo menos 5 caracteres',
            'email.required' => 'O campo e-mail é obrigatório',
            'email' => 'O campo deve ser um e-mail válido',
        ];
    }

}
