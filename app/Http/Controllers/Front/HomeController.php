<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      //portfolio
      $projects = Project::paginate(8);

      return view('front.index', compact('projects'));
   }
}
