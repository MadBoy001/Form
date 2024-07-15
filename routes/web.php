<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KYCFormController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/', [KYCFormController::class, 'personalInformation'])->name('personal-information');
Route::post('/', [KYCFormController::class, 'personalInformationStore'])->name('personal-information-store');

Route::get('/family', [KYCFormController::class, 'family'])->name('family');
Route::post('/family', [KYCFormController::class, 'familyStore'])->name('family-store');

Route::get('/address', [KYCFormController::class, 'address'])->name('address');
Route::post('/address', [KYCFormController::class, 'addressStore'])->name('address-store');

Route::get('/occupation', [KYCFormController::class, 'occupation'])->name('occupation');
Route::post('/occupation', [KYCFormController::class, 'occupationStore'])->name('occupation-store');

Route::get('/bank', [KYCFormController::class, 'bank'])->name('bank');
Route::post('/bank', [KYCFormController::class, 'bankStore'])->name('bank-store');

Route::get('/pep', [KYCFormController::class, 'pep'])->name('pep');
Route::post('/pep', [KYCFormController::class, 'pepStore'])->name('pep-store');

Route::get('/terms', [KYCFormController::class, 'terms'])->name('terms');
Route::post('/terms', [KYCFormController::class, 'termsStore'])->name('terms-store');

Route::get('/document', [KYCFormController::class, 'refer'])->name('refer');
Route::post('/document', [KYCFormController::class, 'referStore'])->name('refer-store');

Route::get('/refer', [KYCFormController::class, 'refer'])->name('document');
Route::post('/refer', [KYCFormController::class, 'documentStore'])->name('document-store');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/users/{id}', [AdminController::class, 'view'])->name('users-view');
});



// Route::get('/users', [KYCFormController::class, 'data'])->name('users');
// Route::get('/users/{id}', [KYCFormController::class, 'view'])->name('users-view');

