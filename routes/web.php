<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    $path = public_path('angular/browser/index.html');
    
    if (File::exists($path)) {
        return file_get_contents($path);
    }
    return view('index');
    return response()->json(['error' => 'Frontend no compilado o ruta no encontrada'], 404);
})->where('any', '^(?!api).*$');