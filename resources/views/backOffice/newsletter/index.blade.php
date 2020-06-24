@extends('layouts.base')
@section('title', 'Evenements')
@section('content')
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col  ">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newsletter as $mail)
                    <tr>
                        <td>{{$mail->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection