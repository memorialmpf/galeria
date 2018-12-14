<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/cover.css">

    <title>Galeria Membros 2</title>
  </head>
    <body class="text-center">

      <div class="d-flex w-100 h-100 mx-auto flex-column">
        <header class="masthead mb-4 pb-4">
          <div class="text-center mt-2 fixed-top mt-2 pt-2">
            <a href="{{route('intro')}}"><img src="/img/tit-galeriamembro-big.png" width="360" alt=""></a>
          </div>
        </header>


        <!-- LINHA COM AS COLUNAS -->
        <div class="row w-100 max-auto align-items-start px-0 mx-0 mt-4 pt-4">

          <!-- COLUNA NAVEGACAO 1
          <div class="col-auto mx-0 px-0 ml-2">
            <a href="lista.html"><img src="/img/tarja-1on.png" alt=""></a>
          </div>  -->



          <!-- COLUNA MEMBROSO -->
          <div class="col-12" style="height: 1050px;">
            <div class="row">
              <!-- CONTEUDO DETALHE DO MEMBRO -->
              <div class="col-12">
                <div class="row">
                <!-- COLUNA FOTO GRANDE -->
                <div class="col-5">
                  <img class="img-fluid rounded-circle mb-4"  onerror='this.src="http://midia.pgr.mpf.mp.br/memorial/galeria-membros/pgr/00.jpg"' src="http://midia.pgr.mpf.mp.br/memorial/galeria-membros/pgr/{{$membro->pess_cd_mat}}.jpg" width="450" height="450" alt="">
                  <p class="mt-2">
{{--
                    <a class="btn" data-toggle="modal" data-target="#exampleModalCenter"><img src="/img/btn-assista-video.png" alt=""></a>
--}}


@if(!is_null($membro->biografia) and $membro->biografia->video > 0 )

  <a class="btn" data-toggle="modal" data-target="#exampleModalCenter"><img src="/img/btn-assista-video.png" alt=""></a>

@endif





                  </p>
                </div>

                <!-- COLUNA CURRICULO -->
                <div class="col-6 text-left">
                  <h5 class="titulo-biografia">NOME</h5>
                  <h5>{{$membro->pess_nm}}</h5>

                  <h5 class="titulo-biografia">PERÍODO</h5>





@if(count($historicos ) > 0)

@foreach ($historicos as $i =>$historico)

 <p class="membro-detalhe-texto">

  {{$historico->fcco_ds }}   {{($historico->fcco_ds == 'SUBPROCURADOR-GERAL DA REPUBLICA')?'em exercício':''}}
@if(is_null($historico->hret_dt_fim))

desde  {{date('d/m/Y', strtotime($historico->hret_dt_ini))}}

@else





@if (substr(date('d/m/', strtotime($historico->hret_dt_ini)), 0 , 5) == '01/01')

de {{date('Y', strtotime($historico->hret_dt_ini))}}

@else

de {{date('d/m/Y', strtotime($historico->hret_dt_ini))}}
@endif





@if (substr(date('d/m/', strtotime($historico->hret_dt_fim)), 0 , 5) == '01/01')

até  {{date('Y', strtotime($historico->hret_dt_fim))}}

@else

até  {{date('d/m/Y', strtotime($historico->hret_dt_fim))}}

@endif





@endif

 </p>

@endforeach
@endif





@if(!is_null($membro->biografia))
        <h5 class="titulo-biografia">BIOGRAFIA</h5>

<p>

   {{$membro->biografia->biografia}}
</p>



