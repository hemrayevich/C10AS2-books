@extends('layouts.header')

@section('content')
<div class="container py-4 py-lg-5">
    
    <div class="mb-3">
        <a href="{{ route('books.index') }}" class="btn btn-sm btn-outline-success rounded-pill px-3">
            <i class="bi bi-arrow-left me-1"></i> Yza
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
        <div class="row g-4 g-lg-5 align-items-start">
            
            <div class="col-lg-4 col-md-5 text-center">
                <div class="position-relative d-inline-block w-100 mb-3">
                    <div class="shadow rounded-4 overflow-hidden border border-light">
                        <img src="{{ asset('img/car.jpg') }}" 
                            alt="{{ $book->name }}" 
                            class="img-fluid w-100 object-fit-cover" 
                            style="max-height: 450px; min-height: 320px;">
                    </div>
                    
                    @if($book->category)
                        <span class="position-absolute top-0 start-0 m-3 badge bg-dark bg-opacity-75 fs-6 px-3 py-2 rounded-pill shadow-sm">
                            {{ $book->category->name }}
                        </span>
                    @endif
                </div>

                <div class="d-grid gap-2 mt-3">
                    <button type="button" id="likeBtn" data-id="{{ $book->id }}" data-liked="false"class="btn btn-outline-danger rounded-3 py-2 fw-semibold d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-heart" id="likeIcon"></i>
                        <span id="likeCount">{{ $book->like_count }}</span> Likes
                    </button>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill px-3 py-2">
                        Код: {{ $book->code }}
                    </span>
                    @if($book->language)
                        <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-25 rounded-pill px-3 py-2">
                            {{ $book->language->name }}
                        </span>
                    @endif
                </div>

                <h1 class="fw-bold text-dark display-6 mb-3">{{ $book->name }}</h1>

                <div class="d-flex align-items-center mb-4 p-3 bg-light rounded-3 border-start border-4 border-success">
                    <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                        <i class="bi bi-person-fill fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Awtor</div>
                        <h5 class="fw-bold text-dark mb-0">{{ $book->author->name }} {{ $book->author->surname }}</h5>
                    </div>
                </div>

                <h5 class="fw-bold text-dark mb-3">Kitap barada maglumat</h5>
                
                <div class="row row-cols-2 row-cols-sm-3 g-3 mb-4">
                    <div class="col">
                        <div class="p-3 bg-light rounded-3 h-100">
                            <div class="text-muted small mb-1">Kategoriýa</div>
                            <div class="fw-semibold text-dark text-truncate">{{ $book->category->name }}</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="p-3 bg-light rounded-3 h-100">
                            <div class="text-muted small mb-1">Ýyly</div>
                            <div class="fw-semibold text-dark">{{ $book->year->name ?? $book->year->year }}</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="p-3 bg-light rounded-3 h-100">
                            <div class="text-muted small mb-1">Sahypa sany</div>
                            <div class="fw-semibold text-dark">{{ $book->page_number }} sahypa</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="p-3 bg-light rounded-3 h-100">
                            <div class="text-muted small mb-1">Neşirýat</div>
                            <div class="fw-semibold text-dark text-truncate">{{ $book->publisher->name }}</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="p-3 bg-light rounded-3 h-100">
                            <div class="text-muted small mb-1">Dili</div>
                            <div class="fw-semibold text-dark">{{ $book->language->name }}</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="p-3 bg-light rounded-3 h-100">
                            <div class="text-muted small mb-1">Halanylanlar</div>
                            <div class="fw-semibold text-danger">{{ $book->like_count }}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection