@extends('layouts.admin_layout')
@section('title', '')
@section('header', '')
@section('content')

<div>
    {{ $module->name }} <br>
    {{ $module->description}} <br>
    <form method="GET" action="{{ route('createLesson', ['module' => $module->id]) }}">
        @csrf
        <div>
            <button class="btn btn-sm">Add Lesson</button>
        </div>
    </form>
    @foreach ($lessons as $lesson)
        {{ $lesson->name }}
        <form method="GET" action="{{ route('editLesson', ['lesson' => $lesson->id]) }}">
            @csrf
            <div>
                <button class="btn btn-sm">Edit</button>
            </div>
        </form>
        <form method="POST" action="{{ route('deleteLesson', ['lesson' => $lesson->id]) }}">
            @csrf
            @method('DELETE')
            <div>
                <button class="btn btn-sm">Remove Lesson</button>
            </div>
        </form>
    @endforeach
</div>


@endsection