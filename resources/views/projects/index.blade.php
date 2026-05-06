@extends('layouts.projects')

@section('title', "Tutti i post")

@section('content')

    <table>
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Autore</th>
                <th>Contenuto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title}}</td>
                    <td>{{ $project->author}}</td>
                    <td>{{$project->content}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection