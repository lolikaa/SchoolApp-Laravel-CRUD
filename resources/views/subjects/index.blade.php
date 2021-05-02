@extends('layout')

@section('content')
    <div class="pull-left">
        <h2>Nasi Prowadzący</h2>
    </div>


    <div class="row">
        <div class="col-lg-12 margin-tb">


            <div class="pull-right">
                <a class="btn btn-success" id="dodaj_button" href="{{route('subjects.create')}}">Dodaj przedmiot</a>
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
            <th>Nazwa</th>
            <th>Ilość godzin</th>
            <th>Czas trwania</th>
            <th>Opłata</th>
            <th width="380px">Akcja</th>
        </tr>

        @foreach($subjects as $subject)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$subject->name}}</td>
                <td>{{$subject->hours}}</td>
                <td>{{$subject->duration}}</td>
                <td>{{$subject->fee}} zł</td>
                <td>
                    <form action="{{route('subjects.destroy',$subject->id)}}" method="POST">

                        <a class="btn btn-primary" href="{{route('subjects.edit',$subject->id)}}">Edytuj</a>

                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
