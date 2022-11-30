<?php

use Ebess\AdvancedNovaMediaLibrary\Http\Controllers\UploadMediaController;
use Ebess\AdvancedNovaMediaLibrary\Http\Controllers\DownloadMediaController;
use Ebess\AdvancedNovaMediaLibrary\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

Route::get('/download/{media}', [DownloadMediaController::class, 'show']);

Route::get('/media', [MediaController::class, 'index']);

Route::post('/upload', [UploadMediaController::class, 'upload']);
