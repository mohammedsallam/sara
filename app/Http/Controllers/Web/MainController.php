<?php

namespace App\Http\Controllers\Web;

use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $view = 'web.index.';

    public function index(Request $request)
    {
        if ($request->ajax() && $request->employee_id){
            $employee = Employee::find($request->employee_id);
            return view($this->view.'get_employee', compact('employee'));
        }

        $employees = Employee::paginate(5);
        return view($this->view.'index', compact('employees'));


    }
}
