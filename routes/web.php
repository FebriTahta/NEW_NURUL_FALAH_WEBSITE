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

Route::get('/', function () {
    // $schedule = Http::get('https://api.banghasan.com/sholat/format/json/jadwal/kota/1638/tanggal/'.date("Y-m-d"))->json()['jadwal']['data'];
    // $schedule = Http::get('https://api.myquran.com/v1/sholat/kota/cari/surabaya/');
    // return $schedule;
    // $jadwal_sholat = Http::get('https://api.myquran.com/v1/sholat/jadwal/1638/'.date('Y').'/'.date('m').'/'.date('d').'')->json()['data']['jadwal'];
    // return view('layouts.raw',compact('jadwal_sholat'));
    return view('layouts.raw');
});
