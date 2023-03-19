<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{


    //Doc - Page 

    public function docpage()
    {
        $title = 'Wesclic | Documentation Page';

        return view('doc',compact('title'));
    }
}
