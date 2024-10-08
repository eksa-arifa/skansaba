<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
use App\Livewire\Admin\Auth\Login;
use App\Livewire\Admin\CRUD\Berita\BeritaCreate;
use App\Livewire\Admin\CRUD\Berita\BeritaEdit;
use App\Livewire\Admin\CRUD\Berita\BeritaShow;
use App\Livewire\Admin\CRUD\Major\MajorCreate;
use App\Livewire\Admin\CRUD\Major\MajorEdit;
use App\Livewire\Admin\CRUD\Major\MajorShow;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Settings;
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
Route::get('/program-keahlian/{slug}', ProgramKeahlian::class)->name('program-keahlian');
Route::get('/ekstrakurikuler', Ekstrakurikuler::class)->name('ekstrakurikuler');
Route::get('/organisasi-siswa', OrganisasiSiswa::class)->name('organisasi-siswa');
Route::get('/teaching-factory', TeachingFactory::class)->name('teaching-factory'); 


Route::prefix('berita')->group(function(){
    Route::get('/', Berita::class)->name('berita.index');
    Route::get('/{slug}', BeritaDetail::class)->name('berita.detail');
});




Route::prefix('admin')->group(function(){
    Route::middleware('auth')->group(function(){
        Route::get('/', Dashboard::class)->name('admin.dashboard');
        Route::get('/settings', Settings::class)->name('admin.settings');

        Route::prefix('berita')->group(function(){
            Route::get('/', BeritaShow::class)->name('admin.berita');
            Route::get('/create', BeritaCreate::class)->name('admin.berita.create');
            Route::post('/create', [AdminController::class, 'beritaCreate'])->name('admin.berita.create.post');
            Route::get('/edit/{id}', BeritaEdit::class)->name('admin.berita.edit');
            Route::put('/edit/{id}', [AdminController::class,'beritaUpdate'])->name('admin.berita.update.put');
        });

        Route::prefix('major')->group(function(){
            Route::get('/', MajorShow::class)->name('admin.major');
            Route::get('/create', MajorCreate::class)->name('admin.major.create');
            Route::post('/create', [AdminController::class, 'majorCreate'])->name('admin.major.create.post');
            Route::get('/edit/{id}', MajorEdit::class)->name('admin.major.edit');
            Route::put('/edit/{id}', [AdminController::class,'majorUpdate'])->name('admin.major.update.put');
        });
        
    });
    Route::middleware('no-auth')->group(function(){
        Route::get('/login', Login::class)->name('login');
    });
});

