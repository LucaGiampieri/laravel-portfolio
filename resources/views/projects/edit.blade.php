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
            <label for="category">Category</label>
            <input type="text" name="category" id="category" value="{{ $project->category}}">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="content">Content</label>
            <textarea name="content" id="content" width="100%" rows="5">{{ $project->title }}</textarea>
        </div>

        <input type="submit" value="Modify">

    </form>

@endsection