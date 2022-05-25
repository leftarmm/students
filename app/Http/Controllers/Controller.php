<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function student_store(Request $request)
    {
        //dd($request->all());

        $data = $request->except(['_token', 'profile_image']);

        if (!Storage::disk('public')->has('profile_images')) {
            Storage::disk('public')->makeDirectory('profile_images');
        }

        // $request->merge(
        //     [
               
        //     ]
        // );

        $student = new Student();
        $student->fill($data);
        $student->save();

        $file_name = $student->student_code . '_' . date('dmY_His') . '.' . $request->file('profile_image')->getClientOriginalExtension();
        Storage::disk('public')->put('profile_images/' . $file_name, file_get_contents($request->file('profile_image')));
        $student->profile_image = $file_name;
        $student->save();

        return redirect()->route('thank');
    }
}
