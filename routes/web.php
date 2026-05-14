
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

Route::get('/ideas/{idea}', function (Idea $idea) {
    dd($idea);
      return view('ideas', [
        'idea' => $idea,
    ]);
});
Route::get('/ideas/create', function (Idea $idea) {
    $idea->update([
        $idea => request('idea'),
    ]);
    return redirect("/ideas/{$idea->id}");
});
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        $idea => request('idea'),
    ]);
    return redirect("/ideas/{$idea->id}");
});

Route::post('/ideas', function () {
    request()->validate([
        'ideas' => 'required'
    ]);

Route::delete('/ideas/{idea}', function (idea $idea) {
    $idea->delete();
    return redirect ('/ideas');
});

    Idea::truncate();

    Idea::create([
        'description' => request('ideas')
    ]);

    return redirect('/ideas');
});
