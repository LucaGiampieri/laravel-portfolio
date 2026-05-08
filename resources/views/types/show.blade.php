@extends('layouts.types')

@php
    /** @var \App\Models\Type $type */
@endphp

@section("title", $type->name)

@section("content")

    <div class="card shadow-sm">
        <div class="card-body">

            <h2 class="card-title fw-bold mb-3">
                {{ $type->name }}
            </h2>

            <p class="card-text fs-5">
                {{ $type->description }}
            </p>

            <a href="{{ route('types.index') }}" class="btn btn-secondary mt-3">
                ← Back to types
            </a>

        </div>
    </div>

@endsection