<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit= new Produit();
        $produit->nom ="Mangue";
        $produit->prix ="300";
        $produit->description ="Mangue venant du Tchad. Le kilo coute 300F";
        $produit->photo ="mangue.jpg"; 
        $produit->category_id=13;
        $produit->save();
        
        $produit= new Produit();
        $produit->nom ="Citron";
        $produit->prix ="200";
        $produit->description ="Citron venant du Tchad. Le kilo coute 200F";
        $produit->photo ="citron.jpg"; 
        $produit->category_id=8;
        $produit->save();

        $produit= new Produit();
        $produit->nom ="Orange";
        $produit->prix ="600";
        $produit->description ="Orange venant du Tchad. Le kilo coute 600F";
        $produit->photo ="orange.jpg"; 
        $produit->category_id=8;
        $produit->save();

        $produit= new Produit();
        $produit->nom ="Pamplemousse";
        $produit->prix ="1000";
        $produit->description ="Pomplemous venant du Tchad. Le kilo coute 1000F";
        $produit->photo ="pomplemous.jpg";
        $produit->category_id=8;
        $produit->save();

        $produit= new Produit();
        $produit->nom ="Banane";
        $produit->prix ="250";
        $produit->description ="Banane venant du Tchad. Le kilo coute 250F";
        $produit->photo ="bananas.jpg";
        $produit->category_id=11; 
        $produit->save();

        $produit= new Produit();
        $produit->nom ="Ananas";
        $produit->prix ="1000";
        $produit->description ="Anana venant du Tchad. Le kilo coute 300F";
        $produit->photo ="ananas.jpg";
        $produit->category_id=13; 
        $produit->save();

        $produit= new Produit();
        $produit->nom ="Goyave";
        $produit->prix ="350";
        $produit->description ="Goyave venant du Tchad. Le kilo coute 350F";
        $produit->photo ="goyave.jpg";
        $produit->category_id=14; 
        $produit->save();

        $produit= new Produit();
        $produit->nom ="Papaye";
        $produit->prix ="1500";
        $produit->description ="Papaye venant du Tchad. Le kilo coute 1500F";
        $produit->photo ="papaya.jpg";
        $produit->category_id=14; 
        $produit->save();

    }
}
