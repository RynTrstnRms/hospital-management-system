<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalRecord;

class MedicalRecordController extends Controller
{
    public function index()
    {
        return MedicalRecord::all();
    }

    public function show($id)
    {
        return MedicalRecord::find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'description' => 'required|string',
        ]);

        return MedicalRecord::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $medicalRecord = MedicalRecord::findOrFail($id);
        $medicalRecord->update($request->all());
        return $medicalRecord;
    }

    public function destroy($id)
    {
        MedicalRecord::find($id)->delete();
        return response()->json(['message' => 'Medical record deleted successfully']);
    }
}

