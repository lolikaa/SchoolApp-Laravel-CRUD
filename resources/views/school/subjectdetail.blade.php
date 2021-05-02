@extends('school.layout')

@section('header')
    <h1>Subject</h1>
@endsection

@section('data')

    <p> nazwa: {{$data->name}}</p>
    <p>czas trwania: {{$data->duration}}</p>

    <form action="/subjects/{{$data->id}}" method="POST">
        @csrf {{-- zeby ten formularz sie przeslal--}}
        @method('delete')
        <input type="submit" value="Usuń" />
    </form>

@endsection
