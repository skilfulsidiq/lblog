<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name'=>'Admin User','user_type'=>'admin','email'=>'admin@test.com','password'=>'password'],
            ['name'=>'First User','user_type'=>'user','email'=>'user@test.com','password'=>'password'],
            ['name'=>'Second User','user_type'=>'user','email'=>'second@test.com','password'=>'password'],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
