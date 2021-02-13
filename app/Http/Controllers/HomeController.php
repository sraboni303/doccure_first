<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('home');
    }

    /**
     *  Doctor Page View
     */
    public function doctors(){
        return view('doctors');
    }

    /**
     *  Settings Page View
     */
    public function settings(){
        return view('settings');
    }


    /**
     *  Profile Page View
     */
    public function profile(){
        return view('profile');
    }


    /**
     *  Edit Page View
     */
    public function edit(){
        return view('edit');
    }

    

    

    
}
