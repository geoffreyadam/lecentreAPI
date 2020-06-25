@extends('layouts.base')
@section('title', 'Infos')
@section('content')
    <div class="content">
        <a href="/backOffice/add/infos" class="btn btn-primary">Ajouter des infos</a>
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
                    @foreach ($infos as $info)
                        <tr>
                            <td>{{$info->ouvert}}</td>
                            <td>{{$info->reouverture}}</td>
                            <td>{{$info->acces_tram}}</td>
                            <td>{{$info->acces_bus}}</td>
                            <td>{{$info->horaires_ouvert}}</td>
                            <td>{{$info->horaires_plus}}</td>
                            <td>{{$info->horaires_fermé}}</td>
                            <td><a href="/backOffice/update/infos/{{$info->id}}" class="btn btn-primary">Éditer</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection