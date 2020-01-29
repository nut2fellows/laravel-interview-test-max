<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculator;
use App\Http\Requests\CalculatorRequest;

class CalculatorController extends Controller
{
    public function add(CalculatorRequest $request)
    {
        // TODO @laravel-test
        $cal = new Calculator();

        return response(['result' => $cal->add($request->a, $request->b) ], 200)
        ->header('Content-Type', 'text/json');
    }


    public function sub(CalculatorRequest $request)
    {
        // TODO @laravel-test
        $cal = new Calculator();

        return response(['result' => $cal->subtract($request->a, $request->b) ], 200)
        ->header('Content-Type', 'text/json');
    }

    public function mul(CalculatorRequest $request)
    {
        // TODO @laravel-test
        $cal = new Calculator();

        return response(['result' => $cal->multiply($request->a, $request->b) ], 200)
        ->header('Content-Type', 'text/json');
    }


    public function div(CalculatorRequest $request)
    {
        // TODO @laravel-test
        $cal = new Calculator();

        return response(['result' => $cal->divide($request->a, $request->b) ], 200)
        ->header('Content-Type', 'text/json');
    }



    public function mod(CalculatorRequest $request)
    {
        // TODO @laravel-test
        $cal = new Calculator();

        return response(['result' => $cal->modulo($request->a, $request->b) ], 200)
        ->header('Content-Type', 'text/json');
    }
}
