@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('messages.create_product')</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">@lang('messages.name')</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">@lang('messages.description')</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">@lang('messages.image')</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="category_id">@lang('messages.category')</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">@lang('messages.create_product')</button>
    </form>
</div>
@endsection
