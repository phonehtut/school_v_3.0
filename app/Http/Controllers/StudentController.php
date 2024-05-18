<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|unique:students,phone',
            'birth_date' => 'required|date',
            'age' => 'required|integer',
            'gender' => 'required',
            'class' => 'required',
            'batch' => 'required',
            'os' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $photoName = $file->getClientOriginalName();
            $file->storeAs('photos', $photoName, 'public');
        } else {
            $photoName = null;
        }

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'birth_date' => $request->birth_date,
            'age' => $request->age,
            'photo' => $photoPath,
            'gender' => $request->gender,
            'class' => $request->class,
            'batch' => $request->batch,
            'os' => $request->os,
            'ip' => $request->ip(),
        ]);

        return redirect('register')->with('success', 'Registered Successfully');
    }

}
