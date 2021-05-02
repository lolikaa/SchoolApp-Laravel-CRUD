@extends('layout')

@section('content')
    <div class="pull-left">
        <h2>Nasi Prowadzący</h2>
    </div>


    <div class="row">
        <div class="col-lg-12 margin-tb">


            <div class="pull-right">
                <a class="btn btn-success" id="dodaj_button" href="{{route('teachers.create')}}">Dodaj Wykładowcę</a>
            </div>
        </div>
    </div>

    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Lp</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Telefon</th>
            <th>E-mail</th>
            <th width="380px">Akcja</th>
        </tr>

        @foreach($teachers as $teacher)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->surname}}</td>
                <td>{{$teacher->telephone}}</td>
                <td>{{$teacher->email}}</td>
                <td>
                    <form action="{{route('teachers.destroy',$teacher->id)}}" method="POST">

                        <a class="btn btn-info" href="{{route('teachers.show',$teacher->id)}}">Pokaż</a>
                        <a class="btn btn-primary" href="{{route('teachers.edit',$teacher->id)}}">Edytuj</a>

                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
