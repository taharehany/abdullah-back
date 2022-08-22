<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use App\Models\CanDo;
use App\Models\Page;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      //portfolio
      $projects = Project::paginate(8);
      $cando = CanDo::paginate(3);
      $about = AboutMe::first();
      $aboutme = Page::where('identifier', 'aboutme')->first();

      return view('front.index', compact('projects', 'cando', 'about', 'aboutme'));
   }
}
