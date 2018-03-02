<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = 'permisoes';
    protected $fillable = ['nome', 'descricao'];

    public function papel()
    {
        return $this->belongsToMany(Papel::class);
    }
}
