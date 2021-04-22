@extends('layouts.index')

@section('pagetitle')
    :: ADMIN :: Add batiments 
@endsection

@section('content')
    <h2>Nouveau batiment: </h2>

    <form action={{route('admin.bat.store')}} method="POST">
        @csrf

        <div class="row">
            <div class="col-1">
                <label for="nom">Nom:</label>
            </div>
            <div class="col-3">
                <input type="text" name="nom" />
            </div>
        </div>

        <div class="row">
            <div class="col-1">
                <label for="nom">Description:</label>
            </div>
            <div class="col-6">
                <textarea name="description" cols="30" rows="10" style="resize:none;"></textarea>
            </div>
        </div>

        <input type="submit" value="Envoyer >> " />

    </form>
@endsection