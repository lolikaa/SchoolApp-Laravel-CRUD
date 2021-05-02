<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function index()
    {
        $subjects = Subject::latest()->paginate(50);
        return view('subjects.index', compact('subjects'))
            ->with('i',(request()->input('page',1) -1) * 50);
    }


    public function create()
    {
        return view('subjects.create')
            ->with('success','Dane studenta zostały pomyślnie dodane do bazy');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'hours' => 'required',
            'duration' => 'required',
            'fee' => 'required',
        ]);

        Subject::create($request->all());

        return redirect()->route('subjects.index')
            ->with('success','Dane przedmiotu zostały pomyslnie dodane');
    }


    public function show(Subject $subject)
    {
        return view('subjects.show',compact('subject'));
    }


    public function edit(Subject $subject)
    {
        return view('subjects.edit',compact('subject'));
    }


    public function update(Request $request, Subject $subject)
    {
        $request->validate([

        ]);

        $subject->update($request->all());

        return redirect()->route('subjects.index')
            ->with('success','Dane przedmiotu zostały zaktualizowane pomyślnie.');
    }


    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('subjects.index')
            ->with('success','Rekord został pomyślnie usunięty');
    }
}
