<?php

use Illuminate\Support\Facades\Route;

// Route::get('/{any}', function () {
//     $path = public_path('angular/browser/index.html');
//     if (file_exists($path)) {
//         return file_get_contents($path);
//     }
//     return abort(404);
// })->where('any', '^(?!api).*$');

Route::get('/{any}', function () {
    return response(
        file_get_contents(public_path('angular/browser/index.html')), 200
    )->header('Content-Type', 'text/html');
})->where('any', '^(?!api)(?!.*\.(js|css|ico|png|jpg|svg|woff|woff2|ttf|json|map)).*$');