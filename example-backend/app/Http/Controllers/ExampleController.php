<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v7;

class ExampleController extends Controller
{
    // public $user ='user';
    public function firstfun(){
        $user ='user';
        return $user;
    }

    public function getitem(){
        $number1=5;
        $number2=4;
        $sum = $number1+$number2;

        return $sum;
    }

    public function getSumWithPayLoad(Request $request){

         //programme eka nawatinawa
        // dd($request['number1']);

        //object ekak athule parameters tiyenne
        $data=$request->validate([

            'number1'=>'required',
            'number2'=>'required',

        ]);

        //obeject ekaka tiyana parameeters access karanne me widiayata
        $number1 = $data['number1'];

        $number2 = $data['number2'];
        // dd($number1 + $number2);
        return $number1 + $number2;
    }
}
