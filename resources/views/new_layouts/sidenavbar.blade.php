 <!--sidebnavbar section-->
 <div class="header-bg sticky">



<!-- Navigation Bar-->



<header id="topnav">







  <!-- end topbar-main --><!-- MENU Start -->



  <div class="navbar-custom">



    <div class="container-fluid">



      <!-- Logo-->



      <div class="d-none d-lg-block">



        <!-- Text Logo



                    <a href="index.html" class="logo">



                        Foxia



                    </a>



                     --><!-- Image Logo -->



        <a href="https://tripcrm.in/educrm/crm/" class="logo">







        </a>



      </div>



      <!-- End Logo-->



      <div id="navigation">
       <!-- Navigation Menu-->
        <ul class="navigation-menu">



          <li class="has-submenu {{ Request::is('dashboard')? 'active': 'false' }}"><a href="{{ route('dashboard') }}" data-toggle="tooltip"
              data-placement="right" title="Dashboard" ><i class="fa fa-tachometer "></i></a></li>



          

          <li class="has-submenu {{ request()->is('enquiry-student*') ? 'active': 'false' }}"><a href="{{ route('enq.stu') }}" data-toggle="tooltip" data-placement="right"
              title="Enquries"><i class="fa fa-newspaper-o "></i></a>
          </li>



          <li class="has-submenu {{ Request::is('student')? 'active': 'false' }}"><a href="{{ route('stu') }}" data-toggle="tooltip" data-placement="right"
              title="Students"><i class="fa fa-user-circle-o"></i></a>
          </li>

          <li class="has-submenu {{ Request::is('university-add*')? 'active': 'false' }}"><a href="{{ route('uni.add') }}" data-toggle="tooltip" data-placement="right"
              title="University"><i class="fa fa-university"></i></a>
          </li>

          <li class="has-submenu "  class="{{ Request::is('courses')? 'active': 'false' }}"><a href="{{ route('cor') }}" data-toggle="tooltip" data-placement="right"
              title="Course"><i class="fa fa-book"></i></a>
          </li>

       



         



          <li class="has-submenu"><a href="#"><i class="fa fa-cogs "></i></a>



            <ul class="submenu"><!--



                    <li><a href="display.html?ga=systemreport">System Report</a></li> -->


              <div>


                <li><a href="display.html?ga=profitlossreport"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    Profit / Loss Report</a></li>
                <li><a href="display.html?ga=attandancesreport"><i class="fa fa-dot-circle-o"
                      aria-hidden="true"></i> Attandance Report</a></li>



                <li><a href="display.html?ga=notesreport"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    Notes Report</a></li>



                <li><a href="display.html?ga=collectreport"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    Collection Report</a></li>



                <li><a href="display.html?ga=travelreport"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    Tours Report</a></li>



                <li><a href="display.html?ga=todoreport"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    Task's / Followup's Report</a></li>



                <li><a href="display.html?ga=misreport"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> MIS
                    Report</a></li>



                <li><a href="display.html?ga=leisurereport"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                    Ledger Report</a></li>

              </div>

            </ul>
          </li>





        


        </ul>
       <!-- End navigation menu -->
      </div>



      <!-- end #navigation -->



    </div>



    <!-- end container -->



  </div>



  <!-- end navbar-custom -->



</header>







</div>
<!--end of the section-->