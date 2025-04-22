<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userID = DB::table("moonshine_users")->insertGetId(
            [
                    'name' => "Администратор",
                    'email' => "asmi046@gmail.com",
                    'password' => Hash::make("123"),
                    'moonshine_user_role_id' => 1,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
            ]
        );

    }
}
