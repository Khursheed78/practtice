<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\students;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function save(Request $request){
        // return "add student";
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'required',
        ]);

         // Insert data into the database
         $student = students::create($validated);

         // Return a response
         return response()->json([
             'success' => true,
             'message' => 'Student Saved successfully!',
             'data' => $student,
         ], 201);
    }
    public function show(){
        return students::all();
    }

    public function update(Request $request, $id)
    {
        // Validate the input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'required|string|max:15',
        ]);
    
        // Find the existing student
        $student = Students::find($id);
    
        // Check if the student exists
        if (!$student) {
            return response()->json([
                'success' => false,
                'message' => 'Student not found!',
            ], 404);
        }
    
        // Update the student
        $student->update($validated);
    
        // Return a success response
        return response()->json([
            'success' => true,
            'message' => 'Student updated successfully!',
            'data' => $student,
        ], 200);
    }
    

    public function delete($id)
{
    // Find the student
    $student = Students::find($id);

    // Check if the student exists
    if (!$student) {
        return response()->json([
            'success' => false,
            'message' => 'Student not found!',
        ], 404);
    }

    // Delete the student
    $student->delete();

    // Return a success response
    return response()->json([
        'success' => true,
        'message' => 'Student deleted successfully!',
    ], 200);
}

}
