@extends('home')
@section('content')
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach ($produits as $produit)
           <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{asset('produits/'.$produit->photo)}}">
            <div class="card-body">
              <p class="card-text">{{$produit->nom}} <br>{{$produit->description}}
              <span style="background:#0dcaf0; color:white; border-radius:0.2rem;"><a href="{{route('voir_produit_par_cat',['id'=>$produit->category->id])}}" style="text-decoration:none; color:white;">{{$produit->category->nom}}</a></span>
              </p>
             <div class="d-flex justify-content-between align-items-center">
                <span class="price">{{$produit->prixTTC()}} FCFA</span>
                <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
       
       
      </div>
    </div>
  </div>
  @endsection