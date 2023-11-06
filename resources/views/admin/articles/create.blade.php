<x-layouts.admin>
    <div class="container">
        <header class="my-4">
            <h4 class="text-secondary fs-2 fw-bold">
                Create Post
            </h4>
            <div class="my-3">
                <a href={{ route('admin.dashboard') }}>
                    <button class="btn btn-dark rounded rounded-0 px-2 py-1">
                        ← Back
                    </button>
                </a>
            </div>
        </header>

        <hr>

        <form method="POST" action={{ route('admin.articles.create.req') }} class="row g-3" enctype="multipart/form-data">
            @csrf
            {{-- Title --}}
            <div class="col-12">
                <label for="title" class="form-label m-0 text-uppercase fs-tiny">Title</label>
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
                    <option value="Success Stories">Success Stories</option>
                    <option value="News & Updates">News & Updates</option>
                    <option value="Tech Industry News">Tech Industry News</option>
                    <option value="Course Reviews">Course Reviews</option>
                    <option value="Coding Challenges and Projects">Coding Challenges and Projects</option>
                    <option value="Software Crisis">Software Crisis</option>
                    <option value="Machine Learning and AI">Machine Learning and AI</option>
                    <option value="Coding Standards & Best Practices">Coding Standards & Best Practices</option>
                </select>
                @error('category')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            {{-- Description --}}
            <div class="col-12">
                <label for="description" class="form-label m-0 text-uppercase fs-tiny">Description</label>
                <input type="text" class="form-control rounded rounded-0 py-2" name="description" id="description"
                    required placeholder="Do what you can, with what you have, where you are. - Theodore Roosevelt ">
                @error('description')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            {{-- Image --}}
            <div class="col-12">
                <label for="image_path" class="form-label m-0 text-uppercase fs-tiny">Image</label>
                <input type="file" class="form-control rounded rounded-0 py-2" name="image_path" id="image_path">
                @error('image_path')
                    <p class="text-danger fs-6 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            {{-- Content --}}
            <div class="col-12">
                <label for="content" class="form-label m-0 text-uppercase fs-tiny">Content</label>
                <textarea name="content" id="summernote" required></textarea>
                @error('content')
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
