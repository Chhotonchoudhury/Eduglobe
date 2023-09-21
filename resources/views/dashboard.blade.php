@extends('layouts.base')
@section('content')

<style>
 @media (max-width: 768px) {
  .chart-container {
    height: 150px;
  }
  .chart {
    font-size: 12px;
  }
}

@media (min-width: 768px) and (max-width: 992px) {
  .chart-container {
    height: 200px;
  }
  .chart {
    font-size: 14px;
  }
}

@media (min-width: 992px) {
  .chart-container {
    height: 300px;
  }
  .chart {
    font-size: 16px;
  }
}

</style>

    

                    @if(Auth::user()->hasRole('Admin'))
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing pb-1">
                      <div class="row">
                        <div class="row col-md-6 col-lg-6 col-xl-6 m-0 p-0">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                                    <a class="widget quick-category" style="border-left: 5px solid #128ba3 !important; height:80px;">
                                        <div class="quick-category-head d-flex">
                                            <span class="quick-category-icon qc-danger rounded-circle  m-0 p-0">
                                            <i class="las la-university font-35 text-success"></i>
                                            </span>
                                            <h4>{{ $uni_total }}</h4>
                                        </div>

                                        <div class="quick-category-content">
                                            <p class="font-12 mb-0" style="color:#6f6d6d">Total University</p>
                                        </div>
                                    </a>
                            </div>
                        
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                                    <a class="widget quick-category" style="border-left: 5px solid #f3a129 !important; height:80px;">
                                        <div class="quick-category-head d-flex">
                                            <span class="quick-category-icon qc-danger rounded-circle  m-0 p-0">
                                            <i class="las la-book font-35 text-primary"></i>
                                            </span>
                                            <h4>{{ $cor_total }}</h4>
                                        </div>
                                        <div class="quick-category-content">
                                            <p class="font-12 mb-0" style="color:#6f6d6d">Total Courses</p>
                                        </div>
                                    </a>
                            </div>
                    
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                                <a class="widget quick-category" style="border-left: 5px solid #f3a129 !important; height:80px;">
                                    <div class="quick-category-head d-flex">
                                        <span class="quick-category-icon qc-danger rounded-circle  m-0 p-0">
                                        <i class="las la-users font-35 text-success"></i>
                                        </span>
                                        <h4>{{ $stu_total }}</h4>
                                    </div>
                                    <div class="quick-category-content">
                                        <p class="font-12 mb-0" style="color:#6f6d6d">Total Students</p>
                                    </div>
                                </a>
                            </div>
                    
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                                <a class="widget quick-category" style="border-left: 5px solid #128ba3 !important; height:80px;">
                                    <div class="quick-category-head d-flex">
                                        <span class="quick-category-icon qc-danger rounded-circle  m-0 p-0">
                                        <i class="las la-user-graduate font-35 text-warning"></i>
                                        </span>
                                        <h4>{{ $s_total }}</h4>
                                    </div>
                                    <div class="quick-category-content">
                                        <p class="font-12 mb-0" style="color:#6f6d6d">Processing Student</p>
                                    </div>
                                </a>
                            </div>
                    
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                                    <a class="widget quick-category" style="border-left: 5px solid #128ba3 !important; height:80px;">
                                        <div class="quick-category-head d-flex">
                                            <span class="quick-category-icon qc-danger rounded-circle  m-0 p-0">
                                            <i class="las la-question-circle font-35 text-danger"></i>
                                            </span>
                                            <h4>{{ $stu_total }}</h4>
                                        </div>
                                        <div class="quick-category-content">
                                            <p class="font-12 mb-0" style="color:#6f6d6d">Total Enquiries</p>
                                        </div>
                                    </a>
                            </div>
                    
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                                    <a class="widget quick-category" style="border-left: 5px solid #f3a129 !important; height:80px;">
                                        <div class="quick-category-head d-flex">
                                            <span class="quick-category-icon qc-danger rounded-circle  m-0 p-0">
                                            <i class="las la-info-circle font-35 text-danger"></i>
                                            </span>
                                            <h4>{{ $total_user_enq }}</h4>
                                        </div>
                                        <div class="quick-category-content">
                                            <p class="font-12 mb-0" style="color:#6f6d6d">Pending Enquiries</p>
                                        </div>
                                    </a>
                            </div>

                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                                    <a class="widget quick-category" style="border-left: 5px solid #f3a129 !important; height:80px;">
                                        <div class="quick-category-head d-flex">
                                            <span class="quick-category-icon qc-danger rounded-circle  m-0 p-0">
                                            <i class="las la-user-tie font-35 text-primary"></i>
                                            </span>
                                            <h4>{{ $agentCount }}</h4>
                                        </div>
                                        <div class="quick-category-content">
                                            <p class="font-12 mb-0" style="color:#6f6d6d">Total Agents</p>
                                        </div>
                                    </a>
                            </div>

                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                                <a class="widget quick-category" style="border-left: 5px solid #128ba3 !important; height:80px;">
                                    <div class="quick-category-head d-flex">
                                        <span class="quick-category-icon qc-primary rounded-circle  m-0 p-0">
                                        <i class="las la-info-circle font-35"></i>
                                        </span>
                                        <h4>{{ $stuffCount }}</h4>
                                    </div>
                                    <div class="quick-category-content">
                                        <p class="font-12 mb-0" style="color:#6f6d6d">Total Suffs</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row col-md-6 col-lg-6 col-xl-6 m-0 p-0">
                            <div class="widget col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing mt-1 p-0">
                            
                                <div class="widget-heading bg-light" style="border-left: 5px solid #128ba3 !important;">
                                    <h6 class=" p-2" >Latest Enquiry</h6>
                                </div>
                                <table id="list"  class="table table-bordered table-hover p-1">
                                    <thead class=" " style="background-color: #f2f2f2;">
                                        <tr>
                                            <th>#</th>
                                            <th>Info</th>
                                            <th>Location</th>
                                            <th>Contacts</th>
                                        
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($enquiryList as $row)
                                      <a href="{{ route('view.uni',$row->id) }}">
                                        <tr class="p-0">
                                            <td><img class="rounded-circle" alt="200x200" width="300" src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''): asset('assets/assets/img/NoProfile.png') }}" data-holder-rendered="true"  style="width:30px;height:30px"></td>
                                            <td>
                                                <a href="" class="text-dark strong">{{ $row->name }}</a>
                                            </td>
                                            <td>
                                                {{ $row->country }},
                                                {{ $row->city }}
                                            </td>
                                            <td>
                                               {{ $row->email }}<br>
                                               {{ $row->phone }}
                                            </td>
                                        
                                        </tr>
                                       </a>
                                       @endforeach 
                                    </tbody>
                                    <tfoot class="bg-light">
                                        <tr>
                                            <td colspan="4" class="text-right">
                                                <button class="btn btn-primary">See All Enquiries</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                      </div>
                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-1">
                      <div class="row ">
                        <div class="col-md-4 col-lg-4 col-xl-4 pl-1" >
                            <div id="piechart"   class="widget m-0 p-0 " style="width: 100%;height:290px; "></div>
                        </div>

                        <div class="row col-md-8 col-lg-8 col-xl-8 m-0 p-0">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing mt-0 p-0">
                                <div class="widget widget-chart-one ">
                                    <div class="widget-heading bg-light p-1" style="border-left: 5px solid #128ba3 !important;">
                                        <h6 class="ml-1">Students  Registration</h6>
                                        <ul class="tabs tab-pills">
                                            <li>
                                                <div class="dropdown  custom-dropdown-icon">
                                                    <a class="dropdown-toggle" href="#" role="button" id="StudentChart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Options</span> <i class="las la-angle-down"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="StudentChart">
                                                    <a class="dropdown-item" data-value="all" href="javascript:void(0);">All Time</a>
                                                    <a class="dropdown-item" data-value="year" href="javascript:void(0);">This Year</a>
                                                    <a class="dropdown-item" data-value="month" href="javascript:void(0);">This Months</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget-content">
                                        <div class="tabs tab-content">
                                            <div class="tabcontent table-responsive">
                                                <div class="chart-container" style="position: relative; height: 200px;">
                                                    <canvas class="chart" style="width: 100%; height: auto;"  id="studentChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      </div>
                    </div>


                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing ">
                      <div class="row">
                         <div class="row col-md-6 col-lg-6 col-xl-6 m-0 p-0">
                       
                         </div>

                         <div class="row col-md-6 col-lg-6 col-xl-6 m-0 p-0">

                         </div>
                      </div>
                    </div> -->
                  
   
                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing mt-1 p-0">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Students  Registration</h5>
                                <ul class="tabs tab-pills">
                                    <li>
                                        <div class="dropdown  custom-dropdown-icon">
                                            <a class="dropdown-toggle" href="#" role="button" id="StudentChart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Options</span> <i class="las la-angle-down"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="StudentChart">
                                               <a class="dropdown-item" data-value="all" href="javascript:void(0);">All Time</a>
                                               <a class="dropdown-item" data-value="year" href="javascript:void(0);">This Year</a>
                                               <a class="dropdown-item" data-value="month" href="javascript:void(0);">This Months</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div class="tabcontent table-responsive">
                                        <div class="chart-container" style="position: relative; height: 200px;">
                                            <canvas class="chart" style="width: 100%; height: auto;"  id="studentChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-lg-6 col-12 col-md-6 mt-2 mb-2 m-0 p-0">
                       <div id="donutchart" class="widget" style="width: 100%; height: 300px;"></div>
                    </div>
                   
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-0 mb-2">

                      <div class="widget dashboard-table">
                            <div class="widget-heading">
                                <h6 class="">Latest Enquiry</h6>
                            </div>
                            <table id="list"  class="table table-bordered table-hover" style="width: 100%;">
                                                    <thead class="" style="background-color: #f2f2f2;">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Logo</th>
                                                        <th>Number</th>
                                                        <th>Name</th>
                                                        
                                                        
                                            
                                                    </tr>
                                                    </thead>
                                            <tbody>
                                                
                                                    <tr>
                                                        <td>1</td>
                                                        <td> dfgdfg </td>
                                                        <td> dfgfdsg </td>
                                                        <td> dfgdfg </td>
                                                       
                                                        
                                                    </tr>
                                                
                                            </tbody>
                            </table>
                      </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget dashboard-table">
                                    <div class="widget-heading">
                                        <h6 class="">Latest Enquiry</h6>
                                    </div>
                                    <div class="widget-content dashboard-table mt-0">
                                        <div class="table-responsive">
                                            <table class="table no-border table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th><div class="th-content">Logo</div></th>
                                                        <th><div class="th-content">Info</div></th>
                                                        <th><div class="th-content">country / city</div></th>
                                                        <th><div class="th-content">Contacts</div></th>
                                                        <th><div class="th-content">view</div></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($enquiryList as $row)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-center">
                                                                  <img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''): asset('assets/assets/img/NoProfile.png') }}" class="avatar-md object-cover" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="}" class="text-dark strong">{{ $row->name }}</a>
                                                            <span class="text-muted d-block">Age : @if($row->age){{ $row->age }}@endif</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted strong d-flex align-center">
                                                                {{ $row->country }}<br>
                                                                {{ $row->city }}
                                                            </span>
                                                        </td>

                                                        <td >
                                                            <span class="text-muted d-flex align-center strong">
                                                                {{ $row->email }}<br>
                                                                {{ $row->phone }}
                                                            </span>
                                                        </td>
                                                       
                                                        <td class="text-right">
                                                            <a href="{{ route('enq.stu') }}" class="text-primary font-30 arrow-right-hover">
                                                                <i class="las la-arrow-right"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <p class="font-13 text-center  text-muted">
                                            <a class="btn btn-info" href="{{ route('enq.stu') }}">View all</a> 
                                            </p>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                 
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget dashboard-table widget-chart-two p-0">
                                    <div class="widget-heading">
                                        <h6 class="">Top sell Courses</h6>
                                    </div>
                                    <div class="widget-content mt-4">
                                        <div class="table-responsive">
                                            <table class="table no-border table-hover mb-4">
                                                <thead>
                                                    <tr>
                                                        <th><div class="th-content">Logo</div></th>
                                                        <th><div class="th-content">Name</div></th>
                                                        <th><div class="th-content">Info</div></th>
                                                        <th><div class="th-content">view</div></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach($topcourse as $row)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-center">
                                                                <img src="{{ asset('uploads/'.$row->course->photo.'') }}" class="avatar-md object-cover" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('s_course_view',$row->course->id) }}" class="text-dark strong">{{ $row->course->name }}</a>
                                                            <span class="text-muted d-block">{{ $row->course->course }}</span>
                                                        </td>
                                                        <td>
                                                            
                                                            <span class="badge badge-success">Fess {{ $row->course->fess }}</span><br><br>
                                                            <span class="badge badge-primary">{{ $row->course->category->name }}</span><br>
                                                            <span class="text-muted strong">
                                                            {{ $row->course->course_period }}
                                                            </span>
                                                        </td>
                                                    
                                                        <td>
                                                            <div class="d-flex align-center">
                                                            <a href="{{ route('view.cor',$row->course->id) }}" class="text-primary font-30 arrow-right-hover">
                                                                <i class="las la-arrow-right"></i>
                                                            </a></div>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <p class="font-13 text-center  text-muted">
                                            <a class="btn btn-block btn-info" href="{{ route('cor') }}">View all</a> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing p-0 ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget dashboard-table widget-chart-two ">
                                    <div class="widget-heading">
                                        <h6 class="">Top universities</h6>
                                    </div>
                                    <div class="widget-content mt-4 ">
                                        <div class="table-responsive">
                                            <table class="table no-border table-hover mb-4">
                                                <thead>
                                                    <tr>
                                                        <th><div class="th-content">Logo</div></th>
                                                        <th><div class="th-content">Info</div></th>
                                                        <th><div class="th-content">Number</div></th>
                                                        <th><div class="th-content">view</div></th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($topuniversity as $row)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-center">
                                                                <img src="{{ asset('uploads/'.$row->university->logo.'') }}" class="avatar-md object-cover" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('view.uni',$row->university->id) }}" class="text-dark strong">{{ $row->university->name }}</a>
                                                            <span class="text-muted d-block">{{ $row->university->email }}</span>
                                                        </td>
                                                        <td>
                                                            <a href="" class="text-dark strong">{{ $row->university->Unumber }}</a>
                                                        </td>
                                                    
                                                        <td>
                                                            <a href="{{ route('view.uni',$row->university->id) }}" class="text-primary font-30 arrow-right-hover">
                                                                <i class="las la-arrow-right"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <p class="font-13 text-center mt-0 mb-3 text-muted">
                                            <a class="btn btn-block btn-info" href="{{ route('uni.add') }}">View all</a> 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                   


                    <!---- ---->
                    
                    
                    
                    @else
                    
                    <!--------------------------------cards---------------------------------->
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                          <div class="card border border-primary" style="border-radius: 10px;"> 
                                <a class="widget quick-category" style="height:110px;">
                                    <div class="quick-category-head d-flex">
                                        <span class="quick-category-icon qc-primary rounded-circle  m-0 p-0">
                                        <i class="las la-users font-45"></i>
                                        </span>
                                        <h3>{{ $total_user_students }}</h3>
                                    </div>
                                    <div class="quick-category-content">
                                        <p class="font-15 text-primary mb-0">Total Students</p>
                                    </div>
                                </a>
                          </div>
                    </div>

                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                     <div class="card border border-warning" style="border-radius: 10px;"> 
                        <a class="widget quick-category" style="height:110px;">
                            <div class="quick-category-head d-flex">
                                <span class="quick-category-icon qc-warning rounded-circle  m-0 p-0">
                                <i class="las la-graduation-cap font-45"></i>
                                </span>
                                <h3>{{ $total_user_process }}</h3>
                            </div>
                            <div class="quick-category-content">
                                <p class="font-15 text-success mb-0">Processing students</p>
                            </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                      <div class="card border border-primary" style="border-radius: 10px;"> 
                        <a class="widget quick-category" style="height:110px;">
                            <div class="quick-category-head d-flex">
                                <span class="quick-category-icon qc-primary rounded-circle  m-0 p-0">
                                <i class="las la-question-circle font-45"></i>
                                </span>
                                <h3>{{ $total_user_enq_list }}</h3>
                            </div>
                            <div class="quick-category-content">
                                <p class="font-15 text-primary mb-0">Total Enquiries</p>
                            </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-1 m-0">
                      <div class="card border border-warning" style="border-radius: 10px;"> 
                        <a class="widget quick-category" style="height:110px;">
                            <div class="quick-category-head d-flex">
                                <span class="quick-category-icon qc-warning rounded-circle  m-0 p-0">
                                <i class="las la-check-circle font-45"></i>
                                </span>
                                <h3>{{ $total_user_con_enq }}</h3>
                            </div>
                            <div class="quick-category-content ">
                                <p class="font-15 text-warning mb-0">Verified Enquiries</p>
                            </div>
                        </a>
                      </div>
                    </div>
                    <!---------------------cards end------------------------------------------>
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-0 mb-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget dashboard-table">
                                    <div class="widget-heading">
                                        <h6 class="">Latest Enquiry</h6>
                                    </div>
                                    <div class="widget-content dashboard-table mt-0">
                                        <div class="table-responsive">
                                            <table class="table no-border table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th><div class="th-content">Logo</div></th>
                                                        <th><div class="th-content">Info</div></th>
                                                        <th><div class="th-content">country / city</div></th>
                                                        <th><div class="th-content">Contacts</div></th>
                                                        <th><div class="th-content">view</div></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($user_latest_enq_list as $row)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-center">
                                                                  <img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''): asset('assets/assets/img/NoProfile.png') }}" class="avatar-md object-cover" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="}" class="text-dark strong">{{ $row->name }}</a>
                                                            <span class="text-muted d-block">Age : @if($row->age){{ $row->age }}@endif</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted strong d-flex align-center">
                                                                {{ $row->country }}<br>
                                                                {{ $row->city }}
                                                            </span>
                                                        </td>

                                                        <td >
                                                            <span class="text-muted d-flex align-center strong">
                                                                {{ $row->email }}<br>
                                                                {{ $row->phone }}
                                                            </span>
                                                        </td>
                                                       
                                                        <td class="text-right">
                                                            <a href="{{ route('enq.stu') }}" class="text-primary font-30 arrow-right-hover">
                                                                <i class="las la-arrow-right"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <p class="font-13 text-center  text-muted mt-2">
                                            <a class="btn btn-info" href="{{ route('enq.stu') }}">View all</a> 
                                            </p>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing p-0 mb-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget dashboard-table">
                                    <div class="widget-heading">
                                        <h6 class="">Latest student Under you</h6>
                                    </div>
                                    <div class="widget-content dashboard-table mt-0">
                                        <div class="table-responsive">
                                            <table class="table no-border table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th><div class="th-content">Logo</div></th>
                                                        <th><div class="th-content">Info</div></th>
                                                        <th><div class="th-content">country / city</div></th>
                                                        <th><div class="th-content">Contacts</div></th>
                                                        <th><div class="th-content">view</div></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($user_latest_process_list as $row)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-center">
                                                                  <img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''): asset('assets/assets/img/NoProfile.png') }}" class="avatar-md object-cover" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="}" class="text-dark strong">{{ $row->name }}</a>
                                                            <span class="text-muted d-block">Age : @if($row->age){{ $row->age }}@endif</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted strong d-flex align-center">
                                                                {{ $row->country }}<br>
                                                                {{ $row->city }}
                                                            </span>
                                                        </td>

                                                        <td >
                                                            <span class="text-muted d-flex align-center strong">
                                                                {{ $row->email }}<br>
                                                                {{ $row->phone }}
                                                            </span>
                                                        </td>
                                                       
                                                        <td class="text-right">
                                                            <a href="{{ route('view.stu', $row->id) }}" class="text-primary font-30 arrow-right-hover">
                                                                <i class="las la-arrow-right"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <p class="font-13 text-center mt-2  text-muted">
                                            <a class="btn btn-info" href="{{ route('stu') }}">View all</a> 
                                            </p>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endif
                            
                                

                    
                
                   
            
         

