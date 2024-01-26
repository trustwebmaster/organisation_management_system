<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::controller(MemberController::class)->group(function () {
        Route::prefix('member/management')->group(function () {
            Route::get('/register' ,  'registerMember')->name('memberManagement.register');
            Route::post('/register' ,  'storeMember')->name('memberManagement.store');
            Route::get('/members' ,  'viewMembers')->name('memberManagement.members');
            Route::get('/view/{member}' ,  'showMember')->name('memberManagement.view');
            Route::get('/edit/{member}' ,  'editMember')->name('memberManagement.edit');
            Route::patch('/edit/{member}' ,  'updateMember')->name('memberManagement.update');
            Route::get('/delete/{member}' ,  'deleteMember')->name('memberManagement.delete');
        });
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
