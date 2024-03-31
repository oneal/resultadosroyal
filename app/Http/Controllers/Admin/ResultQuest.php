<?php
namespace App\Http\Controllers\Admin;

use App\Models\ResultsYearsTheme;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class ResultQuest extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function getThemesByYears (Request $request)
    {
        $resultThemes = null;
        if($request->has('year_id')){
            $resultThemes = ResultsYearsTheme::select('results_themes.*')
                ->join('results_themes', 'results_years_themes.theme_id', '=', 'results_themes.id')
                ->where('year_id', $request->year_id)
                ->distinct()
                ->get();
        }

        return Voyager::view('voyager::partials.element-themes', compact('resultThemes'));
    }
}
