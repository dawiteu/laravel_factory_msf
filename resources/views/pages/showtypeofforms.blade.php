@extends('layouts.index')


@section('pagetitle')
    :: nos types de formations formations 
@endsection

@section('content')
    <h2>Liste des types de formations chez {{env('APP_NAME')}}:</h2>
    <div class="row d-flex justify-content-center">
        @foreach ($typefs as $tyfs)
            <div class="col-3 m-1 bg-dark text-center text-white">
                <h5 class="mt-3">Nom: {{$tyfs->nom}} </h5>
                <p>infos: {{ $tyfs->description}} </p>
            </div>
            <br/>
        @endforeach
    </div>
@endsection