<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Student::where([
            ["student_lrn", "like", "%" . $request->input("student_lrn") . "%"],
            ["first_name", "like", "%" . $request->input("first_name") . "%"],
            ["middle_name", "like", "%" . $request->input("middle_name") . "%"],
            ["last_name", "like", "%" . $request->input("last_name") . "%"],
            ["year_level", "like", "%" . $request->input("year_level") . "%"],
            ["section", "like", "%" . $request->input("section") . "%"],
        ])->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "student_lrn" => "required|unique:students,student_lrn",
            "first_name" => "required",
            "last_name" => "required",
            "age" => "required",
            "year_level" => "required",
            "section" => "required",
        ]);

        return Student::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Student::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->update($request->all());
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Student::destroy($id);
    }
}
