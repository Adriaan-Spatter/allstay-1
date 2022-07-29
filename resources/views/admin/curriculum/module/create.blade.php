@extends('layouts.master')
@section('content')

@if(session()->has('status'))
<div class="alert alert-success">
    {{ session()->get('status') }}
</div>
@endif
<div>
    <form method="POST" action="{{ route('storeModule') }}">
    @csrf
        @include('components._adminModule')
        <button class="btn btn-success" type="submit">Add Module</button>
    </form>
</div>
@endsection