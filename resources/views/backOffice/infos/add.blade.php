@extends('layouts.base')
@section('title', 'Ajouter des infos')
@section('content')
    <form method="POST" action="/backOffice/addFunction/infos">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Horaires</label>
            <input type="text" class="form-control" placeholder="Ouvert du mardi au vendredi de 13h30 à 19h" name="horaires_ouvert" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Horaires détails</label>
            <input type="text" class="form-control" placeholder="Dernière entrée à 18h30" name="horaires_plus" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Horaires fermé</label>
            <input type="text" class="form-control" placeholder="Fermeture hebdomadaire le lundi et les jours fériés" name="horaires_fermé" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Accès tram</label>
            <input type="text" class="form-control" placeholder="Tram B : Cité du Vin" name="acces_tram" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Accès bus</label>
            <input type="text" class="form-control" placeholder="Bus : Lignes 32, 42, 63, 72, 80, 82, 92" name="acces_bus" required>
        </div>
        <div class="form-group">
            <select multiple class="form-control" name="ouvert" required>
                <option>Ouvert</option>
                <option>Fermé</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Réouverture</label>
            <input type="text" class="form-control" placeholder="Réouverture en octobre 2020" name="reouverture">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter un tarif</button>
      </form>
@endsection