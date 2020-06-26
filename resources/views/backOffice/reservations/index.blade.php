@extends('layouts.base')
@section('title', 'Réservations')
@section('content')
    <div class="content">
        {{-- <a href="/backOffice/add/reservations" class="btn btn-primary">Ajouter des infos</a> --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Ouvert</th>
                        <th scope="col">Reouverture</th>
                        <th scope="col">Accès tram</th>
                        <th scope="col">Accès bus</th>
                        <th scope="col">Horaires ouvert</th>
                        <th scope="col">Horaires infos</th>
                        <th scope="col">Horaires fermé</th>
                        <th scope="col">Éditer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{$reservation->ouvert}}</td>
                            <td>{{$reservation->reouverture}}</td>
                            <td>{{$reservation->acces_tram}}</td>
                            <td>{{$reservation->acces_bus}}</td>
                            <td>{{$reservation->horaires_ouvert}}</td>
                            <td>{{$reservation->horaires_plus}}</td>
                            <td>{{$reservation->horaires_fermé}}</td>
                            <td><a href="/backOffice/update/reservations/{{$reservation->id}}" class="btn btn-primary">Éditer</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection