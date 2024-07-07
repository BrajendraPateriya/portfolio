<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PortfolioController::class, 'Home']);
Route::get('/about', [PortfolioController::class, 'About']);
Route::get('/project', [PortfolioController::class, 'Project']);
Route::get('/stack', [PortfolioController::class, 'Stack']);
Route::get('/contact', [PortfolioController::class, 'Contact']);