@if ($paginator->hasPages())
    <nav>
        <ul class="pagination join">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="join-item btn-disabled btn" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">«</span>
                </li>
            @else
                <li>
                    <a class="join-item btn" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">«</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="join-item btn-disabled btn" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="join-item btn-active btn" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a class="join-item btn" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class="join-item btn" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">»</a>
                </li>
            @else
                <li class="join-item btn-disabled btn" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">»</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
