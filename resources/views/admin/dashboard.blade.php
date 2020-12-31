@extends('admin.layout')

@section('content')
    <h1>Dashboard</h1>

    {{auth()->user()->email}}

@endsection
