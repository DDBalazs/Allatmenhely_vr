@extends('layout')
@section('content')
    <hr>
    <div class="container">
        <div class="text-center">
            <h1>Állataink</h1>

        </div>
        <div class="row">
            <div class="col-4">
                <form action="/allatok" method="POST" class="form-control border border-dark">
                    <div class="py-2">
                        <input type="checkbox" name="macska" id="macska">
                        <label for="macska" name="macska" class="form-label">Macska</label>
                        <input type="checkbox" name="kutya" id="kutya">
                        <label for="kutya" name="kutya" class="form-label">Kutya</label>
                    </div>
                    <div class="py-2">
                        <label for="szin">Szín:</label>
                        <select name="szin" id="szin">
                            <option value="fekete">Fekete</option>
                            <option value="szurke">Szürke</option>
                            <option value="feher">Fehér</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-8">

            </div>
        </div>
    </div>

@endsection
