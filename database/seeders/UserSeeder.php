<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            // [
            //     "name" => "Anggun",
            //     "email" => "Anggun@gmail.com",
            //     "password" => bcrypt("123456"),
            //     "level" => "admin",

            // ],
            // [
            //     "name" => "Farid",
            //     "email" => "frdhsn13@gmail.com",
            //     "password" => bcrypt("frd123"),
            //     "level" => "admin",

            // ],
            // [
            //     "name" => "Yunita",
            //     "email" => "Yunita@gmail.com",
            //     "password" => bcrypt("123456"),
            //     "level" => "user",

            // ],
            [
                "name" => "Dwi",
                "email" => "dwi.astutikusumaningrum@gmail.com",
                "password" => bcrypt("123456"),
                "level" => "admin",

            ],
            [
                "name" => "Aulia",
                "email" => "anraulia1004@gmail.com",
                "password" => bcrypt("123456"),
                "level" => "user",

            ],
            [
                "name" => "Aisy",
                "email" => "rohadatul2203@gmail.com",
                "password" => bcrypt("123456"),
                "level" => "user",

            ],
            [
                "name" => "Ilham",
                "email" => "kelik230379@gmail.com",
                "password" => bcrypt("123456"),
                "level" => "user",

            ],
            [
                "name" => "Norma",
                "email" => "normanitasetyorini@gmail.com",
                "password" => bcrypt("Norma28"),
                "level" => "admin",

            ],
            [
                "name" => "Riris",
                "email" => "aprisanggie@gmail.com",
                "password" => bcrypt("aprisa95"),
                "level" => "user",

            ],
            [
                "name" => "Viona",
                "email" => "vi.ona@yahoo.com",
                "password" => bcrypt("viona123"),
                "level" => "user",

            ],
            [
                "name" => "Herlina",
                "email" => "herlina.lin232@gmail.com",
                "password" => bcrypt("herlina232"),
                "level" => "user",

            ]

        ];
        foreach ($users as $user) {
            User::updateOrCreate($user);
        }
    }
}