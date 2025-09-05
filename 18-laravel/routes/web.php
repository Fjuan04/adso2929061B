<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Pet;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PetController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('sayhello/{name}', function() {
//     return "<h1> Hello ".request()->name." ❤️ </h1>";
// });

// Route::get('pets/all', function() {
//     $pets = App\Models\Pet::all();
//     //return var_dump($pets->toArray());
//     dd($pets->toArray()); // Dump & Die
// });

// Route::get('pets/{id}', function() {
//     $pet = App\Models\Pet::find(request()->id);
//     dd($pet->toArray());
// });

// Route::get('petsview', function() {
//     $pets = App\Models\Pet::all();
//     return view('pets-view')->with('pets', $pets);
// });

// Route::get('petsview/{id}', function() {
//     $pet = App\Models\Pet::find(request()->id);
//     return view('pet-view')->with('pet', $pet);
// });


Route::get('/dashboard', function(Request $request) {
    if(Auth::user()->role == 'Admin') {
        return view('dashboard-admin');
    } else if(Auth::user()->role == 'Customer')  {
        return view('dashboard-customer');
    } else {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back()->with('error', 'Role no exist!');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'admin'], function() {
        Route::resources([
            'pets'      => PetController::class,
            'users'     => UserController::class,
            // 'adoptions' => AdoptionController::class
        ]);

        //Search
        Route::post('search/users', [UserController::class, 'search']);
        Route::post('search/pets', [PetController::class, 'search']);
        
        // PDF
        Route::get('export/users/pdf', [UserController::class, 'pdf']);
        Route::get('export/pets/pdf', [PetController::class, 'pdf']);

        // EXCEL
        Route::get('export/users/excel', [UserController::class, 'excel']);
        Route::get('export/pets/excel', [PetController::class, 'excel']);
        
        
        //import
        Route::post('import/users', [UserController::class, 'import']);
        Route::post('import/pets', [PetController::class, 'import']);

        

    });
});


require __DIR__.'/auth.php';
