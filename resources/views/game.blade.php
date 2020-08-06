@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Nouvelle partie</div>

                    <div class="card-body">
                        <p class="text-center">9 paires de cartes sont disposées faces cachées. Retournez les cartes une à une en cliquant dessus.</p>
                        <p class="text-center border-bottom pb-3">Retrouvez les paires en un minimum de coups.</p>

                        <div class="d-flex flex-row cards-table">
                            @foreach($images as $image)
                                    <div class="col-2 mb-3">
                                        <img src="{{ $image }}" alt="" class="img-thumbnail" id="{{$loop->index}}">
                                    </div>
                            @endforeach
                        </div>
                        <div class="text-center mb-3">
                            <label for="clicks">Nombre de click :</label>
                            <p class="clicks-"> 0 </p>
                            <input type="number" id="clicks" name="clicks" hidden>
                        </div>
                        <div class="text-center">
                            <a class="score-validation btn btn-lg btn-outline-primary mb-3">Enregistrer mon score et voir le classement</a>
                            <a class="score-validation btn btn-lg btn-outline-danger" href="{{ route('game') }}">Lancer une nouvelle partie sans sauvegarder</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
