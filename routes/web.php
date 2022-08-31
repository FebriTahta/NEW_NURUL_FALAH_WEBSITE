<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\FetchController;
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

// Route::get('/', function () {
    // $schedule = Http::get('https://api.banghasan.com/sholat/format/json/jadwal/kota/1638/tanggal/'.date("Y-m-d"))->json()['jadwal']['data'];
    // $schedule = Http::get('https://api.myquran.com/v1/sholat/kota/cari/surabaya/');
    // return $schedule;
    // $jadwal_sholat = Http::get('https://api.myquran.com/v1/sholat/jadwal/1638/'.date('Y').'/'.date('m').'/'.date('d').'')->json()['data']['jadwal'];
    // return view('layouts.raw',compact('jadwal_sholat'));
    // return view('/maintenance');
// });
Route::get('/', function () {
    return redirect('/home-page');
});
Route::get('/home-page', [LandingController::class,'landing_page'])->name('landing_page');
Route::get('/list/{jenis_slug}',[PageController::class,'list_berita_artikel']);
Route::get('/post/{jenis_slug}/{post_slug}',[PageController::class,'detail_berita_artikel']);
Route::get('/cabang',[CabangController::class,'cabang_page'])->name('cabang_page');
Route::get('/cabang/page/{page}',[CabangController::class,'cabang_page2']);
Route::get('/cari-cabang',[CabangController::class,'cari_cabang'])->name('cari_cabang');

Route::get('/contact',[ContactController::class,'contact_page'])->name('contact_page');

Route::get('/pelatihan',[PelatihanController::class,'list_pelatihan'])->name('pelatihan_page');

Route::get('/product',[ProductController::class,'product_page'])->name('product_page');

