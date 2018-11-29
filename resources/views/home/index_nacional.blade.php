<!DOCTYPE doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <meta content="" name="description">
                    <meta content="" name="author">
                        <link href="img/favicon.png" rel="icon">
                            <title>
                                Memorial MPF
                            </title>
                            <!-- Bootstrap core CSS -->
                            <link href="css/bootstrap.css" rel="stylesheet">
                                <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700" rel="stylesheet">
                                    <!-- Custom styles for this template -->
                                    <link href="css/carousel.css" rel="stylesheet">
                                    </link>
                                </link>
                            </link>
                        </link>
                    </meta>
                </meta>
            </meta>
        </meta>
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
                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-light dropdown-toggle" data-toggle="dropdown" type="button">
                                    <img alt="" src="/img/ic-hamburguer.svg" width="32"/>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="ml-2 pl-2 mt-3 pt-3" href="/">
                                        Página inicial
                                    </a>
                                    <hr>
                                    {{--
                                        <a class="ml-2 pl-2" href="sobre.html">
                                            Sobre o Memorial MPF
                                        </a>
                                        <hr>
                                            <a class="ml-2 pl-2" href="linha-do-tempo.html">
                                                Linha do Tempo
                                            </a>
                                            <hr>
                                                <a class="ml-2 pl-2" href="galeria-membros-lista.html">
                                                    Galeria de Membros
                                                </a>
                                                <hr>
                                                    <a class="ml-2 pl-2" href="agenda.html">
                                                        Agenda
                                                    </a>
                                                    <hr>
                                                        <a class="ml-2 pl-2" href="vitrine-virtual.html">
                                                            Vitrine virtual
                                                        </a>
                                                        <hr>
                                                            <a class="ml-2 pl-2" href="compartilhe-memorias.html">
                                                                Compartilhe memórias
                                                            </a>
                                                            <br>
                                                                <br>
                                                                </br>
                                                            </br>
                                                        </hr>
                                                    </hr>
                                                </hr>
                                            </hr>
                                        </hr>
                                    </hr>
                                    --}}
                                </div>
                            </div>
                        </div>
                        <!-- LOGO MEMORIAL -->
                        <div class="col align-self-center text-center mx-0 px-0">
                            <a class="navbar-brand" href="/">
                                <img class="mx-auto logo-memorial" height="45" src="img/logo-Memorial.svg"/>
                            </a>
                        </div>
                        <!-- SELECT DE UNIDADE DO MPF -->
                        <div class="col align-self-center justify-content-end text-right mx-0 px-0">
                            <div class="btn-group">
                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-light dropdown-toggle" data-toggle="dropdown" type="button">
                                    <img alt="" height="35" id="uftxt" src="img/ic-txt.svg">
                                        <img alt="" class="ml-1" height="35" id="ufball" src="img/ic-ball.svg">
                                        </img>
                                    </img>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="ml-2 pl-2 pr-2 mr-2" href="/">
                                        Nacional
                                    </a>
                                    <br>
                                        <a class="ml-2 pl-2" href="/estados/AC">
                                            Acre
                                        </a>
                                        <br>
                                            <a class="ml-2 pl-2" href="/estados/AL">
                                                Alagoas
                                            </a>
                                            <br>
                                                <a class="ml-2 pl-2" href="/estados/AP">
                                                    Amapá
                                                </a>
                                                <br>
                                                    <a class="ml-2 pl-2" href="/estados/AM">
                                                        Amazonas
                                                    </a>
                                                    <br>
                                                        <a class="ml-2 pl-2" href="/estados/BA">
                                                            Bahia
                                                        </a>
                                                        <br>
                                                            <a class="ml-2 pl-2" href="/estados/CE">
                                                                Ceará
                                                            </a>
                                                            <br>
                                                                <a class="ml-2 pl-2" href="/estados/DF">
                                                                    Distrito Federal
                                                                </a>
                                                                <br>
                                                                    <a class="ml-2 pl-2" href="/estados/ES">
                                                                        Espírito Santo
                                                                    </a>
                                                                    <br>
                                                                        <a class="ml-2 pl-2" href="/estados/GO">
                                                                            Goiás
                                                                        </a>
                                                                        <br>
                                                                            <a class="ml-2 pl-2" href="/estados/MA">
                                                                                Maranhão
                                                                            </a>
                                                                            <br>
                                                                                <a class="ml-2 pl-2" href="/estados/MT">
                                                                                    Mato Grosso
                                                                                </a>
                                                                                <br>
                                                                                    <a class="ml-2 pl-2" href="/estados/MS">
                                                                                        Mato Grosso do Sul
                                                                                    </a>
                                                                                    <br>
                                                                                        <a class="ml-2 pl-2" href="/estados/MG">
                                                                                            Minas Gerais
                                                                                        </a>
                                                                                        <br>
                                                                                            <a class="ml-2 pl-2" href="/estados/PA">
                                                                                                Pará
                                                                                            </a>
                                                                                            <br>
                                                                                                <a class="ml-2 pl-2" href="/estados/PB">
                                                                                                    Paraíba
                                                                                                </a>
                                                                                                <br>
                                                                                                    <a class="ml-2 pl-2" href="/estados/PR">
                                                                                                        Paraná
                                                                                                    </a>
                                                                                                    <br>
                                                                                                        <a class="ml-2 pl-2" href="/estados/PE">
                                                                                                            Pernambuco
                                                                                                        </a>
                                                                                                        <br>
                                                                                                            <a class="ml-2 pl-2" href="/estados/PI">
                                                                                                                Piauí
                                                                                                            </a>
                                                                                                            <br>
                                                                                                                <a class="ml-2 pl-2" href="/estados/RJ">
                                                                                                                    Rio de Janeiro
                                                                                                                </a>
                                                                                                                <br>
                                                                                                                    <a class="ml-2 pl-2" href="/estados/RN">
                                                                                                                        Rio Grande do Norte
                                                                                                                    </a>
                                                                                                                    <br>
                                                                                                                        <a class="ml-2 pl-2" href="/estados/RS">
                                                                                                                            Rio Grande do Sul
                                                                                                                        </a>
                                                                                                                        <br>
                                                                                                                            <a class="ml-2 pl-2" href="/estados/RO">
                                                                                                                                Rondônia
                                                                                                                            </a>
                                                                                                                            <br>
                                                                                                                                <a class="ml-2 pl-2" href="/estados/RR">
                                                                                                                                    Roraima
                                                                                                                                </a>
                                                                                                                                <br>
                                                                                                                                    <a class="ml-2 pl-2" href="/estados/SC">
                                                                                                                                        Santa Catarina
                                                                                                                                    </a>
                                                                                                                                    <br>
                                                                                                                                        <a class="ml-2 pl-2" href="/estados/SP">
                                                                                                                                            São Paulo
                                                                                                                                        </a>
                                                                                                                                        <br>
                                                                                                                                            <a class="ml-2 pl-2" href="/estados/SE">
                                                                                                                                                Sergipe
                                                                                                                                            </a>
                                                                                                                                            <br>
                                                                                                                                                <a class="ml-2 pl-2" href="/estados/TO">
                                                                                                                                                    Tocantins
                                                                                                                                                </a>
                                                                                                                                                <br>
                                                                                                                                                </br>
                                                                                                                                            </br>
                                                                                                                                        </br>
                                                                                                                                    </br>
                                                                                                                                </br>
                                                                                                                            </br>
                                                                                                                        </br>
                                                                                                                    </br>
                                                                                                                </br>
                                                                                                            </br>
                                                                                                        </br>
                                                                                                    </br>
                                                                                                </br>
                                                                                            </br>
                                                                                        </br>
                                                                                    </br>
                                                                                </br>
                                                                            </br>
                                                                        </br>
                                                                    </br>
                                                                </br>
                                                            </br>
                                                        </br>
                                                    </br>
                                                </br>
                                            </br>
                                        </br>
                                    </br>
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
                            <a href="/">
                                <img alt="" class="mr-2" height="10" src="img/pagina-inicial.svg">
                                    <span class="small-nome">
                                        Página inicial
                                    </span>
                                </img>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span class="titulo-pagina text-uppercase">
                                GALERIA DE MEMBROS - NACIONAL
                            </span>
                        </div>
                    </div>
                    <!-- NAVEGACAO EM TABS  -->
                    <nav>
                        <div class="nav nav-tabs w-100 text-center mx-4 nav-justified" id="nav-tab" role="tablist">
                            <a aria-controls="nav-home" aria-selected="true" class="nav-item nav-link active" data-toggle="tab" href="#nav-1" id="nav-1-tab" role="tab">
                                Subprocuradores-Gerais da República
                            </a>
                            <a aria-controls="nav-profile" aria-selected="false" class="nav-item nav-link" data-toggle="tab" href="#nav-2" id="nav-2-tab" role="tab">
                                Procuradores-Gerais da República
                            </a>
                            <a aria-controls="nav-contact" aria-selected="false" class="nav-item nav-link" data-toggle="tab" href="#nav-3" id="nav-3-tab" role="tab">
                                Conselho Superior do MPF
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- INICIO LISTA BOLINHA MEMBROS -->
            <div class="container-fluid" style="background-color: #363636; ">
                <div class="container mt-2 pt-2">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- TAB 1 -->
                        <div aria-labelledby="nav-1-tab" class="col tab-pane fade show active" id="nav-1" role="tabpanel">
                            <div class="row text-center">

