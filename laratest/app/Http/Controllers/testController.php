<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\testController;

class testController extends Controller
{
    public function home() {
        echo "hello this is from controller";
    }

    
}
