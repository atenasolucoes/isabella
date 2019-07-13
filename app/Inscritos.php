<?php

namespace curso;

use Illuminate\Database\Eloquent\Model;

class Inscritos extends Model
{
    protected $fillable = [
        'user_id', 'curso_id', 'situacao',
    ];

    public function curso()
    {
        return $this->belongsTo('curso\Curso');
    }

    public function usuario()
    {
        return $this->belongsTo('curso\User','user_id');
    }
}
