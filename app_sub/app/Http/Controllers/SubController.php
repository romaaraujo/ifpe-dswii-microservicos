<?php

namespace App\Http\Controllers;

class SubController extends Controller
{
    public function index($op1, $op2)
    {
        return response()->json([floatval($op1) - floatval($op2)]);
    }
}
