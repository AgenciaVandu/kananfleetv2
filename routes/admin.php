<?php

use App\Charts\ReferencesChart;
use App\Http\Controllers\Admin\PageController;
use App\Http\Livewire\Admin\Clients;
use App\Http\Livewire\Admin\Curriencies;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\Users;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'verified','role:superadmin|admin|editor'])->get('/', DashboardComponent::class)->name('dashboard');

Route::get('/pages',[PageController::class,'index'])->name('pages.index');
Route::middleware(['role:superadmin|admin'])->get('/clients',Clients::class)->name('clients');
Route::middleware(['role:superadmin|admin'])->get('/currencies',Curriencies::class)->name('curriencies');
Route::middleware(['role:superadmin|admin'])->get('/users',Users::class)->name('users');
