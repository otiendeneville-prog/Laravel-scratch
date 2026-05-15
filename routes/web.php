
<?php

use App\Http\Controllers\IdeaController;
use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/ideas');
});

Route::get('/ideas',[IdeaController::class,'Index']);
Route::get('/ideas/{idea}', [IdeaController::class,'Create']);
Route::post('/ideas', [IdeaController::class,'Store']);
Route::patch('/ideas/{idea}',[IdeaController::class,'Index']);
Route::delete('/ideas/{idea}', [IdeaController::class,'Index']);
