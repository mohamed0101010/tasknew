@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('messages.create_category')</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">@lang('messages.name')</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">@lang('messages.create_category')</button>
    </form>
</div>
@endsection
