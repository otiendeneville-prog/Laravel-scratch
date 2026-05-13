
<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

// 1. Root URL Fallback (Prevents 404 if you visit just http://127.0.0.1:8000)
Route::get('/', function () {
    return redirect('/ideas');
});

// 2. Display all ideas
Route::get('/ideas', function () {
    $ideas = Idea::all();
    
    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

// 3. Display a single specific idea (Fixed matching $id parameter variable)
Route::get('/ideas/{id}', function ($id) {
    // Looks for the specific ID or safely triggers a 404 if not found
    $idea = Idea::findOrFail($id);

    return view('ideas', [
        'idea' => $idea,
    ]);
});

// 4. Handle form submission to create an idea
Route::post('/ideas', function () {
    // Validates incoming input field named 'ideas'
    request()->validate([
        'ideas' => 'required'
    ]);

    Idea::create([
        'description' => request('ideas')
    ]);

    // Redirects back to the index view so the new entry displays immediately
    return redirect('/ideas');
});
