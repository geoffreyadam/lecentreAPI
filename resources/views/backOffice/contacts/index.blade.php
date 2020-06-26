@extends('layouts.base')
@section('title', 'Evenements')
@section('content')
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sujet</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$contact->nom}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->prenom}}</td>
                        <td>{{$contact->message}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection