@extends('layouts.index')


@section('pagetitle')
    :: nos batiments 
@endsection

@section('content')
    
    <h2>Liste des batiments de {{env('APP_NAME')}}:</h2>
    <div class="row">
        @foreach ($batiments as $bat)
            <div class="col-3 m-1 bg-primary text-center text-white">
                <h5 class="mt-3">Nom: {{$bat->nom}} </h5>
                <p>infos: {{ $bat->description}} </p>
            </div>
            <br/>
        @endforeach
    </div>
@endsection