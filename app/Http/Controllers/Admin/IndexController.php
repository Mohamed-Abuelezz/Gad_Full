<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //showIndex

    public function showIndex(Request $request)
    {

        


        return view('Admin.index');
        //
    }
}
