@extends('layouts.projects')

@section('title', 'All Projects')

@section('content')

    <table class="table table-striped table-hover align-middle">

        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Option</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($projects as $project)

                <tr>

                    <td>{{ $project->title }}</td>

                    <td>{{ $project->author }}</td>

                    <td>{{ $project->category }}</td>

                    <td>

                        <a href="{{ route('projects.show', $project) }}" class="btn btn-outline-primary">
                            Show Project
                        </a>

                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-outline-warning">
                            Edit Project
                        </a>

                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $project->id }}">

                            Delete Project
                        </button>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

    <div class="container py-3">

        <a class="btn btn-primary" href="{{ route('projects.create') }}">

            Add new Project
        </a>

    </div>



    {{-- MODALS --}}

    @foreach ($projects as $project)

        <div class="modal fade" id="exampleModal{{ $project->id }}" tabindex="-1" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <h1 class="modal-title fs-5">
                            Delete the Project
                        </h1>

                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <div class="modal-body">

                        Do you really want to delete
                        "{{ $project->title }}"?

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">

                            Cancel
                        </button>

                        <form action="{{ route('projects.destroy', $project) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <input type="submit" class="btn btn-outline-danger" value="PERMANENTLY DELETE">

                        </form>

                    </div>

                </div>

            </div>

        </div>

    @endforeach

@endsection