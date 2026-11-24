<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">

<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<!-- css custom -->
<link rel="stylesheet" href="style.css">
</head>
<body class="vh-100">


<nav class="navbar navbar-expand-lg bg-dark ">
<div class="container-fluid">
    
    <a class="navbar-brand align-items-center" href="/">
        <h1 class=" tit-c text-o"><img class="logo2-c" src="/logo-2-o.png" alt="logo-black">
        MUSICAT</h1>
    
    </a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav w-100 justify-content-evenly nav_custom">
<li class="nav-item">
<a class="nav-link text-o" aria-current="page" href="/">Home</a>
</li>
<li class="nav-item">
<a class="nav-link text-o" href="/catalogo">Catalogo</a>
</li>
<li class="nav-item">
<a class="nav-link text-o" href="/top">Top 10</a>
</li>





</ul>
</div>
</div>
</nav>

<h2 class="display-4 my-4 text-o mx-4 text-center tit-2">La Top 10 Italiana del momento</h2>


<div class="container my-5">
    <!-- ho usato row-cols-5 per distribuire 5 card a riga, sono andato a vedermi i comandi di bootstrap per fare questa cosa, perchè non riuscivo a distribuirle in maniera uniforme -->
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-5">
        @foreach ($top as $t)
        <div class="col g-5 justify-content-start align-items-end text-center">

            <div class="card bg-dark" style="width: 18rem;">
                <img src="{{$t['img']}}" class="card-img-top" alt="{{ $t['canz'] }}">
                <div class="card-body bg-dark">
                    
                    <h3 class="card-text tit-cust text-o"> {{$t['name']}} </h3>
                    <h5 class="card-text text-o"> {{$t['canz']}} </h5>
                </div>
            </div>
        </div>
            @endforeach    
        </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
</body>
</html>