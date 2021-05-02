@extends('school.layout')

@section('header')
    <h1>Edytuj dane nauczyciela</h1>

@endsection

@section('data')

    <form method="post" action="/edit_teacher/{id}">
        @csrf

        <label for="imie"> Imię </label>
        <input type="text" name="imie" id="imie" value="{{ $data->name }}"/>

        <label for="nazwisko"> Nazwisko </label>
        <input type="text" name="nazwisko" id="nazwisko" value="{{ $data->surname }}"/>

        <label for="przedmiot"> Prowadzony przedmiot </label>
        <input type="text" name="przedmiot" id="przedmiot" value="{{ $data->subject }}"/>

        <label for="wynagrodzenie"> Wynagrodzenie </label>
        <input type="text" name="wynagrodzenie" id="wynagrodzenie" value="{{ $data->salary }}"/>

        <label for="formaZatr"> Forma zatrudnienia </label>
        <input type="text" name="formaZatr" id="formaZatr" value="{{ $data->form_of_employment }}"/>

        <label for="dataPocz"> Data zatrudnienia </label>
        <input type="date" name="dataPocz" id="dataPocz" value="{{ $data->employment_date }}"/>

        <label for="dataKoniec"> Data zakończenia pracy </label>
        <input type="date" name="dataKoniec" id="dataKoniec" value="{{ $data->deemployment_date }}"/>

        <label for="adres"> Adres </label>
        <input type="text" name="adres" id="adres" value="{{ $data->adress }}"/>

        <label for="telefon"> Telefon </label>
        <input type="tel" name="telefon" id="telefon" value="{{ $data->telephone }}"/>

        <label for="email"> E-mail </label>
        <input type="email" name="email" id="email" value="{{ $data->email }}"/>

        <input class="submit" type="submit" value="Edytuj">
    </form>

@endsection
