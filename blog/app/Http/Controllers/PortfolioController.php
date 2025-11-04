<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function projects()
    {
        $projects = Project::orderBy('start_date', 'desc')->get();
        return view('portfolio.projects', compact('projects'));
    }

    public function showProject($id)
    {
        $project = Project::findOrFail($id);
        return view('portfolio.project', compact('project'));
    }

    public function skills()
    {
        $skills = Skill::orderBy('name')->get();
        return view('portfolio.skills', compact('skills'));
    }

    public function showSkill($id)
    {
        $skill = Skill::findOrFail($id);
        return view('portfolio.skill', compact('skill'));
    }

    public function experiences()
    {
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        return view('portfolio.experiences', compact('experiences'));
    }

    public function showExperience($id)
    {
        $experience = Experience::findOrFail($id);
        return view('portfolio.experience', compact('experience'));
    }
}
