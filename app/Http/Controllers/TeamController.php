<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Team;
use App\User;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::with('user')->get();
        return view('home',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        // dd($user);
        $userid = $user->id;
        // dd($userid);
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $upload_directory = 'team_data';
        $data = $request->all();

        $leadercv = $request->file('leaderCV');
        if($leadercv != null){
            $name_leadercv = time()."_".$leadercv->getClientOriginalName();
            $leadercv->move($upload_directory,$name_leadercv);
            $data['leaderCV'] = $nama_leadercv;
        }
        
        $leaderproject = $request->file('leaderProject');
        if($leaderproject != null) {
            $name_leaderproject = time()."_".$leaderproject->getClientOriginalName();
            $leaderproject->move($upload_directory,$name_leaderproject);
            $data['leaderProject'] = $nama_leaderproject;
        }
        
        $member1cv = $request->file('member1CV');
        if($member1cv != null) {
            $name_member1cv = time()."_".$member1cv->getClientOriginalName();
            $member1cv->move($upload_directory,$name_member1cv);
            $data['member1CV'] = $nama_member1cv;
        }
        
        $member1project = $request->file('member1Project');
        if($member1project != null) {
            $name_member1project = time()."_".$member1project->getClientOriginalName();
            $member1project->move($upload_directory,$name_member1project);
            $data['member1Project'] = $nama_member1project;
        }
        
        $member2cv = $request->file('member2CV');
        if($member2cv != null){
            $name_member2cv = time()."_".$member2cv->getClientOriginalName();
            $member2cv->move($upload_directory,$name_member2cv);
            $data['member2CV'] = $nama_member2cv;
        }
        
        $member2project = $request->file('member2Project');
        if($member2project != null){
            $name_member2project = time()."_".$member2project->getClientOriginalName();
            $member2project->move($upload_directory,$name_member2project);
            $data['member2Project'] = $nama_member2project;
        }
        
        Team::create($data);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
