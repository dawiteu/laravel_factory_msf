@extends('layouts.index')


@section('pagetitle')
    :: nos eleves 
@endsection

@section('content')
    <h2>Liste des eleves chez {{env('APP_NAME')}}:</h2>
    <table class="table text-center table-dark table-striped">
        <tr class="thead"><td>Nom</td><td>Prénom</td><td>Age </td><td>Conditions d'add</td></tr>
        @foreach ($eleves as $el)
            <tr><td>{{$el->nom}}</td><td>{{$el->prenom}}</td><td>{{$el->age}}</td><td>{{ $el->etat == 0 ? 'refusé' : 'accepté' }}</td></tr>
        @endforeach
    </table>
@endsection