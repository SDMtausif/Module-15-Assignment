<h1>Categories with Products</h1>

@foreach($categories as $category)
    <h2>{{ $category->name }}</h2>
    <ul>
        @foreach($category->products as $product)
            <li>{{ $product->name }} - {{ $product->price }} BDT (Stock: {{ $product->stock }})</li>
        @endforeach
    </ul>
@endforeach
