<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;

class CurriculumController extends Controller
{
    public function index(){
        return view('admin.curriculum.index', [
            'curricula' => Curriculum::all(),
        ]);
    }
    
    public function show(Curriculum $curriculum){
        $modules = $curriculum->allModules;
        return view('admin.curriculum.show', [
            'curriculum' => $curriculum,
            'modules' => $modules,
        ]);
    }

    public function create(){
        return view('admin.curriculum.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
        ]);
        Curriculum::create($validated);
        return redirect()->back()->with('status', 'Curriculum Successfully Added');  
    }

    public function edit(Curriculum $curriculum){
        return view('admin.curriculum.edit', [
            'curriculum' => $curriculum,
        ]);
    }
    
    public function update(Request $request, Curriculum $curriculum){
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $curriculum->update($validated);
        return redirect()->back()->with('status', 'Curriculum Successfully Updated');  
    }
    
    public function destroy(Curriculum $curriculum){
        $curriculum->delete();
        return redirect()->back()->with('status', 'Curriculum Removed!');
    }
}
