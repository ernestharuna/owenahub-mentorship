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

        <hr>

        <form method="POST" action="{{ route('admin.slice.create.req') }}" class="row g-3" enctype="multipart/form-data">
            @csrf
            {{-- Title --}}
            <div class="col-12">
                <label for="title" class="form-label m-0 text-uppercase fs-tiny fw-bold">Title</label>
                <input type="text" class="form-control rounded rounded-0 py-2" name="title" id="title" required
                    placeholder="Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh">
                @error('title')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- Category --}}
            <div class="col-12">
                <label for="category" class="form-label m-0 text-uppercase fs-tiny">Category</label>
                <select class="form-control rounded rounded-0 py-2" id="category" name="category" required>
                    <option value="" selected disabled>
                        Choose category
                    </option>
                    <option value="Career Development">Career Development</option>
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

            {{-- description --}}
            <div class="col-12">
                <label for="description" class="form-label m-0 text-uppercase fs-tiny fw-bold">Slice Description</label>
                <textarea name="description" id="summernote" required></textarea>
                @error('description')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- Image --}}
            <div class="col-12">
                <label for="image_path" class="form-label m-0 text-uppercase fs-tiny fw-bold">Image</label>
                <input type="file" class="form-control rounded rounded-0 py-2" name="image_path" id="image_path">
                @error('image_path')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- Price --}}
            <div class="col-12">
                <label for="price" class="form-label m-0 text-uppercase fs-tiny fw-bold">Course Price</label>
                <input name="price" id="price" type="number" class="form-control rounded rounded-0 py-2" />
                @error('content')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- Is_paid --}}
            <div class="col-12">
                <label for="is_paid" class="form-label m-0 text-uppercase fs-tiny fw-bold">Free Course?</label>
                <input type="checkbox" class="p-2" name="is_paid" id="is_paid" value="1"
                    style="height: 20px; width: 20px; position: relative; top: 6px">
                @error('is_paid')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="col-12 my-4">
                <button type="submit" class="btn btn-dark rounded rounded-0 shadow text-uppercase fs-6 w-100">
                    Publish
                </button>
            </div>
            <hr>
        </form>
    </div>
</x-layouts.admin>
