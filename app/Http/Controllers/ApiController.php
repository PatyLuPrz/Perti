<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function Index()
    {
        $usuarios = User::all();
        return $usuarios;
    }

    public function Show($id){
        $user = User::all()->where('id',$id)->first();
        return $user;
    }

    public function Update(Request $request,$id){
        $user = User::all()->where('id',$id)->first();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->rfc = $request->rfc;
        $user->notes = $request->notes;
        $user->save();
        return "[202]";
    }
}
