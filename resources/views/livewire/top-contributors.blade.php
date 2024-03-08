<div>
    @forelse ($mentors as $mentor)
        <div class="bg-theme-light rounded-4 p-2 shadow-sm d-flex align-items-center gap-2">
            <div style="min-width: 40px; min-height: 40px; max-width: 40px">
                @if ($mentor->social_handle && $mentor->social_handle->image_path)
                    <img src="{{ $mentor->social_handle->image_path }}" alt="..."
                        class="border d-block img-fluid w-100 rounded-4 object-fit-cover border-2 border-danger shadow-sm">
                @else
                    <img src="{{ asset('images/default-dp.png') }}" alt="..."
                        class="border d-block img-fluid w-100 rounded-4 object-fit-cover border-2 border-danger shadow-sm">
                @endif
            </div>

            <div>
                <p class="m-0 fw-semibold">
                    {{ $mentor->first_name }} {{ $mentor->last_name }}
                </p>
                <p class="m-0 fs-tiny" style="position: relative; top:-3px;">
                    {{ $mentor->misc_info ? $mentor->misc_info->expertise : 'New mentor' }}
                </p>
            </div>
        </div>
    @empty
        <p class="text-secondThere are no mentors availaary">
            There are no mentors available at the moment
        </p>
    @endforelse
    {{-- Do your work, then step back. --}}
</div>
