<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{   
    public $timestamps = false;
    // Atributos que são permitidos no Create
    protected $fillable = ['nome'];

    // Criando relacionamento entre Séries e Temporadas
    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }

}