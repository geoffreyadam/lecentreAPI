@extends('layouts.base')
@section('title', 'Ajouter un tarif')
@section('content')
    <form method="POST" action="/backOffice/addFunction/tarifs">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input type="text" class="form-control" placeholder="Plein" name="nom" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Info 1</label>
            <input type="text" class="form-control" placeholder="jeune 16-25 ans" name="info1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Info 2</label>
            <input type="text" class="form-control" placeholder="jeune 16-25 ans" name="info2">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Info 3</label>
            <input type="text" class="form-control" placeholder="jeune 16-25 ans" name="info3">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Info 4</label>
            <input type="text" class="form-control" placeholder="jeune 16-25 ans" name="info4">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Info 5</label>
            <input type="text" class="form-control" placeholder="jeune 16-25 ans" name="info5">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prix</label>
            <input type="text" class="form-control" placeholder="5,25" name="prix" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter le tarif</button>
      </form>
@endsection
