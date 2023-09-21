

@if ($paginator->hasPages())
<nav aria-label="..." >
  <ul class="pagination justify-content-center">

    @if ($paginator->onFirstPage())
     <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> {{ GoogleTranslate::trans('Previous', app()->getLocale()) }}</a>
     </li>
    @else
    <li class="page-item">
      <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1" aria-disabled="true"> {{ GoogleTranslate::trans('Previous', app()->getLocale()) }}</a>
    </li>
    @endif


       @foreach ($elements as $element)


           @if (is_array($element))
               @foreach ($element as $page => $url)
                   @if ($page == $paginator->currentPage())

                     <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">{{ $page }}</a>
                     </li>
                    @elseif (($page == $paginator->currentPage() - 1) || ($page == $paginator->currentPage() + 1) || ($page == 1) || ($page == $paginator->lastPage())) 
                   
                     <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>

                     @elseif (($page == $paginator->currentPage() - 2) || ($page == $paginator->currentPage() + 2))
                     <li class="page-item"><span class="page-link">...</span></li>
                   @endif
               @endforeach
           @endif
       @endforeach

        @if ($paginator->hasMorePages())
        <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">{{ GoogleTranslate::trans('Next ', app()->getLocale()) }}</a></li>
        @else
        <a href="#" ><li>{{ GoogleTranslate::trans('Next → ', app()->getLocale()) }}</li></a>
        @endif

  </ul>
</nav>
@endif 



