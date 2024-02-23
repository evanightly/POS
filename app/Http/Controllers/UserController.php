<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id, $name)
    {
        return 'User ' . $id . ' Name ' . $name;
    }
}
