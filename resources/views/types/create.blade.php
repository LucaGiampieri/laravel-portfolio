@extends('layouts.types')

@section('title', 'Add a new Type')

@section("content")

    <form action="{{ route('types.store') }}" method="POST">
        @csrf

        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>

        <input type="submit" value="Add">

    </form>

@endsection