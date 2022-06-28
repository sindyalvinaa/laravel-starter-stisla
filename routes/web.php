<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\Menu\MenuGroupController;
use App\Http\Controllers\Menu\MenuItemController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DatadiriController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\KategoriUserController;
use App\Http\Controllers\PerkaraController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\GalleryPerdataController;
use App\Http\Controllers\GalleryPidanaController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\RoleAndPermission\AssignPermissionController;
use App\Http\Controllers\RoleAndPermission\AssignUserToRoleController;
use App\Http\Controllers\RoleAndPermission\ExportPermissionController;
use App\Http\Controllers\RoleAndPermission\ExportRoleController;
use App\Http\Controllers\RoleAndPermission\ImportPermissionController;
use App\Http\Controllers\RoleAndPermission\ImportRoleController;
use App\Http\Controllers\RoleAndPermission\PermissionController;
use App\Http\Controllers\RoleAndPermission\RoleController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Pengacara;
use App\Models\Kategori;
use App\Models\Datadiri;
use App\Models\Konsultasi;
use App\Models\Perizinan;
use App\Models\Kontrak;
use App\Models\Perkara;
use App\Models\Buku;
use App\Models\Webinar;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;

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
    return view('user.index');
});

Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/dashboard', function () {
        return auth()->user()->hasRole('super-admin')?view('home', ['users' => User::get(),])
        :(auth()->user()->hasRole('user')?view ('user.index' ):back()) ;
    });
    //user list

    Route::prefix('user-management')->group(function () {
        Route::resource('user', UserController::class);
        Route::post('import', [UserController::class, 'import'])->name('user.import');
        Route::get('export', [UserController::class, 'export'])->name('user.export');
        Route::get('demo', DemoController::class)->name('user.demo');
    });

    Route::prefix('menu-management')->group(function () {
        Route::resource('menu-group', MenuGroupController::class);
        Route::resource('menu-item', MenuItemController::class);
    });
    Route::group(['prefix' => 'role-and-permission'], function () {
        //role
        Route::resource('role', RoleController::class);
        Route::get('role/export', ExportRoleController::class)->name('role.export');
        Route::post('role/import', ImportRoleController::class)->name('role.import');

        //permission
        Route::resource('permission', PermissionController::class);
        Route::get('permission/export', ExportPermissionController::class)->name('permission.export');
        Route::post('permission/import', ImportPermissionController::class)->name('permission.import');

        //assign permission
        Route::get('assign', [AssignPermissionController::class, 'index'])->name('assign.index');
        Route::get('assign/create', [AssignPermissionController::class, 'create'])->name('assign.create');
        Route::get('assign/{role}/edit', [AssignPermissionController::class, 'edit'])->name('assign.edit');
        Route::put('assign/{role}', [AssignPermissionController::class, 'update'])->name('assign.update');
        Route::post('assign', [AssignPermissionController::class, 'store'])->name('assign.store');

        //assign user to role
        Route::get('assign-user', [AssignUserToRoleController::class, 'index'])->name('assign.user.index');
        Route::get('assign-user/create', [AssignUserToRoleController::class, 'create'])->name('assign.user.create');
        Route::post('assign-user', [AssignUserToRoleController::class, 'store'])->name('assign.user.store');
        Route::get('assing-user/{user}/edit', [AssignUserToRoleController::class, 'edit'])->name('assign.user.edit');
        Route::put('assign-user/{user}', [AssignUserToRoleController::class, 'update'])->name('assign.user.update');
    });

        Route::prefix('Pengacara-Management')-> group(function() {
        Route::get('/pengacara',[PengacaraController::class, 'pengacara'])->name('pengacara');
        Route::get('/tambahpengacara',[PengacaraController::class, 'tambahpengacara'])->name('tambahpengacara');
        Route::post('/insertpengacara',[PengacaraController::class, 'insertpengacara'])->name('insertpengacara');
        Route::get('/tampildata/{id}',[PengacaraController::class, 'tampildata'])->name('tampildata');
        Route::post('/updatedata/{id}',[PengacaraController::class, 'updatedata'])->name('updatedata');
        Route::get('/delete/{id}',[PengacaraController::class, 'delete'])->name('delete');
        Route::get('/detail/{id}',[PengacaraController::class, 'detail'])->name('detail');
        });

    Route::prefix('Kategori-Management')-> group(function() {
        Route::get('/kategori',[KategoriController::class, 'index'])->name('kategori');
        Route::get('/tambahKategori',[KategoriController::class, 'tambahKategori'])->name('tambahKategori');
        Route::get('/tampilKategori/{id}',[KategoriController::class, 'tampilKategori'])->name('tampilKategori');
        Route::post('/insertKategori',[KategoriController::class, 'insertKategori'])->name('insertKategori');
        Route::post('/updateKategori/{id}',[KategoriController::class, 'updateKategori'])->name('updateKategori');
        Route::get('/delete/{id}',[KategoriController::class, 'delete'])->name('delete');
    });

    Route::prefix('Datadiri-Management')-> group(function() {
        Route::get('/datadiri',[DatadiriController::class, 'datadiri'])->name('datadiri');
        Route::get('/tambahdatadiri',[DatadiriController::class, 'tambahdatadiri'])->name('tambahdatadiri');
        Route::post('/insertdatadiri',[DatadiriController::class, 'insertdatadiri'])->name('insertdatadiri');
        Route::get('/tampildata/{id}',[DatadiriController::class, 'tampildata'])->name('tampildata');
        Route::post('/updatedata/{id}',[DatadiriController::class, 'updatedata'])->name('updatedata');
        Route::get('/delete/{id}',[DatadiriController::class, 'delete'])->name('delete');
        });

        Route::prefix('Konsultasi-Management')-> group(function() {
            Route::get('/konsultasi',[KonsultasiController::class, 'konsultasi'])->name('konsultasi');
            Route::get('/tambahkonsultasi',[KonsultasiController::class, 'tambahkonsultasi'])->name('tambahkonsultasi');
            Route::post('/insertkonsultasi',[KonsultasiController::class, 'insertkonsultasi'])->name('insertkonsultasi');
            Route::get('/tampildata/{id}',[KonsultasiController::class, 'tampildata'])->name('tampildata');
            Route::post('/updatedata/{id}',[KonsultasiController::class, 'updatedata'])->name('updatedata');
            Route::get('/delete/{id}',[KonsultasiController::class, 'delete'])->name('delete');
            });

            Route::prefix('Perizinan-Management')-> group(function() {
                Route::get('/perizinan',[PerizinanController::class, 'perizinan'])->name('perizinan');
                Route::get('/tambahperizinan',[PerizinanController::class, 'tambahperizinan'])->name('tambahperizinan');
                Route::post('/insertperizinan',[PerizinanController::class, 'insertperizinan'])->name('insertperizinan');
                Route::get('/tampildata/{id}',[PerizinanController::class, 'tampildata'])->name('tampildata');
                Route::post('/updatedata/{id}',[PerizinanController::class, 'updatedata'])->name('updatedata');
                Route::get('/delete/{id}',[PerizinanController::class, 'delete'])->name('delete');
                });

                Route::prefix('Kontrak-Management')-> group(function() {
                    Route::get('/kontrak',[KontrakController::class, 'kontrak'])->name('kontrak');
                    Route::get('/tambahkontrak',[KontrakController::class, 'tambahkontrak'])->name('tambahkontrak');
                    Route::post('/insertkontrak',[KontrakController::class, 'insertkontrak'])->name('insertkontrak');
                    Route::get('/tampildata/{id}',[KontrakController::class, 'tampildata'])->name('tampildata');
                    Route::post('/updatedata/{id}',[KontrakController::class, 'updatedata'])->name('updatedata');
                    Route::get('/delete/{id}',[KontrakController::class, 'delete'])->name('delete');
                    });

                    Route::prefix('Buku-Management')-> group(function() {
                        Route::get('/buku',[BukuController::class, 'buku'])->name('buku');
                        Route::get('/tambahbuku',[BukuController::class, 'tambahbuku'])->name('tambahbuku');
                        Route::post('/insertbuku',[BukuController::class, 'insertbuku'])->name('insertbuku');
                        Route::get('/tampildata/{id}',[BukuController::class, 'tampildata'])->name('tampildata');
                        Route::post('/updatedata/{id}',[BukuController::class, 'updatedata'])->name('updatedata');
                        Route::get('/delete/{id}',[BukuController::class, 'delete'])->name('delete');
                        });

    Route::get('/dashboardUser',function(){
        return view('user.index');
    });
    Route::get('/kategoriUser',[KategoriUserController::class, 'index'])->name('kategoriUser');
    Route::get('/galleryPidana',[GalleryPidanaController::class, 'index'])->name('galleryPidana');
    Route::get('/galleryPerdata',[GalleryPerdataController::class, 'index'])->name('galleryPerdata');

    Route::get('/perkara',[PerkaraController::class, 'perkara'])->name('perkara');
    Route::get('/webinar',[WebinarController::class, 'webinar'])->name('webinar');
});
