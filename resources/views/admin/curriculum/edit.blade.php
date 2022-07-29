@extends('layouts.master')
@section('content')


@if(session()->has('status'))
<div class="alert alert-success">
    {{ session()->get('status') }}
</div>
@endif

<div>
    <form method="POST" action="{{ route('updateCurriculum', ['curriculum' => $curriculum->id]) }}">
    @csrf
    @method('PUT')
        @include('components._adminCurriculum')
        <button class="btn btn-success" type="submit">Submit Changes</button>
    </form>
</div>

@endsection