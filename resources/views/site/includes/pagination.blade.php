@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled ">
                <div class="pagination-prev-btn">

                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_560)">
                    <path d="M0.134277 10.6763L7.00928 3.80128C7.18833 3.62223 7.47837 3.62223 7.65738 3.80128C7.83643 3.98033 7.83643 4.27037 7.65738 4.44938L1.56475 10.542H21.5417C21.795 10.542 22 10.747 22 11.0004C22 11.2537 21.795 11.4587 21.5417 11.4587H1.56475L7.65738 17.5513C7.83643 17.7303 7.83643 18.0204 7.65738 18.1994C7.56787 18.2889 7.45057 18.3337 7.3333 18.3337C7.21604 18.3337 7.09878 18.2889 7.00923 18.1994L0.134233 11.3244C-0.0447731 11.1454 -0.0447731 10.8553 0.134277 10.6763Z" fill="#ED1556"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1_560">
                    <rect width="22" height="22" fill="white" transform="matrix(-1 0 0 1 22 0)"/>
                    </clipPath>
                    </defs>
                </svg>
                <span class="pagination-prev">
                    Anterior
                </span>

                </div></li>
        @else
            <li class=""><a href="{{ $paginator->previousPageUrl() }}">
                <div class="pagination-prev-btn">

                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_560)">
                    <path d="M0.134277 10.6763L7.00928 3.80128C7.18833 3.62223 7.47837 3.62223 7.65738 3.80128C7.83643 3.98033 7.83643 4.27037 7.65738 4.44938L1.56475 10.542H21.5417C21.795 10.542 22 10.747 22 11.0004C22 11.2537 21.795 11.4587 21.5417 11.4587H1.56475L7.65738 17.5513C7.83643 17.7303 7.83643 18.0204 7.65738 18.1994C7.56787 18.2889 7.45057 18.3337 7.3333 18.3337C7.21604 18.3337 7.09878 18.2889 7.00923 18.1994L0.134233 11.3244C-0.0447731 11.1454 -0.0447731 10.8553 0.134277 10.6763Z" fill="#ED1556"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1_560">
                    <rect width="22" height="22" fill="white" transform="matrix(-1 0 0 1 22 0)"/>
                    </clipPath>
                    </defs>
                </svg>
                <span class="pagination-prev">
                    Anterior
                </span>


                </div></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled">{{ $element }}</li>
            @endif
            <div class="pagination-pages">
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active">
                            <a>{{ $page }}</a>
                        </li>
                    @else
                        <li class="waves-effect select"><a class="page-link waves-effec" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="" disabled="true">
                <a href="{{ $paginator->nextPageUrl() }}">
                    <div class="pagination-next-btn">
                    <span class="pagination-next">Próximo</span>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_556)">
                    <path d="M21.8657 10.6763L14.9907 3.80128C14.8117 3.62223 14.5216 3.62223 14.3426 3.80128C14.1636 3.98033 14.1636 4.27037 14.3426 4.44938L20.4353 10.542H0.458348C0.205004 10.542 0 10.747 0 11.0004C0 11.2537 0.205004 11.4587 0.458348 11.4587H20.4353L14.3426 17.5513C14.1636 17.7303 14.1636 18.0204 14.3426 18.1994C14.4321 18.2889 14.5494 18.3337 14.6667 18.3337C14.784 18.3337 14.9012 18.2889 14.9908 18.1994L21.8658 11.3244C22.0448 11.1454 22.0448 10.8553 21.8657 10.6763Z" fill="#ED1556"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1_556">
                    <rect width="22" height="22" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                </div>
                </a>
            </li>
        @else
            <li class="disabled " disabled="true"><a href="{{ $paginator->nextPageUrl() }}"> <div class="pagination-next-btn">
                <span class="pagination-next">Próximo</span>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_556)">
                <path d="M21.8657 10.6763L14.9907 3.80128C14.8117 3.62223 14.5216 3.62223 14.3426 3.80128C14.1636 3.98033 14.1636 4.27037 14.3426 4.44938L20.4353 10.542H0.458348C0.205004 10.542 0 10.747 0 11.0004C0 11.2537 0.205004 11.4587 0.458348 11.4587H20.4353L14.3426 17.5513C14.1636 17.7303 14.1636 18.0204 14.3426 18.1994C14.4321 18.2889 14.5494 18.3337 14.6667 18.3337C14.784 18.3337 14.9012 18.2889 14.9908 18.1994L21.8658 11.3244C22.0448 11.1454 22.0448 10.8553 21.8657 10.6763Z" fill="#ED1556"/>
                </g>
                <defs>
                <clipPath id="clip0_1_556">
                <rect width="22" height="22" fill="white"/>
                </clipPath>
                </defs>
                </svg>
            </div></a></li>
        @endif
    </ul>
@endif
