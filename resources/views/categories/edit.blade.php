@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('messages.edit_category')</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">@lang('messages.name')</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">@lang('messages.update_category')</button>
    </form>
</div>
@endsection
