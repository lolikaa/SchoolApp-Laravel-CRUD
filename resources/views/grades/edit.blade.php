@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 mergin-tb">
            <div class="pull-left">
                <h2>Wpisz ocenę</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('grades.index')}}">Powrót</a>
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

    <form action="{{route('grades.update',$grade->id)}}" method="POST">

        @csrf
        @method('put')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="choose_student"><strong style="color: red">Możesz zmienić tylko ocenę !</strong></label>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="choose_subject"><strong>{{$grade->index}}</strong></label>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Uzyskana ocena końcowa:</strong>
                    <input type="text" name="final_grade" class="form-control" placeholder="ocena" value="{{$grade->final_grade}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Edytuj</button>
            </div>
        </div>
    </form>
@endsection


