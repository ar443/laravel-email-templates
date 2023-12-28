@extends('LaravelEmailTemplate.layout')

@section('content')
    <h2>Edit Email Template</h2>

    <form action="{{ route('email-templates.update', $emailTemplate->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group input-container">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $emailTemplate->title }}" required
                maxlength="255">
            @if ($errors->has('title'))
                <span class="alert alert-danger mt-3">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" id="body" class="form-control" rows="5" required>{{ $emailTemplate->body }}</textarea>
            @if ($errors->has('body'))
                <span class="alert alert-danger mt-3">{{ $errors->first('body') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Template</button>
    </form>
@endsection
