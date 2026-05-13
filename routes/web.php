 <?php

use App\Models\Idea;

 use Illuminate\Support\Facades\Route;


 Route::get('/ideas', function(){
        $ideas = Idea::all();
        return view('ideas',[
              'ideas' => $ideas,
        ]);
      
 });
 Route::get('/ideas/{id}', function($Id){
        $ideas = Idea::all();


        return view('ideas',[
              'ideas' => $ideas,
        ]);
      
 });

 Route::post('/ideas', function(){
       Idea::create([
         'description'=> request('ideas')
       ]);
 });
 




//  <?php

// use App\Models\Idea;
// use Illuminate\Support\Facades\Route;

// // 1. Display all ideas
// Route::get('/ideas', function () {
//     $ideas = Idea::all();
//     return view('ideas', [
//         'ideas' => $ideas,
//     ]);
// });

// // 2. Display a single specific idea
// Route::get('/ideas/{id}', function ($id) {
//     // Find the specific idea by its ID, or throw a clean 404 if it doesn't exist
//     $idea = Idea::findOrFail($id);

//     return view('idea-single', [
//         'idea' => $idea,
//     ]);
// });

// // 3. Handle the form submission to create an idea
// Route::post('/ideas', function () {
//     // Validate the incoming request data first
//     request()->validate([
//         'ideas' => 'required'
//     ]);

//     Idea::create([
//         'description' => request('ideas')
//     ]);

//     // Redirect back to the list page so the user sees the new entry
//     return redirect('/ideas');
// });
