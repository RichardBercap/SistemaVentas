<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

class LoginController extends Controller
{
    public function index(){
        return view('admin');
    }
    public function register(Request $request){
        $user=new User();
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password2' => 'required',
        ]);        
        
        if($request->password != $request->password2)
        {
            $error='Los passwords no coonciden';
            return redirect()->back()->with($error,'$error');
        }

        $user->name     =$request->name;
        $user->email    =$request->email;
        $user->password =bcrypt($request->password);

        $user->save();

        return redirect('admin');
    }
    public function iniciar(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);  

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            
           // return redirect()->intended('admin');
           return redirect()->route('admin');
        }
        return redirect()->back();//vuelve a la pagina de origen
    }
}
