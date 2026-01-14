<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('admin.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'year_start' => 'required|integer|min:1900|max:' . (date('Y') + 10),
            'year_end' => 'nullable|integer|min:1900|max:' . (date('Y') + 10),
            'description' => 'nullable|string',
        ]);

        Education::create($request->all());

        return redirect()->route('admin.education.index')->with('success', 'Education created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $education = Education::findOrFail($id);
        return view('admin.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'year_start' => 'required|integer|min:1900|max:' . (date('Y') + 10),
            'year_end' => 'nullable|integer|min:1900|max:' . (date('Y') + 10),
            'description' => 'nullable|string',
        ]);

        $education = Education::findOrFail($id);
        $education->update($request->all());

        return redirect()->route('admin.education.index')->with('success', 'Education updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('admin.education.index')->with('success', 'Education deleted successfully.');
    }
}
