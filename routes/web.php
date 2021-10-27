<?php

use Illuminate\Support\Facades\Route;




Route::post('/task' ,function(){
  $name = request('name');
  return view('about' , compact('name'));
});

