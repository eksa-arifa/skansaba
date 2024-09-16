<?php

use App\Livewire\Berita;
use App\Livewire\BeritaDetail;
use App\Livewire\DenahLokasi;
use App\Livewire\Download;
use App\Livewire\Ekstrakurikuler;
use App\Livewire\Gallery;
use App\Livewire\OrganisasiSiswa;
use App\Livewire\ProgramKeahlian;
use App\Livewire\SaranaPrasarana;
use App\Livewire\Sejarah;
use App\Livewire\StrukturOrganisasi;
use App\Livewire\TeachingFactory;
use App\Livewire\VisiMisi;
use App\Livewire\Welcome;
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

Route::get('/', Welcome::class)->name('home');

Route::get('/sejarah', Sejarah::class)->name('sejarah');

Route::get('/visi-misi', VisiMisi::class)->name('visi-misi');

Route::get('/struktur-organisasi', StrukturOrganisasi::class)->name('struktur-organisasi');
Route::get('/denah-lokasi', DenahLokasi::class)->name('denah-lokasi');
Route::get('/sarana-prasarana', SaranaPrasarana::class)->name('sarana-prasarana');
Route::get('/download', Download::class)->name('download');
Route::get('/gallery', Gallery::class)->name('gallery');
Route::get('/program-keahlian/{slug}', ProgramKeahlian::class)->name('program-keahlian');
Route::get('/ekstrakurikuler', Ekstrakurikuler::class)->name('ekstrakurikuler');
Route::get('/organisasi-siswa', OrganisasiSiswa::class)->name('organisasi-siswa');
Route::get('/teaching-factory', TeachingFactory::class)->name('teaching-factory'); 


Route::prefix('berita')->group(function(){
    Route::get('/', Berita::class)->name('berita.index');
    Route::get('/{slug}', BeritaDetail::class)->name('berita.detail');
});