@php
$ultima_matricula = null;
@endphp
                                @foreach ($subs as $i =>$sub)

@if($sub->pess_cd_mat == $ultima_matricula)
@continue
@endif

                                <div class="col">
                                    <a href="/detalhe_sub/{{$sub->pess_cd_mat}}">
                                        <img alt="" class="rounded-circle membro-ball {{is_null($sub->pess_dt_desliga)? 'membro-ativo':''}}" height="120" onerror='this.src="img/sem_foto.jpg"' src="http://midia.pgr.mpf.mp.br/memorial/galeria-membros/pgr/{{$sub->pess_cd_mat}}.jpg" width="120"/>
                                    </a>
                                    <p class="small-nome text-center membro-ball-nome">
                                        {{$sub->pess_nm}}
                                    </p>
                                </div>


@php
$ultima_matricula = $sub->pess_cd_mat;

@endphp


                                @endforeach




                            </div>
                        </div>
                        <!-- TAB 2 -->
                        <div aria-labelledby="nav-2-tab" class="col tab-pane fade" id="nav-2" role="tabpanel">
                            <div class="row text-center">
                                @foreach ($pgrs as $i =>$pgr)
                                <div class="col">
                                    <a href="/detalhe/{{$pgr->pess_cd_mat}}">
                                        <img alt="" class="rounded-circle membro-ball membro-ativo" height="120" onerror='this.src="img/sem_foto.jpg"' src="http://svlp-memorial01.pgr.mpf.mp.br/img/perfil/{{$pgr->pess_cd_mat}}.jpg" width="120"/>
                                    </a>
                                    <p class="small-nome text-center membro-ball-nome">
                                        {{$pgr->pess_nm}}
                                    </p>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- TAB 3 -->
                        <div aria-labelledby="nav-3-tab" class="col tab-pane fade" id="nav-3" role="tabpanel">
                            <div class="row text-center">

                             @php
