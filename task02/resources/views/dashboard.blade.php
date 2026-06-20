@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <h2>Welcome, {{ $username }}</h2>
    <p>Total Products: {{ $productCount }}</p>
@endsection
