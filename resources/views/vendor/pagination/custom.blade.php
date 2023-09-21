


@if ($paginator->hasPages())
    <ul class="mx-auto">
       
        @if ($paginator->onFirstPage())
        <a href="#" class="prev" disabled=""><li>← Previous</li></a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" class="prev"><li>← Previous</li></a>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <a href="#"><li>{{ $element }}</li></a>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="is-active" href="#"><li>{{ $page }}</li></a>
                        <!-- <li class="active my-page-active"><span>{{ $page }}</span></li> -->
                    @else
                        <a href="{{ $url }}"><li>{{ $page }}</li></a>
                        <!-- <li><a href="{{ $url }}">{{ $page }}</a></li> -->
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())

        <a href="{{ $paginator->nextPageUrl() }}" class="next"><li>Next →</li></a>
        @else
        <a href="#"><li>Next →</li></a>
        @endif


      
    </ul>
@endif 