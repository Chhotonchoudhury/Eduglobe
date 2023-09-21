@extends('frontend.layouts.base')

@section('content')

<main>

        <div class="hero-area slider-area">
            <div class="hero-height2 hero-bg2 d-flex align-items-center">
            <div class="container">
            <div class="row">
            <div class="col-xl-12">
            <div class="hero-cap">
            <h2>@if(session()->get('locale') == 'en') University @else جامعة @endif</h2>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')  }}"> @if(session()->get('locale') == 'en') Home @else  بيت  @endif </a></li>
            <li class="breadcrumb-item"><a href="{{ route('browse.university')  }}">@if(session()->get('locale') == 'en') University @else جامعة @endif</a></li>
            </ol>
            </nav>
            </div>
            </div>
            </div>
            </div>
            </div>
        </div>

        <section class="blog_area section-padding">
           <div class="container">
                <div class="row">
                    <!--blog section-->
                    <!-- <div class="col-lg-1"></div> -->

                    <div class="col-lg-8 mb-5 mb-lg-0">
                       <div class="blog_left_sidebar">
                            <!--Main header sectio-->
                            <article class="blog_item">
                                <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ (!empty($university->photo)) ? asset('uploads/'.$university->photo.''):('website_assets/img/gallery/courses1.jpg') }}" alt="">
                                
                                </div>
                                <div class="blog_details">
                                <a class="d-inline-block" href="blog_details.html">
                                <h2 class="blog-head" style="color: #2d2d2d;">@if(session()->get('locale') == 'en') {{  $university->name }} @else {{  $university->ar_name }} @endif </h2>
                                </a>
                                <p class="excert" style="font-size:16px; font-weight: bold;"> @if(session()->get('locale') == 'en') {{ $university->remarks }} @else {{ $university->ar_remarks }} @endif </p>
                              
                                </div>
                            </article>

                            <!--all of this section i put in this page --->
                       </div>
                    </div>

                    
                    <!--blog section end -->

                    <!--side section-->
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">


                            <!--this is the logo sections -->
                            <aside class="single_sidebar_widget popular_post_widget">
                                <!-- <h3 class="widget_title" style="color: #2d2d2d;">Latest Courses</h3> -->
                                <div style="text-align: center;">
                                <img width="350px"   src="{{ (!empty($university->logo)) ? asset('uploads/'.$university->logo.''):('website_assets/img/gallery/courses1.jpg') }}"" alt="post">
                                </div>

                            </aside>
                            <!--end of the logo sectin-->

                            <!--category section start-->
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">@if(session()->get('locale') == 'en') {{ $university->name }} @else {{ $university->ar_name }} @endif </h4>
                                <ul class="list cat-list">

                                <li>
                                <a href="#" class="d-flex">
                                    <i class="fa fa-envelope" style="font-size:30px"></i>&nbsp;&nbsp;
                                <div style="word-wrap: break-word;"><strong>{{ $university->email }} / {{ $university->ex_email }}</strong></div>
                                </a>
                                </li>

                                <li>
                                <a href="#" class="d-flex">
                                    <i class="fa fa-phone" style="font-size:30px"></i>&nbsp;&nbsp;
                                <div style="word-wrap: break-word;"><strong>{{ $university->Unumber }} / {{ $university->ex_number }}</strong></div>
                                </a>
                                </li>


                                <li>
                                <a href="#" class="d-flex">
                                    <i class="fa fa-map-marker" style="font-size:30px"></i>&nbsp;&nbsp;
                                <div style="word-wrap: break-word;"><strong> @if(session()->get('locale') == 'en') {{ $university->address }} @else {{ $university->ar_address }} @endif </strong></div>
                                </a>
                                </li>


                                </ul>
                            </aside>
                            <!--End of the category section-->


                            <!--this is the search sidebar section-->
                            <!-- <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                <div class="form-group m-0">
                                <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Keyword">
                                <div class="input-group-append d-flex">
                                <button class="boxed-btn2" type="button">Search</button>
                                </div>
                                </div>
                                </div>
                                </form>
                            </aside> -->
                            <!--end of the search end section -->

                            

                            <!--recent post section for --->
                            <!-- <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Latest Courses</h3>

                        

                          

                                </div>
                            </aside> -->
                            <!--End of the post sections-->

                            <!--Tag section start-->
                            <!-- <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
                                <ul class="list">
                                <li>
                                <a href="#">project</a>
                                </li>
                                <li>
                                <a href="#">love</a>
                                </li>
                                <li>
                                <a href="#">technology</a>
                                </li>
                                <li>
                                <a href="#">travel</a>
                                </li>
                                <li>
                                <a href="#">restaurant</a>
                                </li>
                                <li>
                                <a href="#">life style</a>
                                </li>
                                <li>
                                <a href="#">design</a>
                                </li>
                                <li>
                                <a href="#">illustration</a>
                                </li>
                                </ul>
                            </aside> -->
                            <!--end of the tag section-->

                            <!--instagrm section -->
                            <!-- <aside class="single_sidebar_widget instagram_feeds">
                                    <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
                                    <ul class="instagram_row flex-wrap">
                                    <li>
                                    <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_5.jpg" alt="">
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_6.jpg" alt="">
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_7.jpg" alt="">
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_8.jpg" alt="">
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_9.jpg" alt="">
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_10.jpg" alt="">
                                    </a>
                                    </li>
                                    </ul>
                            </aside> -->
                            <!--end of the instagram section-->

                            <!---subscribe section-->
                            <!-- <aside class="single_sidebar_widget newsletter_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                                <form action="#">
                                <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
                                </form>
                            </aside> -->
                            <!--subscribe end section-->

                        </div>
                    </div>
                    <!--sidebar end section-->

                     <!--courses section start -->
                     <section class="popular-directorya-area section-padding fix">
                        <div class="container">
                          <div class="row">

                          @if(count($courses) > 0)

                          @foreach($courses as $row)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="properties pb-30">
                                <div class="properties-card">
                                <div class="properties-img overlay1">
                                <a href="{{ route('preview',$row->id) }}"><img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('website_assets/img/gallery/courses1.jpg') }}" alt=""></a>
                                <div class="img-text">
                                <span>${{ $row->fess }}</span>
                                </div>
                                </div>
                                <div class="properties-caption">
                                <h3>
                                <a href="{{ route('preview',$row->id) }}">@if(session()->get('locale') == 'en')  {{ $row->name  }} @else  {{ $row->ar_name  }} @endif </a>
                                </h3>
                                <p>@if(session()->get('locale') == 'en') {{ $row->course }} @else {{ $row->ar_course }} @endif </p>
                                <div class="ratting">
                                <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><span>4.9 ( @if(session()->get('locale') == 'en') {{ $row->course_period }} @else {{ $row->ar_course_period }} @endif )</span></li>
                                </ul>
                                </div>
                                </div>
                                </div>
                                </div>
                            </div>
                          @endforeach

                          @else
                            <div class="blog_details">
                            <p  style="font-size:25px; font-weight: bold; color:#913831;">@if(session()->get('locale') == 'en') This university don't have any courses now , but don't wory courses cooming soon. @else هذه الجامعة ليس لديها أي دورات الآن ، ولكن لا تقلق من الدورات التدريبية في القريب العاجل. @endif </p>
                            </div>
                          @endif

                         </div>
                        </div>
                     </section>
                    <!--courses section end -->

                    <!--this is the paginations links-->
                    {!! $courses->links('vendor.pagination.universitypaginate') !!}
                    <!--pagination link end-->


                </div>
           </div>
        </section>


</main>

@endsection

@section('script')
<script>
  $("#submit1").click(function(){
        let string = $('#string1').val(); 
        if(string != ''){
        let url = "{{ route('search.direct','') }}"+"/"+string;
        window.location.href = url;
        }
    })
</script>
@endsection







