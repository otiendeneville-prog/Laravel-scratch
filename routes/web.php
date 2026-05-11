<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
  $idea = illuminate\support\Facades\DB::table('ideas')->get();
  //  $ideas = session()->get('ideas', []);
  // $dd = ($ideas);

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




