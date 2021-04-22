@extends('layouts.index')

@section('pagetitle')
    :: ADMIN :: Show batiments 
@endsection

@section('content')


@if (isset($batiment))
    <p>({{$batiment->id}}) Nom: {{$batiment->nom}} infos: {{ $batiment->description}} <a href={{ url()->previous() }} class="btn btn-warning">retour</a></p> 
    
@else
    <h2>Liste des batiments de {{env('APP_NAME')}}: <a href={{route('admin.bat.add')}} class="btn btn-success">Add batiment</a></h2>
    <div class="row">

    @foreach ($batiments as $bat)
        <div class="col-4 m-1 d-flex justify-content-center flex-column align-items-center border">

            <p>({{$bat->id}}) Nom: {{$bat->nom}} infos: {{ $bat->description}}</p>

            <div class="d-flex w-75 justify-content-around">
                <a href={{route('admin.bat.show', $bat->id)}} class="btn btn-primary">Show</a> 
                <a href={{route('admin.bat.edit', $bat->id)}} class="btn btn-warning">edit</a>
                <form method="post" action={{route('admin.bat.del', $bat->id)}} class="d-flex">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DEL</button>
                </form>
            </div>
        </div>
    @endforeach

    </div>
@endif


@endsection