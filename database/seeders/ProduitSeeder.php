<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produits = [
            [
                'name' => "miel",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas diam in arcu cursus.",
                'quantite' => 25,
                'prix' => 10.50,
                'image' => '\images\miel.png',
                'user_id' => 2
            ],

            [
                'name' => "miel de mangue",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas diam in arcu cursus.",
                'quantite' => 15,
                'prix' => 25,
                'image' => '\images\miel.png',
                'user_id' => 2
            ],

            [
                'name' => "miel de longani",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas diam in arcu cursus.",
                'quantite' => 5,
                'prix' => 50,
                'image' => '\images\miel.png',
                'user_id' => 2
            ],

            [
                'name' => "miel de pomme",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas diam in arcu cursus.",
                'quantite' => 50,
                'prix' => 7,
                'image' => '\images\miel.png',
                'user_id' => 2
            ],

            [
                'name' => "miel de curcuma",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas diam in arcu cursus.",
                'quantite' => 3,
                'prix' => 30.50,
                'image' => '\images\miel.png',
                'user_id' => 2
            ],
        ];

        DB::table('produits')->insert($produits);
    }
}
