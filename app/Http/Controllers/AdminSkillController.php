<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class AdminSkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $skills = Skill::all();
        return view('admin.skill.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|integer|min:1|max:100',
        ]);

        Skill::create($request->all());
        return redirect()->route('admin.skill.index')->with('success', 'Skill created successfully.');
    }

    public function edit(string $id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skill.edit', compact('skill'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|integer|min:1|max:100',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->update($request->all());
        return redirect()->route('admin.skill.index')->with('success', 'Skill updated successfully.');
    }

    public function destroy(string $id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        return redirect()->route('admin.skill.index')->with('success', 'Skill deleted successfully.');
    }
}
