<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $fillable = ['numero'];
    public $timestamps = false;

    
    // Criando relação entre Temporadas e Episódios

    public function episodios()
    {
        // Possui muitas
        return $this->hasMany(Episodio::class);
    }


    public function serie()
    {
        // Possui Somente (belongsTo)
        return $this->belongsTo(Serie::class);
    }


    public function getEpisodiosAssistidos(): Collection
    {
        return $this->episodios->filter(function (Episodio $episodio)
        {
            return $episodio->assistido;
        });
    }
}
