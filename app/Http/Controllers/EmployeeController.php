<?php

namespace App\Http\Controllers;

use App\Type;
use App\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees  = User::orderBy('name', 'asc')->get();

        return response()->json([
            'employees' =>  $employees,
            "message"   =>  "All employees",
            'error'     =>  false
        ]);
    }
}
