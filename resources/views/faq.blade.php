@extends('layouts.structure')

@section('page-title')
    Domande frequenti
@endsection

@section('content')
    <div class="container-faq-title">
        <h1>Domande frequenti</h1>
        <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
    </div>
    <div class="container-faq">
        <div class="container-prima-corso">
            <h3>Prima del corso</h3>
            @foreach ($faq_sinistra as $question)
            <div class="container-domanda-risposta">
                <div class="container-domanda">
                    <span>{{ $question['q'] }}</span>
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                </div>
                <div class="container-risposta">
                    <p>
                       {{ $question['a']}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>    

        <div class="container-dopo-corso">
            <h3>Dopo il corso</h3>
            @foreach ($faq_destra as $question)
            <div class="container-domanda-risposta">
                <div class="container-domanda">
                    <span>{{ $question['q'] }}</span>
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                </div>
                <div class="container-risposta">
                    <p>
                        {{ $question['a']}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection