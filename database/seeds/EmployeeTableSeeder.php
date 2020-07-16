<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        [
            'lastName' => 'Dela Cruz',
            'firstName' => 'Juan',
            'middleName' => 'Torres',
            'nickName' => 'Jonny',
            'dept' => 'IT',
            'position' => 'Software Developer',
            'birthDate' => '1943-03-21',
            'hiredDate' => '2020-07-15 14:39:52',
            'email' => 'jdc@test.com',
        ],
        [
            'lastName' => 'Teresa',
            'firstName' => 'Maria Leonora',
            'middleName' => 'Soledad',
            'nickName' => 'Maria',
            'dept' => 'Sales',
            'position' => 'Manager',
            'birthDate' => '1935-04-04',
            'hiredDate' => '2020-07-15 15:39:33',
            'email' => 'mlt@test.com',
        ],
        [
            'lastName' => 'Damaso',
            'firstName' => 'Padre',
            'middleName' => 'Father',
            'nickName' => 'Paddy',
            'dept' => 'Sales',
            'position' => 'Agent',
            'birthDate' => '1925-01-01',
            'hiredDate' => '2020-07-05 15:39:33',
            'email' => 'pd@test.com',
        ],
        [
            'lastName' => 'Guinto',
            'firstName' => 'Pedro',
            'middleName' => 'Lucas',
            'nickName' => 'Pete',
            'dept' => 'Marketing',
            'position' => 'Manager',
            'birthDate' => '1955-06-13',
            'hiredDate' => '2020-07-14 15:42:44',
            'email' => 'pg@test.com',
        ],
        [
            'lastName' => 'Cruz',
            'firstName' => 'Eugenio',
            'middleName' => 'Lopez',
            'nickName' => 'Eugene',
            'dept' => 'Digital',
            'position' => 'Supervisor',
            'birthDate' => '1964-07-19',
            'hiredDate' => '2020-07-12 15:42:44',
            'email' => 'ec@test.com',
        ],
    ]
    );
    }
}
