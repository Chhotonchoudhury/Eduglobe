              
              
        @foreach($university as $row)
              <article class="blog_item">
                              <div class="blog_item_img">
                                <img class="card-img rounded-0" width="250px" src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('website_assets/img/gallery/courses1.jpg') }}" alt="">
                                <a href="{{ route('university.preview',$row->id) }}" class="blog_item_date">
                                    
                                    <p> {{  $row->Unumber }}</p>
                                </a>
                                </div>
                                <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('university.preview',$row->id) }}">
                                <h2 class="blog-head" style="color: #2d2d2d;">@if(session()->get('locale') == 'en') {{  $row->name }} @else {{  $row->ar_name }} @endif </h2>
                                </a>
                                <p>@if(session()->get('locale') == 'en') {{ substr($row->remarks, 0,  220) }} @else {{ substr($row->ar_remarks, 0,  220) }} @endif  </p>
                                <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-envelope"></i>{{ $row->email }}</a></li>  <li><a href="#"><i class="fa fa-phone"></i> {{ $row->Unumber }}</a></li><br>
                                <li><a href="#"><i class="fa fa-map-marker" style="font-size:25px"></i> @if(session()->get('locale') == 'en') {{  $row->address }} @else {{  $row->ar_address }} @endif</a></li>
                                
                                </ul>
                              </div>
               </article>
        @endforeach

        {!! $university->links('vendor.pagination.universitypaginate') !!}

