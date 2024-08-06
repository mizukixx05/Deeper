<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;


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
require __DIR__.'/auth.php';
Route::get('/', function () {
    return redirect('/login');
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/music', [MusicController::class, 'index'])->name('music.index');
    Route::get('/music/{id}', [MusicController::class, 'show'])->name('music.show');
    
    Route::get('/music/create', [MusicController::class, 'create'])->name('music.create');
    Route::post('/music', [MusicController::class, 'store'])->name('music.store');
    
    Route::get('/music/{id}/edit', [MusicController::class, 'edit'])->name('music.edit');
    Route::put('/music/{id}', [MusicController::class, 'update'])->name('music.update');
    
    Route::delete('/music/{id}', [MusicController::class, 'destroy'])->name('music.destroy');
 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    
});
    

    
/*    // 以降のルーティングはこの下に書いていく 
Route::get('/music', [MusicController::class, 'index'])->name('music.index');
Route::get('/music/create', [MusicContoroller::class, 'create'])->name('music.create');    
    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
require __DIR__.'/auth.php';
*/

