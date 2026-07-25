<div class="col my-3 d-flex align-items-stretch" style="min-width: 0;">
    <div class="card h-100 w-100 border-0 shadow-sm rounded-4 p-3 d-flex flex-column justify-content-between style-card">
        <div class="card-body d-flex flex-column justify-content-between p-0">
            <div>
                <div class="d-flex flex-column align-items-start mb-2 gap-1">
                    <h5 class="card-title fw-bold text-dark mb-0 text-truncate w-100" title="{{ $author->name }} {{ $author->surname }}">
                        {{ $author->name }} {{ $author->surname }}
                    </h5>
                    <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fw-normal mt-3">
                        @if($author->death_date)
                            {{ \Carbon\Carbon::parse($author->birth_date)->format('Y') }} – {{ \Carbon\Carbon::parse($author->death_date)->format('Y') }}
                        @else
                            {{ \Carbon\Carbon::parse($author->birth_date)->format('Y') }} ({{ \Carbon\Carbon::parse($author->birth_date)->age }} ýaş)
                        @endif
                    </span>
                </div>
                <p class="card-text text-muted small my-3 text-truncate-2" style="max-height: 4.5em; overflow: hidden;">
                    {{ $author->bio }}
                </p>
            </div>

            <div class="pt-3 border-top d-flex justify-content-between align-items-center">
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