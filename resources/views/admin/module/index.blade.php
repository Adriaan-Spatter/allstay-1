@extends('layouts.admin_layout')
@section('title', '')
@section('header', '')
@section('content')

<a class="btn btn-sm" href="{{ route('createModule') }}">Add New Module</a>

@foreach($modules as $module)
<form method="GET" action="{{ route('showModule', ['module' => $module->id]) }}">
    @csrf
    <div>
        <button class="btn btn-sm">{{ $module->name }}</button>
    </div>
</form>

<form method="GET" action="{{ route('editModule', ['module' => $module->id]) }}">
    @csrf
    <div>
        <button class="btn btn-sm">Edit</button>
    </div>
</form>

<form method="POST" action="{{ route('deleteModule', ['module' => $module->id]) }}">
    @csrf
    @method('DELETE')
    <div>
        <button class="btn btn-sm">Remove Module</button>
    </div>
</form>

    <div>
        {{ $module->description}}
    </div>
@endforeach


@endsection