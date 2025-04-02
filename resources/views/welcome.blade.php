@extends('layout')
@section('content')
    @if(session('logout'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sikeres művelet!',
            text: '{{session('logout')}}',
            confirmButtonText: 'Ok'
        })
    </script>
    @endif
  <!--slideshowdown-->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
          <div class="carousel-item active bg1">
            <div class="container">
              <div class="carousel-caption">
                <h1>Nézd meg a kutyáinkat!</h1>
                <a href="/allatok" class="btn btn-dark">Kattints ide!</a>
              </div>
            </div>
          </div>
          <div class="carousel-item bg2">
            <div class="container">
              <div class="carousel-caption">
                <h1>Látogass meg minket!</h1>
                <a href="https://maps.app.goo.gl/1fQM3uQHkHQVvYU27" target="_blank" class="btn btn-dark">Kattints ide!</a>
              </div>
            </div>
          </div>
          <div class="carousel-item bg3">
            <div class="container">
              <div class="carousel-caption">
                <h1>Nézd meg a macskáinkat!</h1>
                <a href="/allatok" class="btn btn-dark">Kattints ide!</a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Elöző</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Következő</span>
        </button>
      </div>
      <hr>

      <!-- Textboxok -->
      <main id="textboxok" class="welcomepage">
        <div class="container">
            <div class="mx-auto text-center">
                <div class="textboxok">
                    <h2>Rólunk röviden</h2>
                    <p>A Boldog Menhely egy szeretettel teli, biztonságos menedékhely macskák és kutyák számára, akik új esélyt érdemelnek egy meleg otthonra. Célunk, hogy minden állatunkat szeretettel és törődéssel körülvéve felkészítsük egy új családba való beilleszkedésre.</p>
                </div>
                <div class="row">
                    <div class="col textboxok">
                        <h2 class="py-2">Miért válassz minket?</h2>
                        <p><b>Macskák és kutyák:</b> Két tappancsos barátunk is megtalálható nálunk, akik várakoznak, hogy örökbefogadják őket.</p>
                        <p><b>Személyre szabott gondozás:</b> Minden állatunk egyéni igényei szerint kap táplálékot, orvosi ellátást és szeretetet.</p>
                        <p><b>Programjaink:</b> Rendszeresen szervezünk nyílt napokat, örökbefogadási programokat és állatvédelmi workshopokat.</p>
                        <p><b>Önkéntes lehetőség:</b> Ha nem tudsz örökbefogadni, de szeretnél segíteni, csatlakozz önkénteseink közé!</p>
                    </div>
                    <div class="col textboxok">
                        <h2 class="py-2">Állataink</h2>
                        <p><b>Macskák:</b> Cicusok, kandúrok, kiscicák – mindegyik egyedi személyiséggel és szeretettel teli szívvel várja új gazdiját.</p>
                        <p><b>Kutyák:</b> Kicsik, nagyok, fiatalok és idősek – mindegyik kutyusunk egy igazi társ, aki hűséggel és örömmel fogadja majd az új családot.</p>
                    </div>
                </div>
            </div>
        </div>
          <hr class="vonal">

            <!-- Legrégebbi lakók -->
            <div class="conatiner">
                <div class="bg-warning mx-auto">
                    <h1 class="text-center py-2">Legrégebbi lakóink:</h1>
                    <div class="row mx-auto text-center">
                        <h2 class="py-2">Kutyák:</h2>
                        @foreach ($oldallatokk as $kutyak)
                            <div class="col">
                                <a href="/allatok/{{$kutyak->allat_id}}" class="text-decoration-none">
                                    <div class="card">
                                        <img src="{{asset('img/allatok/k/k'.$kutyak->allat_id.'.png')}}" alt="{{$kutyak->allat_id.'.png'}}" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-text">{{$kutyak->nev}}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="row mx-auto text-center">
                        <h2 class="py-2">Macskák:</h2>
                        @foreach ($oldallatokc as $macskak)
                            <div class="col">
                                <a href="/allatok/{{$macskak->allat_id}}" class="text-decoration-none">
                                    <div class="card">
                                        <img src="{{asset('img/allatok/c/c'.$macskak->allat_id.'.png')}}" alt="{{$macskak->allat_id.'.png'}}" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-text">{{$macskak->nev}}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
          <hr>

          <!-- Önkéntes -->
            @if(!Auth::check())
           <div class="bg-light">
              <div class="text-center">
                <div class="onkentes">
                  <h2>Legyél önkéntes te is!</h2>
                  <p>Szeretnéd, hogy a segítséged valódi változást hozzon? Csatlakozz önkénteseink közé, és segíts, hogy minden állat megtalálja az örök otthonát. Akár néhány óra, akár rendszeres segítség, a te időd és energiád óriási különbséget jelenthet egy állat életében. Legyél részese egy szeretettel teli közösségnek, és éld át, milyen érzés örömet szerezni másoknak!</p>
                  <a href="/sign" class="btn btn-dark">Jelentkezz!</a>
            @else
            <div class="bg-light">
                <div class="text-center">
                  <div class="onkentes">
                    <h2>Foglalj önkéntes tevékenységeket!</h2>
                    <p>Szeretnéd, hogy a segítséged valódi változást hozzon? Csatlakozz önkénteseink közé, és segíts, hogy minden állat megtalálja az örök otthonát. Akár néhány óra, akár rendszeres segítség, a te időd és energiád óriási különbséget jelenthet egy állat életében. Legyél részese egy szeretettel teli közösségnek, és éld át, milyen érzés örömet szerezni másoknak!</p>
                    <a href="/allatok/foglalas" class="btn btn-dark">Foglalj!</a>
            @endif
                </div>
              </div>
           </div>
      </main>

@endsection
