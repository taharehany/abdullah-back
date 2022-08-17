<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        $data = Project::all();
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['image'] = asset($data[$i]['image']);
        }

        if ($data) {
            return response()->json(
                [
                    'status' => true,
                    'data' => $data,
                ],
                200
            );
        }

        return response()->json(['error' => 'Data not found'], 404);
    }
}
