@extends('layouts.base')
@section('content')

      <!-- Main Body Starts -->
     
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="">
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <!-- <div class="input-group m-t-10">
                                                    <input type="text" class="form-control" value="Admin Dashboard">
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn bg-gradient-primary btn-primary"><i class="fa fa-search mr-1"></i> Search</button>
                                                    </span>
                                                </div> -->
                                                <div class="mt-4 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h6>Search Results for <span class="stronger">"{{ $key }}"</span></h6>
                                                        
                                                    </div>
                                                    <div>
                                                        <!-- <ul class="tabs tab-pills">
                                                            <li>
                                                                <div class="dropdown custom-dropdown-icon">
                                                                    <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Set Filter</span> <i class="las la-angle-down"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown" style="will-change: transform;">
                                                                        <a class="dropdown-item" data-value="All" href="javascript:void(0);">All</a>
                                                                        <a class="dropdown-item" data-value="Product" href="javascript:void(0);">Only Product</a>
                                                                        <a class="dropdown-item" data-value="User" href="javascript:void(0);">Only User</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-12">

                                            <!--this section is for courses section-->
                                                
                                                
                                                @foreach($course_data as $row)
                                                <div class="col-md-12">
                                                <div class="single-result row">
                                                        
                                                        <div class="col-md-6 d-flex">
                                                            <div class="image-container mr-3">
                                                                <img src="{{ asset('uploads/'.$row->photo.'') }}" class="avatar-md " />
                                                            </div>
                                                            <div class="info-container">
                                                                <h6>
                                                                    <a href="#" class="text-primary strong">{{ $row->name }}</a>
                                                                </h6>
                                                                <p class="text-muted font-12">{{ $row->course }}</p>
                                                                <p class="font-13">Degree : {{ $row->course_degree }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <i class="lar la-clock font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->starting_date }}</a>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-3">
                                                                <i class="lar la-file-alt font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->category->name }}</a>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i class="lar la-clock font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->course_period }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 star-area">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <i class="las la-university font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->university->name }}</a>
                                                            </div>

                                                            <div class="d-flex align-items-center mb-3">
                                                            
                                                                <i class="las la-graduation-cap font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->course_degree}}</a>
                                                            </div>

                                                            
                                                            <div class="d-flex align-items-center">
                                                                <i class="las la-star text-warning font-20"></i>
                                                                <i class="las la-star text-warning font-20"></i>
                                                                <i class="las la-star text-warning font-20"></i>
                                                                <i class="las la-star text-warning font-20"></i>
                                                                <i class="lar la-star text-warning font-20"></i>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-md-2 buy-now-area">
                                                            <p>
                                                                <a class="text-success-teal strong font-20 ml-2">{{ $row->fess}}</a>
                                                            </p>
                                                            <a href="{{ route('view.cor',$row->id) }}" class="btn btn-primary bg-gradient-primary">View Now</a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div><hr>
                                                @endforeach
                                                
                                               <!--end of the courses section -->
                                               
                                               <!--this section is for student section-->
                                               <hr>
                                                
                                                @foreach($student_data as $row)
                                                <div class="col-md-12">
                                                <div class="single-result row">
                                                        
                                                        <div class="col-md-6 d-flex">
                                                            <div class="image-container mr-3">
                                                                <img src="{{ asset('uploads/'.$row->photo.'') }}" class="avatar-md " />
                                                            </div>
                                                            <div class="info-container">
                                                                <h6>
                                                                    <a href="{{ route('view.stu',$row->id) }}" class="text-primary strong">{{ $row->name }}</a>
                                                                </h6>
                                                                <p class="text-muted font-12">{{ $row->email }}</p>
                                                                <p class="font-13">Phone : {{ $row->phone }}</p>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="d-flex align-items-center mb-3">
                                                            
                                                                <i class="las la-globe-americas font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->country }}</a>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-3">
                                                            
                                                                <i class="las la-map-marker-alt font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->city }}</</a>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                           
                                                                <i class="las la-passport font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->passport_no }}</</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 star-area">
                                                            <div class="d-flex align-items-center mb-3">
                                                            
                                                                <i class="las la-headset font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->phone }}</</a>
                                                            </div>

                                                            <div class="d-flex align-items-center mb-3">
                                                            
                                                                <i class="las la-envelope font-20 mr-2 txet-muted"></i>
                                                                <a>{{ $row->email }}</</a>
                                                            </div>

                                                            
                                                            <!-- <div class="d-flex align-items-center">
                                                                <i class="las la-star text-warning font-20"></i>
                                                                <i class="las la-star text-warning font-20"></i>
                                                                <i class="las la-star text-warning font-20"></i>
                                                                <i class="las la-star text-warning font-20"></i>
                                                                <i class="lar la-star text-warning font-20"></i>
                                                            </div> -->
                                                            
                                                        </div>
                                                        <div class="col-md-2 buy-now-area">
                                                            <a href="{{ route('view.stu',$row->id) }}" class="btn btn-danger bg-gradient-danger">View Now</a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div><hr>
                                                @endforeach
                                                
                                               <!--end of the student section -->

                                               <!--this section is for university section-->
                                               <hr>
                                                
                                                @foreach($university_data as $row)
                                                <div class="col-md-12">
                                                <div class="single-result row">
                                                        
                                                        <div class="col-md-10 d-flex">
                                                            <div class="image-container mr-3">
                                                                <img src="{{ asset('uploads/'.$row->logo.'') }}" class="avatar-md " />
                                                            </div>
                                                            <div class="info-container">
                                                                <h6>
                                                                    <a href="{{ route('view.uni',$row->id) }}" class="text-primary strong">{{ $row->name }}</a>
                                                                </h6>
                                                                <p class="text-muted font-12">{{ $row->email }}</p>
                                                                <p class="font-13">{{ $row->address }}</p>
                                                                <p class="mb-0 text-muted font-12">
                                                                {{ $row->remarks }}
                                                               </p>
                                                               <div class="mt-2">
                                                                    <img src="{{ asset('uploads/'.$row->logo.'') }}" height="48" alt="image">
                                                                    <img src="{{ asset('uploads/'.$row->photo.'') }}" height="48" alt="image">
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 buy-now-area">
                                                            
                                                            <a href="{{ route('view.uni',$row->id) }}" class="btn btn-warning bg-gradient-warning">View Now</a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div><hr>
                                                @endforeach
                                                
                                               <!--end of the university section -->
                                                
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
            <!-- Main Body Ends -->
  
@endsection