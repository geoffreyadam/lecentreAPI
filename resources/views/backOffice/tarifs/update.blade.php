@extends('layouts.base')
@section('title', 'Éditer un tarif')
@section('content')
      <form method="POST" action="/backOffice/updateFunction/tarifs/{{$tarif->id}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input value="{{ $tarif->nom }}"  type="text" class="form-control" placeholder="Plein" name="nom" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Info 1</label>
            <input value="{{ $tarif->info1 }}" type="text" class="form-control" placeholder="jeune 16-25 ans" name="info1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Info 2</label>
            <input value="{{ $tarif->info2 }}" type="text" class="form-control" placeholder="jeune 16-25 ans" name="info2">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Info 3</label>
            <input value="{{ $tarif->info3 }}" type="text" class="form-control" placeholder="jeune 16-25 ans" name="info3">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Info 4</label>
            <input value="{{ $tarif->info4 }}" type="text" class="form-control" placeholder="jeune 16-25 ans" name="info4">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Info 5</label>
            <input value="{{ $tarif->info5 }}" type="text" class="form-control" placeholder="jeune 16-25 ans" name="info5">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prix</label>
            <input value="{{ $tarif->prix }}" type="text" class="form-control" placeholder="5,25" name="prix" required>
        </div>
        <button type="submit" class="btn btn-primary">Éditer le tarif</button>
      </form>
@endsection
