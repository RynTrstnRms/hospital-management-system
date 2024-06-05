<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return Doctor::all();
    }

    public function show($id)
    {
        return Doctor::find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'phone' => 'required|string|max:11',
            'email' => 'required|string|email|max:255|unique:doctors',
        ]);

        return Doctor::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->update($request->all());
        return $doctor;
    }

    public function destroy($id)
    {
        Doctor::find($id)->delete();
        return response()->json(['message' => 'Doctor deleted successfully']);
    }
}
