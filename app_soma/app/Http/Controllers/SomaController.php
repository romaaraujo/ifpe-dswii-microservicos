<?php

namespace App\Http\Controllers;

class SomaController extends Controller
{
    public function index($op1, $op2)
    {
        return response()->json([floatval($op1) + floatval($op2)]);
    }
}
