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


                            <!--blog card sectio-->
                            <!-- <article class="blog_item">
                                <div class="blog_item_img">
                                <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.jpg" alt="">
                                <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                                </a>
                                </div>
                                <div class="blog_details">
                                <a class="d-inline-block" href="blog_details.html">
                                <h2 class="blog-head" style="color: #2d2d2d;">Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                                </div>
                            </article> -->
                            <!--blog card end section -->

                            <!--this is the paginations links-->
                            <!-- <nav class="blog-pagination justify-content-center d-flex">

                                <ul class="pagination">
                                <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                <i class="ti-angle-left"></i>
                                </a>
                                </li>
                                <li class="page-item">
                                <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                <i class="ti-angle-right"></i>
                                </a>
                                </li>
                                </ul>
                            </nav> -->
                            <!--pagination link end-->

                            <!--all of this section i put in this page --->

                            @include('frontend.university_list')

                    </div>
                    </div>

                    
                    <!--blog section end -->

                    <!--side section-->
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">

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

                            <!--category section start-->
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">{{__('messages.title_category')}}</h4>
                                <ul class="list cat-list">

                                @foreach($category as $row)
                                <li>
                                <a href="{{ route('search.category', $row->id) }}" class="d-flex">
                                <p> @if(session()->get('locale') == 'en') {{  $row->name }} @else {{  $row->name_arabic }} @endif </p>
                                </a>
                                </li>
                                @endforeach

                                <!-- <li>
                                <a href="#" class="d-flex">
                                <p>Travel news</p>
                                <p>(10)</p>
                                </a>
                                </li>

                                <li>
                                <a href="#" class="d-flex">
                                <p>Modern technology</p>
                                <p>(03)</p>
                                </a>
                                </li>

                                <li>
                                <a href="#" class="d-flex">
                                <p>Product</p>
                                <p>(11)</p>
                                </a>
                                </li>

                                <li>
                                <a href="#" class="d-flex">
                                <p>Inspiration</p>
                                <p>21</p>
                                </a>
                                </li>

                                <li>
                                <a href="#" class="d-flex">
                                <p>Health Care (21)</p>
                                <p>09</p>
                                </a>
                                </li> -->

                                </ul>
                            </aside>
                            <!--End of the category section-->

                            <!--recent post section for --->
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">{{__('messages.title_updated_course')}}</h3>

                                @foreach($courses as $row)
                                <div class="media post_item">
                                <img width="100px"  src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('website_assets/img/gallery/courses1.jpg') }}"" alt="post">
                                <div class="media-body">
                                <a href="{{ route('preview',$row->id) }}">
                                <h3 style="color: #2d2d2d;">@if(session()->get('locale') == 'en') {{  $row->name }} @else {{  $row->ar_name }} @endif </h3>
                                </a>
                                <p>$ {{ $row->fess }} |  @if(session()->get('locale') == 'en') {{  $row->course }} @else {{  $row->ar_course }} @endif  </p>
                                </div>
                                </div>
                                @endforeach

                          

                                </div>
                            </aside>
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







