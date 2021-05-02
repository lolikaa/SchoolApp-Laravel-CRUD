@extends('school.layout')

@section('header')
    <h1>Nowy nauczyciel</h1>

@endsection

@section('data')

    <form method="post" action="/add_teacher">
        @csrf

        <label for="imie"> Imię </label>
        <input type="text" name="imie" id="imie" />

        <label for="nazwisko"> Nazwisko </label>
        <input type="text" name="nazwisko" id="nazwisko" />

        <label for="przedmiot"> Prowadzony przedmiot </label>
        <input type="text" name="przedmiot" id="przedmiot" />

        <label for="wynagrodzenie"> Wynagrodzenie </label>
        <input type="text" name="wynagrodzenie" id="wynagrodzenie" />

        <label for="formaZatr"> Forma zatrudnienia </label>
        <input type="text" name="formaZatr" id="formaZatr" />

        <label for="dataPocz"> Data zatrudnienia </label>
        <input type="date" name="dataPocz" id="dataPocz" />

        <label for="dataKoniec"> Data zakończenia pracy </label>
        <input type="date" name="dataKoniec" id="dataKoniec" />

        <label for="adres"> Adres </label>
        <input type="text" name="adres" id="adres" />

        <label for="telefon"> Telefon </label>
        <input type="tel" name="telefon" id="telefon" />

        <label for="email"> E-mail </label>
        <input type="email" name="email" id="email" />

        <input class="submit" type="submit" value="dodaj">
    </form>
@endsection
