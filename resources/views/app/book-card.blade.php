<div class="col my-3 d-flex align-items-stretch">
    <div class="card h-100 w-100 border-0 shadow-sm rounded-4 p-3 d-flex flex-column justify-content-between style-card">
        <div>
            <a href="{{ route('books.show', $book->id) }}" class="text-decoration-none text-dark d-block h-100">
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
    </div>
</div>