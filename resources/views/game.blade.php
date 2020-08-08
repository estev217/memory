@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Nouvelle partie</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p class="text-center">9 paires de cartes sont disposées faces cachées. Retournez les cartes une à une en cliquant dessus.</p>
                        <p class="text-center border-bottom pb-3">Retrouvez les paires en un minimum de coups.</p>

                        <div class="d-flex flex-row cards-table">
                            @foreach($images as $image)
                                    <div class="col-2 mb-3">
                                        <button class="card-link">
                                            <img src="{{ $image }}" class="img-thumbnail card-hidden" id="card{{ $loop->index+1 }}" alt="">
                                        </button>
                                    </div>
                            @endforeach
                        </div>
                            <form method="POST" action="{{ route('scores') }}">
                                @csrf
                                <div class="text-center mb-3">
                                    <label for="clicks">Nombre de click :</label>
                                    <p id="clicks-done">0</p>

                                    <input type="number" id="clicks" name="clicks" value="0" hidden>

                                </div>
                                <div class="end-buttons-off" id="end-buttons">
                                    <button class="btn btn-lg btn-outline-primary mb-3" type="submit">Enregistrer mon score et voir le classement</button>
                                    <a class="btn btn-lg btn-outline-danger" href="{{ route('game') }}">Lancer une nouvelle partie sans sauvegarder</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
