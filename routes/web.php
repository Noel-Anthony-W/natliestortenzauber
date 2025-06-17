<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $reviews = [
        [
            'stars' => 4,
            'name' => 'Max Mustermann',
            'heading' => 'Tolle Torte!',
            'text' => 'Mega leckere Torte, die mit viel Liebe gebacken wurde.',
            'image_url' => 'https://via.placeholder.com/150'
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
    return view('home', compact('reviews'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');
