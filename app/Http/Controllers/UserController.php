<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller 
{
    public function index() {
        return response()->json(['users' => [['name' => 'John'], ['name' => 'Alice']]], 200);
    }
}