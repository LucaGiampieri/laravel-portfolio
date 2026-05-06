@extends('layouts.projects')

@section('title', "All Projects")

@section('content')

    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($projects as $project)
                <tr>
                    <td class="fw-semibold">{{ $project->title }}</td>
                    <td>{{ $project->author }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection