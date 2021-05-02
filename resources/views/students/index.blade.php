@extends('layout')

@section('content')
<div class="pull-left">
    <h2>Nasi studenci</h2>
</div>


<div class="row">
    <div class="col-lg-12 margin-tb">


        <div class="pull-right">
            <a class="btn btn-success" id="dodaj_button" href="{{route('students.create')}}">Dodaj Studenta</a>
            <a class="btn btn-warning" id="dodaj_button" href="{{route('grades.index')}}">Panel ocen</a>
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
            <th>Numer indeksu</th>
            <th>Kierunek</th>
            <th>Semestr</th>
            <th width="380px">Akcja</th>
        </tr>

        @foreach($students as $student)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->course}}</td>
                <td>{{$student->semester}}</td>
                <td>
                    <form action="{{route('students.destroy',$student->id)}}" method="POST">

                        <a class="btn btn-info" href="{{route('students.show',$student->id)}}">Pokaż</a>
                        <a class="btn btn-primary" href="{{route('students.edit',$student->id)}}">Edytuj</a>

                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
