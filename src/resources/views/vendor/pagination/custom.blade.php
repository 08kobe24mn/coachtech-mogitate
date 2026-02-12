@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled pagination__list-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true" class="pagination__arrow">＜</span>
                </li>
            @else
                <li class="pagination__list-item">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination__arrow" aria-label="@lang('pagination.previous')">＜</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled pagination__list-item" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active pagination__list-item" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="pagination__list-item"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pagination__list-item">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination__arrow" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled pagination__list-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true" class="pagination__arrow">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
