<?php
  use App\Models\Web_header;
  use App\Models\Web_about;
  use App\Models\Web_work;

  use App\Models\Web_navbar;
  use App\Models\Web_title;




return [


   //navbars 
   'nav_home' => Web_navbar::first()->en_link1,
   'nav_course' => Web_navbar::first()->en_link2,
   'nav_university' => Web_navbar::first()->en_link3,
   'nav_about' => Web_navbar::first()->en_link4,
   'nav_lang' => Web_navbar::first()->en_link5,
   'nav_contact' => Web_navbar::first()->en_link6,
   //end of he navars

   //basic title 
   'title_sing' => Web_title::first()->en_title1,
   'title_b_course' => Web_title::first()->en_title2,
   'title_v_course' => Web_title::first()->en_title3,
   'title_register' => Web_title::first()->en_title4,
   'title_w_video' => Web_title::first()->en_title5,
   'title_category' => Web_title::first()->en_title6,
   'title_student' => Web_title::first()->en_title7,
   'title_company' => Web_title::first()->en_title8,
   'title_subscribe' => Web_title::first()->en_title9,
   'title_course' => Web_title::first()->en_title10,
   'title_registration' => Web_title::first()->en_title11,
   'title_adminp' => Web_title::first()->en_title12,
   'title_explore_category' => Web_title::first()->en_title14,
   'title_updated_course' => Web_title::first()->en_title15,
   'title_popular_course' => Web_title::first()->en_title16,
   'title_how_it_work' => Web_title::first()->en_title17,
   'title_subscribe_course' => Web_title::first()->en_title18,
   //end of the basic titles

   //search boxes
    'search_box1' => ' Search courses.. ',
    'search_box2' => 'What do you want to learn ? ',
    'search_box3' => 'Search any courses..', 
   //search boxes

   // need help
   'foot_need_help' => 'NEED HELP',
   'link_imp' => 'Importent Links',
   //extrea in course
   'c_search_des' => 'Find the best course suitable for your growth',
   //etra university details seacrch
   'university_des' => 'Find out your best dream university',
   
   
    //this is header hero section first/second title
    'hero_title1' => Web_header::first()->en_f_title,
    'hero_title2' => Web_header::first()->en_l_title,


    //about us section
    'about_title1' => Web_about::first()->en_title,
    'about_title2' => Web_about::first()->en_about,

    //how it works
    'work_title' => Web_work::first()->en_description,
    'work_title1' => Web_work::first()->en_title1,
    'work_title2' => Web_work::first()->en_title2,
    'work_title3' => Web_work::first()->en_title3,
    'work_title4' => Web_work::first()->en_title4,
    'work_title5' => Web_work::first()->en_title5,

];