<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultsQuest extends Model
{
    use HasFactory;

    public function scopeThemesYear($query)
    {
        \Log::info('~##~#~#~#~#~#~111111', [$this->year_id]);
        return $query->select('results_themes.*')
            ->join('results_themes', 'results_years_themes.theme_id', '=', 'results_themes.id')
            ->where('year_id', $this->year_id);
    }
}
