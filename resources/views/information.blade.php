@extends('layout')
@section('content')


<hr>
<main class="information  d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row mx-auto text-center">
            <div class="col">
                <a href="/aszf"><i class='bx bx-book'></i>ÁSZF</a>
            </div>
            <div class="col">
                <a href="/adatved"><i class='bx bx-check-shield'></i>Adatvédelem</a>
            </div>
            <div class="col">
                <a href="/gyik"><i class='bx bx-question-mark'></i><br>FAQ</a>
            </div>
            <div class="col">
                <a href="/cookie"><i class='bx bx-cookie'></i>Cookie</a>
            </div>
            <div class="col">
                <a href="{{asset('other/orokbefog.pdf')}}" download="{{asset('other/orokbefog.pdf')}}"><i class='bx bx-building-house'></i>Örökbefogadási szerződés</a>
            </div>
            <div class="col">
                <a href="/adomany"><i class='bx bx-gift' ></i><br>Adományozási Szabályzat</a>
            </div>
            <div class="col">
                <a href="/jollet"><i class='bx bxs-dog' ></i><br>Állatjóléti Szabályzat</a>
            </div>
        </div>
    </div>
</main>

@endsection
