@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>

    <p>Total Categories: {{ $totalCategories }}</p>
    <p>Total Products: {{ $totalProducts }}</p>
    <p>Total Stock Quantity: {{ $totalStock }}</p>

    <h2>Latest 5 Products</h2>
    <ul>
        @foreach($latestProducts as $product)
            <li>{{ $product->name }} - {{ $product->price }} BDT (Stock: {{ $product->stock }})</li>
        @endforeach
    </ul>
@endsection