Route::get('/profile',[ProfileController::class,'profile_page'])->name('profile_page');
Route::get('/media',[MediaController::class,'media_page'])->name('media_page');
Route::get('/media/{jenisposting_slug}',[MediaController::class,'media_list']);
Route::post('/search-media',[MediaController::class,'media_search'])->name('search_media');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {
    // BE
    // POSTING
    Route::get('/admin/posting',[PostController::class,'backend_posting'])->name('page.posting.backend');
    Route::post('/admin/add-posting',[PostController::class,'backend_add_posting'])->name('add.posting.backend');
    Route::post('/admin/remove-posting',[PostController::class,'backend_remove_posting'])->name('remove.posting.backend');
    Route::get('/admin/list-posting',[PostController::class,'backend_list_posting'])->name('page_list.posting.backend');
    Route::get('/admin/data-list-posting',[PostController::class,'backend_data_list_posting'])->name('data_list.posting.backend');
    Route::get('/admin/edit-posting/{posting_slug}',[PostController::class,'backend_posting_edit']);
    // KATEGORI
    Route::get('/admin/kategori',[PostController::class,'backend_kategori'])->name('page.kategori.backend');
    Route::post('/admin/add-kategori',[PostController::class,'backend_add_kategori'])->name('add.kategori.backend');
    Route::post('/admin/remove-kategori',[PostController::class,'backend_remove_kategori'])->name('remove.kategori.backend');
    // SUMBER
    Route::get('/admin/sumber',[PostController::class,'backend_sumber'])->name('page.sumber.backend');
    Route::post('/admin/add-sumber',[PostController::class,'backend_add_sumber'])->name('add.sumber.backend');
    Route::post('/admin/remove-sumber',[PostController::class,'backend_remove_sumber'])->name('remove.sumber.backend');
    // PENULIS
    Route::get('/admin/redaksi',[PostController::class,'backend_penulis'])->name('page.penulis.backend');
    Route::post('/admin/add-penulis',[PostController::class,'backend_add_penulis'])->name('add.penulis.backend');
    Route::post('/admin/remove-penulis',[PostController::class,'backend_remove_penulis'])->name('remove.penulis.backend');
    // JENIS
    Route::get('/admin/jenis',[PostController::class,'backend_jenis'])->name('page.jenis.backend');
    Route::post('/admin/add-jenis',[PostController::class,'backend_add_jenis'])->name('add.jenis.backend');
    Route::post('/admin/remove-jenis',[PostController::class,'backend_remove_jenis'])->name('remove.jenis.backend');
    // MEDIA
    Route::get('/admin/media',[MediaController::class,'backend_media'])->name('page.media.backend');
    Route::post('/admin/add-media',[MediaController::class,'backend_add_media'])->name('add.media.backend');
    Route::post('/admin/update-media',[MediaController::class,'backend_update_media'])->name('update.media.backend');
    Route::post('/admin/remove-media',[MediaController::class,'backend_remove_media'])->name('remove.media.backend');
    // MEDIA
    Route::get('/admin/cabang',[CabangController::class,'backend_cabang'])->name('page.cabang.backend');
    Route::post('/admin/add-cabang',[CabangController::class,'backend_add_cabang'])->name('add.cabang.backend');
    Route::post('/admin/remove-cabang',[CabangController::class,'backend_remove_cabang'])->name('remove.cabang.backend');
    // YOUTUBE
    Route::get('/admin/youtube',[YoutubeController::class,'backend_youtube'])->name('page.youtube.backend');
    Route::post('/admin/add-youtube',[YoutubeController::class,'backend_add_youtube'])->name('add.youtube.backend');
    Route::post('/admin/remove-youtube',[YoutubeController::class,'backend_remove_youtube'])->name('remove.youtube.backend');
    // PROFILE
    Route::get('/admin-profile',[ProfileController::class,'backend_profile'])->name('page.profile.backend');
    // DASHBOARD
    Route::get('/admin-dashboard',[DashboardController::class,'backend_dashboard'])->name('page.dashboard.backend');
    // PRODUCT
    Route::get('/admin/product-list',[ProductController::class,'backend_product_list'])->name('page.product_list.backend');
    Route::get('/admin/product-create',[ProductController::class,'backend_product_create'])->name('page.product_create.backend');
    Route::post('/admin/add-product',[ProductController::class,'backend_add_product'])->name('add.product.backend');
    Route::post('/admin/product-remove',[ProductController::class,'backend_remove_product'])->name('remove.product.backend');
    // KATALOG
    Route::get('/admin/katalog-list',[KatalogController::class,'backend_katalog_list'])->name('page.katalog.backend');
    Route::post('/admin/katalog-add',[KatalogController::class,'backend_katalog_add'])->name('add.katalog.backend');
    Route::post('/admin/katalog-remove',[KatalogController::class,'backend_katalog_remove'])->name('remove.katalog.backend');


    // GEOGRAFIS INDONESIA 
    Route::get('/provinsi',[DaerahController::class,'index_provinsi'])->name('be.provinsi.page');
    Route::post('/provinsi-import',[DaerahController::class,'import_provinsi'])->name('be.provinsi.import');
    Route::get('/kabupaten',[DaerahController::class,'index_kabupaten'])->name('be.kabupaten.page');
    Route::post('/kabupaten-import',[DaerahController::class,'import_kabupaten'])->name('be.kabupaten.import');
    Route::get('/kecamatan',[DaerahController::class,'index_kecamatan'])->name('be.kecamatan.page');
    Route::post('/kecamatan-import',[DaerahController::class,'import_kecamatan'])->name('be.kecamatan.import');
    Route::get('/kelurahan',[DaerahController::class,'index_kelurahan'])->name('be.kelurahan.page');
    Route::post('/kelurahan-import',[DaerahController::class,'import_kelurahan'])->name('be.kelurahan.import');

    //FORM
    Route::get('/daftar-form',[FormController::class,'index_daftar_form'])->name('be.form.list');
    Route::post('/create-new-form',[FormController::class,'create_new_form'])->name('be.form.create');
    Route::post('/remove-form',[FormController::class,'remove_form'])->name('be.form.remove');

    //PERTANYAAN
    Route::get('/daftar-pertanyaan-data/{grouppertanyaan_id}',[PertanyaanController::class,'index_daftar_pertanyaan']);
    Route::post('/create-new-pertanyaan',[PertanyaanController::class,'create_new_pertanyaan'])->name('be.pertanyaan.create');
    Route::post('/remove-pertanyaan',[PertanyaanController::class,'remove_pertanyaan'])->name('be.pertanyaan.remove');    

    //GROUP PERTANYAAN
    Route::get('/daftar-pertanyaan/{slug_form}',[PertanyaanController::class,'index_group_pertanyaan']);
    Route::post('/create-new-group-pertanyaan',[PertanyaanController::class,'create_new_grouppertanyaan'])->name('be.grouppertanyaan.create');
    Route::post('/remove-pertanyaan',[PertanyaanController::class,'remove_grouppertanyaan'])->name('be.grouppertanyaan.remove');

    //BLASS MESSAGE WHATSAPP
    Route::get('/broadcast-page',[BroadcastController::class,'index_broadcast'])->name('page.broadcast.be');
    Route::post('/broadcast-store',[BroadcastController::class,'store_broadcast'])->name('store.broadcast.be');
    Route::post('/broadcast-remove',[BroadcastController::class,'remove_broadcast'])->name('remove.broadcast.be');
    Route::get('/broadcast-edit/{id}',[BroadcastController::class,'edit_broadcast']);
    
    //TARGET BLASS MESSAGE WHATSAPP
    Route::get('/broadcast-target-page/{id}',[BroadcastController::class,'index_target'])->name('page.target.be');
    Route::post('/target-import',[BroadcastController::class,'import_target'])->name('import.target.be');
    Route::get('/target-remove-all/{broadcast_id}',[BroadcastController::class,'remove_target_all']);
    Route::get('/target-broadcast-all/{broadcast_id}',[BroadcastController::class,'broadcast_all']);
    Route::get('/target-reset-status/{broadcast_id}',[BroadcastController::class,'reset_status_target']);
    

});

//FETCHING AJAX GEO INDONESIA
Route::get('/fetch-kabupaten',[FetchController::class,'fetch_kabupaten'])->name('fetch.kabupaten');
Route::get('/fetch-kecamatan/{kabupaten_id}',[FetchController::class,'fetch_kecamatan']);

//FORM FE UI
Route::get('/{slug_form}',[FormController::class,'index_form_fe'])->name('fe.form');
Route::post('/form-submit',[FormController::class,'form_submit'])->name('form.submit');
Route::get('/download-sertifikat/{id}',[FormController::class,'download_sertifikat']);
Route::get('/data-lembaga/{kabupaten_id}/{kecamatan_id}',[FormController::class,'data_lembaga'])->name('data_lembaga');
Route::get('/data-lembaga-tabel/{kabupaten_id}/{kecamatan_id}/{slug_form}',[FormController::class,'data_lembaga_tabel'])->name('data_lembaga_tabel');
Route::get('/survey-mendaftarkan-lembaga/{kabupaten_id}/{kecamatan_id}/{slug_form}',[FormController::class,'mendaftar_lembaga'])->name('daftar.lembaga.page');
Route::post('/survey-daftar-lembaga',[FormController::class,'lembaga_store'])->name('form.lembaga.store');
Route::get('/survey-lembaga/{slug_form}/{slug_lembaga}',[FormController::class,'lembaga_santri']);
Route::post('/survey-lembaga-store-santri',[FormController::class,'store_santri']);

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
