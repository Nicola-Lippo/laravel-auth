@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center py-3">Modifica il Progetto: {{ $project->title }}</h2>
        <div class="d-flex justify-content-center">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-lg">Torna alla lista progetti</a>
        </div>
        <hr>
        <section class="py-5">
            <div class="card">
                <div class="card-body text-center">
                    <h2>{{ $project->title }}</h2>
                    <div>{{ $project->description }}</div>
                    <div>{{ $project->slug }}</div>
                    <div><strong>ID: {{ $project->id }}</strong></div>
                </div>
            </div>
        </section>
    </div>
@endsection
