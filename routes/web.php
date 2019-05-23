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

Route::get('/', [
    "as" => 'home',
    "uses"  => 'BackOffice\HomeController@index'
]);

Route::get('/listUtilisateur', [
    "as" => 'listUtilisateur',
    "uses"  => 'BackOffice\UtilisateurController@listUtilisateur'
]);

Route::get('/add', [
    'as' => 'addUser',
    'uses' => 'BackOffice\UtilisateurController@addUser'
]);

Route::post('/valid', [
    'as' => 'validUser',
    'uses' => 'BackOffice\UtilisateurController@validUser'
]);
Route::get('/show/{id}', [
    'as' => 'showUser',
    'uses' => 'BackOffice\UtilisateurController@showUser'
]);
Route::post('/index', [
    'as' => 'index',
    'uses' => 'BackOffice\UtilisateurController@index'
]);
Route::get('/delete/{id}', [
    'as' => 'deleteUser',
    'uses' => 'BackOffice\UtilisateurController@deleteUser'
]);
Route::match(['get', 'post'], '/update/{id}', [
    'as' => 'updateUser',
    'uses' => 'BackOffice\UtilisateurController@updateUser'
]);
Route::get('/searchUsers', [
    'as' => 'searchUsers',
    'uses' => 'BackOffice\UtilisateurController@searchUsers'
]);

/********************** PARAMETRAGES ***************************/
/*Route::get('/parametre', [
    'as' => 'parametre',
    'uses' => 'BackOffice\ParametreController@moteur'
]);*/

Route::get('/parametres', [
    'as' => 'parametres',
    'uses' => 'BackOffice\ParametreController@moteur'
]);

//Route::get('parametre',\App\Http\Controllers\PostController::class . '@moteur');
Route::get('/parametreList', [
    'as' => 'parametreList',
    'uses' => 'BackOffice\ParametreController@liste'
]);

//Suppression Parametre Simple
Route::get('/parametreDelette/{id}', [
    'as' => 'parametreDelette',
    'uses' => 'BackOffice\ParametreController@suppressionParametre'
]);
//Modification Parametre Simple
Route::match(['get', 'post'], '/parametreUpdate', [
    'as' => 'parametreUpdate',
    'uses' => 'BackOffice\ParametreController@modificationParametre'
]);

Route::get('/parametreAdd', [
    'as' => 'parametreAdd',
    'uses' => 'BackOffice\ParametreController@moteurAdd'
]);

Route::match(['get', 'post'], '/parametreSave', [
    'as' => 'parametreSave',
    'uses' => 'BackOffice\ParametreController@sauvegarder'
]);

/********************** AUTHENTIFICATION ***************************/
Auth::routes();
Route::get('/home', 'BackOffice\HomeController@index')->name('home');
Auth::routes();

/********************** AUTRES ***************************/
/*Page en cours de contruction*/
Route::get('/pageencours', 'BackOffice\VideController@index');

/*Generation PDF*/

Route::get('/generateParameterPdf', [
    'as' => 'generateParameterPdf',
    'uses' => 'BackOffice\ParametreController@generateParameterPdf'
]);

/*Export excel*/
Route::get('/exportExcelParameter', [
    'as' => 'exportExcelParameter',
    'uses' => 'BackOffice\ParametreController@exportExcel'
]);

/*Clients*/
Route::get('/clientSearch', [
    'as' => 'clientSearch',
    'uses' => 'BackOffice\ClientController@moteur'
]);

Route::get('/clientList', [
    'as' => 'clientList',
    'uses' => 'BackOffice\ClientController@liste'
]);

Route::get('/clientCreate', [
    'as' => 'clientCreate',
    'uses' => 'BackOffice\ClientController@create'
]);

Route::get('/exportExcelClient', [
    'as' => 'exportExcelClient',
    'uses' => 'BackOffice\ClientController@exportExcelClient'
]);

Route::post('/validCreation', [
    'as' => 'validCreation',
    'uses' => 'BackOffice\ClientController@validCreation'
]);

Route::match(['get', 'post'], '/updateClient', [
    'as' => 'updateClient',
    'uses' => 'BackOffice\ClientController@updateClient'
]);

/*
 * Gestion Banque photos
 * */

Route::get('/gestionBanquePhotos', [
    'as' => 'gestionBanquePhotos',
    'uses' => 'BackOffice\banquePhotosController@getAllPictures'
]);
Route::get('/creationBanquePhotos', [
    'as' => 'creationBanquePhotos',
    'uses' => 'BackOffice\banquePhotosController@createPictures'
]);

Route::get('/ajaxRecherchePhotos', [
    'as' => 'ajaxRecherchePhotos',
    'uses' => 'BackOffice\banquePhotosController@ajaxRecherchePhotos'
]);

/*Route::get('/suppressionPhotos/{id}', [
    'as' => 'suppressionPhotos',
    'uses' => 'BackOffice\banquePhotosController@suppressionPhotos'
]);*/

Route::get('/suppressionPhotos', [
    'as' => 'suppressionPhotos',
    'uses' => 'BackOffice\banquePhotosController@suppressionPhotos'
]);

Route::match(['get', 'post'], '/updloadPhoto', [
    'as' => 'updloadPhoto',
    'uses' => 'BackOffice\banquePhotosController@updloadPhoto'
]);

Route::match(['get', 'post'], '/updatePhoto', [
    'as' => 'updatePhoto',
    'uses' => 'BackOffice\banquePhotosController@updatePhoto'
]);

Route::match(['get', 'post'], '/test', [
    'as' => 'test',
    'uses' => 'BackOffice\banquePhotosController@test'
]);

Route::match(['get', 'post'], '/liste', [
    'as' => 'liste',
    'uses' => 'BackOffice\banquePhotosController@liste'
]);

Route::get('/post', [
    'as' => 'post',
    'uses' => 'Rest\PostController@index'
]);

Route::match(['get', 'post'], '/editPost/{id}', [
    'as' => 'editPost',
    'uses' => 'Rest\PostController@edit'
]);

Route::get('/listProduits', [
   'as' => 'listProduits',
    'uses' => 'BackOffice\ProduitController@index'
]);

Route::get('/productCreate', [
    'as' => 'productCreate',
    'uses' => 'BackOffice\ProduitController@create'
]);

Route::post('/validProduct', [
    'as' => 'validProduct',
    'uses' => 'BackOffice\ProduitController@validProduct'
]);

Route::match(['get', 'post'], '/getProductById/{id}', [
    'as' => 'getProductById',
    'uses' => 'BackOffice\ProduitController@getProductById'
]);

Route::get('/deteleProductById/{id}', [
    'as' => 'deteleProductById',
    'uses' => 'BackOffice\ProduitController@deteleProductById'
]);

Route::match(['get', 'post'], '/updateProduct/{id}', [
    'as' => 'updateProduct',
    'uses' => 'BackOffice\ProduitController@updateProduct'
]);



