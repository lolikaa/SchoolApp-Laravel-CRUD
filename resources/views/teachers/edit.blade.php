@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edytuj dane studenta</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('teachers.index')}}">Powrót</a>
            </div>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> Wystąpiły problemy z edycją rekordu<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('teachers.update',$teacher->id)}}" method="POST">

        @csrf
        @method('put')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imię</strong>
                    <input type="text" name="name" value="{{$teacher->name}}"
                           class="form-control" placeholder="Imię">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwisko</strong>
                    <input type="text" name="surname" value="{{$teacher->surname}}"
                           class="form-control" placeholder="Nazwisko">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prowadzony przedmiot:</strong>
                    <input type="text" name="subject" value="{{$teacher->subject}}"
                           class="form-control" placeholder="przedmiot">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Wynagrodzenie:</strong>
                    <input type="text" name="salary" value="{{$teacher->salary}}"
                           class="form-control" placeholder="wynagrodzenie">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rodzaj umowy:</strong>
                    <input type="text" name="form_of_employment" value="{{$teacher->form_of_employment}}"
                           class="form-control" placeholder="umowa">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data nawiązania umowy:</strong>
                    <input type="date" name="employment_date" value="{{$teacher->employment_date}}"
                           class="form-control" placeholder="data pocz.">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data rozwiązania umowy:</strong>
                    <input type="date" name="deemployment_date" value="{{$teacher->deemployment_date}}"
                           class="form-control" placeholder="data końcowa">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adres:</strong>
                    <input type="text" name="address" value="{{$teacher->adress}}"
                           class="form-control" placeholder="adres">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telefon:</strong>
                    <input type="tel" name="telephone" value="{{$teacher->telephone}}"
                           class="form-control" placeholder="email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{$teacher->email}}"
                           class="form-control" placeholder="email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Edytuj</button>
            </div>

        </div>
    </form>
@endsection
