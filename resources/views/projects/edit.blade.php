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
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? "selected" : "" }}>{{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="content">Content</label>
            <textarea name="content" id="content" width="100%" rows="5">{{ $project->title }}</textarea>
        </div>

        <input type="submit" value="Modify">

    </form>

@endsection