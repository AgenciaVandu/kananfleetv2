<?php

use App\Charts\ReferencesChart;
use App\Http\Controllers\Admin\PageController;
use App\Http\Livewire\Admin\Clients;
use App\Http\Livewire\Admin\Curriencies;
use App\Http\Livewire\Admin\Users;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'verified','role:superadmin|admin|editor'])->get('/', function (ReferencesChart $chart) {
    /* if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('editor')) {
        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('editor')) {
            return view('dashboard', ['chart' => $chart->build()]);
        }else{
            return redirect()->route('pages.index');
        }
    }else{
        return redirect()->route('index');
    } */
    return view('dashboard', ['chart' => $chart->build()]);

})->name('dashboard');

Route::get('/pages',[PageController::class,'index'])->name('pages.index');
Route::middleware(['role:superadmin|admin'])->get('/clients',Clients::class)->name('clients');
Route::middleware(['role:superadmin|admin'])->get('/currencies',Curriencies::class)->name('curriencies');
Route::middleware(['role:superadmin|admin'])->get('/users',Users::class)->name('users');
