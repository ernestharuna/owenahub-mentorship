<div>
    <section class="mb-3">
        <header>
            <h2 class="fs-5 m-0 fw-semibold">
                Payments
            </h2>
        </header>
    </section>
    <div class="rounded-4">
        <table class="table">
            <thead class="fs-6">
                <tr>
                    <th scope="col" class="fw-semibold">#</th>
                    <th scope="col" class="fw-semibold">Item</th>
                    <th scope="col" class="fw-semibold">Currency</th>
                    <th scope="col" class="fw-semibold">Amount</th>
                    <th scope="col" class="fw-semibold">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($payments as $payment)
                    <tr class="fs-tiny">
                        <th scope="row">1</th>
                        <td>
                            {{ $payment->product_type }}
                        </td>
                        <td>
                            {{ $payment->currency }}
                        </td>
                        <td>
                            {{ $payment->amount }}
                        </td>
                        <td class="fw-semibold text-success font-monospace text-uppercase">
                            {{ $payment->payment_status }}
                        </td>
                    </tr>
                @empty
                    <tr class="fs-tiny">
                        <th scope="row">*</th>
                        <td>n/a</td>
                        <td>n/a</td>
                        <td>n/a</td>
                        <td>
                            n/a
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
