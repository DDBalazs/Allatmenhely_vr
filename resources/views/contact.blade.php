@extends('layout')
@section('content')

<main class="contact">
    <div class="container">
        <div class="py-2 text-center">
            <h1><b>Nyitvatartásunk</b></h1>
            <h3><b>Kutyák és macskák látogatási ideje</b></h3>
        </div>
        <hr class="w-75 mx-auto border border-dark my-2">
        <div class="py-4">
            <table class="table text-center">
                <thead">
                    <tr>
                        <th class="col"></th>
                        <th class="col">Hétfő</th>
                        <th class="col">Kedd</th>
                        <th class="col">Szerda</th>
                        <th class="col">Csütörtök</th>
                        <th class="col">Péntek</th>
                        <th class="col">Szombat</th>
                        <th class="col">Vasárnap</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="col">Kutyák</th>
                        <th class="col">8-14</th>
                        <th class="col">Zárva</th>
                        <th class="col">8-16</th>
                        <th class="col">14-18</th>
                        <th class="col">10-18</th>
                        <th class="col">10-16</th>
                        <th class="col">Zárva</th>
                    </tr>
                    <tr>
                        <th class="col">Macska</th>
                        <th class="col">13-18</th>
                        <th class="col">Zárva</th>
                        <th class="col">10-18</th>
                        <th class="col">14-18</th>
                        <th class="col">10-18</th>
                        <th class="col">11-17</th>
                        <th class="col">Zárva</th>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


</main>

@endsection
