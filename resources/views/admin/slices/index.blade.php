<x-layouts.admin>
    <div class="container">
        <div class="featured-articles my-5 bg-f2 shadow-sm border p-3 rounded">

            <p class="fs-6 text-secondary">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Slices & Bites</li>
                </ol>
            </nav>
            </p>
            <h1 class="fw-semibold">Slices & Bites</h1>
            <div class="mt-2 mb-4">
                <a href={{ route('admin.slice.create') }}>
                    <button class="btn btn-dark rounded-2 px-2 py-1">
                        New Slice <i class="bi bi-plus-square-fill"></i>
                    </button>
                </a>
            </div>

            @forelse ($slices as $slice)
                <div
                    class="bg-white p-2 d-flex align-items-center justify-content-between mb-2 border rounded-2 shadow-sm">
                    <div>
                        <a href={{ route('admin.slice.show', $slice->id) }}
                            class="d-block text-dark text-decoration-none">

                            <small class="fs-tiny">{{ $slice->created_at->format('j M Y, g:i a') }}</small>
                            <p class="m-0 fw-bold">{{ $slice->title }}</p>
                            <small>{{ $slice->category }}</small>
                        </a>
                    </div>
                    <div>
                        <button class="btn btn-danger text-white rounded-2 py-0 px-2 fs-tiny fw-bold" type="button"
                            onclick="event.preventDefault(); document.getElementById('delete-slice').submit();">
                            DELETE
                        </button>
                    </div>
                </div>
                <form action="{{ route('admin.slice.delete', $slice->id) }}" class="d-none" method="POST"
                    id="delete-slice">
                    @csrf
                    @method('DELETE')
                </form>
            @empty
                <div class="p-2 bg-f2">
                    No Courses Available
                </div>
            @endforelse
        </div>
    </div>
</x-layouts.admin>
