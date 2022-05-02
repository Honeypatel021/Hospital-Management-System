<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Order;
use App\Models\Medicine;
use App\Models\Appointment;

class Homecontroller extends Controller
{
    public function redirect()
    {
     if(Auth::id())
     {
       if(Auth::user()->usertype=='0')
         {
            $doctor=doctor::all();
            $medicine= medicine::all();
            return view ('user.home',compact('doctor','medicine'));

            
         }
         else
         {
             return view('admin.home');
         }
        } 
    else
    {
        return redirect()->back();
    }
    }




    
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
            {
        $doctor=doctor::all();
        $medicine= medicine::all();
        return view('user.home',compact('doctor','medicine'));
        
            }
    }

    public function appointment(Request $request)
    {

        $data =  new appointment;

        $data -> name = $request -> name;
        $data -> email = $request -> email;
        $data -> date = $request -> date;
        $data ->  phone = $request -> number;
        $data -> message = $request -> message;
        $data -> doctor = $request -> doctor;
        $data -> status = 'In progress';
        if(Auth::id()){
        $data -> user_id =Auth::user()->id;
        }
        $data -> save();

        return redirect()->back()->with('message','Appointment Request Successfully - We wiill contact with you ');


    }

    

    public function myappointment()
   {
       if(Auth::id())
       {
         $userid = Auth::user()->id;
         $appoint= appointment::where('user_id',$userid)->get();
         

         return view('user.my_appointment',compact('appoint'));
        }
    else{
        return redirect()->back();        

    }
}





    public function cancel_appoint($id)
    {
        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();


    }

}
