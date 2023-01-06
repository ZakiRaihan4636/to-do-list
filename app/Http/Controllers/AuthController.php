<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $request){
        
        return view('login');
    }

    // public function login(Request $request){
    //     $input = [
    //         'email' => $request->email,
    //         'password' => $request->password
    //     ];

    //     $user = User::where('email', $input['email'])->first();

    //     $isLogin = $input['email'] == $user->email && Hash::check($input['password'], $user->password);

    //     if($isLogin){
    //         $data = [
    //             'message' => 'login succesfuly',
    //         ];

    //         return view('task.task');
    //     }
    // }

    // public function resgiter(Request $request){
    //     $input = [
    //         ''
    //     ];
    // }
}
