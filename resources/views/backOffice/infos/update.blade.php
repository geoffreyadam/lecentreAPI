@extends('layouts.base')
@section('title', 'Éditer les infos')
@section('content')
      <form method="POST" action="/backOffice/updateFunction/infos/{{$info->id}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Horaires</label>
            <input value="{{ $info->horaires_ouvert }}" type="text" class="form-control" placeholder="Ouvert du mardi au vendredi de 13h30 à 19h" name="horaires_ouvert" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Horaires détails</label>
            <input value="{{ $info->horaires_plus }}" type="text" class="form-control" placeholder="Dernière entrée à 18h30" name="horaires_plus" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Horaires fermé</label>
            <input value="{{ $info->horaires_fermé }}" type="text" class="form-control" placeholder="Fermeture hebdomadaire le lundi et les jours fériés" name="horaires_fermé" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Accès tram</label>
            <input value="{{ $info->acces_tram }}" type="text" class="form-control" placeholder="Tram B : Cité du Vin" name="acces_tram" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Accès bus</label>
            <input value="{{ $info->acces_bus }}" type="text" class="form-control" placeholder="Bus : Lignes 32, 42, 63, 72, 80, 82, 92" name="acces_bus" required>
        </div>
        <div class="form-group">
            <select multiple class="form-control" name="ouvert" required>
                <option @if($info->ouvert == "Ouvert") selected @endif>Ouvert</option>
                <option @if($info->ouvert == "Fermé") selected @endif>Fermé</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Réouverture</label>
            <input value="{{ $info->reouverture }}" type="text" class="form-control" placeholder="Réouverture en octobre 2020" name="reouverture">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
      </form>
@endsection
