
<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/ideas');
});

Route::get('/ideas', function () {
    $ideas =Idea::all();
   
    return view('ideas', [
        'ideas' => $ideas,
    ]);
});
//display a single idea;
Route::get('/ideas/{idea}', function (Idea $idea) {
      return view('ideas', [
        'idea' => $idea,
    ]);
});
//storing a new idea;
Route::post('/ideas', function(){
    request()->validate([
        'ideas'=>'required'
    ]);
    //to prevent sql not null error;
    Idea::create([
    'description'=>request('ideas'),
    'state'=>'pending'
]);
return redirect ('ideas');
});


//update and existing idea;
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        $idea => request('idea'),
    ]);
    return redirect("/ideas/{$idea->id}");
});

//delete an idea moved outside the post;
Route::delete('/ideas/{idea}', function (idea $idea) {
    $idea->delete();
    return redirect ('/ideas');
});

   