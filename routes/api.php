<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UEController;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("login", [ApiController::class, "login"]);



Route::group([
    "middleware" => ["auth"]
], function(){

    Route::get("refresh", [ApiController::class, "refreshToken"]);
    Route::apiResource('etudiant', EtudiantController::class)->only(['index', 'show', 'store', 'update','destroy']);
    Route::apiResource('matiere', MatiereController::class)->only(['index', 'show']);
    Route::apiResource('ue', UEController::class)->only(['index', 'show', 'store', 'update','destroy']);
    Route::apiResource('evaluation', EvaluationController::class)->only(['index', 'show', 'store', 'update','destroy']);
    Route::get("logout", [ApiController::class, "logout"]);
});
