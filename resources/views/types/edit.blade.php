@extends('layouts.types')

@php
    /** @var \App\Models\Type $type */
@endphp

@section('title', 'Modify Type')

@section("content")

    <form action="{{ route('types.update', $type) }}" method="POST">
        @csrf
        @method('PUT')


        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $type->name }}">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">{{ $type->description}}</textarea>
        </div>

        <input type="submit" value="Modify">

    </form>

@endsection