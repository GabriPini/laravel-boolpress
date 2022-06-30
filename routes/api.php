<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


/* TUTTI I POST CON RESPONSE JSON PERSONALIZZABILE */
/* Route::get('posts', function(){

    $posts = Post::all();

    return response()->json([

        'status_code' =>  200,
        'posts' => $posts,
        'name'=> 'Gabriele'
    ]);

}); */

// Scorciatoia risultati non personalizzati
/* Route::get('posts', function(){

    $posts = Post::all();

    return $posts;

});
 */

 //Scorciatoia con inpaginazione
/*
Route::get('posts', function(){

    $posts = Post::paginate();//passando un numero nelle parentesi mostra setta il numero di elementi per pagina

    return $posts;

}); */

/* Scorciatoia con relazioni  */
/* Route::get('posts', function(){

    $posts = Post::with(['tags','category','user'])->get();

    return $posts;

}); */
//SCORCIATOIA CON RELAZIONI PIU PAGINAZIONE
Route::get('posts', 'API\PostController@index');
Route::get('posts/{post:slug}', 'API\PostController@show');
Route::get('categories','API\CategoryController@index');
Route::get('tags','API\TagController@index');



