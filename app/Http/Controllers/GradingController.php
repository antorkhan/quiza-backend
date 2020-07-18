<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradingController extends Controller
{
    //

    function grade(Request $request){
        foreach($request["correct_answers"] as $answer)
        echo($answer);
        return $request["correct_answers"];
    }
}
