@if ($paginator->hasPages())
    <ul class="exhibitors-pagination">
        @if (!$paginator->onFirstPage())
            <li class="pagination-item">
                <a  class="pagination-previous"
                    href="{{ $paginator->previousPageUrl() }}"
                    title="Page précédente"></a>
            </li>
        @endif


        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="pagination-item">
                <a  class="pagination-next"
                    href="{{ $paginator->previousPageUrl() }}"
                    title="Page précédente"></a>
            </li>
        @endif

    </ul>
@endif
