@extends('layout')
@section('content')


<hr>
<main class="information  d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row mx-auto text-center">
            <div class="col">
                <a href="/information/aszf"><i class='bx bx-book'></i>ÁSZF</a>
            </div>
            <div class="col">
                <a href="/information/adatved"><i class='bx bx-check-shield'></i>Adatvédelem</a>
            </div>
            <div class="col">
                <a href="/information/gyik"><i class='bx bx-question-mark'></i><br>FAQ</a>
            </div>
            <div class="col">
                <a href="/information/cookie"><i class='bx bx-cookie'></i>Cookie</a>
            </div>
            <div class="col">
                <a href="{{asset('other/orokbefog.pdf')}}" download="{{asset('other/orokbefog.pdf')}}"><i class='bx bx-building-house'></i>Örökbefogadási szerződés</a>
            </div>
            <div class="col">
                <a href="/information/adomany"><i class='bx bx-gift' ></i><br>Adományozási Szabályzat</a>
            </div>
            <div class="col">
                <a href="/information/jollet"><i class='bx bxs-dog' ></i><br>Állatjóléti Szabályzat</a>
            </div>
        </div>
    </div>
</main>

@endsection
