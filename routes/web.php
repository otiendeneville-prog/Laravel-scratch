
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

Route::get('/ideas/{id}', function ($id) {
    dd($id);
    $idea = Idea::findOrFail($id);

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
