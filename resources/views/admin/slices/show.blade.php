<x-layouts.admin>
    <div class="container">
        <div class="my-4 bg-f2 rounded border p-2 fw-semibold">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.slice.index') }}">Slices & Bites</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $slice->title }}</li>
                </ol>
            </nav>
        </div>

        <section class="mt-4 bg-f2 shadow rounded border p-3 d-lg-flex justify-content-between">
            <div class="p-2 mb-4 flex-grow-3 w-100">
                <div class="mb-2">
                    <p class="m-0 text-secondary text-uppercase fw-semibold fs-tiny">
                        Title
                    </p>
                    <p class="m-0">
                        {{ $slice->title }}
                    </p>
                </div>

                <div class="mb-2">
                    <p class="m-0 text-secondary text-uppercase fw-semibold fs-tiny">
                        Category
                    </p>
                    <p class="m-0">
                        {{ $slice->category }}
                    </p>
                </div>

                <div class="mb-2">
                    <p class="m-0 text-secondary text-uppercase fw-semibold fs-tiny">
                        Price
                    </p>
                    <p class="m-0">
                        {{ $slice->price ? $slice->price : 'FREE COURSE' }}
                    </p>
                </div>

                <div class="mb-2">
                    <p class="m-0 text-secondary text-uppercase fw-semibold fs-tiny">
                        Duration
                    </p>
                    <p class="m-0">
                        {{ $slice->duration }} Week(s)
                    </p>
                </div>

                <div class="mb-2">
                    <p class="m-0 text-secondary text-uppercase fw-semibold fs-tiny">
                        Created At
                    </p>
                    <p class="m-0">
                        {{ $slice->created_at }}
                    </p>
                </div>

                <div class="mb-2">
                    <p class="m-0 text-secondary text-uppercase fw-semibold fs-tiny">
                        ABout
                    </p>
                    <p class="m-0">
                        {{ $slice->about }}
                    </p>
                </div>

                <div>
                    <a href="{{ route('admin.slice.edit', $slice->id) }}"
                        class="btn btn-outline-dark fw-bold rounded-2">
                        <i class="bi bi-pencil-fill"></i> Edit Slice
                    </a>
                </div>
            </div>

            <div class="px-3 py-2 border-start border-2">
                <div class="mb-2">
                    <p class="text-white p-1 bg-dark text-uppercase fw-semibold fs-tiny">
                        Overview
                    </p>
                    <p class="m-0">
                        {!! $slice->overview !!}
                    </p>
                </div>
            </div>
        </section>

        <section class="mt-4 bg-f2 shadow rounded border p-3">
            <div>
                <p class="m-0 text-secondary text-uppercase fw-semibold fs-tiny">
                    Instructor Bio
                </p>
                <p class="m-0">
                    {{ $slice->admin->first_name }}
                    {{ $slice->admin->last_name }} &middot;
                    <span class="fs-tiny text-secondary">
                        admin <i class="bi bi-shield-fill-check"></i>
                    </span>
                </p>
                <p class="m-0 fw-semibold">
                    {{ $slice->admin->email }}
                </p>
            </div>
        </section>

        <section class="mt-4 mb-5 bg-f2 shadow rounded border p-3">
            <div>
                <p class="text-secondary text-uppercase fw-semibold fs-tiny">
                    Curriculum
                </p>
                <div class="accordion" id="accordionExample">
                    @forelse ($slice->bite->sortBy('position') as $bite)
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $bite->id }}" aria-expanded="true"
                                    aria-controls="collapse{{ $bite->id }}">
                                    Bite {{ $bite->position }} - {{ $bite->title }}
                                </button>
                            </h2>
                            <div id="collapse{{ $bite->id }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="m-0">{!! $bite->description !!}</p>
                                    <div class="border-top mt-3 py-3">

                                        <!-- Edit slice button & modal -->
                                        <a href="{{ route('admin.bites.show', $bite->id) }}"
                                            class="btn btn-dark rounded-1 me-2 px-5">
                                            Edit
                                        </a>

                                        <!-- Delete Bite Button & Modal -->
                                        <button type="button" class="btn btn-danger rounded-1 px-5"
                                            data-bs-toggle="modal" data-bs-target="#deleteBite-{{ $bite->id }}-">
                                            Delete
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteBite-{{ $bite->id }}-" tabindex="-1"
                                            aria-labelledby="deleteBite-{{ $bite->id }}-Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fw-bold text-danger fs-5"
                                                            id="deleteBite-{{ $bite->id }}-Label">
                                                            Delete {{ $bite->title }}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="event.preventDefault(); document.getElementById('delete-bite-{{ $bite->id }}').submit();">
                                                            Yes
                                                        </button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            No
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('admin.bites.delete', $bite->id) }}" class="d-none"
                                            method="POST" id="delete-bite-{{ $bite->id }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                </div>
                <p class="p-1 bg-white">
                    No bites yet
                </p>
                @endforelse
            </div>

            <div class="mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-dark fw-bold" data-bs-toggle="modal"
                    data-bs-target="#newBiteModal">
                    <i class="bi bi-plus-circle-fill"></i> Add New Bite
                </button>

                <!-- Modal -->
                <div class="modal fade" id="newBiteModal" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Slice</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body bg-f2">
                                <form method="POST" action="{{ route('admin.bites.store', $slice->id) }}"
                                    class="row g-3" enctype="multipart/form-data">
                                    @csrf
                                    {{-- Title --}}
                                    <div class="col-12">
                                        <label for="title"
                                            class="form-label m-0 text-secondary fw-semibold">Title</label>
                                        <input type="text" class="form-control rounded py-2" name="title"
                                            id="title" required
                                            placeholder="Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh">
                                        @error('title')
                                            <p class="text-danger fs-6 mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    {{-- Description --}}
                                    <div class="col-12">
                                        <label for="description" class="form-label m-0 text-secondary fw-semibold">
                                            Description
                                        </label>
                                        <input type="text" class="form-control rounded py-2" name="description"
                                            id="description" required
                                            placeholder="Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh">
                                        @error('description')
                                            <p class="text-danger fs-6 mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    {{-- position --}}
                                    <div class="col-12">
                                        <label for="position" class="form-label m-0 text-secondary fw-semibold">
                                            Position
                                        </label>
                                        <input type="number" class="form-control rounded py-2" name="position"
                                            id="position" required placeholder="1">
                                        @error('position')
                                            <p class="text-danger fs-6 mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    {{-- Content --}}
                                    <div class="col-12">
                                        <label for="content" class="form-label m-0 text-secondary fw-semibold">
                                            Content
                                        </label>
                                        <textarea name="content" id="summernote" required></textarea>
                                        @error('content')
                                            <p class="text-danger fs-6 mt-1">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="col-12 my-4">
                                        <button type="submit" class="btn btn-dark rounded shadow fs-6 w-100">
                                            ADD BITE
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.admin>
