<?php

namespace curso;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
       'nome', 'data','link_pagamento',
    ];

    public function inscricao()
    {
        return $this->hasMany('curso\Inscritos');
    }
 
}
