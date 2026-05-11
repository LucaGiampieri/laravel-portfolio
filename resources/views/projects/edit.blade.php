@extends('layouts.projects')

@section('title', 'Modify a Project')

@section("content")

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-control mb-3 d-flex flex-column">
            <label for="title"> Title</label>
            <input type="text" name="title" id="title" value="{{ $project->title }}">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="{{ $project->author}}">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="type_id">Type</label>
            <select type="text" name="type_id" id="type_id">
                <option value="" @selected($project->type_id === null)>
                    Nessun tipo
                </option>

                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @selected($project->type_id == $type->id)>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-contro mb3 d-flex flex-wrap">
            @foreach ($technologies as $technology)
                <div class="tag me-2">
                    <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                        id="technology-{{ $technology->id }}" {{ $project->technologies->contains($technology->id) ? "checked" : "" }}>
                    <label for="technology-{{ $technology->id }}">{{$technology->name}}</label>
                </div>
            @endforeach
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="content">Content</label>
            <textarea name="content" id="content" width="100%" rows="5">{{ $project->title }}</textarea>
        </div>

        <input type="submit" value="Modify">

    </form>

@endsection