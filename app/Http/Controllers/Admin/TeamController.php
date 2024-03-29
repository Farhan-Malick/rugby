<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Pool;
use Illuminate\Http\Request;
use App\Models\Admin\Team;
use App\Models\JoinPool;
use App\Models\SetPool;
use App\Models\User;

class TeamController extends Controller
{
    public function dashboard(){
        $users = User::all();
        $created_pools = SetPool::all();
        $pools = Pool::all();
        $joined_pools = JoinPool::all();
        return view('Admin/pages/dashboard',compact('users','created_pools','pools','joined_pools'));
    }
    public function index()
    {
        // $teams = Team::all();
        return view('Admin.pages.CreateTeams.createTeam');
    }
    public function store(Request $request)
    {
        $request->validate([
            'tname' => 'required',
            'tcolor' => 'required',
            'description' => 'required',
            'coach_name' => 'required',
            'team_captain' => 'required',
            'venue' => 'required',
            'thumbnail' => 'required',
            'poster' => 'required',
        ]);

        $event = new Team();
        $event->tname = $request->tname;
        $event->tcolor = $request->tcolor;
        $event->slug = str_replace(' ', '-', $request->title);
        $event->description = $request->description;
        $event->coach_name = $request->coach_name;
        $event->team_captain = $request->team_captain;
        $event->venue = $request->venue;

        // Upload thumbnail & poster image
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnail_name = time() . '_' . $thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('uploads/Teams/thumbnail'), $thumbnail_name);
            $event->thumbnail = $thumbnail_name;
        }
        if ($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $poster_name = time() . '_' . $poster->getClientOriginalName();
            $poster->move(public_path('uploads/Teams/poster'), $poster_name);
            $event->poster = $poster_name;
        }

        // Save the event
        $event->save();

        return redirect()->back()->with('success', 'Team created successfully');
    }
    public function allTeams()
    {
        $Teams = Team::all();
        return view('Admin.pages.CreateTeams.allTeams',compact('Teams'));
    }
    public function delete($id, Request $request){
        $Teams = Team::find($id);
        $Teams->delete();
        $request->session()->flash('msg','Team Has Been Deleted Successfully');
        return redirect()->back();
    }
    public function setupTeam()
    {
        // $teams = Team::all();
        
        return view('Admin.pages.CreateTeams.setupTeams');
    }

}
