@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Classement global</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Score</th>
                                            <th>Surnom</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($scores) > 0)
                                            @foreach ($scores as $score)
                                                <tr class="text-center">
                                                    <td>{{ $loop->index +1 }} </td>
                                                    <td>{{ $score->value }}</td>
                                                    <td>{{ $score->user->name }}</td>
                                                    <td>{{ date_format(($score->created_at), 'd/m/Y H:i' ) }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                        <tr class="text-center">
                                            <td>Aucun score n'a été établi pour le moment.</td>
                                        </tr>
                                        @endif
                                    </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
