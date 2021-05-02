@extends('layout')

@section('content')
    <div class="mycard">
            <div class="card">
                <img class="card-img-top" src="{{asset('school/img/person.png')}}" alt="avatar">
                <div class="card-body">
                    <h5 class="card-title">Dane studenta:</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Imię:  </strong>{{$student->name}}</li>
                    <li class="list-group-item"><strong>Nazwisko:  </strong>{{$student->surname}}</li>
                    <li class="list-group-item"><strong>Nr indeksu:  </strong>{{$student->index}}</li>
                    <li class="list-group-item"><strong>Wiek:  </strong>{{$student->age}}</li>
                    <li class="list-group-item"><strong>Kierunek:  </strong>{{$student->course}}</li>
                    <li class="list-group-item"><strong>Semestr:  </strong>{{$student->semester}}</li>
                    <li class="list-group-item"><strong>Numer telefonu:  </strong>{{$student->telephone}}</li>
                    <li class="list-group-item"><strong>Email:  </strong>{{$student->email}}</li>

                </ul>
                <div class="card-body">
                    <a href="/students" class="card-link">Wróć</a>
                    <a href="/students/{{$back}}" class="card-link">Poprzedni</a>
                    <a href="/students/{{$next}}" class="card-link">Następny</a>
                    <a href="{{route('students.edit',$student->id)}}" class="card-link">Edytuj</a>
                </div>
            </div>
    </div>



@endsection


