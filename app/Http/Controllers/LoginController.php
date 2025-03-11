<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        $data =Post::get();
        $cai = 'cai';
        return view('login', compact('data', 'cai'));
    }

    public function login(Request $request){
        
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        dd($data);

        if (Auth::Attempt($data)) {
            return redirect('/home');
        }else{
            return redirect('/login');
        }
    
    }
}
