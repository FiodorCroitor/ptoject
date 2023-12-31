<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class SaitController extends Controller
{
    public function review(){
     return view('Review');
    }
    public function review_check(Request $request){
        $validate = $request->validate([
            'email' =>  'required|min:4|max:25' ,
            'password' => 'required|min:4|max:100',
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->password = $request ->input('password');

        $review->save();

        return redirect()->route('review');


    }
}
