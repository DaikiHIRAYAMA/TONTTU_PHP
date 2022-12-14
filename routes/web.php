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
Route::get('/phpinfo', function () {
    phpinfo();
});

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
])->name('logs');
Route::get('timer/sauna_start',[TimerController::class,'create'
]);
Route::post('timer/sauna_start',[TimerController::class,'sauna_start'
])->name('sauna_start');

Route::get('timer/{id}/sauna_end',[TimerController::class,'sauna_end'
])->name('sauna_end');

Route::get('timer/{id}/update1',[TimerController::class,'update1'
])->name('update1');
Route::patch('timer/{id}/update1',[TimerController::class,'update1'
])->name('update1');

Route::get('timer/{id}/water_start',[TimerController::class,'water_start'
])->name('water_start');
Route::get('timer/{id}/water_end',[TimerController::class,'water_end'
])->name('water_end');

Route::get('timer/{id}/update2',[TimerController::class,'update2'
])->name('update2');
Route::patch('timer/{id}/update2',[TimerController::class,'update2'
])->name('update2');

Route::get('timer/{id}/outside_start',[TimerController::class,'outside_start'
])->name('outside_start');
Route::get('timer/{id}/outside_end',[TimerController::class,'outside_end'
])->name('outside_end');

Route::get('timer/{id}/update3',[TimerController::class,'update3'
])->name('update3');
Route::patch('timer/{id}/update3',[TimerController::class,'update3'
])->name('update3');

//Route::post('timer/sauna_start',[TimerController::class,'sauna_start'])->name('sauna_start');


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

Route::get('/destroy{id}',[TimerController::class, 'destroy'])->name('timer.destroy');
Route::post('/destroy{id}',[TimerController::class, 'destroy'])->name('timer.destroy');


