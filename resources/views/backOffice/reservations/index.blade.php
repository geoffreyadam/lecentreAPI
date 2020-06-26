@extends('layouts.base')
@section('title', 'Réservations')
@section('content')
    <div class="content">
        {{-- <a href="/backOffice/add/reservations" class="btn btn-primary">Ajouter des infos</a> --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Billets</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Dates</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Code Postal</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Pays</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{$reservation->totalBillets}}</td>
                            <td>{{$reservation->totalPrice}}</td>
                            <td>{{$reservation->date}}</td>
                            <td>{{$reservation->prenom}}</td>
                            <td>{{$reservation->nom}}</td>
                            <td>{{$reservation->email}}</td>
                            <td>{{$reservation->adresse}}</td>
                            <td>{{$reservation->codePostal}}</td>
                            <td>{{$reservation->ville}}</td>
                            <td>{{$reservation->pays}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection