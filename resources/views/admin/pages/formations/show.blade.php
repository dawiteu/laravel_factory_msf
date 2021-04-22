@extends('layouts.index')

@section('pagetitle')
    :: ADMIN :: Show formations 
@endsection

@section('content')


@if (isset($formation))
    <p>({{$formation->id}}) Nom: {{$formation->nom}} infos: {{ $formation->description}} <a href={{ url()->previous() }} class="btn btn-warning">retour</a></p> 
    
@else
    <h2>Liste des formations de {{env('APP_NAME')}}: <a href={{route('admin.form.add')}} class="btn btn-success">Add formation</a></h2>
    <div class="row">

    @foreach ($forms as $form)
        <div class="col-4 m-1 d-flex justify-content-center flex-column align-items-center border">

            <p>({{$form->id}}) Nom: {{$form->nom}} infos: {{ $form->description}}</p>

            <div class="d-flex w-75 justify-content-around">
                <a href={{route('admin.form.show', $form->id)}} class="btn btn-primary">Show</a> 
                <a href={{route('admin.form.edit', $form->id)}} class="btn btn-warning">edit</a>
                <form method="post" action={{route('admin.form.del', $form->id)}} class="d-flex">
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