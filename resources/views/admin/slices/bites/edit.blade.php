<x-layouts.admin>
    <div class="container">
        <div class="my-4 bg-f2 rounded border p-2 fw-semibold">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.slice.index') }}">Slices & Bites</a></li>
                    <li class="breadcrumb-item" aria-current="page">{{ $bite->title }}</li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>

        <section class="mt-4 mb-5 bg-f2 shadow rounded border p-3">
            <form method="POST" action="{{ route('admin.bites.update', $bite->id) }}" class="row g-3">
                @csrf
                @method('PATCH')
                {{-- Title --}}
                <div class="col-12">
                    <label for="title" class="form-label m-0 text-secondary fw-semibold">Title</label>
                    <input type="text" class="form-control rounded py-2" name="title" id="title"
                        value="{{ old('title', $bite->title) }}" required>
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
                    <input type="text" class="form-control rounded py-2" name="description" id="description" required
                        value="{{ old('description', $bite->description) }}">
                    @error('description')
                        <p class="text-danger
                        fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- position --}}
                <div class="col-12">
                    <label for="position" class="form-label m-0 text-secondary fw-semibold">
                        Position
                    </label>
                    <input type="number" class="form-control rounded py-2" name="position" id="position" required
                        value="{{ old('position', $bite->position) }}">
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
                    <textarea name="content" id="summernote" required>
                   {{ old('content', $bite->content) }}
                </textarea>
                    @error('content')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="col-12 my-4">
                    <button type="submit" class="btn btn-dark rounded shadow fs-6 w-100">
                        Save changes
                    </button>
                </div>
            </form>
        </section>
    </div>
</x-layouts.admin>
