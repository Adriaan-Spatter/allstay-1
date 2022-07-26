@extends('layouts.master')
@section('content')

<div>
    <form method="POST" action="{{ route('storeLesson') }}">
    @csrf
        @include('components._adminLesson')
        <button class="btn btn-success" type="submit">Add Lesson</button>
    </form>
</div>
@endsection