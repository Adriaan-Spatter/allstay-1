@extends('layouts.master')
@section('content')

@if(session()->has('status'))
<div class="alert alert-success">
    {{ session()->get('status') }}
</div>
@endif

<div>
    <form method="POST" action="{{ route('updateModule', ['module' => $module->id]) }}">
    @csrf
    @method('PUT')
        @include('components._adminModule')
        <button class="btn btn-success" type="submit">Submit Changes</button>
    </form>
</div>

@endsection