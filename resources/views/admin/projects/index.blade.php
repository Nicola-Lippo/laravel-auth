@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center py-3">Sezione Progetti Admin (S.P.A.)</h2>
        <section>
            <div class="d-flex">
                <div class="row">
                    @foreach ($project as $token)
                        <div class="col-4 py-2">
                            <div class="card text-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $token->title }}</h5>
                                    <p class="card-text">{{ $token->description }}</p>
                                    <p><strong>SLUG:</strong> {{ $token->slug }}</p>
                                    <h4>ID: {{ $token->id }}</h4>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Go</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
    </div>
@endsection
