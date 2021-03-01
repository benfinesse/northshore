<?php


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

//Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/tester', function (){

});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/cms-admin', 'AdminController@signingin')->name('cms.signin');

Route::post('/validate-cms-admin', 'AdminController@authenticate')->name('cms.login');
Route::post('/stop-cms-admin', 'AdminController@logout')->name('cms.logout');

Route::get('/modal/productID/{pid}', 'HomeController@showmodal')->name('modal.show');

Route::group(['middleware'=>'admin'], function () {

    Route::prefix('cms')->group(function () {

        Route::get('dashboard', 'ConsoleController@dashboard')->name('cms.dashboard');

        Route::resource('mfr', 'MakerController');
        Route::resource('product', 'ProductController');
        Route::resource('category', 'CategoryController');
        Route::resource('content', 'ContentController');
        Route::resource('partner', 'PartnerController');

        Route::get('mfr/disable/{maker}', 'MakerController@disable')->name('mfr.disable');
        Route::get('mfr/enable/{maker}', 'MakerController@enable')->name('mfr.enable');

        Route::get('product/disable/{product}', 'ProductController@disable')->name('product.disable');
        Route::get('product/enable/{product}', 'ProductController@enable')->name('product.enable');

        Route::get('category/disable/{category}', 'CategoryController@disable')->name('category.disable');
        Route::get('category/enable/{category}', 'CategoryController@enable')->name('category.enable');

        Route::get('product/feature/{product}', 'ProductController@feature')->name('product.feature');
        Route::get('product/defeature/{product}', 'ProductController@defeature')->name('product.defeature');

    });
});


// find all user views below

Route::get('/product', 'HomeController@categories')->name('view.categories');
Route::get('/category/{unid}', 'HomeController@category')->name('view.category');
//Route::get('/product', 'CategoryController@index')->name('view.products');
Route::get('/products/{unid}', 'HomeController@productName')->name('view.product');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/partners', 'HomeController@partners')->name('partners');
Route::get('/topartner/{unid}', 'HomeController@topartner')->name('topartner');
Route::get('/resellers', 'HomeController@outlets')->name('resellers');
Route::get('/manufacturers', 'HomeController@mfrs')->name('mfrs');
Route::get('/skincenter', 'HomeController@skincenter')->name('skincenter');
Route::get('/makequote', 'HomeController@makequote')->name('makequote');
Route::post('/quote/store', 'HomeController@storeQuote')->name('quote.store');
Route::get('/newsletter', 'HomeController@newsLetter')->name('newsletter');

Route::get('/partner_fix', 'PartnerController@partnerFix');
Route::get('/run-migration', 'Dev\DevController@migration');






