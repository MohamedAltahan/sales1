<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Admin_panel_settingsController;

/*--------------------------------------------------------------------------
|                                   Admin Routes
|--------------------------------------------------------------------------*/

//================================login routes======================================

//==============================dashboard routed=====================================
Route::group( ['namespace' => 'Admin','prefix'=>'/admin','middleware'=>'auth:admin'] ,function () {

    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('logout',[LoginController::class,'logout'])->name('admin.logout');
    Route::get('adminpanelsetting/index',[Admin_panel_settingsController::class,'index'])->name('admin.adminpanelsetting.index');

});


//group > means obay to some conditions which are between []
Route::group( ['namespace' => 'Admin','prefix'=>'/admin','middleware'=>'guest:admin'] ,function () {
    //you can make a name for your route to use it easily anywhere
    //->name('admin.showlogin') note('.' === '/') in laravel
    Route::get('login', [LoginController::class,'show_login_view'] )->name('admin.showlogin');

    // when you get request to go to login page then go to the controller which name is LoginController
    // and then excute login function
    Route::post('login',[LoginController::class,'login'])->name('admin.login');


});




