<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit()
   {
      $data = Setting::first();
      return view('admin.settings.edit', compact('data'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request)
   {
      $data = $request->all();
      $general = Setting::first();

      if ($request->hasFile('small_logo')) {
         $data['small_logo'] = upload_image($request->file('small_logo'), 'small_logo');
      } else {
         $data['small_logo'] = $general->image;
      }
      if ($request->hasFile('small_logo_dark')) {
         $data['small_logo_dark'] = upload_image($request->file('small_logo_dark'), 'small_logo_dark');
      } else {
         $data['small_logo_dark'] = $general->image;
      }
      if ($request->hasFile('inline_logo')) {
         $data['inline_logo'] = upload_image($request->file('inline_logo'), 'inline_logo');
      } else {
         $data['inline_logo'] = $general->image;
      }
      if ($request->hasFile('inline_logo_dark')) {
         $data['inline_logo_dark'] = upload_image($request->file('inline_logo_dark'), 'inline_logo_dark');
      } else {
         $data['inline_logo_dark'] = $general->image;
      }
      if ($request->hasFile('cv')) {
         $data['cv'] = upload_file($request->file('cv'), 'pdf');
      } else {
         $data['cv'] = $general->image;
      }

      $general->update($data);

      return $general ? redirect(route('settings.edit'))->with(['success' => 'تم تعديل بنجاح']) : redirect()->back();
   }
}
