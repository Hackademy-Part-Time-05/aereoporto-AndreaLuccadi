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

const FLIGHT = [ 
    [
        'id' => 1,
        'destination' => 'Torino',
        'time' => [ 
            'departure' => '11:30',
            'arrival' => '15:00',
        ],
        'color' => 'red',
        'cover' => "https://wizzair.com/static/images/default-source/banner-images/tlv.tmb-width500_857ef0d9.jpg"
    ],
    [
        'id' => 2,
        'destination' => 'Basilea',
        'time' => [ 
            'departure' => '09:30',
            'arrival' => '11:00',
        ],
        'color' => 'green',
        'cover' => "https://wizzair.com/static/images/default-source/banner-images/tlv.tmb-width500_857ef0d9.jpg"
    ],
    [
        'id' => 3,
        'destination' => 'Napoli',
        'time' => [ 
            'departure' => '17:30',
            'arrival' => '19:00',
        ],
        'color' => 'blue',
        'cover' => "https://wizzair.com/static/images/default-source/banner-images/tlv.tmb-width500_857ef0d9.jpg"
    ], 
    [
        'id' => 4,
        'destination' => 'Basilea',
        'time' => [ 
            'departure' => '19:30',
            'arrival' => '23:00',
        ],
        'color' => 'orange',
        'cover' => "https://wizzair.com/static/images/default-source/banner-images/tlv.tmb-width500_857ef0d9.jpg"
    ],
    ];


Route::get('/', function () {

    return view('index', ['voli'=>FLIGHT]);
})->name('index');

Route::get('/dettagli-volo/{id}', function ($id) {

            foreach (FLIGHT as $flight){
                if($flight['id']==$id){
                    return view('show', ['volo'=> $flight]);
                }
            }
            abort(404);
})->name('show');

