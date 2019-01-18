<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function userIndex (){
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }


    public function userShow(User $user){
        return view('admin.user.show', compact('user'));
    }


    public function userEdit(User $user){
        return view('admin.user.edit', compact('user'));
    }

    public function userUpdate(User $user, Request $request){
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->email = $request->get('email');
        $user->identification_document = $request->get('identification_document');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->save($request->all());
        return redirect()->route('admin.users.index')
                   ->with('info', 'Usuario actualizado correctamente');
    }
}
