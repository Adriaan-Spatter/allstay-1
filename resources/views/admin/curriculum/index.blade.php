@extends('layouts.master')
@section('content')

<div>
    <a class="btn" href="{{ route('createCurriculum') }}">Add New Curriculum</a>
</div>

@foreach($curricula as $curriculum)
<div class="card">
    <form method="GET" action="{{ route('showCurriculum', ['curriculum' => $curriculum->id]) }}">
        @csrf
        <div>
            <button class="btn">{{ $curriculum->name }}</button>
        </div>
    </form>
    <div>
    </div>    
    <form method="GET" action="{{ route('editCurriculum', ['curriculum' => $curriculum->id]) }}">
        @csrf
        <div>
            <button class="btn">Edit</button>
        </div>
    </form>
    <form method="POST" action="{{ route('deleteCurriculum', ['curriculum' => $curriculum->id]) }}">
        @csrf
        @method('DELETE')
        <div>
            <button class="btn">Remove Curriculum</button>
        </div>
    </form>
</div>
@endforeach
@endsection