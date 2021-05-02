@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edytuj dane studenta</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('students.index')}}">Powrót</a>
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

    <form action="{{route('students.update',$student->id)}}" method="POST">

        @csrf
        @method('put')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imię</strong>
                    <input type="text" name="name" value="{{$student->name}}"
                           class="form-control" placeholder="Imię">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwisko</strong>
                    <input type="text" name="surname" value="{{$student->surname}}"
                           class="form-control" placeholder="Nazwisko">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numer indeksu:</strong>
                    <input type="text" name="index" value="{{$student->index}}"
                        class="form-control" placeholder="nr indeksu">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Wiek:</strong>
                    <input type="text" name="age" value="{{$student->age}}"
                           class="form-control" placeholder="wiek">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kierunek:</strong>
                    <input type="text" name="course" value="{{$student->course}}"
                           class="form-control" placeholder="kierunek">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Semestr:</strong>
                    <input type="number" min="1" max="8" name="semester" value="{{$student->semester}}"
                           class="form-control" placeholder="semestr">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numer telefonu:</strong>
                    <input type="text" name="telephone" value="{{$student->telephone}}"
                           class="form-control" placeholder="telefon">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{$student->email}}"
                           class="form-control" placeholder="email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Edytuj</button>
            </div>

        </div>
    </form>
@endsection
