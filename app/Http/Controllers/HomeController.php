<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use DB;
use Session;
use Auth;
use Validator;

class HomeController extends Controller
{
    public function index()
    {
        $register = Register::where('active','yes')->get();
        return view('admin.dashboard',compact('register'));
    }
    public function userList()
    {
        $register = Register::all();

        return view('admin.listuser',compact('register'));
    }
    public function addUser()
    {
        return view('admin.adduser');
    }
    public function userActive($id)
    {
        $r = Register::find($id);

        $r->active = "yes";

        $r->update();

       
            return redirect('/admin');
    }

    public function addUserValidate(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'address' => 'required',
            'photo' => 'required',
      
          ], $msg = [
            'name.required' => 'Kindly Enter your name<br>',
            'mobile.required' => 'Kindly Enter your mobile<br>',
            'email.required' => 'Kindly Enter your Email Address<br>',
            'gender.required' => 'Select your gender<br>',
            'address.required' => 'Kindly Enter your address<br>',
            'photo.required' => 'Kindly Upload photo<br>',
      
          ]);
      
      
          if ($v->fails()) {
            $errorString = implode("\n", $v->messages()->all());
            Session::flash('flash_message', $errorString);
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
          } else {

            $photo1 = "";

            if ($request->hasFile('photo')) {
        
                // Upload path
                $destinationPath = 'uploads/photo/';
                // Create directory if not exists
                if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
                }
                // Get file extension
                $extension = $request->file('photo')->getClientOriginalExtension();
                // Valid extensions
                $validextensions = array("jpeg", "jpg", "png");
                $mime = $request->file('photo')->getMimeType();
                // Check extension
                if (in_array(strtolower($extension), $validextensions)) {
                // Rename file 
                $fileName = explode(".", $request->file('photo')->getClientOriginalName())[0] . time() . '.' . $extension;
                $fileName = preg_replace("/[^A-Za-z0-9 ]/", '', $fileName);
                $fileName = preg_replace("/\s+/", '-', $fileName);
                // Uploading file to given path
                $file =  $request->file('photo');
                $file->move($destinationPath, $fileName);
                
                $photo1 = '/' . $destinationPath . $fileName;
                }
            } else {
                $photo1 = "";
            }
            
            $r = new Register();

            $r->name = $request->email;
            $r->mobile = $request->mobile;
            $r->gender = $request->gender;
            $r->address = $request->address;
            $r->email = $request->email;
            $r->photo = $photo1;

            $r->save();

            return redirect('/user-list');
            
          }
        

    }
}
