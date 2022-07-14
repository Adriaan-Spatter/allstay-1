<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Module;
use App\Models\Question;

class LessonController extends Controller
{
    public function index(){

    }
    
    public function show(Lesson $lesson){

    }

    public function create(Module $module){
        return view('admin.module.lesson.create', [
            'module' => $module,
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'introduction' => 'nullable',
            'module_id' => 'required',
        ]);
        Lesson::create($validated);
        return redirect()->back()->with('status', 'Lesson Successfully Added');  
    }

    public function edit(Lesson $lesson, Module $module){
        return view('admin.module.lesson.edit', [
            'lesson' => $lesson,
            'module' => $module,
        ]);
    }

    public function update(Request $request, Lesson $lesson){
        $validated = $request->validate([
            'name' => 'required',
            'introduction' => 'nullable',
        ]);
        $lesson->update($validated);
        return redirect()->back()->with('status', 'Lesson Successfully Updated');  
    }
    
    public function destroy(Lesson $lesson){
        $lesson->delete();
        return redirect()->back()->with('status', 'Lesson Removed!');
    }
}
