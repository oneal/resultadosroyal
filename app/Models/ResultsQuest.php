<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultsQuest extends Model
{
    use HasFactory;

    public function year()
    {
        return $this->belongsTo(ResultsYear::class, 'year_id');
    }

    public function theme()
    {
        return $this->belongsTo(ResultsTheme::class, 'theme_id');
    }
}
