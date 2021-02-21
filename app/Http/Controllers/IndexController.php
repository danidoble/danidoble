<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $teams = Auth::user()->allTeams();
            if (count($teams) > 0) {
                if (Auth::user()->current_team_id === null) {
                    Auth::user()->current_team_id = $teams[0]->id;
                    Auth::user()->save();
                }
            }
        }
        return view('welcome');
    }
}
