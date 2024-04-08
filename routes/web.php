<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $navlinks = ["CHARACTERS", "COMICS", "MOVIES", "TV", "GAMES", "COLLECTIBLES", "VIDEOS", "FANS", "NEWS", "SHOP"];

    $comics = config('db.comics');
    // dd($comics);

    $items = [
        ["image" => "buy-comics-digital-comics.png", "link" => "DIGITAL COMICS"],
        ["image" => "buy-comics-merchandise.png", "link" => "DC MERCHANDISE"],
        ["image" => "buy-comics-subscriptions.png", "link" => "SUBSCRIPTION"],
        ["image" => "buy-comics-shop-locator.png", "link" => "COMIC SHOP LOCATOR"],
        ["image" => "buy-dc-power-visa.svg", "link" => "DC POWER VISA"],
    ];


    return view('home', compact('navlinks', 'comics', 'items'));
})->name('home');
