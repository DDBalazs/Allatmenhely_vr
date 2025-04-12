@extends('layout')
@section('content')
    <div class="allatok">
        <div class="container">
            <div class="text-center">
                <h1 class="py-3">Állataink</h1>
                <hr class="w-75 mx-auto my-2">

            </div>
            <div class="row py-4">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <form action="/allatok" method="POST" class="form-control border border-dark rounded">
                        @csrf
                        <div class="py-3">
                            <h3 class="text-center">Állatkereső szűrő</h3>
                            <hr class="w-75 mx-auto my-2">
                        </div>
                        <div class="py-3">
                            <h5>Állatfaj</h5>
                            <input type="radio" name="kperm" id="dog"  value="dog">
                            <label for="dog" class="form-check-label">Kutya</label><br>
                            <input type="radio" name="kperm" id="cat"  value="cat">
                            <label for="cat" class="form-check-label">Macska</label><br>
                            <input type="radio" name="kperm" id="all" value="all">
                            <label for="all" class="form-check-label">Mindekettő</label>
                        </div>
                        <div class="py-3">
                            <h5>Nem</h5>
                            <input type="radio" name="nem" id="him" value="him">
                            <label for="him">Hím</label>
                            <input type="radio" name="nem" id="nosteny" value="nosteny">
                            <label for="nosteny">Nőstény</label>
                        </div>
                        <div class="py-3">
                            <h5>Kor</h5>
                            <select name="age" id="age" class="form-control">
                                <option value="allin">Minden</option>
                                <option value="puppy">Kölyök (0-1 éves korig)</option>
                                <option value="young">Fiatal (1-3 éves korig)</option>
                                <option value="adult">Felnőtt (3-8 éves korig)</option>
                                <option value="senior">Idős (8+ éves)</option>
                            </select>
                        </div>
                        <div class="py-3">
                            <h5>Méret</h5>
                            <input type="checkbox" name="size" id="small"  value="small">
                            <label for="small">Kicsi</label><br>
                            <input type="checkbox" name="size" id="medium"  value="medium">
                            <label for="medium">Közepes</label><br>
                            <input type="checkbox" name="size" id="large" value="large">
                            <label for="large">Nagy</label>
                        </div>
                        {{-- <div class="py-3">
                            <h5>Jellemzők</h5>
                            <input type="checkbox" name="traits" id="cfriend"  value="cfriend">
                            <label for="cfriend">Gyermekbarát</label><br>
                            <input type="checkbox" name="traits" id="afriend"  value="afriend">
                            <label for="afriend">Más állatokkal barátságos</label><br>
                            <input type="checkbox" name="traits" id="nofriend" value="nofriend">
                            <label for="nofriend">Különleges igényű</label>
                        </div> --}}
                        <div class="py-3">
                            <h5>Örökbefogadási státusz</h5>
                            <input type="radio" name="status" id="adoptable" value="adoptable">
                            <label for="adoptable">Örökbefogadható</label><br>
                            <input type="radio" name="status" id="cannotad" value="cannotad">
                            <label for="cannotad">Átmenetileg nem fogható örökbe</label><br>
                            <input type="radio" name="status" id="allorok" value="allorok">
                            <label for="allorok">Összes állat</label>
                        </div>
                        <div class="py-3">
                            <h5>Rendezés</h5>
                            <select name="sort" id="sort" class="form-control">
                                <option value="none">------</option>
                                <option value="newest">Legújabbak előre</option>
                                <option value="oldest">Legrégebbiek előre</option>
                                <option value="name-asc">Név szerint (A-Z)</option>
                                <option value="name-desc">Név szerint (Z-A)</option>
                            </select>
                        </div>
                        <div class="py-3">
                            <button type="submit" class="btn btn-secondary w-100 my-3 szures">Szűrés</button>
                            <button type="reset" onclick="window.location.reload();" class="btn btn-secondary w-100 reset">Visszaállítás</button>
                        </div>
                    </form>
                </div>
                <div class="col-6 col-sm-6 col-md-7 col-xl-9 col-lg-9">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                        @if(isset($result) && count($result)>0)
                            @foreach ($result as $allat)
                                    <div class="col-md-4 mb-4 ">
                                        <a href="/allatok/{{$allat->allat_id}}" class="text-decoration-none">
                                            <div class="card">
                                                @if ($allat->faj == "kutya")
                                                    <img src="{{asset('img/allatok/k/k'.$allat->allat_id.'.png')}}" alt="{{$allat->allat_id.'.png'}}" class="card-img-top">
                                                @else
                                                    <img src="{{asset('img/allatok/c/c'.$allat->allat_id.'.png')}}" alt="{{$allat->allat_id.'.png'}}" class="card-img-top">
                                                @endif
                                                <div class="card-body">
                                                    <h5 class="card-text">{{$allat->nev}}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            @endforeach
                        @else
                            @foreach ($allatok as $allat)
                                    <div class="col-md-4 mb-4 ">
                                        <a href="/allatok/{{$allat->allat_id}}" class="text-decoration-none">
                                            <div class="card">
                                                @if ($allat->faj == "kutya")
                                                    <img src="{{asset('img/allatok/k/k'.$allat->allat_id.'.png')}}" alt="{{$allat->allat_id.'.png'}}" class="card-img-top">
                                                @else
                                                    <img src="{{asset('img/allatok/c/c'.$allat->allat_id.'.png')}}" alt="{{$allat->allat_id.'.png'}}" class="card-img-top">
                                                @endif
                                                <div class="card-body">
                                                    <h5 class="card-text">{{$allat->nev}}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            @endforeach
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