$ultima_matricula = null;
@endphp
                                @foreach ($cons as $i =>$con)

@if($con->pess_cd_mat == $ultima_matricula)
@continue
@endif

                                <div class="col">
                                    <a href="/detalhe_sub/{{$con->pess_cd_mat}}">
                                        <img alt="" class="rounded-circle membro-ball {{is_null($con->pess_dt_desliga)? 'membro-ativo':''}}" height="120" onerror='this.src="img/sem_foto.jpg"' src="http://midia.pgr.mpf.mp.br/memorial/galeria-membros/pgr/{{$con->pess_cd_mat}}.jpg" width="120"/>
                                    </a>
                                    <p class="small-nome text-center membro-ball-nome">
                                        {{$con->pess_nm}}
                                    </p>
                                </div>


@php
$ultima_matricula = $con->pess_cd_mat;

@endphp


                                @endforeach


                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM BOLINHAS MEMBROS -->
            <footer class="container text-center mt-0">
                <hr>
                    <a href="http://www.mpf.mp.br" target="_blank">
                        <img alt="" height="85" src="img/logo-MPF.svg"/>
                    </a>
                </hr>
            </footer>
        </main>
        <!-- FOOTER -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        </script>
        <script src="js/jquery.min.js">
        </script>
        <script src="js/vendor/popper.min.js">
        </script>
        <script src="js/bootstrap.js">
        </script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="js/holder.min.js">
        </script>
        <script src="js/interno.js">
        </script>
    </body>
</html>
