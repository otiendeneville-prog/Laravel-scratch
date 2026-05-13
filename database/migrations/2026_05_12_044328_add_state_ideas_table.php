<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('ideas',function(Blueprint $table){
        $table->id();
        $table->string('state');
        $table ->timestamps();
        $table->string('description');
        $table ->string('conlumn');
        });
    }


    public function down(): void
    {
         Schema::dropIfExist('Idea');
    }
};



