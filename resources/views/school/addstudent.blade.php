@extends('school.layout')

@section('header')
    <h1>Nowy student</h1>

@endsection

@section('data')

   <form method="post" action="/add_student">
       @csrf

       <label for="imie"> imię </label>
       <input type="text" name="imie" id="imie" />

       <label for="nazwisko"> nazwisko </label>
       <input type="text" name="nazwisko" id="nazwisko" />

       <label for="wiek"> wiek </label>
       <input type="text" name="wiek" id="wiek" />

       <label for="kierunek">Kierunek</label>
       <input type="text" name="kierunek" id="kierunek">

       <label for="semester"> Semestr </label>
       <input type="number" name="semester" id="semester" min="1" max="8" />

       <input class="submit" type="submit" value="dodaj">
   </form>
@endsection
