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
                            <table>
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Score</th>
                                            <th>Surnom</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            @foreach ($scores as $key => $score)
                                                <tr class="text-center">
                                                    <td>{{ $key +1 }} </td>
                                                    <td>{{ $score->value }}</td>
                                                    <td>{{ $score->user->name }}</td>
                                                    <td>{{ $score->created_at }}</td>
                                                </tr>
                                            @endforeach

                                    </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
