        
        <div class="sidebar-wrapper sidebar-theme" style="border-radius: 0px;">
            <nav id="sidebar">
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    @if(session()->has('admin_user_id'))
                        <li class="menu">
                            <a href="{{ route('AdminbackAsAdmin') }}" data-active="{{ Request::is('back-to-admin-dashboard')? 'true': 'false' }}" class="dropdown-toggle">
                                <div class="">
                                    <i class="las la-arrow-circle-left"></i>
                                    <span>Back to Admin</span>
                                </div>
                            </a>
                        </li>
                    @endif


                   <li class="menu">
                        <a href="{{ route('dashboard') }}" data-active="{{ Request::is('dashboard')? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-home"></i>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>
                    
                    @if(Auth::user()->hasRole('Admin'))
                     <li class="menu">
                        <a href="{{ route('enq.stu') }}" data-active="{{ Request::is('enquiry-student') ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-paste"></i>
                                <!--<i class="las la-graduation-cap"></i>-->
                                <span>Enquiries</span>
                            </div>
                        </a>
                    </li>
                    @endif
                    
                    @if(!Auth::user()->hasRole('Admin'))
                     <li class="menu">
                        <a href="{{ route('enq.stu') }}" data-active="{{ Request::is('enquiry-student') ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-paste"></i>
                                <!--<i class="las la-graduation-cap"></i>-->
                                <span>My Enquires</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    <li class="menu">
                        <a href="{{ route('uni.add') }}" data-active="{{ Request::is('university-add') ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-university"></i>
                                <span>University</span>
                            </div>
                            <!-- <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div> -->
                        </a>
                        <!-- <ul class="collapse submenu list-unstyled collapse {{ Request::is('university-add') || Request::is('university-list')  ? 'show': '' }}" id="dashboard" data-parent="#accordionExample">
                        <li><a href="{{ route('uni.add') }}" data-active="{{ Request::is('university-add') ? 'true': 'false' }}">Add new University</a></li>
                        <li><a href="{{ route('list.uni') }}" data-active="{{ Request::is('university-list') ? 'true': 'false' }}">University List</a></li>
                        </ul> -->
                    </li>


                    <li class="menu">
                        <a href="{{ route('cor') }}" data-active="{{ Request::is('courses') ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-graduation-cap"></i>
                                <span>Courses</span>
                            </div>
                        </a>
                    </li>
                    
                   

                    <li class="menu">
                        <a href="{{ route('stu') }}" data-active="{{ Request::is('student') ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-users"></i>
                                <span>Students</span>
                            </div>
                        </a>
                        <!-- <ul class="collapse submenu list-unstyled collapse {{ Request::is('student') || Request::is('student-payment-list') ? 'show': '' }}" id="student" data-parent="#accordionExample">
                        <li><a href="{{ route('stu') }}" data-active="{{ Request::is('student') ? 'true': 'false' }}">Student list</a></li>
                        <li><a href="{{ route('student.payment.view') }}" data-active="{{ Request::is('student-payment-list') ? 'true': 'false' }}">Student Payments</a></li>

                        </ul> -->
                    </li>

                    <!-- <li class="menu">
                        <a href="{{ route('stu') }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-users"></i>
                                <span>Students</span>
                            </div>
                        </a>
                    </li> -->

                    <li class="menu">
                    <a href="{{ route('applicant.process') }}" data-active="{{ Request::is('applicant-process') ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-tasks"></i>
                                <span>Applicent Process</span>
                            </div>
                            <!-- <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div> -->
                        </a>
                        <!-- <ul class="collapse submenu list-unstyled collapse {{ Request::is('statuses') || Request::is('applicant-process') ? 'show': '' }}" id="process" data-parent="#accordionExample">
                        <li><a href="{{ route('applicant.process') }}" data-active="{{ Request::is('applicant-process') ? 'true': 'false' }}">Applicant Process</a></li>
                        </ul> -->
                    </li>

                    <li class="menu">
                        <a href="{{ route('Reports.view') }}" data-active="{{ Request::is('reports-view')? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-table"></i>
                                <span>Reports</span>
                            </div>
                        </a>
                    </li>

                    <!--<li class="menu-title">Pages</li>-->
                     @if(Auth::user()->hasRole('Admin'))
                    <li class="menu">
                        <a href="#settings"  data-toggle="collapse" aria-expanded="{{ Request::is('course-category') || Request::is('company') || Request::is('payment-type') || Request::is('users') || Request::is('user-roles') || Request::is('statuses') || Request::is('EMGS-statuses') || Request::is('payment-statuses')  ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-cog"></i>
                                <span>Settings</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse {{ Request::is('course-category') || Request::is('company') || Request::is('payment-type') || Request::is('users') || Request::is('user-roles') || Request::is('statuses') || Request::is('EMGS-statuses') || Request::is('payment-statuses')  ? 'show': '' }}" id="settings" data-parent="#accordionExample">
                        <li><a href="{{ route('category') }}" data-active="{{ Request::is('course-category') ? 'true': 'false' }}">Course category</a></li>
                        <li><a href="{{ route('status') }}" data-active="{{ Request::is('statuses') ? 'true': 'false' }}">Applications status</a></li>
                         <li><a href="{{ route('emgs.status') }}" data-active="{{ Request::is('EMGS-statuses') ? 'true': 'false' }}">EMGS Status</a></li>
                         <li><a href="{{ route('payment.status') }}" data-active="{{ Request::is('payment-statuses') ? 'true': 'false' }}">Payment Status</a></li>
                        <li><a href="{{ route('company') }}" data-active="{{ Request::is('company') ? 'true': 'false' }}">Company Profile</a></li>
                        <li><a href="{{ route('pay') }}" data-active="{{ Request::is('payment-type') ? 'true': 'false' }}">Payment types</a></li>
                        
                        <!-- <li><a href="{{ route('userRoles') }}" data-active="{{ Request::is('user-roles') ? 'true': 'false' }}">Roles</a></li> -->
                        

                       
                        <li><a href="{{ route('userList') }}" data-active="{{ Request::is('users') ? 'true': 'false' }}">Users Manage</a></li>
                        <li><a href="{{ route('userRoles') }}" data-active="{{ Request::is('user-roles') ? 'true': 'false' }}">Roles & Permissions</a></li>
                       
                        
                        </ul>
                    </li>
                     @endif
                    
                    
                    <li class="menu-title">For Front End Website</li>

                       <li class="menu">
                        <a href="#websites"  data-toggle="collapse" aria-expanded="{{ Request::is('website-header') || Request::is('website-work') || Request::is('website-about') || Request::is('website-navbars') || Request::is('website-titles') ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                            <i class="las la-th-large"></i>
                                <span>Website</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ Request::is('website-header') || Request::is('website-about') || Request::is('website-work') || Request::is('website-navbars') || Request::is('website-titles') ? 'show': '' }}" id="websites" data-parent="#accordionExample">
                        <li><a href="{{ route('website.header') }}" data-active="{{ Request::is('website-header') ? 'true': 'false' }}">Header</a></li>
                        <li><a href="{{ route('website.about') }}" data-active="{{ Request::is('website-about') ? 'true': 'false' }}">About</a></li>
                        <li><a href="{{ route('website.work') }}" data-active="{{ Request::is('website-work') ? 'true': 'false' }}">How it works</a></li>
                        <li><a href="{{ route('website.navbar') }}" data-active="{{ Request::is('website-navbars') ? 'true': 'false' }}">Navbars</a></li>
                        <li><a href="{{ route('website.title') }}" data-active="{{ Request::is('website-titles') ? 'true': 'false' }}">Titles</a></li>
                        </ul>
                    </li>
                    
                    
                    
                    
                </ul>
            </nav>
        </div><br><br>
        
        
        
        <!-- ========== Left Sidebar Start ========== -->
           <!-- <div class="vertical-menu">

