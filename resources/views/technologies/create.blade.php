@extends('layouts.technologies')

@section('title', 'Add a new Technology')

@section("content")

    <form action="{{ route('technologies.store') }}" method="POST">
        @csrf

        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="color">Color</label>
            <input type="color" name="color" id="color" rows="5">
        </div>

        <input type="submit" value="Add">

    </form>

@endsection