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
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    $data = [
        'comics' => $comics,
        'nav_links' => $nav_links,
    ];
    return view('home', $data);
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    $data = [
        'comics' => $comics,
        'nav_links' => $nav_links,
    ];
    return view('comics.index', $data);
})->name('comics');

Route::get('comics/{id}',function ($id){
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    if(is_numeric($id) && $id < count($comics) && $id >= 0) {
       
        $data = [

            $comic = $comics[$id],
            'nav_links' => $nav_links
        ];
        return view('comics.show', compact('comic'), $data); 
    }
    else {
        abort(404);
    }
})->name('comic');

Route::get('/characters', function () {
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    $data = [
        'comics' => $comics,
        'nav_links' => $nav_links,
    ];
    return view('characters', $data);
})->name('characters');

Route::get('/movies', function () {
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    $data = [
        'comics' => $comics,
        'nav_links' => $nav_links,
    ];
    return view('movies', $data);
})->name('movies');

Route::get('/tv', function () {
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    $data = [
        'comics' => $comics,
        'nav_links' => $nav_links,
    ];
    return view('tv', $data);
})->name('tv');

Route::get('/games', function () {
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    $data = [
        'comics' => $comics,
        'nav_links' => $nav_links,
    ];
    return view('games', $data);
})->name('games');

Route::get('/collectibles', function () {
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    $data = [
        'comics' => $comics,
        'nav_links' => $nav_links,
    ];
    return view('collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    $data = [
        'comics' => $comics,
        'nav_links' => $nav_links,
    ];
    return view('videos', $data);
})->name('videos');

Route::get('/fans', function () {
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    $data = [
        'comics' => $comics,
        'nav_links' => $nav_links,
    ];
    return view('fans', $data);
})->name('fans');

Route::get('/news', function () {
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    $data = [
        'comics' => $comics,
        'nav_links' => $nav_links,
    ];
    return view('news', $data);
})->name('news');

Route::get('/shop', function () {
    $comics = config('comics.data');
    
    $nav_links = config('comics.nav_links');
    $data = [
        'comics' => $comics,
        'nav_links' => $nav_links,
    ];
    return view('shop', $data);
})->name('shop');