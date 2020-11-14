<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function show()
    {
        $data = 2000;
        return view('bank', ['data' => $data]);
    }
}
