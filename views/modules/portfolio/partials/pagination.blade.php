@if ($paginator->hasPages())
    <nav class="navigation pagination @@navClass" role="navigation">
        <div class="nav-links">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <a class="disabled hide">&laquo;</a>
        @else
            <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
        @endif

    <!-- Pagination Elements -->
        @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <a class="disabled">{{ $element }}</a>
            @endif

        <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="page-numbers active"><a href="#">{{ $page }}</a>
                    @else
                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

    <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        @else
            <a class="next page-numbers disabled hide">&raquo;</a>
        @endif
        </div>
    </nav>
@endif
