<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        // Load portfolio data for the About page
        $projects = Project::orderBy('start_date', 'desc')->get();
        $skills = Skill::orderBy('name')->get();
        $experiences = Experience::orderBy('start_date', 'desc')->get();

        return view('about', compact('projects', 'skills', 'experiences'));
    }

    public function contact()
    {
        return view('contact');
    }
}