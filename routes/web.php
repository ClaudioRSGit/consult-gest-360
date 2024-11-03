<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\ClientController;
// use App\Http\Controllers\ConsultancyController;
// use App\Http\Controllers\TrainingController;
// use App\Http\Controllers\TechnicalProjectController;
// use App\Http\Controllers\ActivityController;
// use App\Http\Controllers\PaymentController;
// use App\Http\Controllers\InvoiceController;
// use App\Http\Controllers\ServiceReviewController;

// Route::apiResource('users', UserController::class);
// Route::apiResource('clients', ClientController::class);
// Route::apiResource('consultancies', ConsultancyController::class);
// Route::apiResource('trainings', TrainingController::class);
// Route::apiResource('technical-projects', TechnicalProjectController::class);
// Route::apiResource('activities', ActivityController::class);
// Route::apiResource('payments', PaymentController::class);
// Route::apiResource('invoices', InvoiceController::class);
// Route::apiResource('service-reviews', ServiceReviewController::class);

Route::get('/', function () {
    return view('welcome');
});
