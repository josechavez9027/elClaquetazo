<?php

use Illuminate\Support\Facades\Route;

Route::get('/debug-angular', function () {
    $rutaAngular = public_path('angular');
    $rutaBrowser = public_path('angular/browser');
    
    return response()->json([
        'existe_carpeta_angular' => is_dir($rutaAngular),
        'archivos_en_angular' => is_dir($rutaAngular) ? scandir($rutaAngular) : 'No existe',
        'existe_carpeta_browser' => is_dir($rutaBrowser),
        'archivos_en_browser' => is_dir($rutaBrowser) ? scandir($rutaBrowser) : 'No existe'
    ]);
});