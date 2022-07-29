@extends('layouts.master')
@section('content')

@if(session()->has('status'))
<div class="alert alert-success">
    {{ session()->get('status') }}
</div>
@endif
<div>
    <form method="POST" action="{{ route('storeCurriculum') }}">
    @csrf
        @include('components._adminCurriculum')
        <button class="btn btn-success" type="submit">Add Curriculum</button>
    </form>
</div>
@endsection