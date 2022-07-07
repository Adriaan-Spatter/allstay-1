@extends('layouts.admin_layout')
@section('title', '')
@section('header', '')
@section('content')

<div>
    {{ $module->name }}
    {{ $module->description}}
</div>


@endsection