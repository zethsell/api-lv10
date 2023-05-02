<?php

use Src\Infra\Repositories\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Src\Application\Controllers\Booking\ShowBookingController;
use Src\Infra\Repositories\BookingRepository;
use Src\Main\Adapters\AdaptRoute;
use Src\Main\Factories\Application\Controllers\Booking\MakeShowBookingController;
use Src\Main\Factories\Infra\Repositories\MakeBookingRepository;
use Src\main\Routes\Teste;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});


// Route::get('testes', ShowBookingController::class);
Route::get('teste', function () {
  $repo = new BookingRepository();
  // $teste = MakeShowBookingController::make();
  return response()->json($repo->get());
});
