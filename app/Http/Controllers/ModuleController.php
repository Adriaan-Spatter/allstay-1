<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\Outcome;

class ModuleController extends Controller
{
    public function index(){
        return view('admin.module.index', [
            'modules' => Module::all(),
        ]);
    }
    
    public function show(Module $module){
        $lessons = $module->allLessons;
        $questions = Question::join('lessons', 'lessons.id', '=', 'questions.lesson_id')->get();
        return view('admin.module.show', [
            'module' => $module,
            'lessons' => $lessons, 
            'questions' => $questions,
        ]);
    }

    public function create(){
        return view('admin.module.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'notes' => 'nullable',
            'difficulty' => 'nullable|numeric|gte:0|lte:10',
            'duration' => 'nullable|numeric|gt:0',
        ]);
        Module::create($validated);
        return redirect()->back()->with('status', 'Module Successfully Added');  
    }

    public function edit(Module $module){
        return view('admin.module.edit', [
            'module' => $module,
        ]);
    }
    public function update(Request $request, Module $module){
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'notes' => 'nullable',
            'difficulty' => 'nullable|numeric|gte:0|lte:10',
            'duration' => 'nullable|numeric|gt:0',
        ]);
        $module->update($validated);
        return redirect()->back()->with('status', 'Module Successfully Updated');  
    }
    
    public function destroy(Module $module){
        $module->delete();
        return redirect()->back()->with('status', 'Module Removed!');
    }
}
