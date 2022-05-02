<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Medicine;


class Admincontroller extends Controller
{
    public function addview()
    {
       return view('admin.add_doctor');

    }
    public function addmedicines()
    {
       return view('admin.add_medicines');

    }   

    public function upload(Request $request)
    {
       $doctor=new doctor;
        
       $image=$request->file;

       $imagename=time().'.'.$image->getClientOriginalExtension();

       $request->file->move('doctorimage',$imagename);

       $doctor->image=$imagename;

       $doctor->name=$request->name;

       $doctor->phone=$request->number;

       $doctor->room=$request->room;

       $doctor->speciality=$request->speciality;




       $doctor->save();

       return redirect()->back()->with('meessage','Doctor Added Successfully');



    }
    
    public function showappointment()
    {

         $data = appointment::all();
       return view('admin.showappointment',compact('data'));
    }

    public function showdoctor()
    {

         $data = doctor::all();
       return view('admin.showdoctor',compact('data'));
    }
    
    public function approved($id)
    {
         $data = appointment::find($id);

         $data -> status = 'approved';

         $data-> save();

         return redirect()->back();
    }

    public function canceled($id)
    {
         $data = appointment::find($id);

         $data -> status = 'canceled';

         $data-> save();

         return redirect()->back();
    }

    public function deletedoctor($id)
    {
         $data = doctor::find($id);
         
         $data -> delete();


         return redirect()->back();

    }
    public function uploadmedicines(Request $request)
    {
       $medicines=new medicine;
        
       $image=$request->file;

       $imagename=time().'.'.$image->getClientOriginalExtension();

       $request->file->move('medicinesimage',$imagename);

       $medicines->image=$imagename;

       $medicines->name=$request->name;

       $medicines->price=$request->price;

       $medicines->description=$request->description;

       




       $medicines->save();

       return redirect()->back()->with('meessage','Medicines Added Successfully');



    }
}
