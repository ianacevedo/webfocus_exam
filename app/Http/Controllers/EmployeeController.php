<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\EmployeeModel;

class EmployeeController extends Controller
{
    public function index() {
        if (!Auth::check()) {
            // The user is not logged in...
            return redirect('login');
        }
        $employeeModel = new EmployeeModel();
        $employees = $employeeModel->getEmployees();

        return view('employees/index', compact('employees'));
    }

    public function edit($id) {
        if (!Auth::check()) {
            // The user is not logged in...
            return redirect('login');
        }

        $employeeModel = new EmployeeModel();
        $employee = $employeeModel->getDetails($id);

        return view('employees/edit', compact('employee'));
    }


    public function store(Request $request) {
        if (!Auth::check()) {
            // The user is not logged in...
            return redirect('login');
        }

        $employeeModel = new EmployeeModel();
        $employeeModel->saveDetails($request);

        return redirect('employee');
    }
}
