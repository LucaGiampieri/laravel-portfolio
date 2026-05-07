@extends('layouts.projects')

@section('title', "All Projects")

@section('content')

    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($projects as $project)
                <tr>
                    <td>
                        <a href="{{ route('projects.show', $project) }}" class="fw-semibold text-dark text-decoration-none">
                            {{ $project->title }}
                        </a>
                    </td>
                    <td>{{ $project->author }}</td>
                    <td>{{ $project->category }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection