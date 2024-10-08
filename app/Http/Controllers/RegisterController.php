<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index',[
            'title' => "Register",
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        // tangkep dulu datanya buat liat
        // return $request->all();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username'=> ['required','min:6','max:255','unique:users'],
            'email'=> 'required|email:dns|unique:users',
            'password'=>'required|min:7|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $nama = $validatedData['name'];
        User::create($validatedData);
        // $request->session()->flash('success',"Registration successfull! Please login $nama!");
        return redirect('/login')->with('success',"Registration successfull! Please login $nama!");
    }
}
