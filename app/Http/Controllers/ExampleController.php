<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // membuat method generateKey
    public function generateKey ()
    {
        return str_random(32);
    }

    // method fooExample 
    public function fooExample(){
        return 'Example Controller from POST Request';
    }
    
}
