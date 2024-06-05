<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    public function index()
    {
        return Patient::all();
    }

    public function show($id)
    {
        return Patient::find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Other',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|string|email|max:255',
            'emergency_contact' => 'nullable|string',
            'medical_history' => 'nullable|string',
        ]);

        return Patient::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'emergency_contact' => $request->emergency_contact,
            'medical_history' => $request->medical_history,
        ]);
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Other',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|string|email|max:255',
            'emergency_contact' => 'nullable|string',
            'medical_history' => 'nullable|string',
        ]);

        $patient->update($request->all());
        return $patient;
    }

    public function destroy($id)
    {
        Patient::find($id)->delete();
        return response()->json(['message' => 'Patient deleted successfully']);
    }
}
