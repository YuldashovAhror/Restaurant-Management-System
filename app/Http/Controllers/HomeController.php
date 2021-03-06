<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Foodfech;

class HomeController extends Controller
{
    public function index()
    {
        $data = Food::all();
        $data2 = Foodfech::all();
        return view('home',compact('data','data2'));
    }

    public function redirects()
    {
        $data = Food::all();
        $data2 = Foodfech::all();
        $usertype = Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.adminhome');
        }
        else
        {
            return view('home',compact('data','data2'));
        }
    }
}
