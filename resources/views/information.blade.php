@extends('layout')
@section('content')

 <main class="information  d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row  row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 text-center">
            <div class="col py-2 px-2">
                <a href="/information/aszf"><i class='bx bx-book'></i><br>ÁSZF</a>
            </div>
            <div class="col py-2 px-2">
                <a href="/information/adatved"><i class='bx bx-check-shield'></i><br>Adatvédelem</a>
            </div>
            <div class="col py-2 px-2">
                <a href="/information/gyik"><i class='bx bx-question-mark'></i><br>FAQ</a>
            </div>
            <div class="col py-2 px-2">
                <a href="/information/cookie"><i class='bx bx-cookie'></i><br>Cookie</a>
            </div>
            <div class="col py-2 px-2">
                <a href="{{asset('other/orokbefog.pdf')}}" download="{{asset('other/orokbefog.pdf')}}"><i class='bx bx-building-house'></i><br>Örökbefogadási szerződés</a>
            </div>
            <div class="col py-2 px-2">
                <a href="/information/adomany"><i class='bx bx-gift' ></i><br>Adományozási Szabályzat</a>
            </div>
            <div class="col py-2 px-2">
                <a href="/information/jollet"><i class='bx bxs-dog' ></i><br>Állatjóléti Szabályzat</a>
            </div>
        </div>
    </div>
</main>

@endsection
