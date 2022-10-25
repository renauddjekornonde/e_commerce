@extends('shop')
@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Accueil</a></li>
            @if ($produit->category->parent !== null)
               <li class="breadcrumb-item"><a href="{{route('voir_produit_par_cat',['id'=>$produit->category->parent->id])}}">{{$produit->category->parent->nom}}</a></li>  
            @endif
            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('voir_produit_par_cat',['id'=>$produit->category->id])}}">{{$produit->category->nom}}</a></li>
        </ol>
    </nav>
<main role="main">


        <div class="container">


            <div class="row justify-content-between">

                <div class="col-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('produits/'.$produit->photo)}}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-6">

                    <h1 class="jumbotron-heading">{{$produit->nom}}</h1>
                    <h5>{{$produit->prixTTC()}} FCFA</h5>
                    <p class="lead text-muted">{{$produit->description}}</p>
                    @foreach ($produit->tags as $tag)
                          <span style="background:#0dcaf0; color:white; border-radius:0.2rem;"><a href="{{route('voir_produit_par_tag',['id'=>$tag->id])}}" style="text-decoration:none; color:white;">{{$tag->nom}}</a></span>
                    @endforeach
                   
                    <hr>
                    <form action="{{route('cart_add', ['id'=>$produit->id])}}" id="panier_add" method="POST">
                    @csrf
                    <label for="size">Quantite</label>
                    <select name="size" id="size" class="form-control">
                        <option value="xs">1/2 Kilo</option>
                        <option value="s">1 Kilo</option>
                        <option value="m">2 Kilo</option>
                        <option value="l">3 Kilo</option>
                        <option value="xl">4 Kilo</option>
                        <option value="xxl">5 Kilo</option>
                    </select>

                    <label for="qty">Quantité</label>
                    <input type="number" value="1" id="qty" class="form-control">
                    </form>
                    <button type="submit" form="panier_add" class="btn btn-cart my-2 btn-block">
                        <i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                    </button>
                </div>
            </div>
        </div>

@if (count($produit->recommandations) >0)
     <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <h3>Vous aimerez aussi :</h3>
            </div>
            <div class="row">
                @foreach ($produit->recommandations as $produit_recommande)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/'.$produit_recommande->photo)}}" class="card-img-top img-fluid" alt="Responsive image"  width="50%" height="125">

                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="{{route('voir_produit',['id'=>$produit_recommande->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endif
   
</main>
@endsection