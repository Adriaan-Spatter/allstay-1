@extends('layouts.master')
@section('content')

<div>
    <a class="btn" href="{{ route('createModule') }}">Add New Module</a>
</div>

@foreach($modules as $module)
<div class="card">
    <form method="GET" action="{{ route('showModule', ['module' => $module->id]) }}">
        @csrf
        <div>
            <button class="btn">{{ $module->name }}: {{ $module->description}}</button>
        </div>
    </form>
    <div>
    </div>    
    <form method="GET" action="{{ route('editModule', ['module' => $module->id]) }}">
        @csrf
        <div>
            <button class="btn">Edit</button>
        </div>
    </form>
    <form method="POST" action="{{ route('deleteModule', ['module' => $module->id]) }}">
        @csrf
        @method('DELETE')
        <div>
            <button class="btn">Remove Module</button>
        </div>
    </form>
</div>
@endforeach
@endsection