<div data-simplebar class="h-100">

    
    <div class="user-profile text-center mt-3">
     <div class="">
        <img src="{{ (!empty(Auth::user()->profile)) ? asset('uploads/'.Auth::user()->profile):asset('assets/images/users/avatar-1.png') }}" alt="" class="avatar-md rounded-circle">
      </div>
        <div class="mt-3">
            <h4 class="font-size-16 mb-1">{{ Auth::user()->name }}</h4>
            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
        </div>
    </div>

    <div id="sidebar-menu">
        
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="{{ route('dashboard') }}" class="waves-effect">
                    <i class="ri-dashboard-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
               <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fas fa-university"></i>
                    <span>Universities</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('uni.add') }}">Add new University</a></li>
                    <li><a href="{{ route('list.uni') }}">University List</a></li>
                    <li><a href="{{ route('payment.view') }}">Payments List</a></li>
                    <li><a href="{{ route('commission.view') }}">Commissions List</a></li>
              </ul>
            </li>

            

            <li>
              <a href="{{ route('cor') }}" class="waves-effect">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Courses</span>
              </a>
            </li>

            <li>
                <a href="{{ route('stu') }}" class="waves-effect">
                    <i class="fas fa-users"></i>
                    <span>Students</span>
                </a>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fas fa-tasks"></i>
                    <span>Applicant Process</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('status') }}">Applications status</a></li>
                    <li><a href="{{ route('applicant.process') }}">Applicant Process</a></li>
              </ul>
            </li>

            

            <li>
              <a href="#" class="waves-effect">
                    <i class="fa fa-table"></i>
                    <span>Reports</span>
              </a>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa fa-cog"></i>
                    <span>Settings</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('pay') }}">University payment types</a></li>
              </ul>
            </li>
           
        </ul>
    </div>
    
</div>
</div> -->



