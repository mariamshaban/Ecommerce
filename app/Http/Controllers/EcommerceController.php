<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    //

    public function main(){
        return view('layout.main');
    }
    public function shirts(){
        return view('shirts.shirts');
    }
    public function shirt(){
        return view('shirts.shirt');
    }
}
