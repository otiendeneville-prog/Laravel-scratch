<?php

use Illuminate\Support\Facades\Route;
use IIluminat\Support\Facades\DB;
Route::get('/ideas',function(){
  $ideas =DB::table('ideas')->get();
  
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
 session()->forget('ideas');
  return redirect('/');
});




