
<?php

use App\Http\Controllers\IdeaController;
use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/ideas');
});

Route::get('/ideas',[IdeaController::class,'Index']);
//display a single idea;
Route::get('/ideas/{idea}', [IdeaController::class,'Create']);
//storing a new idea;
Route::post('/ideas', [IdeaController::class,'Store']);


//update and existing idea;
Route::patch('/ideas/{idea}',[IdeaController::class,'Index']);

//delete an idea moved outside the
Route::delete('/ideas/{idea}', function (idea $idea) {
    $idea->delete();
    return redirect ('/ideas');
});

   