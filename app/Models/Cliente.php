<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;


    public function contatos()
    {
        return $this->hasMany(Contato::class);
    }

    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }

    public function projetos()
    {
        return $this->belongsToMany(Projeto::class);
    }

}
