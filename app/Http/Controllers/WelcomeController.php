<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
public function hello() {
    return 'Hello World';
}

// public function greeting(){
//      return view('blog.hello', {'name' => 'Alichia Putri'});
//      }
public function greeting(){ 
    return view('blog.hello')
    ->with('name','Alichia Putri')
    ->with('occupation','Astronaut');     
    } 

}
