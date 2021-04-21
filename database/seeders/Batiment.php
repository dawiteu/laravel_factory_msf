<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Batiment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batiments')->insert([
            [
                "nom"           => "MolenGeek", 
                "description"   => "pour devenir pro",
                "created_at"    => now() 
            ]
        ]);
    }
}
