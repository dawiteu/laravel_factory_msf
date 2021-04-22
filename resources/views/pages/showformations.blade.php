@extends('layouts.index')


@section('pagetitle')
    :: nos formations 
@endsection

@section('content')
    <h2>Liste des formations de {{env('APP_NAME')}}:</h2>
    <div class="row d-flex justify-content-center">
        @foreach ($forms as $form)
            <div class="col-3 m-1 bg-warning text-center">
                <h5 class="mt-3">Nom: {{$form->nom}} </h5>
                <p>infos: {{ $form->description}} </p>
            </div>
            <br/>
        @endforeach
    </div>
@endsection