<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('octane', function (Request $request) {
    $ms = $request->input('sleep') ?: 0;
    usleep($ms * 1000);
    return ['foo' => 'bar'];
});
