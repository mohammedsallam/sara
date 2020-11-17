<?php

namespace App\Http\Controllers\API;

use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index(Request $request, $count = null)
    {
        if ($count) {
            $employees = Employee::limit($count)->cursor();
        } else {
            $employees = Employee::cursor();
        }

        return response()->json([
            'success' => true,
            'data' => $employees
        ]);


    }
}
