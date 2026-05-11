<?php

use Illuminate\Support\Facades\Route;

Route::get('/ideas',function(){
  $ideas =idea::all();
  
  //  $ideas = session()->get('ideas', []);
  // $dd = ($ideas);
dd($ideas);
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
  idea :: truncate();
  return redirect('/');
});




