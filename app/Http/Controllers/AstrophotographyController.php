<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AstrophotographyController extends Controller
{

    public function index(){

    }

    public function create(){
        return view('Astrophotography.create');
    }
}
