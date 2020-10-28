<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{   
     /**
    * Dashboard index
    *
    * @return index page
    */
    public function index(){
        return Inertia::render('Dashboard/Index');
    }
}
