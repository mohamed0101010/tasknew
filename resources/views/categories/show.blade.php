@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $category->name }}</h1>
    <p><strong>@lang('messages.name'):</strong> {{ $category->name }}</p>
    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">@lang('messages.edit')</a>
    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">@lang('messages.delete')</button>
    </form>
</div>
@endsection
