<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Lesson;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index(){

    }
    
    public function show(Question $question){

    }

    public function create(Module $module, Lesson $lesson){
        return view('admin.curriculum.module.lesson.question.create', [
            'module' => $module,
            'lesson' => $lesson,
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'text' => 'required',
            'lesson_id' => 'required',
            'question_type_id' => 'required'
        ]);
        Question::create($validated);
        return redirect()->back()->with('status', 'Question Successfully Added');  
    }

    public function edit(Question $question){
        return view('admin.curriculum.module.lesson.question.edit', [
            'question' => $question,
        ]);
    }

    public function update(Request $request, Question $question){
        $validated = $request->validate([
            'text' => 'required',
            'question_type_id' => 'required'
        ]);
        $question->update($validated);
        return redirect()->back()->with('status', 'Question Successfully Updated');  
    }
    
    public function destroy(Question $question){
        $question->delete();
        return redirect()->back()->with('status', 'Question Removed!');
    }
}
