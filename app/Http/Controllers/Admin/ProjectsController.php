<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectDetails;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $data = Project::all();
      return view('admin.projects.index', compact('data'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('admin.projects.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      $data = $request->all();
      if ($request->hasFile('main_image')) {
         $data['main_image'] = upload_file($request->file('main_image'), 'main_image');
      } else {
         unset($data['main_image']);
      }

      $general = Project::create($data);

      if ($request->image) {
         foreach ($request->image as $key => $value) {
            if (is_file($value)) {
               $image = upload_file($value, 'project_details');
               ProjectDetails::create([
                  'project_id' => $general->id,
                  'image' => $image,
                  'order' => $request->order[$key],
                  'desktop_col' => $request->desktop_col[$key],
                  'mobile_col' => $request->mobile_col[$key],
               ]);
            }
         }
      }

      return $general ? redirect(route('projects.index'))->with(['success' => 'تم الإضافة بنجاح']) : redirect()->back();
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $data = Project::findorfail($id);
      return view('admin.projects.show')->with(compact('data'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
      $data = Project::findOrfail($id);
      return view('admin.projects.edit', compact('data'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
      $data = $request->all();
      $general = Project::where('id', $id)->first();
      if ($request->hasFile('main_image')) {
         $data['main_image'] = upload_file($request->file('main_image'), 'main_image');
      } else {
         $data['main_image'] = $general->main_image;
      }

      $general->update($data);

      if ($request->desktop_col) {
         foreach ($request->desktop_col as $key => $value) {
            if (isset($request->image[$key]) && is_file($request->image[$key])) {
               $image = upload_file($request->image[$key], 'project_details');
            } else {
               $image = ProjectDetails::find($key)->image;
            }
            ProjectDetails::updateOrCreate(
               ['id' => $key],
               [
                  'project_id' => $id,
                  'image' => $image,
                  'order' => $request->order[$key],
                  'desktop_col' => $value,
                  'mobile_col' => $request->mobile_col[$key],
               ]
            );
         }
      }
      return $general ? redirect(route('projects.index'))->with(['success' => 'تم تعديل بنجاح']) : redirect()->back();
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $general = Project::findOrFail($id);
      $general->delete();
      return redirect(route('projects.index'))->with(['success' => 'Deleted']);
   }

    public function project_data_remove (Request $request) {
      $project = ProjectDetails::findorfail($request->id)->delete();
      return response()->json(['status'=>1]);
    }
}
