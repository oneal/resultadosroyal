<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ResultsQuest;
use App\Models\ResultsTheme;
use App\Models\ResultsYear;
use App\Models\ResultsYearsTheme;

class Result extends Controller
{
    public function index()
    {
        $years = ResultsYear::orderBy('created_at','DESC')
            ->get();

        return view('web.results.results-year', compact('years'));
    }

    public function getResultsThemeByYear($year)
    {
        $year = ResultsYear::where('year', $year)->first();

        if(isset($year)) {
            $resultsYearsTheme = ResultsYearsTheme::join('results_themes', 'results_themes.id', '=', 'results_years_themes.theme_id')
                ->where('results_years_themes.year_id', $year->id)
                ->get();

            return view('web.results.results-theme-by-year', compact('year', 'resultsYearsTheme'));
        }

        return redirect('/');
    }

    public function getResultsQuestByTheme($year,$theme)
    {
        $year = ResultsYear::where('year', $year)->first();
        $theme = ResultsTheme::where('slug', $theme)->first();

        $resultYearTheme = ResultsYearsTheme::where('year_id', $year->id)
            ->where('theme_id', $theme->id)
            ->first();

        if(isset($resultYearTheme)) {
            $quests = ResultsQuest::where('year_id', $year->id)
                ->where('theme_id', $theme->id)
                ->get();

            return view('web.results.results-quest-by-theme', compact('year', 'theme', 'quests'));
        }

        return redirect('/');
    }
}
