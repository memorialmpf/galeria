<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.png">

    <title>Memorial MPF</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <!-- CABEÇALHO NAVEGAÇAO -->
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white mx-auto no-gutters mx-0 px-0" style="box-shadow: 0px 9px 13px -4px rgba(0,0,0,0.20);">
        <div class="container">
          <div class="row w-100 mx-0 px-0">
            <!-- MENU SANDUICHE -->
            <div class="col align-self-center mx-0 px-0">
            <div class="btn-group">
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/img/ic-hamburguer.svg" alt="" width="32"></button>
              <div class="dropdown-menu dropdown-menu-left">
                <a href="/" class="ml-2 pl-2 mt-3 pt-3">Página inicial</a>
                <hr>

                {{--
                <a href="sobre.html" class="ml-2 pl-2">Sobre o Memorial MPF</a>
                <hr>
                <a href="linha-do-tempo.html" class="ml-2 pl-2">Linha do Tempo</a>
                <hr>
                <a href="galeria-membros-lista.html" class="ml-2 pl-2">Galeria de Membros</a>
                <hr>
                <a href="agenda.html" class="ml-2 pl-2">Agenda</a>
                <hr>
                <a href="vitrine-virtual.html" class="ml-2 pl-2">Vitrine virtual</a>
                <hr>
                <a href="compartilhe-memorias.html" class="ml-2 pl-2">Compartilhe memórias</a><br><br>
                --}}
              </div>
            </div>
            </div>
            <!-- LOGO MEMORIAL -->
            <div class="col align-self-center text-center mx-0 px-0">
              <a class="navbar-brand" href="/"><img src="/img/logo-Memorial.svg" height="45" class="logo-memorial mx-auto"></a>
            </div>
            <!-- SELECT DE UNIDADE DO MPF -->
            <div class="col align-self-center justify-content-end text-right mx-0 px-0">
              <div class="btn-group">

              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="/img/ic-txt.svg"  id="uftxt" height="35" alt="">
                  <img src="/img/ic-ball.svg" id="ufball" height="35" alt="" class="ml-1">
               </button>

               <div class="dropdown-menu dropdown-menu-right">
                  <a href="/" class="ml-2 pl-2 pr-2 mr-2">Nacional</a><br>
                  <a href="/estados/AC" class="ml-2 pl-2">Acre</a><br>
                  <a href="/estados/AL" class="ml-2 pl-2">Alagoas </a><br>
                  <a href="/estados/AP" class="ml-2 pl-2">Amapá</a><br>
                  <a href="/estados/AM" class="ml-2 pl-2">Amazonas</a><br>
                  <a href="/estados/BA" class="ml-2 pl-2">Bahia</a><br>
                  <a href="/estados/CE" class="ml-2 pl-2">Ceará</a><br>
                  <a href="/estados/DF" class="ml-2 pl-2">Distrito Federal</a><br>
                  <a href="/estados/ES" class="ml-2 pl-2">Espírito Santo</a><br>
                  <a href="/estados/GO" class="ml-2 pl-2">Goiás</a><br>
                  <a href="/estados/MA" class="ml-2 pl-2">Maranhão  </a><br>
                  <a href="/estados/MT" class="ml-2 pl-2">Mato Grosso  </a><br>
                  <a href="/estados/MS" class="ml-2 pl-2">Mato Grosso do Sul</a> <br>
                  <a href="/estados/MG" class="ml-2 pl-2">Minas Gerais </a><br>
                  <a href="/estados/PA" class="ml-2 pl-2">Pará</a><br>
                  <a href="/estados/PB" class="ml-2 pl-2">Paraíba </a><br>
                  <a href="/estados/PR" class="ml-2 pl-2">Paraná </a><br>
                  <a href="/estados/PE" class="ml-2 pl-2">Pernambuco</a><br>
                  <a href="/estados/PI" class="ml-2 pl-2">Piauí </a><br>
                  <a href="/estados/RJ" class="ml-2 pl-2">Rio de Janeiro</a> <br>
                  <a href="/estados/RN" class="ml-2 pl-2">Rio Grande do Norte</a> <br>
                  <a href="/estados/RS" class="ml-2 pl-2">Rio Grande do Sul</a><br>
                  <a href="/estados/RO" class="ml-2 pl-2">Rondônia </a><br>
                  <a href="/estados/RR" class="ml-2 pl-2">Roraima </a><br>
                  <a href="/estados/SC" class="ml-2 pl-2">Santa Catarina</a> <br>
                  <a href="/estados/SP" class="ml-2 pl-2">São Paulo </a><br>
                  <a href="/estados/SE" class="ml-2 pl-2">Sergipe </a><br>
                  <a href="/estados/TO" class="ml-2 pl-2">Tocantins</a><br>
                </div>
            </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main role="main">

    <div class="container-fluid" style="background-color: white; ">


      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col">
              <a href="/"><img src="/img/pagina-inicial.svg" height="10" class="mr-2" alt=""><span class="small-nome">Página inicial</span></a>
          </div>
        </div>
        <div class="row">
          <div class="col">
              <span class="titulo-pagina">GALERIA DE MEMBROS</span>
          </div>
        </div>

        <!-- NAVEGACAO EM TABS  -->
      <nav>
        <div class="nav nav-tabs w-100 mx-4 text-center nav-justified" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-1-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-home" aria-selected="true">Procuradores-Chefe</a>

