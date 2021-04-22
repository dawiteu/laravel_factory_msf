@extends('layouts.index')

@section('pagetitle')
    :: ADMIN :: Edit formation 
@endsection

@section('content')
<h2>Modification de formation: ({{$formation->id}}) </h2>

<form action={{route('admin.form.update', $formation->id)}} method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-1">
            <label for="nom">Nom:</label>
        </div>
        <div class="col-3">
            <input type="text" name="nom" value="{{$formation->nom}}"/>
        </div>
    </div>

    <div class="row">
        <div class="col-1">
            <label for="nom">Description:</label>
        </div>
        <div class="col-6">
            <textarea name="description" cols="30" rows="10" style="resize:none;">{{$formation->description}}</textarea>
        </div>
    </div>

    <input type="submit" value="Modifier >> " />

</form>
@endsection