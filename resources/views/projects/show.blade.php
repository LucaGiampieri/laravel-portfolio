@extends('layouts.projects')

@section("title", $project->title)

@section("content")

    <div class="card shadow-sm">
        <div class="card-body">

            <h2 class="card-title fw-bold mb-3">
                {{ $project->title }}
            </h2>

            <div class="mb-3">
                {{ $project->type ? $project->type->name : 'Nessun tipo' }}
            </div>

            <h6 class="text-muted mb-4">
                Author: {{ $project->author }}
            </h6>

            @if (count($project->technologies) > 0)
                <small>
                    Technology:
                    @foreach ($project->technologies as $technology)
                        <span class="badge" style="background-color: {{ $technology->color }}">{{ $technology->name }}</span>
                    @endforeach
                </small>
            @endif

            <p class="card-text fs-5">
                {{ $project->content }}
            </p>

            <a href="{{ route('projects.index') }}" class="btn btn-secondary mt-3">
                ← Back to projects
            </a>

        </div>
    </div>

@endsection