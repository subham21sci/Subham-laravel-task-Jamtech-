<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Session;
use Auth;
use Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
       
        return view('login');
    }

    public function createlogin(Request $request)
    {
         $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
        ]);

        if($validator->passes()){

            $email = $request->email;
            $password = $request->password;
            $credentials=array("email"=>$request->email,"password"=>$request->password);
            $authSuccess=Auth::attempt($credentials);

            if($authSuccess)
            {
                return redirect('/admin');
              
            }else
                {
                    Session::flash('flash_message',"Invalid Username or password");
                    return redirect()->back();
                }           
            }else
                {
                Session::flash('flash_message',"Invalid Username or password");
                return redirect()->back();      
                }
}

    public function logout() 
    {
        Auth::logout();
        return redirect('/');
    }

    public function register()
    {
        return view('register');
    }
    
    public function nextregPage($id)
    {
        return view('next_reg_page');
    }
    public function registerValidate(Request $request)
    {
        $v = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
      
          ], $msg = [
            'first_name.required' => 'Kindly Enter your First name<br>',
            'last_name.required' => 'Kindly Enter your Last name<br>',
            'email.required' => 'Kindly Enter your Email Address<br>',
            'password.required' => 'New password is required<br>',
      
          ]);
      
      
          if ($v->fails()) {
            $errorString = implode("\n", $v->messages()->all());
            Session::flash('flash_message', $errorString);
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
          } else {

            $uname = $request->first_name . ' ' .$request->last_name;
           
            $u = new User();
            $u->name = $uname;
            $u->email = $request->email;
            $u->password = Hash::make($request->password);

            $u->save();
            $id = $u->id;

            $url = 'next_reg_page/' . $id;
            return redirect($url);

            // return back()
            // ->with('success','Your account has been created .');
            
          }
        

    }
    public function nextregPageValidate(Request $request,$id)
    {
        //dd($request->all());
        $v = Validator::make($request->all(), [
            'profile_name' => 'required',
            'profile_photo' => 'required',
      
          ], $msg = [
            'first_name.required' => 'Kindly Enter your profile_name<br>',
            'last_name.required' => 'Kindly Upload Profile Photo<br>',
      
          ]);
      
      
          if ($v->fails()) {
            $errorString = implode("\n", $v->messages()->all());
            Session::flash('flash_message', $errorString);
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
          } else {

            $photo1 = "";

            if ($request->hasFile('profile_photo')) {
        
                // Upload path
                $destinationPath = 'uploads/profile_photo/';
                // Create directory if not exists
                if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
                }
                // Get file extension
                $extension = $request->file('profile_photo')->getClientOriginalExtension();
                // Valid extensions
                $validextensions = array("jpeg", "jpg", "png");
                $mime = $request->file('profile_photo')->getMimeType();
                // Check extension
                if (in_array(strtolower($extension), $validextensions)) {
                // Rename file 
                $fileName = explode(".", $request->file('profile_photo')->getClientOriginalName())[0] . time() . '.' . $extension;
                $fileName = preg_replace("/[^A-Za-z0-9 ]/", '', $fileName);
                $fileName = preg_replace("/\s+/", '-', $fileName);
                // Uploading file to given path
                $file =  $request->file('profile_photo');
                $file->move($destinationPath, $fileName);
                
                $photo1 = '/' . $destinationPath . $fileName;
                }
            } else {
                $photo1 = "";
            }

           $u = User::find($id);

            $u->profile_photo = $photo1;
            $u->profile_name = $request->profile_name;

            $u->update();

             return back()
             ->with('success','Your account has been created .');
            
          }
        

    }
}
