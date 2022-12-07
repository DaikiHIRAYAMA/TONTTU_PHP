<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaunaController;
use App\Http\Controllers\TimerController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('adminlte', function(){
    return view('adminlte');
});
Route::get('logs',[ProfileController::class, 'log'
]);
/*
Route::get('logs', function(){
    return view('logs');
});
*/
Route::get('condition', function(){
    return view('condition');
});

Route::resource('sauna',SaunaController::class);
Route::resource('timer',TimerController::class);


Route::group(['prefix' => 'timer', 'as' => 'timer.'], function(){
    
    Route::get('/sauna_start',function(){
    return view('timer.sauna_start');
    })
    ->name('sauna_start');

    Route::get('/{id}/sauna_end',function($id){
        return view('timer/sauna_end');
    })->name('.sauna_end');

    Route::get('/{id}/water_start',function($id){
        return view('timer/water_start');
    })->name('.water_start');

    Route::get('/{id}/water_end',function($id){
        return view('timer/water_end');
    })->name('water_end');

    Route::get('/{id}/outside_start',function($id){
        return view('timer/outside_start');
    })->name('outside_start');

    Route::get('/{id}/outside_end',function($id){
        return view('timer/outside_end');
    })->name('outside_end');
});

/*    Route::group(['prefix' => 'select', 'as' => 'select.'], function(){          

        Route::get('/',function(){
            return view('timer.select');
        })->name('select');

        Route::get('/sauna_start',function(){
            return view('timer.select.sauna_start');
        })->name('select.sauna_start');

        Route::get('/sauna_end',function(){
            return view('timer.select.sauna_end');
        })->name('select.sauna_end');

        Route::get('/water_start',function(){
            return view('timer.select.water_start');
        })->name('select.water_start');

        Route::get('/water_end',function(){
            return view('timer.select.water_end');
        })->name('select.water_end');

        Route::get('/outside_start',function(){
            return view('timer.select.outside_start');
        })->name('select.outside_start');

        Route::get('/outside_end',function(){
            return view('timer.select.outside_end');
        })->name('select.outside_end'); 

    });
    */
