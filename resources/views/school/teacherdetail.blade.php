@extends('school.layout')

@section('header')
    <h1>Teacher details</h1>
@endsection

@section('data')

    <p> Imię: {{$data->name}}</p>
    <p> Nazwisko: {{$data->surname}}</p>
    <p> Wykładany przedmiot: {{$data->subject}}</p>
    <p> Wynagrodzenie: {{$data->salary}}</p>
    <p> Forma zatrudnienia: {{$data->form_of_employment}}</p>
    <p> Data zatrudnienia: {{$data->employment_date}}</p>
    <p> Data zakończenia pracy: {{$data->deemployment_date}}</p>
    <p> Adres: {{$data->adress}}</p>
    <p> Telefon: {{$data->telephone}}</p>
    <p> E-mail: {{$data->email}}</p>


    <form action="/teachers/{{$data->id}}" method="POST">
        @csrf {{-- zeby ten formularz sie przeslal--}}
        @method('delete')
        <input type="submit" value="Usuń" />
    </form>

    <h3 class="edytuj"><a href="/edit_teacher/{{$data->id}}">Edytuj </a></h3>
@endsection


