@extends('layouts.index')

@section('pagetitle')
    :: ADMIN :: Edit batiments 
@endsection

@section('content')
<h2>Modification batiment: ({{$batiment->id}}) </h2>

<form action={{route('admin.bat.update', $batiment->id)}} method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-1">
            <label for="nom">Nom:</label>
        </div>
        <div class="col-3">
            <input type="text" name="nom" value="{{$batiment->nom}}"/>
        </div>
    </div>

    <div class="row">
        <div class="col-1">
            <label for="nom">Description:</label>
        </div>
        <div class="col-6">
            <textarea name="description" cols="30" rows="10" style="resize:none;">{{$batiment->description}}</textarea>
        </div>
    </div>

    <input type="submit" value="Modifier >> " />

</form>
@endsection