<?php

use App\Http\Controllers\ReinsuranceController;
use App\Http\Controllers\SettingsController;
use App\Models\Reinsurance;
use App\Models\Settings;
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

Route::get('/', function () {
    return redirect()->route('reinsurances.index');
});

Route::get('language/{locale}', function($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('languageSwitcher');

Route::resource('reinsurances', ReinsuranceController::class);

Route::get('settings', function() {
    $settings = Settings::find(1);
    return view('settings', compact('settings'));
})->name('settings');

Route::post('settings/update', [SettingsController::class, 'update'])->name('updateSettings');

Route::post('reinsurances/update-positions', [ReinsuranceController::class, 'updatePositions'])->name('updatePositions');

Route::get('product', function () {
    $r = Reinsurance::where('statut', 1)->orderBy('ordre')->get();
    $i = 1;
    $reinsurances = array();
    foreach ($r as $item) {
        if ($i == 1) {
            $r_bis = array();
        }
        array_push($r_bis, $item);
        $i++;
        if ($i == 5) {
            array_push($reinsurances, $r_bis);
            $i = 1;
        }
    }
    if ($i != 1) {
        array_push($reinsurances, $r_bis);
    }
    $settings = Settings::find(1);
    return view('renders.product', compact('reinsurances', 'settings'));
})->name('productPage');

Route::get('shop', function () {
    $r = Reinsurance::where('statut', 1)->orderBy('ordre')->get();
    $i = 1;
    $reinsurances = array();
    foreach ($r as $item) {
        if ($i == 1) {
            $r_bis = array();
        }
        array_push($r_bis, $item);
        $i++;
        if ($i == 5) {
            array_push($reinsurances, $r_bis);
            $i = 1;
        }
    }
    if ($i != 1) {
        array_push($reinsurances, $r_bis);
    }
    $settings = Settings::find(1);
    return view('renders.shop', compact('reinsurances', 'settings'));
})->name('shopPage');