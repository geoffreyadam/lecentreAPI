@extends('layouts.base')
@section('title', 'Evenements')
@section('content')
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col  ">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($evenements as $evenement)
                    <tr>
                        <td>{{$evenement->titre}}</td>
                        <td>{{$evenement->description}}</td>
                        <td>{{$evenement->date}}</td>
                        <td>{{$evenement->lieu}}</td>
                        <td>{{$evenement->type}}</td>
                        <td>{{$evenement->fini}}</td>
                        <td><a href="/backOffice/update/evenement/{{$evenement->id}}" class="btn btn-primary">Éditer</a></td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection