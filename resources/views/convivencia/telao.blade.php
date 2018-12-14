
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Servidores</title>

    <!-- Bootstrap core CSS -->
    <link href="/conv/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/conv/css/cover.css" rel="stylesheet">
  </head>

  <body class="text-center" background="/img/novo_bg.jpg">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <!-- <h3>Servidores que fazem nossa história</h3> -->
         {{--  <img src="conv/img/Titulo-Servidores.png" width="400px" alt="" class="mt-2 pt-2"> --}}

<img src="/img/novo_topo.png" alt="" class="mt-0 pt-0 img-fluid">
        </div>



      </header>


@php
$ordem = 1;

@endphp


@foreach ($servidores as $i =>$servidor)


@if($i == 0)
<main role="main" class="inner cover">
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner text-center mb-4 pb-4">
@endif



@if($ordem == 1 or $ordem == 7 or $ordem == 13)

@if($ordem > 1)
  </div>

 </div>

@endif
<div class="carousel-item {{($i == 0)?'active':''}} mb-4 pb-4">
   <div class="card-deck mx-4 px-4 mb-4 pb-4">
@endif



@if( $ordem == 4 or $ordem == 10 or $ordem == 13 or $ordem == 16)


</div>

 <div class="card-deck mx-4 px-4 mb-4">

@endif









              <div class="card">
                <div class="card-body">
                  <h1 class="card-title nome-servidor">{{$servidor->ds_nome}}</h1>
                  <h4 class="card-text unidade-servidor">{{$servidor->sg_unidade_principal}}</h4>
                </div>
              </div>




@if($ordem == 18)
  </div>
   </div>
@endif








{{-- $ordem . $servidor->ds_nome --}}



@php
$ordem++;
if($ordem > 18){
$ordem = 1;
}

@endphp

@endforeach


    </div>

      </main>





      <footer class="mastfoot mt-auto align-middle align-items-middle"  height: 60px;">
        <div class="inner">
         {{--  <img src="conv/img/logo-memorial-mpf.png" class="align-middle mt-2" alt="">--}}
        </div>
      </footer>


    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
