@extends('layouts.app')
@section('title', 'home')

@section('content')
    {{ session('testing') === 'home' ? 'Home Page' : null }}
    <h1>This is home</h1>
@endsection
