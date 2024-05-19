@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('messages.edit_product')</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">@lang('messages.name')</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">@lang('messages.description')</label>
            <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">@lang('messages.image')</label>
            <input type="file" name="image" class="form-control">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail mt-2" width="150">
            @endif
        </div>
        <div class="form-group">
            <label for="category_id">@lang('messages.category')</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">@lang('messages.update_product')</button>
    </form>
</div>
@endsection
