<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{

    public function index()
    {
        $students = Student::oldest()->paginate(50);
        return view('students.index', compact('students'))
            ->with('i',(request()->input('page',1) -1) * 50);
    }


    public function create()
    {
        return view('students.create')
            ->with('success','Dane studenta zostały pomyślnie dodane do bazy');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'index' => 'required',
            'age' => 'required',
            'course' => 'required',
            'semester' => 'required',
            'telephone' => 'required',
            'email' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success','Dane nowego studenta zostały pomyslnie dodane');
    }

    public function show(Student $student)
    {
        // get previous student id
       $previous = Student::where('id', '<', $student->id)->max('id');
       // {{$student->count()}}
        // get next student id
        $next = Student::where('id', '>', $student->id)->min('id');

        return view('students.show',[
            'back' => $previous, 'next' => $next],
            compact('student'));
    }


    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([

        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success','Dane studenta zostały zaktualizowane pomyślnie.');
    }


    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success','Rekord został pomyślnie usunięty');
    }
}
