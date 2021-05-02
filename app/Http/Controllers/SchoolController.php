<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Teacher_billing_detail;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

   /* student's functions: '*/
    public function showStudents(){
        $students = Student::all();
        return view("school.students",['data' => $students]);
    }

    public function showStudentDetails($id){
        $student = DB::find($id);
        return view("school.studentdetail",['data' => $student]);
    }

    public function addStudent(){
        return view('school.addStudent');
    }

    public function  saveStudent(){
        $student = new Student();
        $student->name = request('imie');
        $student->surname = request('nazwisko');
        $student->age = request('wiek');
        $student->course = request('kierunek');
        $student->semester = request('semester');
        $student->save();
        return redirect('students')->with("msg","dodano studenta");
    }

    public function removeStudent($id){ //usuwanie studenta
        $student = Student::find($id);
        $student->delete();
        return redirect('students')->with("msg","usunięto studenta");
    }

    /* teacher's functions: '*/
    public function showTeachers(){
        $teachers = Teacher::all();
        return view("school.teachers", ['data' => $teachers]);
    }

    public function showTeacherDetails($id){
        $teacher = Teacher::find($id);
        return view("school.teacherdetail",['data' => $teacher]);
    }

    public function addTeacher(){
        return view('school.addTeacher');
    }

    public function saveTeacher(){
        $teacher = new Teacher();
        $teacher->name = request('imie');
        $teacher->surname = request('nazwisko');
        $teacher->subject = request('przedmiot');
        $teacher->salary = request('wynagrodzenie');
        $teacher->form_of_employment = request('formaZatr');
        $teacher->employment_date = request('dataPocz');
        $teacher->deemployment_date = request('dataKoniec');
        $teacher->adress = request('adres');
        $teacher->telephone = request('telefon');
        $teacher->email =request('email');

        $teacher->save();
        return redirect('teachers')->with("msg","dodano nauczyciela");
    }

    public function removeTeacher($id){
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect('teachers')->with("msg","usunięto nauczyciela");
    }

    public function editTeacher($id){
        $teacher = Teacher::find($id);
        return view('school.editTeacher',['data' => $teacher]);
    }

    public function updateTeacher(Request $request, $id){
        Teacher::where('id',$id)
        -> update(['name'=>'Nieznany']);
        print_r($id);
        print_r($request->input());

    }


    /* subject's functions: '*/
    public function showSubjects(){
        $subjects = Subject::all();
        return view("school.subjects", ['data'=>$subjects]);
    }


    public function showSubjectDetails($id){
        $subject = Subject::find($id);
        return view("school.subjectdetail",['data' => $subject]);
    }

    public function addSubject(){
        return view('school.addSubject');
    }

    public function saveSubject(){
        $subject = new Subject();
        $subject->name = request('nazwa');
        $subject->duration = request('czas');
        $subject->save();
        return redirect('subjects')->with("msg","dodano przedmiot");
    }

    public function removeSubject($id){
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('subjects')->with("msg","usunięto przedmiot");
    }



}
