@extends('layouts.app')

@section('content')
    <main class="page-content-container">
        <div class="product-container">
            @foreach ($products as $product)
                <div class="product-card">
                    <img src="{{ asset('images/download.jpeg') }}" alt="" class="product-image">
                    <div class="product-info-container">
                        <h1 class="product-name">
                            {{ $product['name'] }}
                        </h1>
                        <p class="product-description">
                            {{ $product['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection