<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

class FormController extends Controller
{
    public function getform(){
        return view('form');
    }
    public function postform(TestRequest $request)
    {

    }
}
