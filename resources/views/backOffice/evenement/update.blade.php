@extends('layouts.base')
@section('title', 'Éditer un evenement')
@section('content')
    <form method="POST" action="/backOffice/updateFunction/evenement/{{$evenement->id}}">
        @csrf
        <input type="hidden" name="id" value={{$evenement->id}}/>
        <div class="form-group">
            <label for="exampleInputEmail1">Titre</label>
        <input type="text" class="form-control" placeholder="La pérennité du virtuel, Miguel Chevalier" name="titre" value="{{$evenement->titre}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control" placeholder="Miguel Chevalier est un artiste spécialisé ..." name="description" value="{{$evenement->description}}"" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control" placeholder="Jeudi 9 juillet 2020, à 17h" name="date" value="{{$evenement->date}}"" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control" placeholder="Centre Base sous-marine" name="lieu" value="{{$evenement->lieu}}"" required>
        </div>
        <div class="form-group">
            <select multiple class="form-control" name="type" required>
                <option @if($evenement->type == "Exposition") selected @endif>Exposition</option>
                <option @if($evenement->type == "Conférence") selected @endif>Conférence</option>
                <option @if($evenement->type == "Atelier") selected @endif>Atelier</option>
            </select>
        </div>
        <div class="form-group">
            <select multiple class="form-control" name="fini" required>
                <option @if($evenement->fini == "Bientot") selected @endif>Bientot</option>
                <option @if($evenement->fini == "En cours") selected @endif>En cours</option>
                <option @if($evenement->fini == "Terminé") selected @endif>Terminé</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Éditer l'evenement</button>
      </form>
@endsection
