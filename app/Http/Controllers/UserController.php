<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $req)
    {   
        $admin="admin1997@gmail.com";
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function register(Request $req)
    
    {

        $this->validate($req,[            
            'email'=>'required|email',            
            ]);
        //return $req -> input();
        $User = new User;
        $User->name=$req->name;
        $User->contact_no=$req->contact_no;
        $User->Address=$req->address;
        $User->email=$req->email;
        $User->password=Hash::make($req->password);
        $User->save();
        return redirect('/login');

    }
}
