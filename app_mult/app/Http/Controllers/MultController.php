<?php

namespace App\Http\Controllers;

class MultController extends Controller
{
    public function index($op1, $op2)
    {
        return [floatval($op1) * floatval($op2)];
    }
}
