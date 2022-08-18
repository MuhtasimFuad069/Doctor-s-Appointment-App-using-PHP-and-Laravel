<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

class AdminController extends Controller
{
    public function addview()
    {
      return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
      $doctor=new doctor;

      $image=$request->file;

    $imagename=time().'.'.$image->getClientoriginalExtension();

    $request->file->move('doctorimage',$imagename);

    $doctor->image=$imagename;

    $doctor->name=$request->name;

    $doctor->phone=$request->number;

    $doctor->room=$request->room;

    $doctor->speciality=$request->speciality;

    $doctor->save();

    return redirect()->back()->with('message','Doctor Added Successfully');



    }

    public function showappointment(){

      return view('admin.showappointment');
    }

    public function showdoctor(){

      $data=doctor::all();
      return view('admin.showdoctor',compact('data'));
    }

    public function deletdoctor($id){
      $data=doctor::find($id);

      $data->delete();

      return redirect()->back();

    }

    public function updatedoctor($id){

      $data=doctor::find($id);
      return view('admin.update_doctor',compact('data'));
    }
}
