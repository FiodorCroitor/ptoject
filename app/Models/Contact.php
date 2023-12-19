<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Contact extends Model
{

    public function review(){
        return view('Review');
    }
    public function review_check(Request $request){
        $validate = $request->validate([
            'email' =>  'required|min:4|max:25' ,
            'password' => 'required|min:4|max:100',
        ]);

        $review = new \App\Contact();
        $review->email = $request->input('email');
        $review->password = $request ->input('password');

        $review->save();

        return redirect()->route('review');


    }


}
