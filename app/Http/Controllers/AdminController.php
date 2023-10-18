<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function index()
    {
        return to_route('admin.dashboard');
    }

    public function name()
    {
        $task = Task::get();
        return view('name', compact('task'));
    }

    public function dashboard(){
        $subcategory_list = Subcategory::get();
        return view('dashboard', compact('subcategory_list'));
    }
}
