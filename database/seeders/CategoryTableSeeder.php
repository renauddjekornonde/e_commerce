<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $category= new Category();
        // $category->nom = "Agrumes";
        // $category->is_online= 1;
        // $category->save();
        
        // $category2= new Category();
        // $category2->nom = "Fruits à Noyau";
        // $category2->is_online= 1;
        // $category2->save();

        // $category3= new Category();
        // $category3->nom = "Fruits à Pépins";
        // $category3->is_online= 1;
        // $category3->save();

        // $category4= new Category();
        // $category4->nom = "Baies et Fruits rouges";
        // $category4->is_online= 1;
        // $category4->save();

        // $category5= new Category();
        // $category5->nom = "Fruits à Coque";
        // $category5->is_online= 1;
        // $category5->save();

        // $category6= new Category();
        // $category6->nom = "Fruits Exotiques";
        // $category6->is_online= 1;
        // $category6->save();

        $category6= new Category();
        $category6->nom = "Clémentine";
        $category6->is_online= 1;
        $category6->parent_id= 8;
        $category6->save();

        $category10= new Category();
        $category10->nom = "Mandarine";
        $category10->is_online= 1;
        $category10->parent_id= 8;
        $category10->save();

        $category7= new Category();
        $category7->nom = "Prune";
        $category7->is_online= 1;
        $category7->parent_id= 9;
        $category7->save();

        $category8= new Category();
        $category8->nom = "Pomme";
        $category8->is_online= 1;
        $category8->parent_id= 10;
        $category8->save();

        $category9= new Category();
        $category9->nom = "Raisin";
        $category9->is_online= 1;
        $category9->parent_id= 10;
        $category9->save();
    }
}
