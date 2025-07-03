<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PictureController;
use App\PictureProperties;
use Illuminate\Database\Eloquent\Collection;

Route::get('/', function () {

    $reviews = [
        [
            'stars' => 4,
            'name' => 'Max Mustermann',
            'heading' => 'Tolle Torte!',
            'text' => 'Mega leckere Torte, die mit viel Liebe gebacken wurde.',
            'image_url' => "https://via.placeholder.com/150"
        ],
        [
            'stars' => 5,
            'name' => 'Herbert Mustermann',
            'heading' => 'Super Leckere Torte!',
            'text' => 'Mega leckere Torte, die mit viel Liebe gebacken wurde.',
            'image_url' => 'https://via.placeholder.com/150'
        ],
        [
            'stars' => 5,
            'name' => 'Siglinde Mustermann',
            'heading' => 'Mega Torte!',
            'text' => 'Mega leckere Torte, die mit viel Liebe gebacken wurde.',
            'image_url' => 'https://via.placeholder.com/150'
        ]
    ];

    $pictures = PictureController::index(); 

    return view('home', compact(['reviews', 'pictures']));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'sendEmail'])->name('contact.submit');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

Route::get('/test', function (){

    $messageInformation = [
        'name' => 'Anthony',
        'email' => 'hello@world.com',
        'content' => 'new World Status',
        ];

    return view('emails.contact', $messageInformation);
});