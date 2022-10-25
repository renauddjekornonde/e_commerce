<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/favicon.png')}}">

      <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/tshirt.css')}}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>

<body>

@include('layouts.header')

<main>

  <section class="py-5 text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Commandez  les <br><span class="jumbotron-heading">Fruits du </span> <br>Tchad depuis le <span class="jumbotron-heading" style="background:blue; color:white; border-radius:0.2rem;">Sénégal </span>!</h1>
            <p class="lead text-muted">Choisiez VOS Fruits selon vos désirs, gouts.</p>

        </div>
    </section>

@yield('content')

</main>

<footer class="text-muted py-5">
   <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Mon Fruit</p>
    </div>
</footer>


    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

      
  </body>
</html>