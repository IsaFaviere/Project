use App\Http\Controllers\BookController;
use App\Http\Controllers\StoreController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('books', BookController::class);
    Route::apiResource('stores', StoreController::class);
});

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


//use
php artisan make:controller BookController --api
//use
php artisan make:controller StoreController --api
