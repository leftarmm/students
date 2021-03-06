<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('id')) {
            return view('students.profile', [
                'student' => Student::find($request->id)
            ]);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        if ($request->has('id')) {
            if ($request->has('new_password') && !is_null($request->new_password)) {
                $request->merge(['password' => encrypt($request->new_password)]);
            }
            $data = $request->except(['_token', 'profile_image']);

            if (!Storage::disk('public')->has('profile_images')) {
                Storage::disk('public')->makeDirectory('profile_images');
            }

            $student = Student::find($request->id);
            $student->fill($data);
            $student->update();

            if ($request->has('profile_image')) {
                $file_name = $student->student_code . '_' . date('dmY_His') . '.' . $request->file('profile_image')->getClientOriginalExtension();
                Storage::disk('public')->put('profile_images/' . $file_name, file_get_contents($request->file('profile_image')));
                $student->profile_image = $file_name;
                $student->update();
            }
        }
        $notification = array(
            'message' => 'The information was updated successfully.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, Request $request)
    {
        if ($request->has('verify') && $request->verify == $student->password.$student->student_code) {
            $student->password = decrypt($student->password);
            // $student->birth_date = (date('Y', strtotime($student->birth_date)) - 543).date('-m-d', strtotime($student->birth_date));
            return view('students.form', [
                'groups' => Group::all(),
                'student' => $student
            ]);
        } else {
            return view('students.profile', [
                'student' => $student
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function check_password(Request $request)
    {
        $s = Student::find($request->id);
        if (decrypt($s->password) == $request->password) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }
}
