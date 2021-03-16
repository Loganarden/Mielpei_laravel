<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => "admin",
                'email' => "admin@admin.fr",
                'password' => "admin",
                'roles' => "1",
            ],

            [
                'name' => "producteur",
                'email' => "producteur@producteur.fr",
                'password' => "producteur",
                'roles' => "2",
            ],

            [
                'name' => "client",
                'email' => "client@client.fr",
                'password' => "client",
                'roles' => "3",
            ],
        ];

        DB::table('users')->insert($user);
    }
}
