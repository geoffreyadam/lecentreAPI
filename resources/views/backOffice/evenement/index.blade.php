@extends('layouts.base')
@section('title', 'Evenements')
@section('content')
    <div class="content">
        <a href="/backOffice/add/evenement" class="btn btn-primary">Ajouter un evenement</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Lieu</th>
                        <th scope="col">État</th>
                        <th scope="col">Type</th>
                        <th scope="col">Éditer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($evenements as $evenement)
                        <tr>
                            <td>{{$evenement->titre}}</td>
                            <td>{{$evenement->description}}</td>
                            <td>{{$evenement->date}}</td>
                            <td>{{$evenement->lieu}}</td>
                            <td>{{$evenement->type}}</td>
                            <td>{{$evenement->fini}}</td>
                            <td><a href="/backOffice/update/evenement/{{$evenement->id}}" class="btn btn-primary">Éditer</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection