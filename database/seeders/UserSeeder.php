<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'id' => "1",
                'name' => "admin",
                'email' => "admin@admin.fr",
                'password' => Hash::make("admin"),
                'roles' => "1",
            ],

            [
                'id' => "2",
                'name' => "producteur",
                'email' => "producteur@producteur.fr",
                'ville' => "Saint Pierre",
                'description' => "je suis un producteur!",
                'numero' => "0692123456",
                'password' => Hash::make("producteur"),
                'roles' => "2",
            ],

            [
                'id' => "3",
                'name' => "jhon",
                'email' => "jhon@jhon.fr",
                'ville' => "Saint Paul",
                'description' => "je suis un autre producteur!",
                'numero' => "0692654321",
                'password' => Hash::make("jhon"),
                'roles' => "2",
            ],

            [
                'id' => "6",
                'name' => "jean",
                'email' => "jean@jean.fr",
                'ville' => "Saint Philipe",
                'description' => "je suis encore un autre producteur!",
                'numero' => "0692654321",
                'password' => Hash::make("jean"),
                'roles' => "2",
            ],

            [
                'id' => "4",
                'name' => "client",
                'email' => "client@client.fr",
                'password' => Hash::make("client"),
                'roles' => "3",
            ],

            [
                'id' => "5",
                'name' => "fleure",
                'email' => "fleure@fleure.fr",
                'password' => Hash::make("fleure"),
                'roles' => "3",
            ],
        ];
        
        foreach ($user as $key => $value) {
            User::create($value);
        }
        //DB::table('users')->insert($user);
    }
}
