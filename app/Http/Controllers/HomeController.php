<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Index()
    {
        $usuarios = User::all();
        return view('home',compact('usuarios'));
    }

    public function Edit($id){
        $user = User::all()->where('id',$id)->first();
        return view('edit',compact('user'));
    }

    public function Show($id){
        $user = User::all()->where('id',$id)->first();
        return view('show',compact('user'));
    }

    public function Update(Request $request,$id){
        $user = User::all()->where('id',$id)->first();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->rfc = $request->rfc;
        $user->notes = $request->notes;
        $user->save();
        return redirect()->route('index');
    }

    public function Delete($id){
        $user = User::all()->where('id',$id)->first();
        $user->delete();
        return redirect()->route('index');
    }

    public function Create(Request $request){
        $user = User::new();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->rfc = $request->rfc;
        $user->password = $request->password;
        $user->notes = $request->notes;
        $user->save();
        return redirect()->route('home');
    }
}
