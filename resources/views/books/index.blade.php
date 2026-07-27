@extends('layouts.header')

@section('content')
<div class="container-xxlg my-5">
    <div class="mb-4">
        <h1 class="fw-bold text-success mb-1 text-center text-lg-start">Ähli kitaplar</h1>
    </div>

    <div class="row">
        <div class="col-lg-3">
        <div class="card border-0 shadow-sm rounded-4 p-3 sticky-top" style="top: 20px; z-index: 100;">
            <h5 class="fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                <i class="bi bi-funnel text-success"></i> Filtr
            </h5>

            <form action="{{ route('books.index') }}" method="GET">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-muted small fw-semibold">Kategoriya Sayla</label>
                    <select name="category" class="form-select">
                        <option value="">Ählisi</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}> 
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    <label class="form-label text-muted small fw-semibold mt-3">Awtory Sayla</label>
                    <select name="author" class="form-select">
                        <option value="">Ählisi</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" {{ request('author') == $author->id ? 'selected' : '' }}>
                                {{ $author->name }} {{ $author->surname }} 
                            </option>
                        @endforeach
                    </select>

                    <label class="form-label text-muted small fw-semibold mt-3">Awtory Sayla</label>
                    <select name="publisher" class="form-select">
                        <option value="">Ählisi</option>
                        @foreach ($publishers as $publisher)
                            <option value="{{ $publisher->id }}" {{ request('publisher') == $publisher->id ? 'selected' : '' }}>
                                {{ $publisher->name }} 
                            </option>
                        @endforeach
                    </select>

                    <label class="form-label text-muted small fw-semibold mt-3">Ýyly</label>
                    <div class="row g-2">
                        <div class="col-6">
                            <input type="number" 
                                name="year_from"
                                min="1800" 
                                max="2026" 
                                class="form-control" 
                                placeholder="Basy" 
                                value="{{ request('year_from') }}">
                        </div>
                        <div class="col-6">
                            <input type="number" 
                                name="year_to"
                                min="1800" 
                                max="2026"
                                class="form-control" 
                                placeholder="Sonki" 
                                value="{{ request('year_to') }}">
                        </div>
                    </div>

                    <label class="form-label text-muted small fw-semibold mt-3">Sahypa Sany</label>
                    <div class="row g-2">
                        <div class="col-6">
                            <input type="number" 
                                name="page_from" 
                                min="1" 
                                max="1000"
                                class="form-control" 
                                placeholder="Basy" 
                                value="{{ request('page_from') }}">
                        </div>
                        <div class="col-6">
                            <input type="number" 
                                name="page_to"
                                min="1" 
                                max="1000" 
                                class="form-control" 
                                placeholder="Sony" 
                                value="{{ request('page_to') }}">
                        </div>
                    </div>

                    <label class="form-label text-muted small fw-semibold mt-3  5">Reyting</label>
                    <select name="sortBy" class="form-select">
                        @foreach ($sorts as $sortKey => $sortName)
                            <option value="{{ $sortKey }}">{{ $sortName }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-success w-100" type="submit">
                    Filtrla
                </button>

                @if(request()->hasAny(['category', 'author', 'publisher', 'year_from', 'year_to', 'page_from', 'page_to']))
                    <a href="{{ route('books.index') }}" class="btn btn-secondary text-white fw-semibold w-100 rounded-3 mt-2 py-2 btn-sm">
                        Filtrleri arassala
                    </a>
                @endif

                <hr class="text-muted my-3 opacity-25">
            </form>
        </div>
    </div>

    <div class="col-lg-9">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
            @forelse($books as $book)
                <div class="col">
                    <a href="{{ route('books.show', $book->id) }}" class="hover-shadow text-decoration-none text-dark d-block h-100">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-hover">
                        
                            <div class="position-relative bg-light text-center p-2">
                                <img src="{{ asset('img/car.jpg') }}" class="card-img-top rounded-3" alt="{{ $book->name }}" style="height: 220px; object-fit: cover;">
                                <span class="position-absolute top-0 start-0 m-3 badge bg-dark bg-opacity-75 rounded-pill fw-normal">
                                    {{ $book->category->name }}
                                </span>                             
                            </div>

                            <div class="card-body d-flex flex-column justify-content-between p-3">
                                <div>
                                    <h6 class="card-title fw-bold text-dark text-truncate mb-1" title="{{ $book->name }}">
                                        {{ $book->name }}
                                    </h6>
                                
                                    <p class="card-text text-secondary small mb-2">
                                        {{ $book->code }} • {{ $book->page_number }} sah.
                                    </p>
                                </div>

                                <div class="pt-2 border-top d-flex align-items-center justify-content-between mt-2">
                                    <small class="text-muted text-truncate me-2" style="max-width: 110px;">
                                        {{ $book->author->name }}
                                    </small>
                                
                                    <div class="d-flex align-items-center text-danger small">
                                        <i class="bi bi-heart me-1"></i>
                                        <span>{{ $book->like_count }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-12">
                    <div class="alert alert-info text-center py-4 rounded-4" role="alert">
                        Книги пока не добавлены.
                    </div>
                </div>
            @endforelse
        </div>
        <div class="mt-5">
             {{ $books->links('pagination::bootstrap-5') }}
         </div>
    </div>
</div>
</div>

<style>
        .text-truncate-3 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .hover-shadow {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .hover-shadow:hover {
            transform: translateY(-3px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.08) !important;
        }
    </style>
@endsection