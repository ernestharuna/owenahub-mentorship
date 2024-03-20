<div class="p-2">
    @forelse ($sessions as $session)
        @php
            $day;
            switch ($session->week_day) {
                case 1:
                    $day = 'Sunday';
                    break;
                case 2:
                    $day = 'Monday';
                    break;
                case 3:
                    $day = 'Tuesday';
                    break;
                case 4:
                    $day = 'Wednesday';
                    break;
                case 5:
                    $day = 'Thursday';
                    break;
                case 6:
                    $day = 'Friday';
                    break;
                case 7:
                    $day = 'Saturday';
                    break;
                default:
                    $day = 'Someday';
            }

            // format times to 24hr format
            $st = $session->start_time;
            $et = $session->end_time;

            $start_time = DateTime::createFromFormat('H:i:s', $st);
            $end_time = DateTime::createFromFormat('H:i:s', $et);

            $formatted_time_1 = $start_time->format('h:i a');
            $formatted_time_2 = $start_time->format('h:i a');
        @endphp

        <div wire:key="{{ $session->id }}"
            class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
            <div>
                <h3 class="m-0 fs-6">{{ $day }}s
                </h3>
                <p class="m-0 fw-semibold">
                    {{ $formatted_time_1 }} <span class="fw-normal">to</span> {{ $formatted_time_2 }}
                </p>
            </div>
            <div>
                <button class="btn btn-secondary btn-sm rounded-2 px-3 fw-semibold fs-tiny"
                    wire:click="removeSession({{ $session->id }})">
                    <small>
                        Cancel
                    </small>
                </button>
            </div>
        </div>
    @empty
        <p class="m-0 text-secondary fw-semibold">
            You haven't created a plan yet
        </p>
    @endforelse
    <small wire:loading wire:target="removeSession" class="fs-tiny text-red w-100 text-end">
        Removing...
    </small>
</div>
