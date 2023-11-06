{{-- If your happiness depends on money, you will never be happy with yourself. --}}
<div>
    @forelse ($articles as $article)
        <a href="{{ route('guest.articles.show', $article->id) }}" class='text-decoration-none'
            wire:key={{ $article->id }}>
            <div class="card bg-white mb-2 border border-none">
                <div class="card-body p-1 d-flex align-items-stretch">
                    @if (Route::is('home'))
                        <img src="{{ $article->image_path ? asset('storage/' . $article->image_path) : asset('images/about_img.png') }}"
                            alt="..." class="img-fluid d-block rounded" width="140px">
                    @endif

                    <div class="mx-2">
                        <div class="text-primary">{{ $article->category }}</div>
                        <small class="text-secondary fs-tiny">
                            Posted on {{ $article->created_at->format('j M Y, g:i a') }}
                        </small>
                        <h4 class='fs-5 m-0 fw-medium'>
                            {{ $article->title }}
                        </h4>
                        <p class='m-0 text-secondary fst-italic'>
                            {{ $article->description }}
                        </p>
                    </div>
                </div>
            </div>
        </a>
    @empty
        <div class="p-2 bg-f2">No articles</div>
    @endforelse
</div>
