@extends('layouts.types')

@section('title', 'All Types')

@section('content')

    <table class="table table-striped table-hover align-middle">

        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Options</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($types as $type)

                <tr>

                    <td>{{ $type->name }}</td>

                    <td>

                        <a href="{{ route('types.show', $type) }}" class="btn btn-outline-primary">
                            Show Type
                        </a>

                        <a href="{{ route('types.edit', $type) }}" class="btn btn-outline-warning">
                            Edit Type
                        </a>

                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $type->id }}">

                            Delete Type
                        </button>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

    <div class="container py-3">

        <a class="btn btn-primary" href="{{ route('types.create') }}">

            Add new Type
        </a>

        <a class="btn btn-success" href="{{ route('projects.index') }}">

            Back to Projects
        </a>

    </div>



    {{-- MODALS --}}

    @foreach ($types as $type)

        <div class="modal fade" id="exampleModal{{ $type->id }}" tabindex="-1" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <h1 class="modal-title fs-5">
                            Delete the Type
                        </h1>

                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>

                    </div>

                    <div class="modal-body">

                        Do you really want to delete
                        "{{ $type->name }}"?

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">

                            Cancel
                        </button>

                        <form action="{{ route('types.destroy', $type) }}" method="POST">

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