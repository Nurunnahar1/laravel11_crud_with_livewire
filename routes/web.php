<?php

use App\Livewire\Register;
use App\Livewire\Customers;
use App\Livewire\EditCustomer;
use App\Livewire\ViewCustomer;
use App\Livewire\CreateCustomer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    //user crud routes
    Route::get('customers/create', CreateCustomer::class);
    Route::get('customers', Customers::class);
    Route::get('customers/view/{id}', ViewCustomer::class);
    Route::get('customers/edit/{id}', EditCustomer::class);
});



//user registration routes
Route::get('register', Register::class);
