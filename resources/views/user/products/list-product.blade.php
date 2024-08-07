@extends('user.layouts.default')

@section('title')
    @parent
    Danh sách sản phẩm user
@endsection

@push('styles')
    <style>
        .card-img-top{
            width: 100%;
            height: 500px;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
<!-- Main -->
<div class="p-4" style="min-height: 800px;">
    <div class="row">
        @foreach($listProduct as $product)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><strong>Giá: </strong>{{ number_format($product->price) }} VND</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@push('scripts')
<!-- Custom scripts for this view -->
@endpush
