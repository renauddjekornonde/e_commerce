<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag->nom = "#Jaune";
        $tag->save();

        $tag2 = new Tag();
        $tag2->nom = "#Verte";
        $tag2->save();

        $tag3 = new Tag();
        $tag3->nom = "#Rouge";
        $tag3->save();
    }
}
