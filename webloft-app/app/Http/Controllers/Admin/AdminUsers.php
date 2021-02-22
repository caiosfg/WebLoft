<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUsers extends Controller
{
    public function getLifeCheck()
    {
        echo 'response ok';
    }
    public function postLifeCheck(Request $request)
    {
        dd($request->all());
    }
}
