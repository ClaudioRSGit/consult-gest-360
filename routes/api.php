<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConsultancyController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TechnicalProjectController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ServiceReviewController;

// Rotas de autenticação
// Route::post('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/user', [AuthController::class, 'user']);

// Rotas de recursos da API
Route::middleware('auth:sanctum')->apiResource('users', UserController::class);
Route::middleware('auth:sanctum')->apiResource('clients', ClientController::class);
Route::middleware('auth:sanctum')->apiResource('consultancies', ConsultancyController::class);
Route::middleware('auth:sanctum')->apiResource('trainings', TrainingController::class);
Route::middleware('auth:sanctum')->apiResource('technical-projects', TechnicalProjectController::class);
Route::middleware('auth:sanctum')->apiResource('activities', ActivityController::class);
Route::middleware('auth:sanctum')->apiResource('payments', PaymentController::class);
Route::middleware('auth:sanctum')->apiResource('invoices', InvoiceController::class);
Route::middleware('auth:sanctum')->apiResource('service-reviews', ServiceReviewController::class);
