<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Integration\Database\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request) {
        $firstName = $request->firstname;
        $lastName = $request->lastname;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
//        dd($firstName , $lastName ,  $email , $phone , $address );

        if (!$firstName || !$lastName || !$email || !$phone || !$address)
            return view('index')->with(
                "error", "Please enter complete personal information!"
            );

        $user = User::create(
            [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'phone' => $phone,
                'address' => $address
            ]);

        return view('index')->with(
            "message", "Thank you for leaving your information!"
        );
    }
}
