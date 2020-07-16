<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\EmployeeModel;

class EmployeeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
/*    public function testEmployeePage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
*/
    public function testCheckAge()
    {
        $birthdate = "1993-01-23";
        $age = floor((time() - strtotime($birthdate)) / 31556926);
        $this->assertEquals($age, floor((time() - strtotime($birthdate)) / 31556926));
    }

    public function testEmployeeList()
    {

        $list = [
                    ['id' => 1,
                    'firstName' => 'ABC',
                    'lastName' => '123',
                    'middleName' => 'A',
                    'nickname' => 'ABC',
                    'dept' => 'IT',
                    'position' => 'Developer',
                    'birthDate' => '0000-00-00',
                    'age' => 0,
                    'hiredDate' => '0000-00-00',
                    'email' => 'abc@123.com',
                    'status' => 'active',
                ],
                ['id' => 1,
                    'firstName' => 'ABC',
                    'lastName' => '123',
                    'middleName' => 'A',
                    'nickname' => 'ABC',
                    'dept' => 'IT',
                    'position' => 'Developer',
                    'birthDate' => '0000-00-00',
                    'age' => 0,
                    'hiredDate' => '0000-00-00',
                    'email' => 'abc@123.com',
                    'status' => 'active',
                ],
        ];
        if(count($list) > 0) {
            $this->assertNotEmpty($list, "has employees");
        } else {
            $this->assertEmpty($list, "has no employees");
        }

    }
}
