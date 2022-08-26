<div class="container">
    <ul class="flex-wrap row row-cols-5 g-2 list-unstyled p-3">
        @foreach ($movies as $item)
            <li class="col">
                <a href="#">
                    <div class="card h-100 p-2 border border-5 border-warning text-light">
                        <span class="fw-bold">Original Title:</span>
                        <span class="text-decoration-underline">{{ $item->original_title }}</span>
                        <span class="fw-bold">Title:</span>
                        <span class="text-decoration-underline">{{ $item->title }}</span>
                        <span class="fw-bold">Vote:</span>
                        <span class="text-decoration-underline">{{ $item->vote }}</span>
                        <span class="fw-bold">Nationality:</span>
                        <span class="text-decoration-underline">{{ $item->nationality }}</span>
                        <span class="fw-bold">Date:</span>
                        <span
                            class="text-decoration-underline">{{ date_format(date_create($item->date), 'Y M d ') }}</span>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
