<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function displayform(){
        return view('/ajouterstud');
    }

    public function save(Request $request)
    {
        $student_name= $request->input('stud_name');
        $student_phone= $request->input('stud_phone');
        $student_email= $request->input('stud_email');
        $student_pass= Hash::make($request['stud_email']);

        //Enregistrer les étudiants dans le tableau

        DB::insert('insert into students(stud_name,stud_phone,stud_email) values(?,?,?)',[$student_name,$student_phone,$student_email]);
        DB::insert('insert into users(name,email,password) values(?,?,?)',[$student_name,$student_email,$student_pass]);

        return redirect('/admin')->with('success','Etudiant enregistré avec succes!');
    }

    public function viewform()
    {
        return view('viewstudent');
    }

    public function index()
    {
        $student = DB::select('select * from students');
        return view('viewstudent',['students'=>$student]);
    }

    public function edit_function($id){
      $student =  DB::select('select * from students where id=?',[$id]);
        return view('editstudent',['student'=>$student]);
        }

      public function update_function(Request $request,$id){
        
        $student_name= $request->input('stud_name');
        $student_phone= $request->input('stud_phone');
        $student_email= $request->input('stud_email');
        
        DB::update('update students set stud_name=?, stud_phone=?,stud_email=? where id=?',
        [$student_name,$student_phone,$student_email,$id]);
        

        return redirect('/admin/viewstudent')->with('success','Mise à jour faite!');
       }
    
    

    public function delete_function ($stud_email){

        DB::delete('delete from students where stud_email=?',[$stud_email]);
        DB::delete('delete from users where email=?',[$stud_email]);
        return redirect('/admin/viewstudent')->with('success','Etudiant Supprimé');

    }

   
}
