<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostingController;
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

//Route::get('/', function () {
    // $schedule = Http::get('https://api.banghasan.com/sholat/format/json/jadwal/kota/1638/tanggal/'.date("Y-m-d"))->json()['jadwal']['data'];
    // $schedule = Http::get('https://api.myquran.com/v1/sholat/kota/cari/surabaya/');
    // return $schedule;
    // $jadwal_sholat = Http::get('https://api.myquran.com/v1/sholat/jadwal/1638/'.date('Y').'/'.date('m').'/'.date('d').'')->json()['data']['jadwal'];
    // return view('layouts.raw',compact('jadwal_sholat'));
//});

Route::get('/', [LandingController::class,'landing_page'])->name('landing_page');
Route::get('/contact',[ContactController::class,'contact_page'])->name('contact_page');
Route::get('/artikel/contoh',[PostingController::class,'detail_artikel'])->name('detail_artikel');
