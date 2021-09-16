<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUser()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    public function destroyUsers($id)
    {
        
        User::destroy($id);

        return back();

    }

    public function updateUsers(Request $request, $id)
    {
        $user = User::whereId($id);
        
        $user->update([
            "name" => $user->title,
            "surname" => $user->description,
            "email" => $user->date,
            "name" => $user->name,
            "email" => $request->comments,
            "dni" => $newImage,
        ]);
    }


    
        public function editUser($id)
        {
            return view('editUser');
        }
    

};

