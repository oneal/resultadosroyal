<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Output\Theme;

class ResultsYearsTheme extends Model
{
    use HasFactory;

    public function questTheme($themeId, $yearId)
    {
        return $this->select('results_quests.*')
            ->join('results_quests', function ($join) {
                $join->on('results_quests.year_id', '=', 'results_years_themes.year_id');
                $join->on('results_quests.theme_id', '=', 'results_years_themes.theme_id');
            })
            ->where('results_quests.year_id', $yearId)
            ->where('results_quests.theme_id', $themeId)
            ->get();
    }

    public function themeYear()
    {
        return $this->belongsTo(ResultsTheme::class, 'theme_id');
    }

    public function year()
    {
        return $this->belongsTo(ResultsYear::class, 'year_id');
    }
}
