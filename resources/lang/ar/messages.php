<?php
  use App\Models\Web_header;
  use App\Models\Web_about;
  use App\Models\Web_work;

  use App\Models\Web_navbar;
  use App\Models\Web_title;

return [

    //navbars 
    'nav_home' => Web_navbar::first()->ar_link1,
    'nav_course' => Web_navbar::first()->ar_link2,
    'nav_university' => Web_navbar::first()->ar_link3,
    'nav_about' => Web_navbar::first()->ar_link4,
    'nav_lang' => Web_navbar::first()->ar_link5,
    'nav_contact' => Web_navbar::first()->ar_link6,
    //end of he navars

      //basic title 
   'title_sing' => Web_title::first()->ar_title1,
   'title_b_course' => Web_title::first()->ar_title2,
   'title_v_course' => Web_title::first()->ar_title3,
   'title_register' => Web_title::first()->ar_title4,
   'title_w_video' => Web_title::first()->ar_title5,
   'title_category' => Web_title::first()->ar_title6,
   'title_student' => Web_title::first()->ar_title7,
   'title_company' => Web_title::first()->ar_title8,
   'title_subscribe' => Web_title::first()->ar_title9,
   'title_course' => Web_title::first()->ar_title10,
   'title_registration' => Web_title::first()->ar_title11,
   'title_adminp' => Web_title::first()->ar_title12,
   'title_explore_category' => Web_title::first()->ar_title14,
   'title_updated_course' => Web_title::first()->ar_title15,
   'title_popular_course' => Web_title::first()->ar_title16,
   'title_how_it_work' => Web_title::first()->ar_title17,
   'title_subscribe_course' => Web_title::first()->ar_title18,
   //end of the basic titles

      //search boxes
      'search_box1' => ' دورات البحث في اللغة الإنجليزية ... ',
      'search_box2' => ' ماذا تريد أن تتعلم؟ ',
      'search_box3' => 'بحث في أي دورات ..', 
     //search boxes
    
    // need help
     'foot_need_help' => 'تحتاج مساعدة',
     'link_imp' => 'روابط مهمة',
     //extra in the course search 
     'c_search_des' => 'ابحث عن أفضل دورة تناسب نموك',
    //etra university details seacrch
     'university_des' => 'اكتشف أفضل جامعة أحلامك',

    //this is header hero section first/second title
    'hero_title1' => Web_header::first()->ar_f_title,
    'hero_title2' => Web_header::first()->ar_l_title,

    //about us section
    'about_title1' => Web_about::first()->ar_title,
    'about_title2' => Web_about::first()->ar_about,

    //How it works
    'work_title' => Web_work::first()->ar_description,
    'work_title1' => Web_work::first()->ar_title1,
    'work_title2' => Web_work::first()->ar_title2,
    'work_title3' => Web_work::first()->ar_title3,
    'work_title4' => Web_work::first()->ar_title4,
    'work_title5' => Web_work::first()->ar_title5,
    

];