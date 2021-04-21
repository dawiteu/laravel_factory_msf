<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Formation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                "nom"           => "Coding School",
                "description"   => "Formation de 6 mois pour devenir...", 
                "created_at"    => now()
            ],
            [
                "nom"           => "Marketing Lab",
                "description"   => "Formation de 3 mois pour devenir...", 
                "created_at"    => now()
            ],
            [
                "nom"           => "AWS",
                "description"   => "Formation de 1 mois pour devenir...", 
                "created_at"    => now()
            ],
            [
                "nom"           => "Formation illustrator",
                "description"   => "Formation de 3 jours pour devenir...", 
                "created_at"    => now()
            ],
            [
                "nom"           => "Formation Photoshop",
                "description"   => "Formation de 3 jours pour devenir...", 
                "created_at"    => now()
            ],
            [
                "nom"           => "Formation ADS",
                "description"   => "Formation de 1 jour pour devenir...", 
                "created_at"    => now()
            ]
        ]);
    }
}
