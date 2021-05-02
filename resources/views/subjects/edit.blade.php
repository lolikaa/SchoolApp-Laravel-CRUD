@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edytuj informacje o przedmiocie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('subjects.index')}}">Powrót</a>
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

    <form action="{{route('subjects.update',$subject->id)}}" method="POST">

        @csrf
        @method('put')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imię</strong>
                    <input type="text" name="name" value="{{$subject->name}}"
                           class="form-control" placeholder="nazwa">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwisko</strong>
                    <input type="text" name="hours" value="{{$subject->hours}}"
                           class="form-control" placeholder="godziny">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Czas trwania [w semestrach]:</strong>
                    <input type="number" min="1" max="8" name="duration" value="{{$subject->duration}}"
                           class="form-control" placeholder="czas trwania">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Opłata:</strong>
                    <input type="text" name="fee" value="{{$subject->fee}}"
                           class="form-control" placeholder="cena">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Edytuj</button>
            </div>

        </div>
    </form>
@endsection
