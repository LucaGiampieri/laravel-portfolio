@extends('layouts.technologies')

@section('title', 'Modify Technology')

@section("content")

    <form action="{{ route('technologies.update', $technology) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Name</label>
            <input value="{{ $technology->name }}" type="text" name="name" id="name">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="color">Color</label>
            <input value="{{ $technology->color }}" type="color" name="color" id="color" rows="5">
        </div>

        <input type="submit" value="Add">

    </form>

@endsection