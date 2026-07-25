@extends('layouts.header')

@section('title')
    Home |
@endsection

@section('content')
    <div>
        <div class="h1 text-success mt-3">
            Ylym Chyragy
        </div>
    </div>

    <div>
        <div class="h4 text-dark mt-3 mb-2 fw-bold">
            Iň Tazeleri <i class="bi bi-arrow-right text-success fw-bold"></i>
        </div>

        <div class="row row-cols-5">
            @foreach ($newbooks as $book)
                @include('app.book-card')
            @endforeach
        </div>
    </div>

    <div>
        <div class="h4 text-dark mt-3 mb-2 fw-bold">
            Iň Halanylanlar <i class="bi bi-arrow-right text-success fw-bold"></i>
        </div>

        <div class="row row-cols-5">
            @foreach ($topLikedbooks as $book)
                @include('app.book-card')
            @endforeach
        </div>
    </div>

    <div>
        <div class="h4 text-dark mt-3 mb-2 fw-bold">
            Awtorlar <i class="bi bi-arrow-right text-success fw-bold"></i>
        </div>
        <div class="row row-cols-5">
            @foreach ($authors as $author)
                @include('app.author-card')
            @endforeach
        </div>
    </div>

   
@endsection