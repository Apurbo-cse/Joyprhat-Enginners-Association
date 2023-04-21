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
}