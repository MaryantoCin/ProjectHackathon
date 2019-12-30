<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Team;

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
    public function index()
    {   
        $user = Auth::user();
        // dd($user);
        $userid = $user->id;
        //dd($userid);
        if ($userid == 1){
            $datas = Team::all();
            //dd($data);
            return view('admin',compact('datas'));
        }
        else{
            $data = Team::all();
            //dd($data);
            return view('home',compact('data','userid'));
        }
        
    }

    
}
