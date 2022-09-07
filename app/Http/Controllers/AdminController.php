<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function alluser()
    {
        $user = User::all();
        return view('admin.user.index',compact('user'));
    }
    public function deluser($id)
    {
        $user = User::find($id)->delete();
        return redirect()->back()->with('message','User Deleted Successfully!');
    }
}
