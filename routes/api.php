<?php

use Illuminate\Http\Request;
use App\Article;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('articles', function(){
    return Article::all();
});

Route::get('articles/{id}', function(){
    return Article::find($id);
});

Route::post('articles', function(Request $request){
    Article::create($request->all);
});

Route::put('article/{id}', function(Request $request, $id){
    $article = Article::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('article/{id}', function($id){
    Article::find($id)->delete();

    return 204;
});