<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        //portfolio
        $projects = Project::orderBy('id', 'DESC')->get();

        return view('front.portfolio', compact('projects'));
    }
    public function show($id)
    {
        $project = Project::find($id)->first();

        return view('front.portfolio.show', compact('project'));
    }
}
