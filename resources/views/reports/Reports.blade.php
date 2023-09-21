@extends('layouts.base')
@section('content')
<style>
    #title,#student_card,#course_card,#degree_card,#payment_card,#commission_card,#student_payment_card {
  display: none;
}

</style>
         <div class="layout-px-spacing ">
             <div class="row layout-top-spacing m-0 p-0">

             @if(Auth::user()->can('reports-view'))                           
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                     
                        
                        <div class="widget top-welcome">
                            <div class="f-100">
                                <div class="row">
                                    <div class="col-lg-4">
                                               <select class="form-control basic" name="uni" id="uni">
                                                        <option value="">Select University</option>
                                                        @foreach($universites as $row)
                                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                        @endforeach
                                                </select>
                                    </div>
                                    <div class="align-self-center col-lg-6 row">
                                        <div class="col-lg-6">
                                          <input type="date" id="s_date" name="start_date" required="" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                          <input type="date" id="e_date" name="end_date" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-none d-lg-flex col-lg-2 align-items-end justify-content-center flex-column">
                                        <button class="btn btn-info" type="button" id="search">
                                           Search <i class="las la-search"></i>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                 </div>

                    <input  type="hidden" id="input_id" value="@if(!empty($id)) {{ $id }} @endif">
                    <input  type="hidden" id="input_s_date" value="@if(!empty($s_date)) {{ $s_date }} @endif">
                    <input  type="hidden" id="input_e_date" value="@if(!empty($e_date)) {{ $e_date }} @endif">
                

                    <div id="title" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        
                        <div class="widget top-welcome">
                            <div class="f-100">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="media">
                                            <div id="logo" class="mr-1" >
                                                
                                            </div>
                                            <div class="align-self-center media-body">
                                                <div class="text-muted">
                                                    <h4 class="mb-1" id="u_name">Sara</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-self-center col-lg-5">
                                        <div class="text-lg-center mt-4 mt-lg-0">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Students</p>
                                                        <h5 class="mb-0" id="stu" class="s-counter1 s-counter">482323232</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Payment</p>
                                                        <h5 class="mb-0" id="pay" class="s-counter2 s-counter">40</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Commission</p>
                                                        <h5 class="mb-0" id="com" class="s-counter3 s-counter">18</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Studnet Payment</p>
                                                        <h5 class="mb-0" id="s_pay" class="s-counter4 s-counter">98</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-lg-flex col-lg-3 align-items-end justify-content-center flex-column">
                                        <div id="form" class="btn btn-primary">
                                           
                                        </div>
                                        <div id="to" class="btn btn-info mt-2">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                
                    <div id="student_card" onclick="student()"  class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-primary rounded-circle">
                                    <i class="las la-users"></i>
                                </span>
                                <!-- <div class="ml-auto">
                                    <div class="quick-comparison qcompare-success">
                                        <span>20%</span>
                                        <i class="las la-arrow-up"></i>
                                    </div>
                                </div> -->
                            </div>
                            <div class="quick-category-content">
                                <h3 id="student_num" class="s-counter2 s-counter"></h3>
                                <p class="font-17 text-primary mb-0">Total Student</p>
                            </div>
                        </a>
                    </div>
                    <div id="course_card" onclick="course()" class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-warning rounded-circle">
                                    <i class="las la-graduation-cap"></i>
                                </span>
                                <!-- <div class="ml-auto">
                                    <div class="quick-comparison qcompare-danger">
                                        <span>10%</span>
                                        <i class="las la-arrow-down"></i>
                                    </div>
                                </div> -->
                            </div>
                            <div class="quick-category-content">
                                <h3 id="course_num" class="s-counter3 s-counter"></h3>
                                <p class="font-17 text-warning mb-0">Total Courses</p>
                            </div>
                        </a>
                    </div>
         
                    <div id="degree_card" onclick="degree()" class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-success-teal rounded-circle">
                                    <i class="las la-book-reader"></i>
                                </span>
                                <!-- <div class="ml-auto">
                                    <div class="quick-comparison qcompare-danger">
                                        <span>50%</span>
                                        <i class="las la-arrow-down"></i>
                                    </div>
                                </div> -->
                            </div>
                            <div class="quick-category-content">
                                <h3 id="degree_num" class="s-counter4 s-counter"></h3>
                                <p class="font-17 text-success-teal mb-0">Total Degreis</p>
                            </div>
                        </a>
                    </div>


                    <div id="commission_card" onclick="commission()" class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                       <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-primary rounded-circle">
                                  <i class="las la-money-bill-wave"></i>
                                </span>
                                <!-- <div class="ml-auto">
                                    <div class="quick-comparison qcompare-success">
                                        <span>20%</span>
                                        <i class="las la-arrow-up"></i>
                                    </div>
                                </div> -->
                            </div>
                            <div class="quick-category-content">
                                <h3 id="commission_num" class="s-counter5 s-counter">2</h3>
                                <p class="font-17 text-primary mb-0">Commission Total</p>
                            </div>
                        </a>
                    </div>
                    <div id="payment_card"  onclick="payment()"  class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-warning rounded-circle">
                                <i class="las la-file-invoice-dollar"></i>
                                </span>
                                <!-- <div class="ml-auto">
                                    <div class="quick-comparison qcompare-danger">
                                        <span>10%</span>
                                        <i class="las la-arrow-down"></i>
                                    </div>
                                </div> -->
                            </div>
                            <div class="quick-category-content">
                                <h3 id="payment_num" class="s-counter6 s-counter"></h3>
                                <p class="font-17 text-warning mb-0">Total Payments</p>
                            </div>
                        </a>
                    </div>
         
                    <div id="student_payment_card" onclick="stuPayment()" class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-success-teal rounded-circle">
                                  <i class="las la-hand-holding-usd"></i>
                                </span>
                                <!-- <div class="ml-auto">
                                    <div class="quick-comparison qcompare-danger">
                                        <span>50%</span>
                                        <i class="las la-arrow-down"></i>
                                    </div>
                                </div> -->
                            </div>
                            <div class="quick-category-content">
                                <h3 id="student_payment_num" class="s-counter7 s-counter"></h3>
                                <p class="font-17 text-success-teal mb-0">Total Student Payment</p>
                            </div>
                        </a>
                    </div>
                 
                @else
                <span class="badge badge-danger font-25">&#129488; &nbsp;&nbsp;You can't access this section, Need admin confirmation .....</span>
                @endif
               
                   
                </div>
            </div>

