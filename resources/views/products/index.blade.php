@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('messages.products')</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">@lang('messages.create_product')</a>
    <form method="GET" action="{{ route('products.index') }}" class="form-inline mb-3">
        <input type="text" name="name" placeholder="@lang('messages.name')" class="form-control mr-2">
        <select name="category_id" class="form-control mr-2">
            <option value="">@lang('messages.category')</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">@lang('messages.filter')</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('messages.name')</th>
                <th>@lang('messages.description')</th>
                <th>@lang('messages.category')</th>
                <th>@lang('messages.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">@lang('messages.edit')</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">@lang('messages.delete')</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 