<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function getCreateUser() {
        return view('admin.user.createuser');
    }

    public function getListUser() {
        return view('admin.user.createuser');
    }

    public function CreateUser() {
        return view('admin.user.createuser');
    }
}
