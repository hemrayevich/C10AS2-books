@extends('layouts.header')

@section('title')
    {{ $author->name }} {{ $author->surname }} |
@endsection

@section('content')
<div class="container py-4">
    <div class="mb-3">
        <a href="{{ route('home.index') }}" class="btn btn-sm btn-outline-success rounded-pill px-3">
            <i class="bi bi-arrow-left me-1"></i> Yza
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <h2 class="fw-bold text-dark mb-0">
                        {{ $author->name }} {{ $author->surname }}
                    </h2>
                    <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fw-normal fs-6">
                        @if($author->death_date)
                            {{ \Carbon\Carbon::parse($author->birth_date)->format('Y') }} – {{ \Carbon\Carbon::parse($author->death_date)->format('Y') }}
                        @else
                            {{ \Carbon\Carbon::parse($author->birth_date)->format('Y') }} ({{ \Carbon\Carbon::parse($author->birth_date)->age }} ýaş)
                        @endif
                    </span>
                </div>

                <!-- Статистика автора -->
                <div class="d-flex align-items-center text-success fw-semibold mb-3 gap-3">
                    <div class="d-flex align-items-center gap-1">
                        <i class="bi bi-book"></i>
                        <span>{{ $author->books_count ?? $author->books->count() }} kitap</span>
                    </div>
                </div>

                <!-- Биография автора -->
                <div class="text-muted">
                    <h5 class="fw-bold text-dark mb-2">Ömürýoly we döredijiligi</h5>
                    <p class="lh-base mb-0" style="white-space: pre-line;">
                        {{ $author->bio ?? 'Awtor barada maglumat girizilmändir.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="h4 text-dark mb-3">
            Awtoryň kitaplary <i class="bi bi-arrow-right text-success"></i>
        </div>

        @if($author->books && $author->books->count() > 0)
            <div class="row row-cols-5">
                @foreach ($author->books as $book)
                    @include('app.book-card')
                @endforeach
            </div>
        @else
            <div class="alert alert-light border shadow-sm rounded-4 text-center py-4 text-muted">
                <i class="bi bi-journal-x fs-2 d-block mb-2 text-secondary"></i>
                Bu awtora degişli kitap tapylmady.
            </div>
        @endif
    </div>
</div>
@endsection