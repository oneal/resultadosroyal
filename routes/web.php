<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Web\Home::class, 'index'])
->name('home.index');

Route::get('/oposiciones-guardia-civil', [\App\Http\Controllers\Web\Result::class, 'index'])
    ->name('results.index');

Route::post('/send-contact', [\App\Http\Controllers\Web\Contact::class, 'sendContact'])
    ->name('contact.sendContact');

Route::get('/oposiciones-guardia-civil/{year}', [\App\Http\Controllers\Web\Result::class, 'getResultsThemeByYear'])
    ->name('results.getResultsThemeByYear');

Route::get('/oposiciones-guardia-civil/{year}/{theme}', [\App\Http\Controllers\Web\Result::class, 'getResultsQuestByTheme'])
    ->name('results.getResultsQuestByTheme');

Route::get('/aviso-legal', function (){
    return view('web.legal-warning');
})->name('home.legal.warning');

Route::get('/politica-privacidad', function (){
    return view('web.privacy-policy');
})->name('home.privacy.policy');

Route::get('/politica-cookies', function (){
    return view('web.cookie-policy');
})->name('home.cookie.policy');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/get-resutls-themes-by-years', [\App\Http\Controllers\Admin\ResultQuest::class, 'getThemesByYears'])
        ->name('result-quest.get-themes-by-years');
});
