@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenue {{ Auth::user()->name }} !</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-flex flex-row justify-content-center">
                        <a class="btn btn-lg btn-outline-primary" href="{{ route('game') }}">Lancer une partie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
