@extends('layouts.master')
@section('content')

@if(session()->has('status'))
<div class="alert alert-success">
    {{ session()->get('status') }}
</div>
@endif

<div>
    <form method="POST" action="{{ route('updateLesson', ['lesson' => $lesson->id]) }}">
    @csrf
    @method('PUT')
        @include('components._adminLesson')
        <button class="btn btn-success" type="submit">Submit Changes</button>
    </form>
</div>

@endsection