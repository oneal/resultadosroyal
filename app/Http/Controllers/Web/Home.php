<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ResultsYear;
use TCG\Voyager\Facades\Voyager;

class Home extends Controller
{
    public function index()
    {
        $years = ResultsYear::orderBy('created_at','DESC')
            ->take(8)
            ->get();

        return view('web.home', compact('years'));
    }
}
