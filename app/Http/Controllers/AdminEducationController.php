<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class AdminEducationController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $educations = Education::all();
        return view('admin.education.index', compact('educations'));
    }

    public function create()
    {
        return view('admin.education.create');
    }

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

    public function edit(string $id)
    {
        $education = Education::findOrFail($id);
        return view('admin.education.edit', compact('education'));
    }

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

    public function destroy(string $id)
    {
        $education = Education::findOrFail($id);
        $education->delete();
        return redirect()->route('admin.education.index')->with('success', 'Education deleted successfully.');
    }
}
