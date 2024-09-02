<style>
    /* .page-item:not(:first-child) .page-link{
        margin-left: 0!important;
    } */
    .page-item:not(:first-child) .page-link{
        margin-left: 0!important;
        margin-right: 5px!important;
    }
    .pagination a:hover:not(.active){
        color: #000;
    }
    
</style>
@if ($paginator->hasPages())
    <nav>
        <ul class="pagination d-flex flex-wrap justify-content-center mt-5">
            {{-- Botón de Anterior --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link rounded" aria-hidden="true">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link rounded" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
                </li>
            @endif

            {{-- Página anterior si no es la primera --}}
            @if ($paginator->currentPage() > 2)
                <li class="page-item"><a class="page-link rounded" href="{{ $paginator->url(1) }}">1</a></li>
                @if ($paginator->currentPage() > 3)
                    <li class="page-item disabled"><span class="page-link rounded">...</span></li>
                @endif
            @endif

            {{-- Página actual y adyacentes --}}
            @foreach (range(1, $paginator->lastPage()) as $i)
                @if ($i >= $paginator->currentPage() - 1 && $i <= $paginator->currentPage() + 1)
                    @if ($i == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link rounded">{{ $i }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link rounded" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                    @endif
                @endif
            @endforeach

            {{-- Página siguiente si no es la última --}}
            @if ($paginator->currentPage() < $paginator->lastPage() - 1)
                @if ($paginator->currentPage() < $paginator->lastPage() - 2)
                    <li class="page-item disabled"><span class="page-link rounded">...</span></li>
                @endif
                <li class="page-item"><a class="page-link rounded" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
            @endif

            {{-- Botón de Siguiente --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link rounded" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link rounded" aria-hidden="true">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif


