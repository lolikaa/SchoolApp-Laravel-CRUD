<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::latest()->paginate(50);
        return view('teachers.index', compact('teachers'))
            ->with('i',(request()->input('page',1) -1) * 50);
    }


    public function create()
    {
        return view('teachers.create')
            ->with('success','Dane wykładowcy zostały pomyślnie dodane do bazy');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'subject' => 'required',
            'salary' => 'required',
            'form_of_employment'=> 'required',
            'employment_date' => 'required',
            'adress'=>'required',
            'telephone'=>'required',
            'email'=>'required'
        ]);
        Teacher::create($request->all());

        return redirect()->route('teachers.index')
            ->with('success','Dane nowego wykładowcy zostały pomyslnie dodane');
    }

    public function show(Teacher $teacher)
    {
        // get previous student id
        $previous = Teacher::where('id', '<', $teacher->id)->max('id');
        // {{$student->count()}}
        // get next student id
        $next = Teacher::where('id', '>', $teacher->id)->min('id');
        return view('teachers.show',[
            'back' => $previous, 'next' => $next],
            compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('teachers.edit',compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([

        ]);

        $teacher->update($request->all());

        return redirect()->route('teachers.index')
            ->with('success','Dane wykładowcy zostały zaktualizowane pomyślnie.');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teachers.index')
            ->with('success','Rekord został pomyślnie usunięty');
    }
}
