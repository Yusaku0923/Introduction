<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\ValidCrudRequest;

class CrudController extends Controller
{
    public function index()
    {
        $query = Student::query();

        $students = $query->orderBy('id', 'asc')->paginate(5);
        return view('student.index')->with('students', $students);
    }

     /**
     * 新規登録（入力）
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * 新規登録（確認）
     */
    public function confirm(ValidCrudRequest $request)
    {
        $data = $request->all();
        return view('student.confirm')->with($data);
    }

    /**
     * 新規登録（登録）
     */
    public function store(Request $request)
    {
        // Studentオブジェクト生成
        $student = new Student;

        // 値の登録
        $student->name = $request->name;
        $student->email = $request->email;
        $student->tel = $request->tel;
        $student->message = $request->message;

        // 保存
        $student->save();

        // 一覧にリダイレクト
        return redirect()->route('student.index');
    }

}
