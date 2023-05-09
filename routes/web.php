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

    $class_number = 87;
    $welcome_message = "Benvenuti in Laravel";

    //return view('welcome', compact('class_number', 'welcome_message'));

    $data = [
        'class_number' => $class_number,
        'welcome_message' => $welcome_message,
        'teachers' => [
            'Simone',
            'Simone',
            'Daniele',
            'Thomas'
        ],
        'students' => [
            'Pippo'
        ]
    ];

    return view('welcome', $data);

})->name('home');


Route::get('chi-siamo', function () {

    return view('about', ['message' => 'Siamo la classe 87 e siamo arrivati a studiare laravel']);

})->name('about');
