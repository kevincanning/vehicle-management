<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Vehicle;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('pages.home');
    }

    public function index()
    {
        $vehicles = Vehicle::all();

        return view('pages.home')->withVehicles($vehicles);
    }


    public function getLogin()
    {
        return view('pages.login');
    }

    public function getLogout()
    {
        \Auth::logout();
        
        return redirect('login');
    }
}