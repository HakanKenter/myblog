<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles/{id}/comments/{author?}', function ($id, $author = 'Nicolas') {
    return $id . " comment id : " . $author;
});

Route::prefix('admin')->group(function() {
	
	Route::get('users', function() {
		return response()->json([
            'name' => 'Hakan',
            'age' => 25
        ]);
	});

	Route::get('articles', function() {
		return 'Ma articles list';
	});	

	Route::get('categories', function() {
		return 'Ma categories list';
	});	

});

Route::get('/test/{id}', function($id) {
    return view('test', [
        'id' => $id
    ]);
});

Route::get('/view', function() {
    return view('folder.view');
});