@extends('school.layout')

@section('header')
    <h1>Student</h1>
@endsection

@section('data')

<p> imię: {{$data->name}}</p>
<p> nazwisko: {{$data->surname}}</p>
<p> wiek: {{$data->age}}</p>

<form action="/students/{{$data->id}}" method="POST">
    @csrf {{-- zeby ten formularz sie przeslal--}}
    @method('delete')
<input type="submit" value="Usuń" />
</form>

@endsection


