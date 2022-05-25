<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('group_id') && !is_null($request->group_id)) {
            return view('dashboard', [
                'group' => $request->group_id,
                'groups' => Group::all(),
                'students' => Student::where('group_id', $request->group_id)->orderBY('student_code', 'asc')->get()
            ]);
        } else if ($request->has('name') && !is_null($request->name)) {
            $keyword =  $request->name;
            return view('dashboard', [
                'groups' => Group::all(),
                'students' => Student::where(function ($query) use ($keyword) {
                    $query->where('name_th', 'like', '%' . $keyword . '%')
                        ->orWhere('name_eng', 'like', '%' . $keyword . '%')
                        ->orWhere('nick_name', 'like', '%' . $keyword . '%');
                })->orderBY('student_code', 'asc')->get()
            ]);
        } else if ($request->has('code') && !is_null($request->code)) {
            $keyword =  $request->code;
            return view('dashboard', [
                'groups' => Group::all(),
                'students' => Student::where(function ($query) use ($keyword) {
                    $query->where('student_code', 'like', '%' . $keyword . '%');
                })->orderBY('student_code', 'asc')->get()
            ]);
        } else {
            return view('dashboard', [
                'groups' => Group::all(),
                'students' => Student::orderBY('student_code', 'asc')->get()
            ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
