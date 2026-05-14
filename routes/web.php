
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
Route::patch('/ideas/{idea}', function (Idea $idea) {
    dd($idea);
      return view('ideas', [
        'idea' => $idea,
    ]);
});

Route::post('/ideas', function () {
    request()->validate([
        'ideas' => 'required'
    ]);

    Idea::truncate();

    Idea::create([
        'description' => request('ideas')
    ]);

    return redirect('/ideas');
});
