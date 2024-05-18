<?php

use App\Livewire\CreateCustomer;
use App\Livewire\Customer;
use App\Livewire\EditCustomer;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\ViewCustomer;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

Route::get('/customers', Customer::class)->name('index');

Route::get('/customers/create', CreateCustomer::class)->name('create');

Route::get('/customers/{customer}', ViewCustomer::class)->name('view');

Route::get('/customers/{customer}/edit', EditCustomer::class)->name('edit');

});

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