@if(count($pregs) > 0 )

          <a class="nav-item nav-link" id="nav-2-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-profile" aria-selected="false">Procuradores Regionais</a>

          @endif
          <a class="nav-item nav-link" id="nav-3-tab" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-contact" aria-selected="false">Procuradores da República</a>
        </div>
      </nav>


    </div>
  </div>
<!-- INICIO LISTA BOLINHA MEMBROS -->
<div class="container-fluid" style="background-color: #363636; ">
  <div class="container mt-2 pt-2">
    <div class="tab-content" id="nav-tabContent">
      <!-- TAB 1 -->
    <div class="col tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
      <div class="row text-center">



         @foreach ($pchefes as $i =>$pchefe)

  <div class="col">
            <a href="/detalhe/{{$pchefe->pess_cd_mat}}"><img alt="" class="rounded-circle membro-ball membro-ativo" height="120" onerror='this.src="/img/sem_foto.jpg"' src="http://svlp-memorial01.pgr.mpf.mp.br/img/perfil/{{$pchefe->pess_cd_mat}}.jpg" width="120"/></a>
            <p class="small-nome text-center membro-ball-nome"> {{$pchefe->pess_nm}}</p>
          </div>

                                @endforeach

{{--

          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-w.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-k.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Aristides Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-w.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-k.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>

 --}}


      </div>

    </div>


@if(count($pregs) > 0 )


    <!-- TAB 2 -->
    <div class="col tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
      <div class="row text-center">



   @foreach ($pregs as $i =>$preg)


   <div class="col">
            <a href="/detalhe/{{$preg->pess_cd_mat}}"><img alt="" class="rounded-circle membro-ball membro-ativo" height="120" onerror='this.src="/img/sem_foto.jpg"' src="http://svlp-memorial01.pgr.mpf.mp.br/img/perfil/{{$preg->pess_cd_mat}}.jpg" width="120"/></a>
            <p class="small-nome text-center membro-ball-nome">{{$preg->pess_nm}}</p>
          </div>



                                @endforeach



{{--

          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>

          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>

          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          </div>

 --}}
 </div>
    </div>

@endif


    <!-- TAB 3 -->
    <div class="col tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
      <div class="row text-center">


   @foreach ($prs as $i =>$pr)


   <div class="col">
            <a href="/detalhe/{{$pr->pess_cd_mat}}"><img alt="" class="rounded-circle membro-ball membro-ativo" height="120" onerror='this.src="/img/sem_foto.jpg"' src="http://svlp-memorial01.pgr.mpf.mp.br/img/perfil/{{$pr->pess_cd_mat}}.jpg" width="120"/></a>
            <p class="small-nome text-center membro-ball-nome">{{$pr->pess_nm}}</p>
          </div>



                                @endforeach



{{--
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>

          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>

          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>

          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-z.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-x.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">Lorem Ipsom Dolorem</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>
          <div class="col">
            <a href="galeria-membros-detalhe.html"><img class="rounded-circle membro-ball" src="img/membro-y.jpg" width="120" height="120" alt=""></a>
            <p class="small-nome text-center membro-ball-nome">AristRID Junqueira Alvarenga</p>
          </div>


--}}

          </div>
    </div>

    </div>

    </div>
  </div>
    <!-- FIM BOLINHAS MEMBROS -->


        <footer class="container text-center mt-0">
          <hr>
          <a href="http://www.mpf.mp.br" target="_blank"><img src="/img/logo-MPF.svg" height="85" alt=""></a>
        </footer>

    </main>
    <!-- FOOTER -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/vendor/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.min.js"></script>
  </body>
</html>
