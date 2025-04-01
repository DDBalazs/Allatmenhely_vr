@extends('layout')
@section('content')

@foreach ($lekertallat as $allat)
    {{$allat->nev}}
@endforeach

@endsection