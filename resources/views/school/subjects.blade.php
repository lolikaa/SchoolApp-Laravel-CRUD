@extends('school.layout')

@section('header')
    <h1>Nasze przedmioty: </h1>
@endsection

@section('data')
    <div class="message" role="alert">{{session('msg')}}</div> {{-- alert box--}}

    <h3 class="dodaj"><a href="/add_subject">Dodaj</a></h3>

    @foreach($data as $subject)

        <h3>nazwa: {{$subject->name}}</h3>
        <h3>czas trwania: {{$subject->duration}}</h3>
        <p><a href="/subjects/{{$subject->id}}">więcej informacji...</a></p>
        @if(!$loop->last)
            <hr />
        @endif

    @endforeach

@endsection
