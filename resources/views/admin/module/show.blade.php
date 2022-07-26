@extends('layouts.master')
@section('content')

<div>
    {{ $module->name }}
    <form method="GET" action="{{ route('createLesson', ['module' => $module->id]) }}">
        @csrf
        <div>
            <button class="btn btn-sm btn-warning">Add Lesson</button>
        </div>
    </form>
    @foreach ($lessons as $lesson)
    {{ $lesson->name }}
        <form method="GET" action="{{ route('editLesson', ['lesson' => $lesson->id]) }}">
            @csrf
            <div>
                <button class="btn btn-sm btn-primary">Edit</button>
            </div>
        </form>
        <form method="POST" action="{{ route('deleteLesson', ['lesson' => $lesson->id]) }}">
            @csrf
            @method('DELETE')
            <div>
                <button class="btn btn-sm btn-danger">Remove Lesson</button>
            </div>
        </form>
        <form method="GET" action="{{ route('createQuestion', ['module' => $module->id, 'lesson' => $lesson->id]) }}">
            @csrf
            <div>
                <button class="btn btn-sm btn-success">Add Question</button>
            </div>
        </form>

        @foreach($questions as $question)
        @if($question->lesson_id == $lesson->id)
            {{ $question->text }}
        @endif
        @endforeach
        <br>
    @endforeach
</div>

@endsection