@extends('layouts.base')
@section('title', 'Ajouter un evenement')
@section('content')
    <form method="POST" action="/backOffice/addFunction/evenement">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Titre</label>
            <input type="text" class="form-control" placeholder="La pérennité du virtuel, Miguel Chevalier" name="titre" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control" placeholder="Miguel Chevalier est un artiste spécialisé ..." name="description" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control" placeholder="Jeudi 9 juillet 2020, à 17h" name="date" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control" placeholder="Centre Base sous-marine" name="lieu" required>
        </div>
        <div class="form-group">
            <select multiple class="form-control" name="type" required>
                <option>Exposition</option>
                <option>Conférence</option>
                <option>Atelier</option>
            </select>
        </div>
        <div class="form-group">
            <select multiple class="form-control" name="fini" required>
                <option>Bientot</option>
                <option>En cours</option>
                <option>Terminé</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter l'evenement</button>
      </form>
@endsection
