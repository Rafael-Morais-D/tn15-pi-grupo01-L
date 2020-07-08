@extends('layouts.app')

@section('content')

    <!-- Main -->
    <main class="error">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center animated animatedFadeInUp fadeInUp">
        <img class="img-fluid error-img" src="{{ asset('img/404-pao.png') }}" alt="">
        <h2 class="mx-auto my-0">Desculpe!</h2>
        <h2 class="mx-auto mb-5"><br> Parece que não encontramos o que você procura.</h2>
        <div class="col-12 mt-5 mb-3 text-center">
            <a href="" class="btn btn-primary">VOLTE A PÁGINA INICIAL</a>
        </div>
        </div>
        </div>
    </main>
@endsection