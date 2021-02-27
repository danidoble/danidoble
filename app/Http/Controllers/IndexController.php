<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Jetstream;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;

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

    public function terms(){
        return view('static.terms-of-service');
    }
    public function policy(){
        $policyFile = Jetstream::localizedMarkdownPath('policy.md');

        $environment = Environment::createCommonMarkEnvironment();
        $environment->addExtension(new GithubFlavoredMarkdownExtension());

        //dd(new CommonMarkConverter([], $environment))->convertToHtml(file_get_contents($policyFile));

        return view('policy', [
            //'policy' => (new CommonMarkConverter([], $environment))->convertToHtml(file_get_contents($policyFile)),
        ]);
        return view('static.privacy-policy');
    }


}
