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
            $datas = Team::find($userid);
            //dd($data);
            return view('home',compact('datas','userid'));
        }
        
    }

    public function payment()
    {
        $user = Auth::user();
        // dd($user);
        $userid = $user->id;
        //dd($userid);
        $datas = Team::find($userid);
        //dd($datas);
        return view('payment',compact('datas','userid'));
    }

    
}
