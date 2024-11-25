<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $packages = collect([
        'esplora/similar',
        'esplora/next-value-predictor',
        'esplora/memento',
        'esplora/auto-login',
        'esplora/serenade',
        'esplora/spire',
        'esplora/lumos',
    ])
        ->map(fn($package) => \Illuminate\Support\Facades\Http::get("https://packagist.org/packages/$package.json")
            ->collect('package')->only(['name', 'description', 'repository', 'github_stars', 'downloads']))
        ->sortByDesc('github_stars');


    return view('welcome', ['packages' => $packages]);
});
