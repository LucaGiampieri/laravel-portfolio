@extends('layouts.technologies')


@section("title", $technology->name)

@section("content")

    <div class="card shadow-sm">
        <div class="card-body">

            <h2 class="card-title fw-bold mb-3">
                {{ $technology->name }}
            </h2>

            <div>
                <h5>Badge:</h5> <span class="badge"
                    style="background-color: {{ $technology->color }}">{{ $technology->name }}</span>

                <br>

                <a href="{{ route('technologies.index') }}" class="btn btn-secondary mt-3">
                    ← Back to technologies
                </a>

            </div>
        </div>

@endsection