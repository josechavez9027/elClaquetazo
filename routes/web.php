<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    $path = public_path('angular/browser/index.html');
    
    if (file_exists($path)) {
        return file_get_contents($path);
    }
    
    return abort(404, 'No se encontró el build de Angular en public/angular/browser');
})->where('any', '.*');