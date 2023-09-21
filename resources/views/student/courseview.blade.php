@extends('student.layouts.base')
@section('content')

<!--this is the cutome course view design link css page -->
<link href="{{ asset('assets/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
<!--End of the section -->
<style>
.modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 13px;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}

</style>

    <!--This is the main section -->

    <div class="edu-course-details-area edu-section-gap bg-color-white">
            <div class="container">

               <!--this is the top corse banner section -->
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="main-image thumbnail">
                           <div class="product-carousel-inner">
                             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @if($course->related_image != '')
                                        @php $nm=1;  $img=json_decode($course->related_image);  @endphp
                                        @foreach($img as $imgs)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $nm }}" class="@if($nm == 1)active m @endif"></li>
                                            @php $nm++ @endphp
                                        @endforeach
                                        @endif 
                                    </ol>

                                    <div class="carousel-inner">
                                        @if($course->related_image != '')
                                        @php $sl=1;  $img=json_decode($course->related_image);  @endphp
                                        @foreach($img as $imgs)
                                        <div class="carousel-item @if($sl == 1) active @endif">
                                            <img class="d-block w-100 radius-small" style="filter: brightness(90%);" src="{{ asset('uploads/'.$imgs.'') }}" alt="Banner Images">
                                        </div>
                                        @php $sl++; @endphp
                                        @endforeach
                                        @endif 
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                             </div>
                            
                        </div>
                    </div>
                </div>
              <!--end of the course banner sections -->

                <div class="row g-5">
                    <div class="col-xl-8 col-lg-7">
                       <div class="course-details-content">
                            <div class="content-top">
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="">
                                            <img src="{{ asset('uploads/'.$course->university->logo.'') }}" alt="Author Images">
                                            <span class="author-title">By  -  {{$course->university->name}}</span> 
                                        </a>
                                    </div>
                                   
                                </div>
                                <!--this is the review section for the course ---->
                                <!-- <div class="edu-rating rating-default">
                                    <div class="rating">
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                    </div>
                                    <span class="rating-count">(25 Review)</span>
                                </div> -->
                                <!--end of the section --->
                            </div>
                            <h3 class="title">{{ $course->name }}({{ $course->ar_name}})</h3>
                            <div class="w-100 animated-underline-content mt-0 details-tab-area">
                                <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="underline-specification-tab" data-toggle="tab" href="#underline-specification" role="tab" aria-controls="underline-specification" aria-selected="false">Specification</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="underline-university-tab" data-toggle="tab" href="#underline-university" role="tab" aria-controls="underline-university" aria-selected="false">University Details</a>
                                    </li>
                        
                                </ul>
                                <div class="tab-content" id="lineTabContent-3">
                                    <!-- SPECIFICATION -->
                                    <div class="tab-pane fade show active" id="underline-specification" role="tabpanel" aria-labelledby="underline-specification-tab">
                                        <!-- <lable><span class="badge badge-success">Activated PDF :</span></lable><br><br> -->
                                        <h5>Course Description</h5>
                                        <p>{!! $course->detail !!}}</p>
                                        <h5>Course Requirements</h5>
                                        <ul>
                                            @php $i=1  @endphp
                                            @foreach ($course_req as $req)
                                            <li>{{ $req->requirment }}</li>
                                            @endforeach
                                        </ul>                                     
                                        <!-- <p class="row mb-3 w-100 text-muted "><span class="badge badge-success">Course Period </span>   <span class="badge badge-primary">{{ $course->course_period }}</span> </p>
                                        <p class="row mb-3 w-100 text-muted"><span class="badge badge-success">Course Fees </span>   <span class="badge badge-primary">{{ $course->fess }}</span> </p> -->
                                    </div>
                                    
                                   <!-- University Details -->
                                    <div class="tab-pane fade" id="underline-university" role="tabpanel" aria-labelledby="underline-university-tab">
                                        <div class="d-flex flex-wrap">

                                            <div class="col-xl-8 col-lg-4 col-md-4">
                                                <div class="cover-image-area">
                                                    <img src="{{ asset('uploads/'.$course->university->photo.'') }}" class="cover-img"/>
                                                </div>
                                                <div class="contact-info mb-4">
                                                    <p class="strong">About</p>
                                                    <p class="font-12">{{ $course->university->remarks }}</p>
                                                    <hr>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xl-4 col-lg-4 col-md-4">
                                                <div class="contact-info mb-4">
                                                    <div class="right-big-banner">
                                                        <img src="{{ asset('uploads/'.$course->university->logo.'') }}" class="img img-flut" alt="logo"> 
                                                        <p class="project-name">{{$course->university->name}}</p>
                                                        <p class="project-date">Created on {{ $course->university->created_at }}</p>
                                                        
                                                    </div>
                                                </div>
                                            </div> -->

                                            <div class="col-xl-4 col-lg-4 col-md-4">

                                                <div class="contact-info mb-4">
                                                    <div class="right-big-banner">
                                                        <img src="{{ asset('uploads/'.$course->university->logo.'') }}" class="img img-flut" alt="logo"> 
                                                        <p class="project-name">{{$course->university->name}}</p>
                                                        <p class="project-date">Created on {{ $course->university->created_at }}</p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="contact-info mb-4">
                                                    <p><a href="#"><i class="las la-envelope"></i>{{  $course->university->email }}</a></p>
                                                    <p><a href="#"><i class="las la-envelope"></i>{{ $course->university->ex_email }}</a></p>
                                                    <p><a href="#"><i class="las la-phone"></i>{{ $course->university->ex_number }}</a></p>
                                                    <p><a href="#"><i class="las la-barcode"></i>{{ $course->university->Unumber }}</a></p>
                                                </div>

                                            </div>

                                        </div>        
                                    </div>
                                    <!-- FAQS -->
                                
                                </div>
                            </div>
                       </div>
                        <!-- <div class="course-details-content">
                            <div class="content-top">
                                <div class="author-meta">
                                    <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            <img src="{{ asset('uploads/'.$course->university->logo.'') }}" alt="Author Images">
                                            <span class="author-title">By Leone Xaviona</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="edu-rating rating-default">
                                    <div class="rating">
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                    </div>
                                    <span class="rating-count">(25 Review)</span>
                                </div>
                            </div>

                            <h3 class="title">Grow Personal Financial Security Thinking & Principles</h3>

                            <ul class="edu-course-tab nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor" type="button" role="tab" aria-controls="instructor" aria-selected="false">Instructor</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Reviews</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="course-tab-content">
                                        <h5>Course Description</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                        <h5>What You’ll Learn From This Course</h5>
                                        <ul>
                                            <li>Neque sodales ut etiam sit amet nisl purus non tellus orci ac auctor</li>
                                            <li>Tristique nulla aliquet enim tortor at auctor urna. Sit amet aliquam id diam maer</li>
                                            <li>Nam libero justo laoreet sit amet. Lacus sed viverra tellus in hac</li>
                                            <li>Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis</li>
                                        </ul>
                                        <h5>Certification</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                    <div class="course-tab-content">
                                        <div class="edu-accordion-02" id="accordionExample1">
                                            <div class="edu-accordion-item">
                                                <div class="edu-accordion-header" id="headingOne">
                                                    <button class="edu-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        The First Steps
                                                    </button>
                                                </div>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                                    <div class="edu-accordion-body">
                                                        <ul>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Introduction</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Course Overview</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Local Development Environment Tools</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Course Excercise</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Embedding PHP in HTML</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Using Dynamic Data</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="edu-accordion-item">
                                                <div class="edu-accordion-header" id="headingTwo">
                                                    <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Data Types and More
                                                    </button>
                                                </div>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                                                    <div class="edu-accordion-body">
                                                        <ul>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Introduction</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Course Overview</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Local Development Environment Tools</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Course Excercise</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Embedding PHP in HTML</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Using Dynamic Data</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="edu-accordion-item">
                                                <div class="edu-accordion-header" id="headingThree">
                                                    <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Control Structure
                                                    </button>
                                                </div>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                                                    <div class="edu-accordion-body">
                                                        <ul>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Introduction</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Course Overview</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Local Development Environment Tools</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Course Excercise</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Embedding PHP in HTML</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                            <li>
                                                                <div class="text"><i class="icon-draft-line"></i> Using Dynamic Data</div>
                                                                <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                    <div class="course-tab-content">
                                        <div class="course-author-wrapper">
                                            <div class="thumbnail">
                                                <img src="assets/images/instructor/course-details/instructor-2.jpg" alt="Author Images">
                                            </div>
                                            <div class="author-content">
                                                <h6 class="title">
                                                    <a href="instructor-profile.html">Leone Xaviona</a>
                                                </h6>
                                                <span class="subtitle">Digital Marketer</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...</p>
                                                <ul class="social-share border-style">
                                                    <li><a href="#"><i class="icon-Fb"></i></a></li>
                                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="icon-Pinterest"></i></a></li>
                                                    <li><a href="#"><i class="icon-Twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="course-tab-content">
                                        <div class="row row--30">
                                            <div class="col-lg-4">
                                                <div class="rating-box">
                                                    <div class="rating-number">5.0</div>
                                                    <div class="rating">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                    </div>
                                                    <span>(25 Review)</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="review-wrapper">

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            5 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">1</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            4 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            3 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            2 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            1 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-wrapper pt--40">
                                            <div class="section-title">
                                                <h5 class="mb--25">Reviews</h5>
                                            </div>
                                            <div class="edu-comment">
                                                <div class="thumbnail">
                                                    <img src="assets/images/course/student-review/student-1.png" alt="Comment Images">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-top">
                                                        <h6 class="title">Elen Saspita</h6>
                                                        <div class="rating">
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                        </div>
                                                    </div>
                                                    <span class="subtitle">“ Outstanding Course ”</span>
                                                    <p>As Thomas pointed out, Chegg’s survey appears more like a scorecard that details obstacles and challenges that the current university undergraduate student population is going through in their universities and countries.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="eduvibe-sidebar course-details-sidebar">
                            <div class="inner">
                                <div class="eduvibe-widget">
                                    <div class="video-area">
                                        <div class="thumbnail video-popup-wrapper">
                                            <img class="radius-small w-100" src="{{ asset('uploads/'.$course->photo.'') }}" alt="Course Images">
                                            <a href="https://www.youtube.com/watch?v=pNje3bWz7V8" class="video-play-btn position-to-top video-popup-activation">
                                                <span class="play-icon course-details-video-popup"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="eduvibe-widget-details mt-5">
                                        <div class="widget-content p-0 m-0 ">
                                            <ul class="p-0 m-0 mb-5">
                                                @if($student->course_id ==  $course->id)
                                                  <li><span><i class="las la-check-circle" font-20 "></i>Accept status</span><span> <span class="text-success">Accepted</span></li>
                                                <!-- <h6><span class="text-success ml-2"></span></h6> -->
                                                @endif
                                    
                                                <li><span><i class="las la-clock font-20 "></i>1st Start Date</span><span>{{ \Carbon\Carbon::parse($course->starting_date)->format('d-m-Y') }}</span></li>

                                                <li><span><i class="las la-clock font-20"></i>2nd Start Date</span><span>{{ \Carbon\Carbon::parse($course->starting_date2)->format('d-m-Y') }}</span></li>

                                                <li><span><i class="las la-hourglass-end font-20"></i> Period</span><span>{{ $course->course_period }}</span></li>

                                                <li><span><i class="las la-book font-20"></i> Category</span><span>{{ $course->category->name }}</span></li>

                                                <li><span><i class="las la-graduation-cap font-20"></i> Degree</span><span>{{ $course->course_degree  }}</span></li>

                                                <li><span><i class="las la-university font-20"></i> University</span><span>{{ $course->university->name  }}</span></li>

                                                <!-- <li><span><i class="icon-award-line"></i> Certificate</span><span>Yes</span></li>

                                                <li><span><img class="eduvibe-course-sidebar-img-icon" src="assets/images/icons/percent.svg" alt="icon Thumb"> Pass Percentage</span><span>90%</span></li>

                                                <li><span><i class="icon-calendar-2-line"></i> Deadline</span><span>25 Dec, 2023</span></li>

                                                <li><span><i class="icon-user-2-line_tie"></i> Instructor</span><span>Daniel Stiva</span></li> -->
                                            </ul>

                                            <div class="read-more-btn mt--45">
                                                <a class="edu-btn btn-bg-alt w-100 text-center" href="#">Fess : {{  $course->fess }}</a>
                                            </div>

                                            @if(!empty($pdf->process_status))   
                                                @if($pdf->process_status == 2)
                                                <div class="read-more-btn mt--15 mt-5">
                                                <a href="{{ route('course.pdf',$course->id) }}" class="edu-btn w-100 text-center"><i class="las la-file-pdf font-20"></i> Download pdf</a>
                                                </div>
                                                @else
                                                <div class="read-more-btn mt--15 mt-5">
                                                <a href="{{ route('course_uploaded.pdf',$course->id) }}" class="edu-btn w-100 text-center"><i class="las la-file-pdf font-20"></i> Download pdf</a>
                                                </div>
                                                @endif
                                            @endif


                                            @if(empty($student->course_id))
                                            <form action="{{ route('s_course_approve') }}" id="accept" method="post">
                                              @csrf
                                             <input name="course_id" type="hidden" value="{{ $course->id }}">
                                              <div class="read-more-btn mt--15 mt-2">
                                                <button class="accept-confirm edu-btn w-100 text-center"> Accept Now</button>
                                              </div>
                                            </form>
                                            @endif


                                       

                                            <!-- <div class="read-more-btn mt--15">
                                                <a class="edu-btn w-100 text-center" href="#">Buy Now</a>
                                            </div> -->

                                            <!-- <div class="read-more-btn mt--30 text-center">
                                                <div class="eduvibe-post-share">
                                                    <span>Share: </span>
                                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                                    <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<!--end of the section -->

 <!-- course accept model Modal HTML -->
 <div id="DeleteModal" class="modal fade">
                            <div class="modal-dialog modal-confirm">
                              <div class="modal-content">
                                <div class="modal-header flex-column">
                                  <div class="icon-box">
                                  <i class="las la-exclamation-triangle">&#xE5CD;</i>
                                  </div>						
                                  <h4 class="modal-title w-100">Are you sure?</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Do you really want to Accept This course? This process cannot be undone.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                  <button type="button" class="submit-accept  btn btn-success font-20 mr-2" style="border-radius:25px;">Accept It</button>
                                  <button type="button" class="btn btn-danger font-20" data-dismiss="modal" style="border-radius:25px;">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div> 
  <!--End of the modal---->
      


@endsection

@section('script')


<script>
    $( document ).ready(function() { 
        $(".accept-confirm").click(function(e){
            e.preventDefault();
            // let id = $(this).attr("data-id");
            $('#DeleteModal').modal('show');
            $(".submit-accept").click(function(e){
                $( "#accept" ).submit();
            })
            // $(".del").attr("href", id)
        });
     });



//this is the sweet alert notification
// this is the toaster notification
toastr.options = {
  "closeButton": true,
//   "positionClass": "toast-top-center",
   }
@if(session('s_success'))
toastr["success"]("{{ session('s_success') }}");
@elseif(session('info'))
toastr["info"]("{{ session('info') }}");
@elseif (session('warning'))
toastr["error"]("{{ session('warning') }}");
@endif
//end of the tostar Notification
// @if(session('info'))
//      Swal.fire('Info', '{{ session('info') }}', 'info'); 
// @elseif (session('s_ssuccess'))
//         Swal.fire('Done', '{{ session('s_success') }}', 'success');
// @elseif (session('warning'))
//         Swal.fire('Danger', '{{ session('warning') }}', 'Danger');
//  @endif

</script>    
@endsection