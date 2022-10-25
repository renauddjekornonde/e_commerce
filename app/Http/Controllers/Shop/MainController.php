<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Category;
use App\Models\Tag;

class MainController extends Controller
{
    public function index(){
      //SELECT * FROM produits
        $produits= Produit::with('category')->get();
        // $categories= Category::where('is_online', 1)->get();
      return view('shop.index', compact('produits'));
    }

    public function produit(Request $request){
      //SELECT * FROM produits where id= ?
      $produit= Produit::find($request->id);
      // $categories= Category::where('is_online', 1)->get();
      return view('shop.produit', compact('produit'));
    }

    public function viewByCategory(Request $request){
      //Recuperer toutes les categories >> is_online == 1
      // $categories= Category::where('is_online', 1)->get();
      //SELECT * FROM produits = category_id = $request->id
      //$produits= Produit::where('category_id', $request->id)->get();
      $category = Category::find($request->id);
      $produits = $category->produits();

      return view('shop.categorie', compact('produits', 'category'));
    }

    public function viewByTag(Request $request){
      $tag = Tag::find($request->id);
      $produits= $tag->produits;
      return view('shop.categorie',compact('produits','tag'));
    }

}
