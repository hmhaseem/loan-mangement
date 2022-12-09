<?php

namespace App\Http\Controllers\Admin;

use Auth;

class HomeController
{
    public function index()
    {
        $role = Auth::user()->roles->first()->title;
        return view("admin.dashboard.index",compact('role'));
    }
}
