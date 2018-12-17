<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VerifyController extends Controller
{
    // verify the user 
    public function Verify($token){
     User::where('token',$token)->firstOrFail()
         ->update(['token'=>null]);
         return redirect()->route('home')->with('success','Account Verified');
    }
}
