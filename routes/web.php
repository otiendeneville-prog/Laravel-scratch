<?php

// use App\idea;
use App\Models\Idea;

 use Illuminate\Support\Facades\Route;


 Route::get('/ideas', function(){
        $ideas = Idea::all();
        return view('ideas',[
              'ideas' => $ideas,
        ]);
      
 });
 Route::get('/ideas/{id}', function(){
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





