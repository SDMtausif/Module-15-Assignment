@extends('layouts.master')

@section('title', 'Product Confirmation')

@section('content')
    <h2>Product Confirmation</h2>

    <p>Name: {{ $product['name'] }}</p>
    <p>Price: {{ $product['price'] }}</p>
    <p>Stock: {{ $product['stock'] }}</p>
@endsection
