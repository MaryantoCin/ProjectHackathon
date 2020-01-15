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
        $username = $user->name;
        $userid = $user->id;
        //dd($userid);
        if ($userid == 1){
            $datas = Team::all();
            $datausers = User::all();
            //  dd($datas);
            return view('admin',compact('datas','datausers'));
        }
        else{
            $datas = Team::find($userid);
            //dd($data);
            return view('home',compact('datas','userid','username'));
        }
        
    }

    public function payment()
    {
        $user = Auth::user();
        // dd($user);
        $userid = $user->id;
        $username = $user->name;
        //dd($userid);
        $datas = Team::find($userid);
        //dd($datas);
        return view('payment',compact('datas','userid','username'));
    }

    public function edit()
    {
        $user = Auth::user();
        // dd($user);
        $userid = $user->id;
        $username = $user->name;
        //dd($userid);
        $datas = Team::find($userid);
        //dd($datas);
        return view('edit',compact('datas','userid','username'));
    }

    public function update(Request $request, Team $team)
    {
        $team->update($request->all());
        // dd($team);
        return redirect('/home');
    }

    
}
