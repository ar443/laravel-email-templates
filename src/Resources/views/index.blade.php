@extends('LaravelEmailTemplate.layout')

@section('content')
    <h2>Email Templates</h2>

    <a href="{{ route('email-templates.create') }}" class="btn btn-primary">Create New Template</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($emailTemplates as $template)
                <tr>
                    <td>{{ $template->title }}</td>
                    <td>
                        <a href="{{ route('email-templates.show', $template->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('email-templates.edit', $template->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('email-templates.destroy', $template->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
