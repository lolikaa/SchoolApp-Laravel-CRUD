@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mergin-tb">
            <div class="pull-left">
                <h2>Dodaj nowy przedmiot</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('subjects.index')}}">Powrót</a>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> Wystąpiły problemy z zapisem<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('subjects.store')}}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwa przedmiotu:</strong>
                    <input type="text" name="name" class="form-control" placeholder="nazwa">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ilość godzin w kursie:</strong>
                    <input type="text" name="hours" class="form-control" placeholder="godziny">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Czas trwania [w semestrach]:</strong>
                    <input type="number" min="1" max="8" name="duration" class="form-control" placeholder="ilość semestrów">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Opłata za kurs:</strong>
                    <input type="text" name="fee" class="form-control" placeholder="opłata">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </div>
        </div>
    </form>
@endsection


