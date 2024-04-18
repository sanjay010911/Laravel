<?php

namespace App\Http\Controllers;

use App\Models\todo1;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UC extends Controller
{
    function login(){
        return view('login');
    }
    
    function loginpost(Request $request){
        $request->validate([
            'email' => 'required',
            'password'  =>'required',
        ]);
        $cred=$request->only('email','password');
       
        if(Auth::attempt($cred))
        {
            if (Auth::check()) {
                $user = Auth::user();
                if ($user->usertype == 1) {
                    return view('admin')->with('status', "You are admin");
                }
                else{
                    $data=users::where('email',$request['email'])->first();
                    session(['id'=>$data->id]);
                    return redirect('/home/'.$data->id);
                }
            }
        }
            return redirect('login')->with('status','Invalid');
    
    }
    function reg(){
        return view('reg');
    }
    function regpost(Request $request){

        $request->validate([
            'name' => 'required | min:5',
            'email' => 'required',
            'pass' => 'required',
        ]);
        $u=new users();
        $u->name=$request['name'];
        $u->email=$request['email'];
        $u->usertype=0;
        $u->password=bcrypt($request['pass']);
        $u->save();

        return redirect('/login')->with('status','sucessfully registered');
        }

        function home($id){
            $data=users::find($id);
        
            return view('home')->with(['id'=>$id,'status'=>$data->name,'mail'=>$data->email]);
        }
        function logout(){
            session()->flush();
            Auth::logout();
            return redirect('login');
        }

        function edit($id)
        {
            $data=users::find($id);
            return view('/edit')->with('data',$data);
        }
        function update(Request $request,$id){
            $data=users::find($id);
            $data->name=$request->name;
            $data->email=$request->email;
            $data->update();
            return redirect('/home/'.$id);
        }

        function showtodo($id){
            $data=todo1::where('uid',$id)->get();
            return view('showtodo')->with('data',$data);
        }

        function instodo(Request $request,$id){
            $data=new todo1();
            $data->title= $request->name;
            $data->uid=$id;
            $data->save();
            return redirect('/showtodo/'.$id);
        }
        function etodo($id){
            $data=todo1::find($id);
            return view('etodo')->with('data',$data);
        }

        function utodo(Request $request,$id){
            $data=todo1::find($id);
            $data->title=$request->name;
            $data->update();
            return redirect('/showtodo/'.session('id'));
        }
        function dtodo($id){
            $data=todo1::find($id);
            $data->delete();
            return redirect('/showtodo/'.session('id'));
        }

}
