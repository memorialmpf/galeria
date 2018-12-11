<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/cover.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700" rel="stylesheet">
    <title>Galeria Membros 1</title>
  </head>
    <body class="text-center">

      <div class="d-flex w-100 h-100 mx-auto flex-column">
        <header class="masthead mb-auto">
          <div class="text-center mt-4">
            <img src="img/bemvindo-big.png" alt="">
          </div>
        </header>

          <!-- <h1 class="cover-heading">Cover your page.</h1>
          <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
          <p class="lead">
            <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
          </p> -->

                 <div class="row w-100 mx-auto">

                   <div class="col text-center">
                     <a href="{{route('home', ['aba' => 1])}}"><img class="img-fluid rounded-circle btn ball" src="img/btn-galeria-pgrs.jpg" width="540" height="540"></a>
                   </div>

                   <div class="col-lg-4 pr-4">
                     <a href="{{route('home', ['aba' => 2])}}"><img class="img-fluid rounded-circle btn ball" src="img/btn-galeria-conselho.jpg" width="540" height="540"></a>
                   </div>

                   <div class="col-lg-4 pl-4">
                     <a href="{{route('home', ['aba' => 3])}}"><img class="img-fluid rounded-circle btn ball" src="img/btn-galeria-subs.jpg" width="540" height="540"></a>
                   </div>
                 </div>


        <footer class="mastfoot mt-auto align-middle align-items-middle" style="background-color: #a61c1f !important; height: 60px;">
          <div class="inner">
            <img src="img/logo-memorial-mpf.png" class="align-middle mt-2" alt="">
          </div>
        </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>





</div>
