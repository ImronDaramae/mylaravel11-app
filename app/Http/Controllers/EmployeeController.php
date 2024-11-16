<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function get_all()
    {
        // $employees = DB::table('employees')->whereNull('created_at')->get();
        $employees = Employee::all();

        // echo "<pre>";
        // print_r($employees);
        // echo "</pre>";
        // return $employees;
        return view('employee', compact('employees'));

    }
}
