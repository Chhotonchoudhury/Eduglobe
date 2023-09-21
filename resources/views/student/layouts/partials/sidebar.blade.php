        
        <div class="sidebar-wrapper sidebar-theme">
            <nav id="sidebar">
                <ul class="list-unstyled menu-categories" id="accordionExample">
                   <li class="menu">
                        <a href="{{ route('student_dashboard') }}" data-active="{{ Request::is('student/dashboard') ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-home"></i>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>


                    <!-- <li class="menu">
                        <a href="{{ route('student_courses') }}" data-active="{{ Request::is('student/courses') ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-graduation-cap"></i>
                                <span>Courses</span>
                            </div>
                        </a>
                    </li> -->

                    <!-- <li class="menu">
                        <a href="{{ route('student_suggetion') }}" data-active="{{ Request::is('student/suggetions-courses') ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-user"></i>
                                <span>suggetion_courses</span>
                            </div>
                        </a>
                    </li> -->


                    <li class="menu">
                        <a href="{{ route('student_profile') }}" data-active="{{ Request::is('student/profile') ? 'true': 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-user"></i>
                                <span>My profile</span>
                            </div>
                        </a>
                    </li>



                    
                    
                </ul>
            </nav>
        </div>
        




