<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function adminLoginPanel()
    {
        return view('auth.admin.adminLogin');
    }
    public function teacherLoginPanel()
    {
        return view('auth.teacher.teacherLogin');
    }
}
