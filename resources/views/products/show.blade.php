@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" width="300">
    @endif
    <p><strong>@lang('messages.category'):</strong> {{ $product->category->name }}</p>
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">@lang('messages.edit')</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">@lang('messages.delete')</button>
    </form>
</div>
@endsection