@endsection

@section('script')
<script>
        // $( document ).ready(function() {
        //     $('#title').hide();
        //     $('#student_card').hide();
        //     $('#course_card').hide();
        //     $('#degree_card').hide();

        //     $('#payment_card').hide();
        //     $('#commission_card').hide();
        //     $('#student_payment_card').hide();
        //   });
        
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $(document).on('click','#search', function(e){
            let uni = $('#uni').val();
            let s_date = $('#s_date').val();
            let e_date = $('#e_date').val();

            
            search(uni,s_date,e_date);
        });


        //this is the data search function 
        function search(uni,s_date,e_date){ 
            //console.log('something');
            $.ajax({
                    type: "POST",
                    url: "{{ route('search_res') }}",
                    data:{id:uni,s_date:s_date,e_date:e_date},
                    success: function (response) {

                        //This is all the top tile line section
                        $('#title').show();
                        
                        $('#logo').html('<img src="http://edudeve.com/public/uploads/' + response.university.logo + '" alt="" class="avatar-md rounded-circle img-thumbnail">');
                        $('#u_name').html(''+response.university.name+' ('+response.university.Unumber+')');
                        $('#stu').html(''+response.student_total);
                        $('#pay').html(''+response.payment_total);
                        $('#com').html(''+response.commission_total);
                        $('#s_pay').html(''+response.studentPayment_total);
                        //End of the section

                        //This is the another section called iteams sections
                        $('#student_card').show();
                        $('#student_num').html(''+response.student_total);
                        //End of the iteams section

                          //This is the another section called iteams sections
                        $('#course_card').show();
                        $('#course_num').html(''+response.course_total);
                        //End of the iteams section

                          //This is the another section called iteams sections
                        $('#degree_card').show();
                        $('#degree_num').html(''+response.degree_total);
                        //End of the iteams section


                        //This is the another section called iteams sections
                        $('#payment_card').show();
                        $('#payment_num').html(''+response.payment_total);
                        //End of the iteams section

                          //This is the another section called iteams sections
                        $('#commission_card').show();
                        $('#commission_num').html(''+response.commission_total);
                        //End of the iteams section

                          //This is the another section called iteams sections
                        $('#student_payment_card').show();
                        $('#student_payment_num').html(''+response.studentPayment_total);
                        //End of the iteams section
                        $('#form').html('Form : '+response.data.s_date);
                        $('#to').html('To : '+response.data.e_date);

                        //$('#input_id').val(''+response.data.id);
                       

                    }
                });
            }

    $(document).ready(function() {
            let id =  $('#input_id').val();
            let s_date = $('#input_s_date').val();
            let e_date = $('#input_e_date').val();

            if(id){
                search(id,s_date,e_date);
             }
        });
        

    function student(){
        let uni = document.getElementById("uni").value; 
        let s_date = document.getElementById("s_date").value; 
        let e_date = document.getElementById("e_date").value;

        let id = document.getElementById("input_id").value;  
        let ss_date = document.getElementById("input_s_date").value;  
        let ee_date = document.getElementById("input_e_date").value;  

        if(uni == ''){
            window.location = "http://edudeve.com/report-student/"+id+"/"+ss_date+"/"+ee_date+"";
        }else{
            window.location = "http://edudeve.com/report-student/"+uni+"/"+s_date+"/"+e_date+"";
        } 
        
    }

    function course(){
        let uni = document.getElementById("uni").value; 
        let s_date = document.getElementById("s_date").value; 
        let e_date = document.getElementById("e_date").value;

        let id = document.getElementById("input_id").value;  
        let ss_date = document.getElementById("input_s_date").value;  
        let ee_date = document.getElementById("input_e_date").value;  

        if(uni == ''){
            window.location = "http://edudeve.com/report-course/"+id+"/"+ss_date+"/"+ee_date+"";
        }else{
            window.location = "http://edudeve.com/report-course/"+uni+"/"+s_date+"/"+e_date+"";
        } 
        
    }

    function degree(){
        let uni = document.getElementById("uni").value; 
        let s_date = document.getElementById("s_date").value; 
        let e_date = document.getElementById("e_date").value;

        let id = document.getElementById("input_id").value;  
        let ss_date = document.getElementById("input_s_date").value;  
        let ee_date = document.getElementById("input_e_date").value;  

        if(uni == ''){
            window.location = "http://edudeve.com/report-degree/"+id+"/"+ss_date+"/"+ee_date+"";
        }else{
            window.location = "http://edudeve.com/report-degree/"+uni+"/"+s_date+"/"+e_date+"";
        } 
        
    }


    function commission(){
        let uni = document.getElementById("uni").value; 
        let s_date = document.getElementById("s_date").value; 
        let e_date = document.getElementById("e_date").value;

        let id = document.getElementById("input_id").value;  
        let ss_date = document.getElementById("input_s_date").value;  
        let ee_date = document.getElementById("input_e_date").value;  

        if(uni == ''){
            window.location = "http://edudeve.com/report-commission/"+id+"/"+ss_date+"/"+ee_date+"";
        }else{
            window.location = "http://edudeve.com/report-commission/"+uni+"/"+s_date+"/"+e_date+"";
        } 
    }

    function payment(){
        let uni = document.getElementById("uni").value; 
        let s_date = document.getElementById("s_date").value; 
        let e_date = document.getElementById("e_date").value;

        let id = document.getElementById("input_id").value;  
        let ss_date = document.getElementById("input_s_date").value;  
        let ee_date = document.getElementById("input_e_date").value;  

        if(uni == ''){
            window.location = "http://edudeve.com/report-payment/"+id+"/"+ss_date+"/"+ee_date+"";
        }else{
            window.location = "http://edudeve.com/report-payment/"+uni+"/"+s_date+"/"+e_date+"";
        } 
    }

    function stuPayment(){
        let uni = document.getElementById("uni").value; 
        let s_date = document.getElementById("s_date").value; 
        let e_date = document.getElementById("e_date").value;

        let id = document.getElementById("input_id").value;  
        let ss_date = document.getElementById("input_s_date").value;  
        let ee_date = document.getElementById("input_e_date").value;  

        if(uni == ''){
            window.location = "http://edudeve.com/report-student-payment/"+id+"/"+ss_date+"/"+ee_date+"";
        }else{
            window.location = "http://edudeve.com/report-student-payment/"+uni+"/"+s_date+"/"+e_date+"";
        } 
    }



</script>
@endsection