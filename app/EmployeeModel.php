<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    //
    public $table = 'employees';
    public $timestamps = false;

    public function getEmployees() {
        $employees = self::all();

        $employeeList = [];
        foreach($employees as $key=>$employee):
            $employeeList[$key] = [
                'id' => $employee->id,
                'firstName' => $employee->firstName,
                'lastName' => $employee->lastName,
                'middleName' => $employee->middleName,
                'nickname' => $employee->nickName,
                'dept' => $employee->dept,
                'position' => $employee->position,
                'birthDate' => $employee->birthDate,
                'age' => $this->getAge($employee->birthDate),
                'hiredDate' => date('Y-m-d',strtotime($employee->hiredDate)),
                'email' => $employee->email,
                'status' => $employee->status,

            ];
        endforeach;

        return $employeeList;
    }

    public function getAge($birthdate) {
        return floor((time() - strtotime($birthdate)) / 31556926);
    }

    public function getDetails($id) {
        return self::find($id);
    }

    public function saveDetails($request) {
        $employee = self::where('id', $request['id'])->first();

		if($employee == NULL) {
			$employee = new self;
        }

        $employee->firstName = $request['firstName'];
        $employee->lastName = $request['lastName'];
        $employee->middleName = $request['middleName'];
        $employee->nickName = $request['nickName'];
        $employee->dept = $request['dept'];
        $employee->position = $request['position'];
        $employee->birthDate = $request['birthDate'];
        $employee->hiredDate = $request['hiredDate'];
        $employee->email = $request['email'];
        $employee->status = $request['status'];

        return $employee->save() ? 1 : 0;
    }
}
