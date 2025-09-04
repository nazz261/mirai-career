<?php

namespace App\Http\Controllers;

use App\Models\JlptClass;
use Illuminate\Http\Request;

class JlptClassController extends Controller
{
    /**
     * Show the admin page with all JLPT classes.
     */
    public function index()
    {
        $jlptClasses = JlptClass::all();
        return view('jlpt-preparation-admin', compact('jlptClasses'));
    }

    /**
     * Store a new class.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'level' => 'required|string',
            'day' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
            'teacher' => 'required|string',
            'location' => 'required|string',
            'seats' => 'required|integer|min:0',
            'price' => 'required|numeric',
        ]);

        // Auto status based on seats
        $data['status'] = $data['seats'] == 0 ? 'full' : 'available';

        JlptClass::create($data);

        return redirect()->route('jlpt.admin')->with('success', 'Class added successfully!');
    }

    /**
     * Show the edit form for a class.
     */
    public function edit(JlptClass $jlptClass)
    {
        $jlptClasses = JlptClass::all();
        $editClass = $jlptClass;

        return view('jlpt-preparation-admin', compact('jlptClasses', 'editClass'));
    }

    /**
     * Update an existing class.
     */
    public function update(Request $request, JlptClass $jlptClass)
    {
        $data = $request->validate([
            'level' => 'required|string',
            'day' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
            'teacher' => 'required|string',
            'location' => 'required|string',
            'seats' => 'required|integer|min:0',
            'price' => 'required|numeric',
        ]);

        // Auto status based on seats
        $data['status'] = $data['seats'] == 0 ? 'full' : 'available';

        $jlptClass->update($data);

        return redirect()->route('jlpt.admin')->with('success', 'Class updated successfully!');
    }

    /**
     * Delete a class.
     */
    public function destroy(JlptClass $jlptClass)
    {
        $jlptClass->delete();
        return redirect()->route('jlpt.admin')->with('success', 'Class deleted successfully!');
    }

    /**
     * Public JLPT preparation page (frontend).
     */
        public function preparationPage()
        {
            // Group classes by level (N1, N2, etc.)
            $jlptClasses = JlptClass::all()->groupBy('level');

            return view('jlpt-preparation', compact('jlptClasses'));
        }
}