@endsection

@section('script')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

// Retrieve the data from your Laravel controller
const chartData = {!! $studentChart !!};
// Initialize the chart
let ctx = document.getElementById('studentChart').getContext('2d');
let myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: chartData.map(({ year, month }) => `${year}-${month.toString().padStart(2, '0')}`),
        datasets: [
            {
                label: 'Online',
                data: chartData.map(({ online_count }) => online_count),
                borderColor: 'rgb(255, 99, 132)',
                fill: false
            },
            {
                label: 'Employee',
                data: chartData.map(({ employee_count }) => employee_count),
                borderColor: 'rgb(54, 162, 235)',
                fill: false
            }
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
        
});


/////This is for dropdown section i use it //////////

$('.dropdown-menu a').on('click', function() {

const filter = $(this).data('value');
$.ajax({
    url: '{{ route("studentChartFilter", ["filter" => ":filter"]) }}'.replace(':filter', filter),
    type: 'GET',
    dataType: 'json',
    success: function(response) {
        myChart.data.labels = response.map(({ year, month }) => `${year}-${month.toString().padStart(2, '0')}`);
        myChart.data.datasets[0].data = response.map(({ online_count }) => online_count);
        myChart.data.datasets[1].data = response.map(({ employee_count }) => employee_count);
        myChart.update();
    },
    error: function(xhr, status, error) {
        console.log(xhr.responseText);
    }
});

});


//////End of the section //////////////////

</script>



<script type="text/javascript">
     
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
         <?php echo $piearr;  ?> 
         
         
        ]);

        var options = {
          title: 'Student Registration Countries',
        //   is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>

<script>
$(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
</script>

<script type="text/javascript">
       google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Payment',     <?php echo $pay ?>],
          ['Commissions',      <?php echo $commission ?>],
          ['Student Payment',  <?php echo $stu_payment ?>]
        ]);

        var options = {
          title: 'Company Performence',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

@endsection