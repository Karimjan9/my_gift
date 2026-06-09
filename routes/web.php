<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resume/word', function () {
    $content = view('resume-word')->render();

    return response($content, 200, [
        'Content-Type' => 'application/msword; charset=UTF-8',
        'Content-Disposition' => 'attachment; filename="karim-resume.doc"',
        'Cache-Control' => 'no-store, no-cache',
    ]);
})->name('resume.word');
