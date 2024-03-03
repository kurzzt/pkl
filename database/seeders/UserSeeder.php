<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                "name" => "Admin Diskominfo",
                "username" => "atmins",
                "email" => "admin@gmail.com",
                "password" => bcrypt("Atmin1234!"),
                "status" => true,
            ],
        ];
        DB::table("users")->upsert($data, ["email"]);
    }
}
