<?php

namespace App\Controllers;
use App\Core\App;

class PagesController
{
    public function home()
    {
        check_auth();
        $questions = App::get('database')->selectAll('questions');
        
        return view('index',compact('questions'));
    }


}