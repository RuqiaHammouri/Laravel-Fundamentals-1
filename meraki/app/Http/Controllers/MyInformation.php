<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyInformation extends Controller
{
    public function index(){
        $name = 'Ruqia';
        $age = 27;
        $job = 'software developer';
        $favoriteHobbies = 'swimming';
        return view('welcome' , compact('name' , 'age' ,'job','favoriteHobbies'));
    }
 
}

// return data about you like name, age, job, hobbies, and then return all the data on a page make a blade and a router for it