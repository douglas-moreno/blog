@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex justify-between items-center">
        <div class="flex flex-1 justify-between sm:hidden">
            @if ($paginator->onFirstPage())
                <span
                    class="inline-flex relative items-center px-4 py-2 text-sm font-medium leading-5 text-gray-500 bg-white rounded-md border border-gray-300 cursor-default">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="inline-flex relative items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 bg-white rounded-md border border-gray-300 ring-gray-300 transition duration-150 ease-in-out hover:text-gray-500 focus:outline-none focus:ring focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="inline-flex relative items-center px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-700 bg-white rounded-md border border-gray-300 ring-gray-300 transition duration-150 ease-in-out hover:text-gray-500 focus:outline-none focus:ring focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="inline-flex relative items-center px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-500 bg-white rounded-md border border-gray-300 cursor-default">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <span class="inline-flex relative z-0 rounded-md">
                    {{-- Previous Page Link --}}
                    @if (!$paginator->onFirstPage())
                        <a href="{{ $paginator->previousPageUrl() }}" rel="next"
                            class="flex justify-center items-center mr-3 w-10 h-10 text-sm font-semibold text-gray-800 hover:text-gray-900"
                            aria-label="{{ __('pagination.previous') }}">
                            <i class="mr-2 fas fa-arrow-left"></i>Prev
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="inline-flex relative items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 bg-white border border-gray-300 cursor-default">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="flex justify-center items-center w-10 h-10 text-sm font-semibold text-white bg-blue-800 hover:bg-blue-600">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                        class="flex justify-center items-center w-10 h-10 text-sm font-semibold text-gray-800 hover:bg-blue-600 hover:text-white"
                                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                            class="flex justify-center items-center ml-3 w-10 h-10 text-sm font-semibold text-gray-800 hover:text-gray-900"
                            aria-label="{{ __('pagination.next') }}">
                            Next<i class="ml-2 fas fa-arrow-right"></i>
                        </a>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
