@extends('layout')

@section('content')
    <div class="mycard">
        <div class="card">
            <img class="card-img-top" src="{{asset('school/img/person.png')}}" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">Dane Wykładowcy:</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Imię:  </strong>{{$teacher->name}}</li>
                <li class="list-group-item"><strong>Nazwisko:  </strong>{{$teacher->surname}}</li>
                <li class="list-group-item"><strong>Prowadzony przedmiot:  </strong>{{$teacher->subject}}</li>
                <li class="list-group-item"><strong>Wynagrodzenie:  </strong>{{$teacher->salary}}</li>
                <li class="list-group-item"><strong>Rodzaj umowy:  </strong>{{$teacher->form_of_employment}}</li>
                <li class="list-group-item"><strong>Data podpisania umowy:  </strong>{{$teacher->employment_date}}</li>
                <li class="list-group-item"><strong>Data zakończenia umowy:  </strong>@if(($teacher->deemployment_date)===NULL) umowa trwa @else {{$teacher->deemployment_date}} @endif</li>
                <li class="list-group-item"><strong>Adres:  </strong>{{$teacher->adress}}</li>
                <li class="list-group-item"><strong>Numer telefonu:  </strong>{{$teacher->telephone}}</li>
                <li class="list-group-item"><strong>Email:  </strong>{{$teacher->email}}</li>
            </ul>
            <div class="card-body">
                <a href="/teachers" class="card-link">Wróć</a>
                <a href="/teachers/{{$back}}" class="card-link">Poprzedni</a>
                <a href="/teachers/{{$next}}" class="card-link">Następny</a>
                <a href="{{route('teachers.edit',$teacher->id)}}" class="card-link">Edytuj</a>
            </div>
        </div>
    </div>



@endsection


