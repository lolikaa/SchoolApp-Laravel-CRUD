@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mergin-tb">
            <div class="pull-left">
                <h2>Dodaj nowego studenta</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('students.index')}}">Powrót</a>
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

    <form action="{{route('students.store')}}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imię:</strong>
                    <input type="text" name="name" class="form-control" placeholder="imię">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwisko:</strong>
                    <input type="text" name="surname" class="form-control" placeholder="nazwisko">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numer indeksu:</strong>
                    <input type="text" name="index" class="form-control" placeholder="nr indeksu">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Wiek:</strong>
                    <input type="text" name="age" class="form-control" placeholder="wiek">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kierunek:</strong>
                    <input type="text" name="course" class="form-control" placeholder="kierunek">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Semestr:</strong>
                    <input type="number" min="1" max="8" name="semester" class="form-control" placeholder="semestr">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numer telefonu:</strong>
                    <input type="text" name="telephone" class="form-control" placeholder="telefon">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </div>
        </div>
    </form>
@endsection


