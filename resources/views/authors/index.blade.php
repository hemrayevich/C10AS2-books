@extends('layouts.header')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-success display-6 mb-0">Ähli awtorlar</h1>
        <span class="text-muted fs-6">Jemi: {{ $authors->total() }} awtor</span>
    </div>


    <div class="row g-4">
        <div class="col-lg-3">
            <div class="border-0 shadow-sm rounded-4 p-3" >
                <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
                    <i class="bi bi-funnel text-success"></i>
                    Filtr
                </h5>

                <form action="{{ route('authors.index') }}" method="GET">
                    <div class="mb-3">
                        <label for="search" class="form-label small fw-semibold text-muted">Awtor gözleg</label>
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control rounded-start-3" placeholder="At ýa-da familiýa..." 
                                value="{{ request('search') }}">
                            <button class="btn btn-success rounded-end-3" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>

                    @if(request()->hasAny('search'))
                        <a href="{{ route('authors.index') }}" class="btn btn-secondary text-white fw-semibold w-100 rounded-3 mt-2 py-2 btn-sm">
                            Filtrleri arassala
                        </a>
                    @endif
                </form>
            </div>
        </div>

        
        <div class="col-lg-9">
            @if($authors->isNotEmpty())
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3">
                    @foreach($authors as $author)
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm rounded-4 p-3 hover-shadow transition">
                                <div class="card-body d-flex flex-column justify-content-between p-0">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-start mb-2 gap-2">
                                            <h5 class="card-title fw-bold text-dark mb-0 fs-6">
                                                {{ $author->name }} {{ $author->surname }}
                                            </h5>
                                            
                                            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fw-normal text-nowrap">
                                                @if($author->death_date)
                                                    {{ \Carbon\Carbon::parse($author->birth_date)->format('Y') }} – {{ \Carbon\Carbon::parse($author->death_date)->format('Y') }}
                                                @else
                                                    {{ \Carbon\Carbon::parse($author->birth_date)->format('Y') }} ({{ \Carbon\Carbon::parse($author->birth_date)->age }} ýaş)
                                                @endif
                                            </span>
                                        </div>

                                        <p class="card-text text-muted small my-3 text-truncate-3" style="line-height: 1.5;">
                                            {{ $author->bio }}
                                        </p>
                                    </div>

                                    <div class="pt-3 border-top d-flex justify-content-between align-items-center mt-2">
                                        <div class="small fw-semibold text-success d-flex align-items-center gap-1">
                                            <i class="bi bi-book"></i>
                                            <span>{{ $author->books_count ?? 0 }} kitap</span>
                                        </div>

                                        <a href="{{ route('authors.show', $author->id) }}" class="btn btn-sm btn-outline-success rounded-pill px-3">
                                            Giňişleýin
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-5">
                    {{ $authors->links('pagination::bootstrap-5') }}
                </div>
            @else
                <div class="text-center py-5 bg-white rounded-4 shadow-sm">
                    <i class="bi bi-person-x display-1 text-muted"></i>
                    <h4 class="mt-3 text-secondary">Hiç hili awtor tapylmady</h4>
                    <p class="text-muted">Gözleg sözüňizi üýtgedip barlaň.</p>
                </div>
            @endif
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