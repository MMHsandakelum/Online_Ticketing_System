<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[TicketsController::class,'ticket_form']);
Route::get('search_form',[TicketsController::class,'searchView']);
Route::post('create_ticket',[TicketsController::class,'create_ticket']);
Route::post('search',[TicketsController::class,'searchByReference']);



Auth::routes(['register' => false]);
Route::middleware('auth')->group(function () {
    Route::get('pending_tickets',[TicketsController::class,'viewPendingTickets']);
    Route::get('complete_tickets',[TicketsController::class,'viewCompleteTickets']);
    Route::get('view_ticket/{id}',[TicketsController::class,'viewAndReplyTicket'])->name('ticket.view_ticket');
    Route::post('reply/{id}',[TicketsController::class,'reply']);   
        
});


Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
