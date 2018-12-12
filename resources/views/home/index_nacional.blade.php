<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/cover.css">

    <title>Galeria Membros {{$aba}}</title>
  </head>
    <body class="text-center" style="overflow-x: hidden;">

      <div class="d-flex w-99 h-100 mx-auto flex-column">
        <header class="masthead">
          <div class="row">
            <div class="col">
              <div class="text-center mt-2">
                <a href="{{route('intro')}}"><img src="img/tit-galeriamembro-big.png" width="360" alt=""></a>
              </div>
            </div>
          </div>

          <div class="row mt-2 pt-2 mx-auto text-center">
            <div class="col">
              <div class="col nav nav-tabs nav-justified text-center" id="nav-tab" role="tablist" style="background: transparent;">
                <a class="nav-item nav-link {{($aba == 1)?"active show":""}}" id="nav-1-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-home" aria-selected="true" style="border-color: #666; text-shadow: none;"><img src="/img/bullet-horizontal.png" alt=""> Procuradores-Gerais da República</a>
                <a class="nav-item nav-link {{($aba == 2)?"active show":""}}" id="nav-2-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-profile" aria-selected="false" style="border-color: #666; text-shadow: none;"><img src="img/bullet-horizontal.png" alt=""> Conselho Superior do MPF</a>
                <a class="nav-item nav-link {{($aba == 3)?"active show":""}}" id="nav-3-tab" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-contact" aria-selected="false" style="border-color: #666; text-shadow: none;"><img src="img/bullet-horizontal.png" alt=""> Subprocuradores-Gerais da República</a>
              </div>
            </div>
          </div>
        </header>

        <!-- LINHA COM AS COLUNAS -->
        <div class="row w-100 mx-auto align-items-start px-0">

            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade {{($aba == 1)?"active show":""}}" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
                  <div class="container-fluid">
                  <div class="row text-center mx-auto mr-0 justify-content-between">




 @foreach ($pgrs as $i =>$pgr)







                                <div class="col">
                                    <a href="/detalhe_pgr/{{$pgr->pess_cd_mat}}">
                                        <img alt="" class="rounded-circle membro-ball {{($pgr->hret_dt_fim == '2019-09-18 00:00:00')? 'membro-ativo':''}}" height="120" onerror='this.src="http://midia.pgr.mpf.mp.br/memorial/galeria-membros/pgr/00.jpg"' src="http://midia.pgr.mpf.mp.br/memorial/galeria-membros/pgr/{{$pgr->pess_cd_mat}}.jpg" width="120"/>
                                    </a>
                                    <p class="small-nome text-center membro-ball-nome">
                                        {{$pgr->pess_nm}}
                                    </p>
                                </div>
                                @endforeach



<br><br><br><br><br><br><br><br><br><br><br><br><br><br>



                </div>
              </div>
            </div>









  <!-- ABA 2 -->

          <div class="col-12 tab-pane fade {{($aba == 2)?"active show":""}}" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
            <div class="row text-center ">





      @php
$ultima_matricula = null;
$ultima_data = null;
@endphp
                                @foreach ($cons as $i =>$con)

@if($con->pess_cd_mat == $ultima_matricula)
@continue
@endif



@if($con->hret_dt_fim != $ultima_data)


            <!-- SEPARADOR -->
              <div class="row d-flex mx-auto align-items-start w-100">
                  <div class="col text-right">
                    <img src="img/separador-ano.jpg" width="400" alt="">
                  </div>
                  <div class="col-2">
                    <h3>{{date('Y', strtotime($con->hret_dt_ini)) . " / " . date('Y', strtotime($con->hret_dt_fim)) }}</h3><br><br>
                  </div>
                  <div class="col text-left">
                    <img src="img/separador-ano.jpg" width="400" alt="">
                  </div>
              </div>
              <!-- FIM SEPARADOR -->


@endif






            <div class="col">
              <a href="/detalhe_conselho/{{$con->pess_cd_mat}}"><img class="rounded-circle  {{($con->hret_dt_fim == '2019-01-01 00:00:00')? 'membro-ativo':''}}" onerror='this.src="http://midia.pgr.mpf.mp.br/memorial/galeria-membros/pgr/00.jpg"'  src="http://midia.pgr.mpf.mp.br/memorial/galeria-membros/pgr/{{$con->pess_cd_mat}}.jpg" width="120" height="120" alt=""></a>
              <p class="small-nome">{{$con->pess_nm}}</p>
            </div>



@php
$ultima_matricula = $con->pess_cd_mat;
$ultima_data = $con->hret_dt_fim ;
@endphp


                                @endforeach


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>




          </div>
          </div>





            <!-- ABA 3 -->

            <div class="col-12 tab-pane fade {{($aba == 3)?"active show":""}}" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
              <div class="row text-center">


@php
$ultima_matricula = null;
@endphp
                                @foreach ($subs as $i =>$sub)

@if($sub->pess_cd_mat == $ultima_matricula)
@continue
@endif





          <div class="col">
                  <a href="/detalhe_sub/{{$sub->pess_cd_mat}}"><img class="rounded-circle {{is_null($sub->pess_dt_desliga)? 'membro-ativo':''}}" onerror='this.src="http://midia.pgr.mpf.mp.br/memorial/galeria-membros/pgr/00.jpg"' src="http://midia.pgr.mpf.mp.br/memorial/galeria-membros/pgr/{{$sub->pess_cd_mat}}.jpg" width="120" height="120" alt=""></a>
                  <p class="small-nome">{{$sub->pess_nm}}</p>
                </div>




@php
$ultima_matricula = $sub->pess_cd_mat;

@endphp


                                @endforeach



<br><br><br><br><br><br><br><br><br><br><br><br><br><br>








            </div>
          </div>









        </div>
      </div>

      </div>

        <!-- FOOTER LOGO MEMORIAL-->
         <footer class="mastfoot mt-auto align-middle align-items-middle fixed-bottom" style="background-color: #a61c1f !important; height: 60px;">
          <div class="inner">
            <img src="img/logo-memorial-mpf.png" class="align-middle mt-2" alt="">
          </div>
        </footer>

      <!-- <footer class="footer">
      <div class="container">
        <img src="img/logo-memorial-mpf.png" class="align-middle mt-2" alt="">
      </div>
      </footer> -->

      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
