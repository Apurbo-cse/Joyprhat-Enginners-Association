<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherController extends Controller
{
  
    public function president_as_user()
    {
        $users= User::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.pages.president.user', compact('users'));
    }



    public function vice_president_as_user()
    {
        $users= User::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.pages.vice_president.user', compact('users'));
    }


    public function secretary_as_user()
    {
        $users= User::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.pages.secretary.user', compact('users'));
    }


    
}
