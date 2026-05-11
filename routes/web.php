<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
  $ideas = DB::table('idea')->get();
  
  //  $ideas = session()->get('ideas', []);
  // $dd = ($ideas);
dd($ideas);
  return view('ideas',[
    'ideas'=>$ideas,
  ]);
});
Route::post('/ideas',function(){
  $idea = request('idea');
  // session()->push('ideas' ,$idea);
  // return redirect('/');
   DB::table('idea')->insert([
        'content' => $idea, // Make sure your column name matches!
        'created_at' => now(),
        'updated_at' => now(),
    ]);

});


Route::get('/delete-ideas',function(){
  session()->forget('ideas');
  return redirect('/');
});




