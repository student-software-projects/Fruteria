<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class LandingController extends Controller
{
    public function index(){
        return view('Landing.index');
    }
    public function acerca(){
        return view('Landing.acerca');
    }
    public function domicilios(){
        return view('Landing.domicilios');
    }
}
