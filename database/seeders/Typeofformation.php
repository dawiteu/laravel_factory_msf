<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Typeofformation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformations')->insert([
            [
                "nom" =>        "Coding Scholl 16", 
                "created_at" => now()
            ],
            [
                "nom" =>        "Coding School 17", 
                "created_at" => now()
            ],
            [
                "nom" =>        "Marketing Lab 1", 
                "created_at" => now()
            ],
            [
                "nom" =>        "Coding School 18", 
                "created_at" => now()
            ],
            [
                "nom" =>        "AWS 3", 
                "created_at" => now()
            ],
            [
                "nom" =>        "Formation Illustrator 24", 
                "created_at" => now()
            ],
            [
                "nom" =>        "Coding School 19", 
                "created_at" => now()
            ],
            [
                "nom" =>        "Marketing Lab 2", 
                "created_at" => now()
            ],
            [
                "nom" =>        "Formation Photoshop 12", 
                "created_at" => now()
            ],
            [
                "nom" =>        "Marketing Lab 3", 
                "created_at" => now()
            ]
        ]);
    }
}
