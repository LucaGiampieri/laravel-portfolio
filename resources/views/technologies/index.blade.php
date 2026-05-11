@extends('layouts.technologies')

@section('title', 'All technologies')

@section('content')

    <table class="table table-striped table-hover align-middle">

        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Badge</th>
                <th>Options</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($technologies as $technology)

                <tr>

                    <td>{{ $technology->name }}</td>

                    <td>
                        <span class="badge" style="background-color: {{ $technology->color }}">{{ $technology->name }}</span>
                    </td>

                    <td>

                        <a href="{{ route('technologies.show', $technology) }}" class="btn btn-outline-primary">
                            Show Technology
                        </a>

                        <a href="{{ route('technologies.edit', $technology) }}" class="btn btn-outline-warning">
                            Edit Technology
                        </a>

                        <button technology="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $technology->id }}">

                            Delete Technology
                        </button>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

    <div class="container py-3">

        <a class="btn btn-primary" href="{{ route('technologies.create') }}">

            Add new Technology
        </a>

        <a class="btn btn-success" href="{{ route('projects.index') }}">

            Back to Projects
        </a>

    </div>



    {{-- MODALS --}}

    @foreach ($technologies as $technology)

        <div class="modal fade" id="exampleModal{{ $technology->id }}" tabindex="-1" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <h1 class="modal-title fs-5">
                            Delete the technology
                        </h1>

                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <div class="modal-body">

                        Do you really want to delete
                        "{{ $technology->name }}"?

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <form action="{{ route('technologies.destroy', $technology) }}" method="POST">

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