<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriqueQuiz extends Model
{
    use HasFactory;

    public function resultats()
    {
        return $this->belongsTo(Resultat::class);
    }
    public function questions()
    {
        return $this->belongsTo(Question::class);
    }
    public function responses()
    {
        return $this->belongsTo(Response::class);
    }
}
