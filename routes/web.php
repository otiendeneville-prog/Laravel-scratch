<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;
Route::get('/ideas',function(){
  // $ideas =DB::table('ideas')->get();

  $ideas = idea::find(1);
  return $ideas;
  
// dd($ideas);
  return view('ideas',[
    'ideas'=>$ideas,
  ]);
});
Route::post('/ideas',function(){
  $idea = request('idea');

  session()->push('ideas' ,$idea);
  return redirect('/');
});


Route::get('/delete-ideas',function(){
 session()->forget('ideas');
  return redirect('/');
});




