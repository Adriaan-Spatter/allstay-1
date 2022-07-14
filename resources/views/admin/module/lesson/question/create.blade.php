@extends('layouts.admin_layout')
@section('title', '')
@section('header', '')
@section('content')


<div>
    <form method="POST" action="{{ route('storeQuestion') }}">
    @csrf
        @include('components._adminQuestion')
        <button class="btn btn-success" type="submit">Add Lesson</button>
    </form>
</div>
@endsection