@extends('school.layout')

@section('header')
    <h1>Nasi nauczyciele: </h1>
@endsection

@section('data')
    <div class="message" role="alert">{{session('msg')}}</div> {{-- alert box--}}

    <h3 class="dodaj"><a href="/add_teacher">Dodaj </a></h3>

    @foreach($data as $teacher)
        <h3>Imię: {{$teacher->name}}</h3>
        <h3>Nazwisko: {{$teacher->surname}}</h3>
        <h3>Prowadzony przedmiot: {{$teacher->subject}}</h3>
        <p><a href="/teachers/{{$teacher->id}}">więcej informacji...</a></p>
        @if(!$loop->last)
            <hr />
        @endif

    @endforeach

@endsection
