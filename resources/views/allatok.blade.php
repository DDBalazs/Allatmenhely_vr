@extends('layout')
@section('content')
    <hr>
    <div class="allatok">
        <div class="container">
            <div class="text-center">
                <h1 class="py-3">Állataink</h1>
                <hr class="w-75 mx-auto border border-dark my-2">

            </div>
            <div class="row py-4">
                <div class="col-3">
                    <form action="/allatok" method="POST" class="form-control border border-dark rounded">
                        <div class="py-3">
                            <h3 class="text-center">Állatkereső szűrő</h3>
                            <hr class="w-75 mx-auto border border-dark my-2">
                        </div>
                        <div class="py-3">
                            <h5>Állatfaj</h5>
                            <input type="checkbox" name="kperm" id="dog"  value="dog" class="form-check-input">
                            <label for="dog" class="form-check-label">Kutya</label><br>
                            <input type="checkbox" name="kperm" id="cat"  value="cat" class="form-check-input">
                            <label for="cat" class="form-check-label">Macska</label><br>
                            <input type="checkbox" name="kperm" id="all" value="all" class="form-check-input">
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
                                <option value="puppy">Kölyök</option>
                                <option value="young">Fiatal</option>
                                <option value="adult">Felnőtt</option>
                                <option value="senior">Idős</option>
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
                        <div class="py-3">
                            <h5>Jellemzők</h5>
                            <input type="checkbox" name="traits" id="cfreind"  value="cfriend">
                            <label for="cfriend">Gyermekbarát</label><br>
                            <input type="checkbox" name="traits" id="afriend"  value="afriend">
                            <label for="afriend">Más állatokkal barátságos</label><br>
                            <input type="checkbox" name="traits" id="nofriend" value="nofriend">
                            <label for="nofriend">Különleges igényű</label>
                        </div>
                        <div class="py-3">
                            <h5>Örökbefogadási státusz</h5>
                            <input type="radio" name="status" id="adoptable" value="adoptable">
                            <label for="adoptable">Örökbefogadható</label><br>
                            <input type="radio" name="status" id="foster" value="foster">
                            <label for="foster">Ideiglenes befogadásra vár</label>
                        </div>
                        <div class="py-3">
                            <h5>Rendezés</h5>
                            <select name="sort" id="sort" class="form-control">
                                <option value="newest">Legújabbak előre</option>
                                <option value="oldest">Legrégebbiek előre</option>
                                <option value="name-asc">Név szerint (A-Z)</option>
                                <option value="name-desc">Név szerint (Z-A)</option>
                            </select>
                        </div>
                        <div class="py-3">
                            <button type="submit" class="btn btn-secondary w-100 my-3">Szűrés</button>
                            <button type="reset" class="btn btn-secondary w-100">Visszaállítás</button>
                        </div>
                    </form>
                </div>
                <div class="col-9">
                    @dd($allatok)
                </div>
            </div>
        </div>
    </div>

@endsection
