<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use mysql_xdevapi\Table;

class GradesController extends Controller
{

    public function index()
    {
        $data = Grade::select('grades.id','students.index','students.surname', 'subjects.name', 'final_grade')
            ->join('students','students_id','=','students.id')
            ->join('subjects','subject_id','=', 'subject_id')
            ->get();

        return view('grades.index',[
            'data' => $data]);
    }


    public function create()
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('grades.create', [
            'students' => $students,'subjects' => $subjects]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'students_id' => 'required',
            'subject_id' => 'required',
            'final_grade' => 'required',
        ]);

       // Grades::create($request->all());
        $grade = new Grade();
        $grade->students_id = $request->input('students_id');
        $grade->subject_id = $request->input('subject_id');
        $grade->final_grade = $request->input('final_grade');
        $grade->save();


        return redirect()->route('grades.index')
            ->with('success','Dane zostały pomyslnie dodane');
    }


    public function show(Grade $grade)
    {
        //
    }


    public function edit(Grade $grade)
    {
        return view('grades.edit', compact('grade'));
    }



    public function update(Request $request, Grade $grade)
    {
        $request->validate([

        ]);

        $grade->update($request->all());

        return redirect()->route('grades.index')
            ->with('success','Ocena została zmieniona.');
    }


    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect()->route('grades.index')
            ->with('success','Rekord został pomyślnie usunięty');
    }
}
