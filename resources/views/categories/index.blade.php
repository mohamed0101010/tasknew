@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang('messages.categories')</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">@lang('messages.create_category')</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>@lang('messages.name')</th>
                <th>@lang('messages.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">@lang('messages.edit')</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
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
