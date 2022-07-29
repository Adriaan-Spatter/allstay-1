@extends('layouts.master')
@section('content')

<div>
    {{ $curriculum->name }}
    <form method="GET" action="{{ route('createModule', ['curriculum' => $curriculum->id]) }}">
        @csrf
        <div>
            <button class="btn btn-sm btn-warning">Add Module</button>
        </div>
    </form>
    @foreach ($modules as $module)
        <form method="GET" action="{{ route('showModule', ['module' => $module->id]) }}">
            @csrf
            <div>
                <button class="btn">{{ $module->name }}: {{ $module->description}}</button>
            </div>
        </form>
        <form method="GET" action="{{ route('editModule', ['module' => $module->id]) }}">
            @csrf
            <div>
                <button class="btn btn-sm btn-primary">Edit</button>
            </div>
        </form>
        <form method="POST" action="{{ route('deleteModule', ['module' => $module->id]) }}">
            @csrf
            @method('DELETE')
            <div>
                <button class="btn btn-sm btn-danger">Remove Module</button>
            </div>
        </form>
    @endforeach
</div>

@endsection