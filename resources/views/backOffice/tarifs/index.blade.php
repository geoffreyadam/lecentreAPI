@extends('layouts.base')
@section('title', 'Tarifs')
@section('content')
    <div class="content">
        <a href="/backOffice/add/tarifs" class="btn btn-primary">Ajouter un tarif</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Info 1</th>
                        <th scope="col">Info 2</th>
                        <th scope="col">Info 3</th>
                        <th scope="col">Info 4</th>
                        <th scope="col">Info 5</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Éditer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tarifs as $tarif)
                        <tr>
                            <td>{{$tarif->nom}}</td>
                            <td>{{$tarif->info1}}</td>
                            <td>{{$tarif->info2}}</td>
                            <td>{{$tarif->info3}}</td>
                            <td>{{$tarif->info4}}</td>
                            <td>{{$tarif->info5}}</td>
                            <td>{{$tarif->prix}}</td>
                            <td><a href="/backOffice/update/tarifs/{{$tarif->id}}" class="btn btn-primary">Éditer</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection