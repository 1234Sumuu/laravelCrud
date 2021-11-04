<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class CustomerController extends Controller
{
    function index(){
        return view('crud.index');
    }
    function crud_save(Request $request){
        return $request ->input();
    }
}
