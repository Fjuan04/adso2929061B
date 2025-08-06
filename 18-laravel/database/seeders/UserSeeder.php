<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ORM -> Eloquent
        $user = new User;
        $user->document  = 75000001;
        $user->fullname  = 'John Wick';
        $user->gender    = 'Male';
        $user->birthdate = '1964-09-12';
        $user->phone     = '3000000001';
        $user->email     = 'jonhw@mail.com';
        $user->password  = bcrypt('admin');
        $user->role      = 'Admin';
        $user->save();

        // Insert Array
        DB::table('users')->insert([
            'document'   => 75000002,
            'fullname'   => 'Lara Croft',
            'gender'     => 'Female',
            'birthdate'  => '1992-02-14',
            'phone'      => '3000000002',
            'email'      => 'larac@mail.com',
            'password'   => Hash::make('12345'),
            'created_at' => now(),
        ]);

    }
}
