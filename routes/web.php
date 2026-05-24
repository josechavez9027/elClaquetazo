<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    $path = public_path('angular/index.html');
    
    if (File::exists($path)) {
        return file_get_contents($path);
    }

    return response()->json(['error' => 'Frontend no compilado o ruta no encontrada'], 404);
})->where('any', '^(?!api).*$');