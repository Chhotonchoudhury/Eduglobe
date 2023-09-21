<div dir="ltr">
   @if($paginator->hasPages())
   
    <nav class="blog-pagination justify-content-center d-flex">
       <ul class="pagination">

           @if($paginator->onFirstPage())
            
               <li class="page-item">
                    <a href="#" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                    </a>
               </li>

       
            @else
               <li class="page-item">
                    <a href="{{ $paginator->previousPageUrl() }}" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                    </a>
               </li>
          
            @endif



                @foreach ($elements as $element)
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                
                                <li class="page-item active">
                                  <a href="#" class="page-link">{{ $page }}</a>
                                </li>


                                <!-- <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">{{ $page }}</a>
                                </li> -->
                                @elseif (($page == $paginator->currentPage() - 1) || ($page == $paginator->currentPage() + 1) || ($page == 1) || ($page == $paginator->lastPage())) 

                                <li class="page-item ">
                                <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                                </li>
                            
                                <!-- <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li> -->

                                @elseif (($page == $paginator->currentPage() - 2) || ($page == $paginator->currentPage() + 2))

                                <li class="page-item ">
                                <a href="" class="page-link">...</a>
                                </li>

                                <!-- <li class="page-item"><span class="page-link">...</span></li> -->
                            @endif
                        @endforeach
                    @endif
               @endforeach


               @if ($paginator->hasMorePages())
                 <li class="page-item">
                                <a href="{{ $paginator->nextPageUrl() }}" class="page-link" aria-label="Next">
                                <i class="ti-angle-right"></i>
                                </a>
                 </li>

                
               @endif
                                

                               
                       <!--  <li class="page-item">
                                <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                <i class="ti-angle-right"></i>
                                </a>
                                </li> -->
       </ul>
    </nav>
  @endif
</div>