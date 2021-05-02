@extends('layout')

@section('content')
    <div class="pull-left">
        <h2>Ostatnio wpisane oceny</h2>
    </div>


    <div class="row">
        <div class="col-lg-12 margin-tb">


            <div class="pull-right">
                <a class="btn btn-success" id="dodaj_button" href="{{route('grades.create')}}">Wstaw ocenę</a>
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
            <th>Numer indeksu</th>
            <th>Nazwisko</th>
            <th>Przedmiot</th>
            <th>Wystawiona ocena</th>
            <th width="380px">Edytuj</th>
        </tr>
            <tr>
                @foreach($data as $d)
                <td>{{Arr::get($d,'index')}}</td>
                <td>{{Arr::get($d,'surname')}}</td>
                <td>{{Arr::get($d,'name')}}</td>
                <td>{{Arr::get($d,'final_grade')}}</td>
               <td>
{{--                    <form action="{{route('grades.destroy',$d->id)}}" method="POST">--}}
                        <form method="POST">
                        <a class="btn btn-primary" href="{{route('grades.edit',$d->id)}}">Edytuj</a>
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
