<?php

use App\idea;
 use Illuminaate\Support\Facades\Route;


 Route::get('/ideas', function(){
        $ideas = idea::all();
        return view('ideas',[
              'ideas' => $ideas,
        ]);
      
 });
 Route::get('/ideas/{id}', function(){
        $ideas = idea::all();


        return view('ideas',[
              'ideas' => $ideas,
        ]);
      
 });

 Route::post('/ideas', function(){
       Ideas:create([
         'description'=> request('ideas')
       ]
 );