@endif
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>


                  <!-- <p>Nasceu na cidade de São João Del-Rey no Estado de Minas Gerais em 2 de março de 1942, filho de Luiz de Melo Alvarenga e de D. Alice Junqueira Alvarenga.
                  Estudou em sua cidade natal e na vizinha, Mariana, bacharelando-se em Direito pela Universidade Federal de Minas Gerais em 1967.
                  Exerceu cargos administrativos e jurídicos em Belo Horizonte; a partir de 1968, após aprovado em concurso público, foi promotor de justiça nas Comarcas de Santa Cruz de Goiás, Porangatu, Palmeiras de Goiás e Goianésia, todas no estado de Goiás, até 7 de novembro de 1973, quando tomou posse no cargo de procurador da República, aprovado que fora no concurso público especifico; lecionou em Goiás, de 1971 a 1972; no curso de estágio da Faculdade de Direito das Faculdades Metropolitanas Unidas em São Paulo (1974), na Academia Nacional de Polícia em Brasília (1982) e no Centro de Ensino Unificado de Brasília-CEUB (1982-1985); vem participando de vários conselhos, grupos de trabalho e comissões examinadoras de concursos públicos e profere inúmeras palestras e conferências.

                  <p>Publicou, em 3 de junho de 1977, o artigo "Crime de Sonegação Fiscal", na Folha da Tarde, em São Paulo e o livro "A competência criminal da justiça federal de primeira instância" Edição Saraiva, em 1978.</p>

                  <p>Foi agraciado com diversas condecorações.</p>

                  <p>Indicado para exercer o cargo de procurador-geral da República, em 20 de junho de 1989, já na vigência da Constituição Federal de 1988, que estabeleceu novo procedimento para a nomeação, no § 12 do seu art. 128, teve seu nome aprovado pelo Senado Federal, tomando posse em 28 de junho de 1989, para exercer um mandato de dois anos; ao seu término foi reconduzido, submetendo-se novamente, ao que se convencionou chamar de "sabatina", ao crivo do Senado Federal, para um mandato de mais dois anos (28/06/1991 a 28/06/95).
                  </p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
                </div>

                <div class="col-1 linha-horizontal text-right pb-2 mb-4"><a href="{{route('home')}}"><img src="/img/btn-todos.png" alt="" class="mt-2"></a></div>


              </div>

              </div>

            </div>
            <!-- LINHA DIVISORIA E BOTAO TODOS -->

            <!-- CADEIA DE SUCESSORES -->
            <!-- <div class="row mt-1">
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-y.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Aristides Junqueira Alvarenga</p>
                </div>
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-x.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Lorem Ipsom Dolorem</p>
                </div>
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-z.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Lorem Ipsom Dolorem</p>
                </div>
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-w.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Lorem Ipsom Dolorem</p>
                </div>
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-k.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Lorem Ipsom Dolorem</p>
                </div>
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-y.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Lorem Ipsom Dolorem</p>
                </div>
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-y.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Aristides Junqueira Alvarenga</p>
                </div>
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-x.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Lorem Ipsom Dolorem</p>
                </div>
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-y.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Lorem Ipsom Dolorem</p>
                </div>
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-y.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Aristides Junqueira Alvarenga</p>
                </div>
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-x.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Lorem Ipsom Dolorem</p>
                </div>
                <div class="col">
                  <img class="img-fluid rounded-circle" src="/img/membro-y.jpg" width="100" height="100" alt="">
                  <p class="small-nome">Lorem Ipsom Dolorem</p>
                </div>
            </div> -->
          </div>

          <!-- COLUNA NAVEGACAO 2
          <div class="col-auto mx-0 px-0">
            <div class="linha-vertical"><a href="lista-pgrs.html"><img src="/img/tarja-2off.png" alt="" class="btn"></a></div>
          </div>-->

              <!-- COLUNA NAVEGACAO 3
              <div class="col-auto  mx-0 px-0">
                <div class="linha-vertical"><a href="lista-conselho.html"><img src="/img/tarja-3off.png" alt="" class="btn"></a></div>
              </div>-->
        </div>


        <!-- FOOTER LOGO MEMORIAL-->
        <footer class="mastfoot mt-auto align-middle align-items-middle fixed-bottom" style="background-color: #a61c1f !important; height: 60px;">
          <div class="inner">
            <img src="/img/logo-memorial-mpf.png" class="align-middle mt-2" alt="">
          </div>
        </footer>

        <!-- CONTEUDO VIDEO EM MODAL -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body" style="background-color: #111 !important">
                <video  id="myVideo" poster="/img/10_18_Premio_MPF_Cidadao_Vinheta-SITE_2.jpg" style="width: 1024px; height: auto; background-size: cover;">
                  <source src="http://midia.pgr.mpf.mp.br/memorial/galeria-membros/pgr/{{$membro->pess_cd_mat}}.mp4"" type="video/mp4">
                </video>
              </div>
            </div>
          </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
     <script>
$('#exampleModalCenter').on('shown.bs.modal', function () {
  $('#video1')[0].play();
})
$('#exampleModalCenter').on('hidden.bs.modal', function () {
  $('#video1')[0].pause();
})
</script>

    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>





</div>
