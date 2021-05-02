@extends('school.layout')

@section('header')
    <h1>Nowy przedmiot</h1>

@endsection

@section('data')

    <form method="post" action="/add_subject">
        @csrf

        <label for="nazwa"> Nazwa przedmiotu </label>
        <input type="text" name="nazwa" id="nazwa" />

        <label for="czas"> Czas trwania </label>
        <input type="text" name="czas" id="czas" />

        <input class="submit" type="submit" value="dodaj">
    </form>
@endsection
