
@extends('LaravelEmailTemplate.layout')

@section('content')
    <h2>Email Template Details</h2>

    <p><strong>Title:</strong> {{ $emailTemplate->title }}</p>
    <p><strong>Body:</strong></p>
    <div>{!! $emailTemplate->body !!}</div>

    <a href="{{ route('email-templates.edit', $emailTemplate->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('email-templates.destroy', $emailTemplate->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
@endsection
