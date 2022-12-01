<?php

use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Response()->json(['message' => 'ok']);
});
