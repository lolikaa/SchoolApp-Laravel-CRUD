@extends('school.layout')

@section('header')
    <h1>Nasi studenci:</h1>
@endsection

@section('data')
    <div class="message" role="alert">{{session('msg')}}</div> {{-- alert box--}}

    <h3 class="dodaj"><a href="/add_student">Dodaj</a></h3>

    @foreach($data as $student)

        <h3>imię: {{$student->name}}</h3>
        <h3>nazwisko: {{$student->surname}}</h3>
        <h3>wiek: {{$student->age}}</h3>
        <p><a href="/students/{{$student->id}}">więcej informacji...</a></p>
        @if(!$loop->last)
            <hr />
        @endif

    @endforeach
@endsection


