<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('octane', function (Request $request) {

    $milliseconds = $request->input('sleep') ?: 0;

    usleep($milliseconds * 1000);

    return ['milliseconds' => $milliseconds];
});
