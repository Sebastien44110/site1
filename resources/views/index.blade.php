<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <script src="{{asset('js/main.js')}}"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
</head>

<body>

        <ul class="nav justify-content-center" style="background-color:black;" id="home">
                <li class="nav-item pr-5">
                    <a class="nav-link text-white" href="#home">Acceuil</a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link text-white" href="#film">Films</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#">Compte</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/inscript">Inscription</a>
                        <a class="dropdown-item" href="/connect">Connexion</a>
                    </div>
                </li>
                <li class="nav-item ml-5 pl-5">
                    <img class="w-50 h-75 rounded" src="img/téléchargement.jpeg" alt="">
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link text-white" href="/myreserv">Mes reservation</a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link disabled" href="#">Déconnexion</a>
                </li>
            </ul>


<div class="parallax img-">

        
    <div id="demo" class="carousel slide container pt-5" data-ride="carousel">
      
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F67%2Faa%2F43%2F67aa4391a3ec9f78e2a84732122f421b.png&f=1" alt="" style="margin-left:12em">
          </div>
          <div class="carousel-item">
            <img class="img-fluid"  src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.pix-geeks.com%2F2014%2F03%2Fmatrix.jpg&f=1" alt="" style="margin-left:12em; width:710px">
          </div>
          <div class="carousel-item">
            <img class="img-fluid"  src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.elsoldeacapulco.com.mx%2Fincoming%2Fmbjyrl-dragon-ball-super-broly.jpg%2FALTERNATES%2FLANDSCAPE_1140%2FDragon-Ball-Super-Broly.jpg&f=1" alt="" style="margin-left:12em; width:710px">
          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon bg-dark"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon bg-dark"></span>
        </a>
      
      </div>

</div>

<div style="height:max-content;background-color:black" id="film">
  <div class="container">
    <div class="row align-items-start">
    <div class="card-deck mt-5">
    
      <div class="card">
        <img src="https://media1.woopic.com/api/v1/images/174%2Fcinemovies%2Fc70%2Fa39%2F1613c25027f648aefaf02c8e99%2Fglass%7Cmovies-253849-1.jpg?format=207x274&facedetect=1&quality=85" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title text-center">GLASS</h3>
          <p class="card-text text-center">Peu de temps après les événements relatés dans Split, David Dunn - l'homme incassable - poursuit sa traque de La Bête, surnom donné à Kevin Crumb depuis qu'on le sait capable d'endosser 23 personnalités différentes.</p>
        </div>
    
        <div class="card-footer">
          <a href="/reserv"><button type="button" class="btn btn-secondary btn-lg btn-block">Réserver</button></a>
        </div>
      </div>
    
      <div class="card">
        <img src="https://media2.woopic.com/api/v1/images/174%2Fcinemovies%2F884%2F974%2F4845b2dbfeb6bde9779a7c450d%2Fholy-lands%7Cmovies-258255-1.jpg?format=207x274&facedetect=1&quality=85" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title text-center">HOLY LAND</h3>
          <p class="card-text text-center">Harry, juif apostat et cardiologue à la retraite, originaire de New York, décide soudainement d'aller s'établir comme éleveur de porcs à Nazareth, en Israël. Une décision mal vécue par les locaux comme par sa propre famille.</p>
        </div>
    
        <div class="card-footer">
          <a href="/reserv"><button type="button" class="btn btn-secondary btn-lg btn-block">Réserver</button></a>
        </div>
    
      </div>
      <div class="card">
        <img src="https://media1.woopic.com/api/v1/images/174%2Fcinemovies%2Fdf6%2F2fd%2F43f8bae805b80373ce47677669%2Fcolette%7Cmovies-244808-1.jpg?format=207x274&facedetect=1&quality=85" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title text-center">COLETTE</h3>
          <p class="card-text text-center">1893. Malgré leurs quatorze ans d'écart, Gabrielle Sidonie Colette, jeune fille à l'esprit rebelle, épouse Willy, écrivain aussi égocentrique que séducteur. Grâce à ses relations, elle découvre le milieu artistique parisien qui stimule sa propre créativité.</p>
        </div>
    
        <div class="card-footer">
          <a href="/reserv"><button type="button" class="btn btn-secondary btn-lg btn-block">Réserver</button></a>
        </div>
      </div>
      
    </div>
    </div>
    </div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 

</body>

</html>