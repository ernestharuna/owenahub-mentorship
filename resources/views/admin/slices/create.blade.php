<x-layouts.admin>
    <div class="container">
        <div class="my-4">
            <h4 class="text-secondary fs-2 fw-bold">
                New Slice
            </h4>
            <div class="my-3">
                <a href={{ route('admin.dashboard') }}>
                    <button class="btn btn-dark rounded rounded-0 px-2 py-1">
                        ← Back
                    </button>
                </a>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.slice.create.req') }}"
            class="row g-3 bg-f2 roundec px-2 border shadow rounded my-4" enctype="multipart/form-data">
            @csrf
            {{-- Title --}}
            <div class="col-12">
                <label for="title" class="form-label m-0 text-secondary fw-semibold">Title</label>
                <input type="text" class="form-control rounded rounded-0 py-2" name="title" id="title" required
                    placeholder="Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh"
                    value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- Category --}}
            <div class="col-12">
                <label for="category" class="form-label m-0 text-secondary fw-semibold">Category</label>
                <select class="form-control rounded rounded-0 py-2" id="category" name="category" required>
                    <option value="{{ old('category') }}" selected disabled>
                        Choose category
                    </option>
                    <option value="Career
                        Development">Career Development</option>
                    <option value="Web Developement">Web Developement</option>
                    <option value="UI/UX Design">UI/UX Design</option>
                    <option value="Software Engineering">Software Engineering</option>
                    <option value="Programmming">Programmming</option>
                    <option value="Data Science">Data Science</option>
                    <option value="App Development">App Development</option>
                </select>
                @error('category')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- duration --}}
            <div class="col-12">
                <label for="duration" class="form-label m-0 text-secondary fw-semibold">Slice Duration</label>
                <input type="number" name="duration" id="duration" class="form-control rounded rounded-0 py-2"
                    placeholder="2 Weeks" value="{{ old('duration') }}">
                @error('duration')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- about --}}
            <div class="col-12">
                <label for="about" class="form-label m-0 text-secondary fw-semibold">Slice About</label>
                <input type="text" name="about" id="about" class="form-control rounded rounded-0 py-2"
                    placeholder="Write a short description of what the slice is about" value="{{ old('about') }}">
                @error('about')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- overview --}}
            <div class="col-12">
                <label for="summernote" class="form-label m-0 text-secondary fw-semibold">Overview</label>
                <textarea name="overview" id="summernote" required value="{{ old('overview') }}"></textarea>
                @error('overview')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- Image --}}
            <div class="col-12">
                <label for="image_path" class="form-label m-0 text-secondary fw-semibold">Image</label>
                <input type="file" class="form-control rounded rounded-0 py-2" name="image_path" id="image_path"
                    value="{{ old('image_path') }}">
                @error('image_path')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- Price --}}
            <div class="col-12">
                <label for="price" class="form-label m-0 text-secondary fw-semibold">Course Price</label>
                <input name="price" id="price" type="number" class="form-control rounded rounded-0 py-2"
                    value="{{ old('price') }}" />
                @error('content')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- Is_paid --}}
            <div class="col-12">
                <label for="is_paid" class="form-label m-0 text-secondary fw-semibold">Free Course?</label>
                <input type="checkbox" class="p-2" name="is_paid" id="is_paid" value="1"
                    style="height: 20px; width: 20px; position: relative; top: 6px">
                @error('is_paid')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="col-12 my-4">
                <button type="submit" class="btn btn-dark rounded rounded-0 shadow fs-6 w-100">
                    PUBLISH
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin>
