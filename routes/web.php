<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\adminAccountController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\KursusDashController;
use App\Http\Controllers\RegisterController;
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
//User side
// Route::get('/',[UserController::class, 'home']);
// Route::get('/about',[UserController::class, 'about']);
// Route::get('/edukasibisnis',[UserController::class, 'edukasibisnis']);
// Route::get('/edubisnis-details',[UserController::class, 'edubisnisdetails']);
// Route::get('/edubisnis-details1',[UserController::class, 'edubisnisdetails1']);
// Route::get('/kursusbisnis',[UserController::class, 'kursusbisnis']);
// Route::get('/kursus-bisnis-detail',[UserController::class, 'kursusbisnisdetail']);
// Route::get('/kursus-bisnis-detail1',[UserController::class, 'kursusbisnisdetail1']);

// coba dulu:)
Route::get('/',[HomeController::class, 'home']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/cobaedukasi',[EdukasiController::class, 'edubisnis']);
Route::get('/cobadetail{data:juduldepan}',[EdukasiController::class, 'detailedu']);
Route::get('/cobakursus',[KursusController::class, 'kursusbisnis']);
Route::get('/detailkursus{data:juduldepan}',[KursusController::class, 'kursusdetail']);



//admin Account
Route::get('/login',[adminAccountController::class, 'login'])->name('login');
Route::get('/register', [adminAccountController::class, 'register'])->name('register');
Route::post('/save',[adminAccountController::class, 'save'])->name('save');
Route::post('/check',[adminAccountController::class, 'check'])->name('check');
Route::get('/logoutAdmin',[adminAccountController::class, 'logoutAdmin'])->name('logoutAdmin');


// Admin Side
Route::get('/dashboard/index',[adminController::class, 'homeadmin']);
Route::resource('/dashboard/postsedukasi', DashboardPostController::class);
Route::resource('/dashboard/postskursus', KursusDashController::class);
Route::resource('/dashboard/register', RegisterController::class);