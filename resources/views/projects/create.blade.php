@extends('layouts.projects')

@section('title', 'Add a new Project')

@section("content")

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="form-control mb-3 d-flex flex-column">
            <label for="title"> Title</label>
            <input type="text" name="title" id="title">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="author">Author</label>
            <input type="text" name="author" id="author">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="category">Category</label>
            <input type="text" name="category" id="category">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="content">Content</label>
            <textarea name="content" id="content" width="100%" rows="5"></textarea>
        </div>

        <input type="submit" value="Add">

    </form>

@endsection