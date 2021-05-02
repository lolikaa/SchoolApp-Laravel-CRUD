@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mergin-tb">
            <div class="pull-left">
                <h2>Dodaj nowego wykładowcę</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('teachers.index')}}">Powrót</a>
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

    <form action="{{route('teachers.store')}}" method="POST">
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
                    <strong>Prowadzony przedmiot:</strong>
                    <input type="text" name="subject" class="form-control" placeholder="przedmiot">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Wynagrodzenie:</strong>
                    <input type="text" name="salary" class="form-control" placeholder="wynagrodzenie">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rodzaj umowy:</strong>
                    <input type="text" name="form_of_employment" class="form-control" placeholder="umowa">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data nawiązania umowy:</strong>
                    <input type="date" name="employment_date" class="form-control" placeholder="data początkowa">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data rozwiązania umowy:</strong>
                    <input type="date" name="deemployment_date" class="form-control" placeholder="data końcowa">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adres:</strong>
                    <input type="text" name="adress" class="form-control" placeholder="adres">
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


