@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center py-3">Sezione Progetti Admin (S.P.A.)</h2>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary btn-lg">Crea un nuovo progetto</button>
        </div>
        <section class="py-5">
            <div class="d-flex">
                <div class="row">
                    @foreach ($projects as $project)
                        <div class="col-4 py-2">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $project->title }}</h5>
                                    <p class="card-text">{{ $project->description }}</p>
                                    <p><strong>SLUG:</strong> {{ $project->slug }}</p>
                                    <h4>ID: {{ $project->id }}</h4>
                                </div>
                                <div class="d-flex justify-content-around">
                                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary m-3">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <a href="#" class="btn btn-warning m-3">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger m-3">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
