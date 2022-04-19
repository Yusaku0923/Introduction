<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class CrudController extends Controller
{
    public function index()
    {
        $query = Student::query();

        $students = $query->orderBy('id', 'asc')->paginate(5);
        return view('student.list')->with('students', $students);
    }
}
