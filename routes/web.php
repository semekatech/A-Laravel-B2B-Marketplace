<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Retailer\DistributorController;
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
Route::get('/loginretailer', [AuthController::class, 'retailerindex'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('loginretailer'); 
Route::get('retailers/dashboard', [AuthController::class, 'retailerdashboard'])->name('retailers/dashboard');
Route::get('registration', [AuthController::class, 'registration'])->name('registration');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

Route::get('/logindistributor', [AuthController::class, 'distributorindex'])->name('distributorlogin');
Route::post('distributor-login', [AuthController::class, 'distributorLogin'])->name('logindistributor'); 
Route::get('distributors/dashboard', [AuthController::class, 'distributordashboard'])->name('distributors/dashboard');
Route::get('/admin', [AuthController::class, 'adminindex'])->name('adminlogin');
Route::post('admin-login', [AuthController::class, 'adminLogin'])->name('loginadmin'); 
Route::get('admin/dashboard', [AuthController::class, 'admindashboard'])->name('admin/dashboard');
Route::get('logout', [AuthController::class, 'logout'])->name('logout'); 
Route::get('/retailers/products/{id}', [DistributorController::class, 'showproduct'])->name('retailers/products/show');

Route::get('/', function () {
    return view('welcome');
});
//Admin Routes
Route::group(
[
'namespace'=>'Admin',
'prefix' => 'admin'], 
function(){
 Route::resources([
 'categories'=>'CategoryController',
 'regions'=>'RegionController',
 'counties'=>'CountyController',
 'towns'=>'TownController',
 'distributors'=>'ShowDistributors',
 'retailers'=>'ShowRetailer',
  'users'=>'ShowUserController',
 ]);
});
//Retailer Routes
Route::group(
[
'namespace'=>'Retailer',
'prefix' => 'retailers'], 
function(){
 Route::resources([
 'profile'=>'ProfileController',
  'distributors'=>'DistributorController',
  'favourite'=>'FavouriteController',
   'cart'=>'CartController',
    'cashout'=>'CashController',
     'orders'=>'OrderController',
      'corders'=>'CompleteOrderController',
 ]);
});
Route::group(
  [
    'namespace'=>'Distributor',
    'prefix'=>'distributors'
  ],
  function(){
    Route::resources([
      'profile'=>'ProfileController',
      'products'=>'ProductController',
      'dorders'=>'DistributorOrders',
      'completeorders'=>'CompleteOrder',
      'fevourite'=>'FavoriteRetailerController',
    ]);                   
  });