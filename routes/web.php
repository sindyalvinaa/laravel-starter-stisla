<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\Menu\MenuGroupController;
use App\Http\Controllers\Menu\MenuItemController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KategoriUserController;
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
    return view('auth/login');
});

Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/dashboard', function () {
        return view('home', ['users' => User::get(),]);
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
    Route::get('/dashboardUser',function(){
        return view('user.index');
    });
    Route::get('/kategoriUser',[KategoriUserController::class, 'index'])->name('kategoriUser');

});
