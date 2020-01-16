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
        $useremail = $user->email;
        //dd($useremail);
        if ($useremail == "eeo@bncc.net"){
            $datas = Team::all();
            $datausers = User::all();
            // dd ($datausers);
            //  dd($datas);
            return view('admin',compact('datas','datausers'));
        }
        else{
            $datas = Team::find($userid);
            // dd($datas);
            if($datas == null){
                return view('deleted');
            }
            else{
                return view('home',compact('datas','userid','username'));
            }
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
        $upload_directory = 'team_data';
        $data = $request->all();

        $leadercv = $request->file('leaderCV');
        if($leadercv != null){
            $name_leadercv = time()."_".$leadercv->getClientOriginalName();
            $leadercv->move($upload_directory,$name_leadercv);
            $data['leaderCV'] = $name_leadercv;
        }
        
        $leaderproject = $request->file('leaderProject');
        if($leaderproject != null) {
            $name_leaderproject = time()."_".$leaderproject->getClientOriginalName();
            $leaderproject->move($upload_directory,$name_leaderproject);
            $data['leaderProject'] = $name_leaderproject;
        }
        
        $member1cv = $request->file('member1CV');
        if($member1cv != null) {
            $name_member1cv = time()."_".$member1cv->getClientOriginalName();
            $member1cv->move($upload_directory,$name_member1cv);
            $data['member1CV'] = $name_member1cv;
        }
        
        $member1project = $request->file('member1Project');
        if($member1project != null) {
            $name_member1project = time()."_".$member1project->getClientOriginalName();
            $member1project->move($upload_directory,$name_member1project);
            $data['member1Project'] = $name_member1project;
        }
        
        $member2cv = $request->file('member2CV');
        if($member2cv != null){
            $name_member2cv = time()."_".$member2cv->getClientOriginalName();
            $member2cv->move($upload_directory,$name_member2cv);
            $data['member2CV'] = $name_member2cv;
        }
        
        $member2project = $request->file('member2Project');
        if($member2project != null){
            $name_member2project = time()."_".$member2project->getClientOriginalName();
            $member2project->move($upload_directory,$name_member2project);
            $data['member2Project'] = $name_member2project;
        }

        $payment_image = $request->file('payment_image');
        if($payment_image != null){
            $name_paymentimage = time()."_".$payment_image->getClientOriginalName();
            $payment_image->move($upload_directory,$name_paymentimage);
            $data['payment_image'] = $name_paymentimage;
        }

        $team->update($data);
        //  dd($team);
         
        return redirect('/home');

        // $team->update($request->all());
        //  dd($team);
         
        // return redirect('/home');
    }

    public function destroy(Request $request,Team $team,User $user)
    {
        $user->delete();
        $team->delete();
        return redirect('/home');
    }
}
