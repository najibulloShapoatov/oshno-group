<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[Web\IndexController::class, 'get']);

Route::get('/coorporative-clients',[Web\IndexController::class, 'coorporativeClients']);

Route::get('/register-domains',[Web\IndexController::class, 'registerDomains']);

Route::get('/ip-address',[Web\IndexController::class, 'ipAddress']);

Route::get('/hosting',[Web\IndexController::class, 'hostings']);

Route::get('/domains',[Web\IndexController::class, 'domains']);

Route::get('/master-call',[Web\IndexController::class, 'callMaster']);

Route::get('/bring-friend',[Web\IndexController::class, 'bringFriend']);

Route::post('/create-order',[Web\IndexController::class, 'order']);

Route::get('/about-us',[Web\IndexController::class, 'aboutUs']);
Route::get('/partners',[Web\IndexController::class, 'partners']);
Route::get('/vacancies',[Web\IndexController::class, 'vacancies']);
Route::get('/vacancies/{id}',[Web\IndexController::class, 'detailVacancies']);
Route::get('/slide/{id}',[Web\IndexController::class, 'detailSlide']);
Route::get('/contacts',[Web\IndexController::class, 'contacts']);


//news
Route::get('/news',[Web\NewsController::class, 'get']);
Route::get('/news/{id}',[Web\NewsController::class, 'getById']);

//products
Route::get('/internet',[Web\ProductController::class, 'getInternet']);
Route::get('/iptv',[Web\ProductController::class, 'getIptv']);
Route::get('/devices',[Web\ProductController::class, 'getDevices']);




Route::get('/admin',[Admin\HomeController::class, 'index']);

Route::get('/admin/properties',[Admin\PropertyController::class, 'index']);
Route::post('/admin/property',[Admin\PropertyController::class, 'update']);

Route::get('/admin/news',[Admin\NewsController::class, 'index']);
Route::get('/admin/news/create',[Admin\NewsController::class, 'create']);
Route::post('/admin/news/store',[Admin\NewsController::class, 'store']);
Route::get('/admin/news/edit/{id}',[Admin\NewsController::class, 'edit']);
Route::post('/admin/news/update/{id}',[Admin\NewsController::class, 'update']);
Route::get('/admin/news/destroy/{id}',[Admin\NewsController::class, 'destroy']);

Route::get('/admin/slide',[Admin\SlideController::class, 'index']);
Route::get('/admin/slide/create',[Admin\SlideController::class, 'create']);
Route::post('/admin/slide/store',[Admin\SlideController::class, 'store']);
Route::get('/admin/slide/edit/{id}',[Admin\SlideController::class, 'edit']);
Route::post('/admin/slide/update/{id}',[Admin\SlideController::class, 'update']);
Route::get('/admin/slide/destroy/{id}',[Admin\SlideController::class, 'destroy']);


Route::get('/admin/product-internet',[Admin\InternetController::class, 'index']);
Route::get('/admin/product-internet/create',[Admin\InternetController::class, 'create']);
Route::post('/admin/product-internet/store',[Admin\InternetController::class, 'store']);
Route::get('/admin/product-internet/edit/{id}',[Admin\InternetController::class, 'edit']);
Route::post('/admin/product-internet/update/{id}',[Admin\InternetController::class, 'update']);
Route::get('/admin/product-internet/destroy/{id}',[Admin\InternetController::class, 'destroy']);


Route::get('/admin/product-iptv',[Admin\IptvController::class, 'index']);
Route::get('/admin/product-iptv/create',[Admin\IptvController::class, 'create']);
Route::post('/admin/product-iptv/store',[Admin\IptvController::class, 'store']);
Route::get('/admin/product-iptv/edit/{id}',[Admin\IptvController::class, 'edit']);
Route::post('/admin/product-iptv/update/{id}',[Admin\IptvController::class, 'update']);
Route::get('/admin/product-iptv/destroy/{id}',[Admin\IptvController::class, 'destroy']);


Route::get('/admin/product-device',[Admin\DeviceController::class, 'index']);
Route::get('/admin/product-device/create',[Admin\DeviceController::class, 'create']);
Route::post('/admin/product-device/store',[Admin\DeviceController::class, 'store']);
Route::get('/admin/product-device/edit/{id}',[Admin\DeviceController::class, 'edit']);
Route::post('/admin/product-device/update/{id}',[Admin\DeviceController::class, 'update']);
Route::get('/admin/product-device/destroy/{id}',[Admin\DeviceController::class, 'destroy']);

Route::get('/admin/vacancies',[Admin\VacanciesController::class, 'index']);
Route::get('/admin/vacancies/create',[Admin\VacanciesController::class, 'create']);
Route::post('/admin/vacancies/store',[Admin\VacanciesController::class, 'store']);
Route::get('/admin/vacancies/edit/{id}',[Admin\VacanciesController::class, 'edit']);
Route::post('/admin/vacancies/update/{id}',[Admin\VacanciesController::class, 'update']);
Route::get('/admin/vacancies/destroy/{id}',[Admin\VacanciesController::class, 'destroy']);

Route::get('/admin/domains',[Admin\DomainController::class, 'index']);
Route::get('/admin/domains/create',[Admin\DomainController::class, 'create']);
Route::post('/admin/domains/store',[Admin\DomainController::class, 'store']);
Route::get('/admin/domains/edit/{id}',[Admin\DomainController::class, 'edit']);
Route::post('/admin/domains/update/{id}',[Admin\DomainController::class, 'update']);
Route::get('/admin/domains/destroy/{id}',[Admin\DomainController::class, 'destroy']);

Route::get('/admin/hostings',[Admin\HostingController::class, 'index']);
Route::get('/admin/hostings/create',[Admin\HostingController::class, 'create']);
Route::post('/admin/hostings/store',[Admin\HostingController::class, 'store']);
Route::get('/admin/hostings/edit/{id}',[Admin\HostingController::class, 'edit']);
Route::post('/admin/hostings/update/{id}',[Admin\HostingController::class, 'update']);
Route::get('/admin/hostings/destroy/{id}',[Admin\HostingController::class, 'destroy']);


Auth::routes();


