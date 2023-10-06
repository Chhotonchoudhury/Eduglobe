
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
      <title>Dashboard | Edudeve</title> 
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge"> 	  
      <link rel="icon" type="image/x-icon" href="{{ (!empty($cp->logo)) ? asset('uploads/'.$cp->logo):asset('assets/assets/img/favicon.ico')}}"/>
       @include('new_layouts.partials.header') 
       
    </head>

   <body>

    <style>
        .welcomename{background: rgb(233,45,24); background: linear-gradient(180deg, rgba(233,45,24,1) 0%, rgba(246,173,1,1) 32%, rgba(49,116,241,1) 66%, rgba(36,154,65,1) 100%); border:0px;}
        #tograypanelmenu .welcomename{height:27px; width:27px; padding: 2px; border:0px;}
        #tograypanelmenu .welcomename .inside{width:100%; height:100%; border-radius: 100%; text-align:center; background-color:#fff; font-size:15px;}
        
        
        .prifilemenuouter{background-color:#2d2f31; position:fixed; right:10px; top:40px; color:#fff; z-index:999; width:376px;border-radius: 28px; padding:10px; display:none;}
        .prifilemenuouter .inside{ background-color:#1f1f1f; border-radius: 24px;}
        .prifilemenuouter .content{padding:10px;}
        .buddyouter{background: rgb(233,45,24); background: linear-gradient(180deg, rgba(233,45,24,1) 0%, rgba(246,173,1,1) 32%, rgba(49,116,241,1) 66%, rgba(36,154,65,1) 100%); padding:4px; border-radius:100px; width:64px; height:64px; margin-right:5px; position:relative;}
        .buddyouter .buddyimg{background-color:#fff;  width:100%; height:100%;border-radius:100px; font-size:35px; text-align:center; color:#000;}
        .buttonprofile{border: 1px solid #adadad70; padding: 5px 10px; color: #FFFFFF; font-size: 14px; font-weight: 600; margin-top:10px; text-align: left; border-radius: 10px; cursor: pointer; }
        .buttonprofile:hover{ background-color: #cccccc12;}
    </style>

    <!--top gray panel menu-->
    @include('new_layouts.topnavbar') 
    <!--end of the top gray panel menue-->

    <!--sidebnavbar section-->
    @include('new_layouts.sidenavbar') 
    <!--end of the section-->


    <!---main content section --->
     
  <style>
    #chartdiv {
      width: 100%;
      height: 290px;
    }

    #chartdivdestination {
      width: 100%;
      height: 240px;
    }

    .text-muted {
      color: #212529 !important;
      font-weight: 700;
      font-size: 14px;
      text-transform: uppercase;
    }

    .container-fluid {
      max-width: 100%;
      padding-left: 80px;
      padding-right: 22px;
      padding-top: 8px;
    }

    .wrapper {
      margin-top: 56px;
      padding-left: 20px;
    }

    html {
      background-color: #f8fafa !important;
    }

    body {
      background-color: #f8fafa !important;
    }

    .card-body {
      padding: 10px 15px;
    }

    .watherbox {
      background: rgb(140, 190, 244);
      background: linear-gradient(180deg, rgba(140, 190, 244, 1) 0%, rgba(51, 140, 236, 1) 48%);
      color: #FFFFFF;
      padding: 8px;
      text-align: center;
      border-radius: 5px;
      text-shadow: 0px 1px 2px #00000085;
    }

    .table thead th {
      padding: 5px 10px 5px 15px;
    }


    .badge-success {
      padding: 0px;
      font-size: 12px !important;
      min-width: 50px;
      background-color: transparent;
      color: black;
    }

    .badge-blue {
      padding: 0px;
      font-size: 12px !important;
      min-width: 50px;
      background-color: transparent;
      color: black;
    }
  </style>

  <!-- Resources -->
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

  <div class="wrapper">

    <div class="container-fluid" style="padding-left: 70px !important; padding-right: 25px !important; padding-top: 8px !important;">


      <div class="row">
        <div class="col-xl-4">

          <div class="row">
            <!-- <div class="col-xl-6">
              <div class="card">
                <a href="display.html?startDate=23-09-2023&endDate=23-09-2023&keyword=&page=&ga=query&searchcity=&searchusers=&searchsource="
                  style="color:#000;">
                  <div class="card-body">
                    <div class="cardsmheading">Today's Leads </div>
                    <div class="cardnumberbig">0 <i class="fa fa-external-link" aria-hidden="true"
                        style="background-color:#5eaafd33; color:#3892ca;"></i></div>

                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card">
                <a href="display.html?startDate=23-09-2023&endDate=23-09-2023&keyword=&page=&ga=query&searchcity=&searchusers=&searchsource="
                  style="color:#000;">
                  <div class="card-body">
                    <div class="cardsmheading">Today's Leads </div>
                    <div class="cardnumberbig">0 <i class="fa fa-external-link" aria-hidden="true"
                        style="background-color:#5eaafd33; color:#3892ca;"></i></div>

                  </div>
                </a>
              </div>
            </div> -->
         
            <div class="col-xl-12">

              <div class="card"
                style="overflow: hidden; background-image: url( {{ asset('new_assets/images/grnbx.png') }} ); background-repeat: no-repeat; background-position: right top; background-size: auto 100%; position:relative;">
                <div class="card-body" style="padding: 8px;">
                  <h2 class="morningh2" id="wise"></h2>
                  <div style="font-size:14px; font-weight:600;">Edudeve CRM</div>

                  <div
                    style="position: absolute; right: 10px; top: 20px; text-align: center; line-height: 18px; font-size: 12px; color: #fff; font-weight: 700; text-transform: uppercase; width: 32%;">
                    <span style="font-size:18px; font-weight:600;" id="cdate"></span>
                    <div style="text-align:center;" id="CDinfo"></div>
                  </div>
                </div>
              </div>

            </div>
            
            <!-- <div class="col-xl-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6">
                      <div class="bigbtntab"><a href="#" onclick="createquery('');">
                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td colspan="2" align="center" bgcolor="#e0f5f1"><img src="images/icons8-new-copy-80.png"
                                  width="20" /> </td>
                              <td width="75%"> Add Lead </td>
                            </tr>

                          </table>
                        </a></div>
                    </div>
                    <div class="col-xl-6">
                      <div class="bigbtntab"><a href="#" onclick="loadpop2('Add Client',this,'600px')"
                          data-toggle="modal" data-target="#myModal2" data-backdrop="static"
                          popaction="action=addclient">
                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td colspan="2" align="center" bgcolor="#fef1e1"><img
                                  src="images/icons8-circled-user-male-skin-type-7-64.png" width="20" /> </td>
                              <td width="75%"> Add Student </td>
                            </tr>

                          </table>
                        </a>
                      </div>
                    </div>



                    <div class="col-xl-3" style="display:none;">
                      <div class="bigbtntab"><a href="display.html?ga=query">
                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td colspan="2" align="center" bgcolor="#f5e0ee"><img
                                  src="images/icons8-open-envelope-80.png" width="20" /> </td>
                              <td width="75%">Send Email </td>
                            </tr>

                          </table>
                        </a></div>
                    </div>



                  </div>
                </div>
              </div>
            </div>  -->

            <div class="col-xl-6">
              <div class="card" style="border-left: 5px solid #009900 !important;">
                <a href="display.html?startDate=23-09-2023&endDate=23-09-2023&keyword=&page=&ga=query&searchcity=&searchusers=&searchsource="
                  style="color:#000;">
                  <div class="card-body">
                    <div class="cardsmheading">Total Enquiries </div>
                    <div class="cardnumberbig">{{ $stu_total }} <i class="fa fa-external-link" aria-hidden="true"
                        style="background-color:#5eaafd33; color:#3892ca;"></i></div>

                  </div>
                </a>
              </div>
            </div>

            <div class="col-xl-6" >
              <div class="card" style="border-left: 5px solid #CC0000 !important; ">
                <a href="display.html?startDate=01-01-2022&endDate=23-09-2023&keyword=&page=&ga=query&searchcity=&searchusers=&searchsource="
                  style="color:#000;">
                  <div class="card-body">
                    <div class="cardsmheading">Pending Enquiries</div>
                    <div class="cardnumberbig">{{ $total_user_enq }} <i class="fa fa-external-link" aria-hidden="true"
                        style="background-color:#a0a0a033; color:#6e6e6e;"></i></div>

                  </div>
                </a>
              </div>
            </div>

            <div class="col-xl-6">

              <div class="card" style="border-left: 5px solid #87CEEB !important;">
                <a href="display.html?startDate=23-09-2023&endDate=23-09-2023&keyword=&page=&ga=query&searchcity=&searchusers=&searchsource="
                  style="color:#000;">
                  <div class="card-body">
                    <div class="cardsmheading">Total Universities</div>
                    <div class="cardnumberbig">{{ $uni_total }} <i class="fa fa-external-link" aria-hidden="true"
                        style="background-color:#5eaafd33; color:#3892ca;"></i></div>

                  </div>
                </a>
              </div>
            </div>

            <div class="col-xl-6">
              <div class="card" style="border-left: 5px solid #87CEEB !important;">
                <a href="display.html?startDate=01-01-2022&endDate=23-09-2023&keyword=&page=&ga=query&searchcity=&searchusers=&searchsource="
                  style="color:#000;">
                  <div class="card-body">
                    <div class="cardsmheading">Total Courses</div>
                    <div class="cardnumberbig">{{ $cor_total }} <i class="fa fa-external-link" aria-hidden="true"
                        style="background-color:#a0a0a033; color:#6e6e6e;"></i></div>

                  </div>
                </a>
              </div>
            </div>


            <div class="col-xl-6">
              <div class="card" style="border-left: 5px solid #0000CC !important; ">
                <a href="display.html?startDate=01-01-2022&endDate=23-09-2023&keyword=&page=&ga=query&searchcity=&searchusers=&searchsource=&statusid=5"
                  style="color:#000;">
                  <div class="card-body">
                    <div class="cardsmheading">Total Students</div>
                    <div class="cardnumberbig">{{ $stu_total }} <i class="fa fa-external-link" aria-hidden="true"></i></div>

                  </div>
                </a>
              </div>
            </div>

            <div class="col-xl-6">
              <div class="card" style="border-left: 5px solid #009900 !important;">
                <a href="display.html?startDate=01-01-2022&endDate=23-09-2023&keyword=&page=&ga=query&searchcity=&searchusers=&searchsource=&statusid=8"
                  style="color:#000;">
                  <div class="card-body">
                    <div class="cardsmheading">Processing Students</div>
                    <div class="cardnumberbig">{{ $s_total }} <i class="fa fa-external-link" aria-hidden="true"
                        style="background-color:#cc00a917; color:#cc00a9;"></i></div>

                  </div>
                </a>
              </div>
            </div>

            <div class="col-xl-12">
              <div class="card">
                <div class="card-body" style="height: height: 365px;">
                  <p class="text-muted font-weight-medium mt-1 mb-2 dashheader">Enquiries BY STATUS</p>
                  <div id="chartdiv2" style="height:292px;"></div>
                  

                  <script>
                    am4core.ready(function () {

                      // Themes begin
                      am4core.useTheme(am4themes_animated);
                      // Themes end

                      var chart = am4core.create("chartdiv2", am4charts.SlicedChart);
                      chart.hiddenState.properties.opacity = 0; // this makes initial fade in effect

                      chart.data = chart.data = <?php echo json_encode($chartStatus); ?>;

                      var series = chart.series.push(new am4charts.FunnelSeries());
                      series.colors.step = 2;
                      series.dataFields.value = "value";
                      series.dataFields.category = "name";
                      series.alignLabels = false;

                      series.labelsContainer.paddingLeft = 15;
                      series.labelsContainer.width = 200;

                      //series.orientation = "horizontal";
                      //series.bottomRatio = 1;



                    }); // end am4core.ready()

                  </script>
                </div>
              </div>
            </div>


          </div>

        </div>

        <div class="col-xl-8">

          <div class="row" style="margin-left: -5px;">

            <div class="col-xl-6">
              <div class="card" id="showtodayspayment">
                <div class="card-body">
                  <p class="text-muted font-weight-medium mt-1 mb-2 dashheader">Student enquires </p>


                  <div style="height:305px; overflow:auto;">
                    <table class="table table-hover mb-0" style="border:1px solid #ddd;">

                      <thead>
                        <tr>
                          <th>Student</th>
                          <th>Contact</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($enquiryList as $row)
                        <tr style="font-size:12px;">
                          <td align="left" valign="top"><img class="rounded-circle" alt="200x200" width="300" src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''): asset('assets/assets/img/NoProfile.png') }}" data-holder-rendered="true"  style="width:25px;height:25px">&nbsp;&nbsp;{{ $row->name }}</td>
                          <!-- <td align="left" valign="top" >{{ $row->country }}<br />,{{ $row->city }}</td> -->
                          <td align="left" valign="top">
                             {{ $row->email }}<br />
                             {{ $row->phone }}
                          </td>
                          <td align="left" valign="top">
                            <a href=""><i class="fa fa-whatsapp" style="font-size:20px;"></i></a>
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>


                </div>
              </div>
            </div>



            <div class="col-xl-6">
              <div class="card" id="showtodayspayment">
                <div class="card-body">
                  <p class="text-muted font-weight-medium mt-1 mb-2 dashheader">Student Payment Collection </p>


                  <div style="height:305px; overflow:auto;">
                    <table class="table table-hover mb-0" style="border:1px solid #ddd;">

                      <thead>
                        <tr>
                          <th>Lead ID </th>
                          <th>Amount</th>
                          <th>Time</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($stupaylist as $row)

                        <tr style="font-size:12px;">
                          <td align="left" valign="top"><a href="display.html?ga=query&view=1&id=100006" target="_blank"
                              style="color: #2b99e7 !important;">#{{ $row->txn_id }}</a><br />{{ $row->student->name }}</td>
                          <td align="left" valign="top" style="    font-size: 14px;">&#8377;{{ $row->amount }}</td>
                          <td align="left" valign="top">
                            <span class="badge badge-success">{{ $row->created_at->format('d F Y h:i A') }}</span>
                          </td>
                        </tr>

                       @endforeach

                      </tbody>
                    </table>
                  </div>


                </div>
              </div>
            </div>







            <div class="col-xl-12">
              <div class="card">
                <div class="card-body" style="height: height: 375px;;">
                  <p class="text-muted font-weight-medium mt-1 mb-2 dashheader">This Year Enquiries </p>

                  <script>
                    am4core.ready(function () {

                      // Themes begin
                      am4core.useTheme(am4themes_animated);
                      // Themes end

                      // Create chart instance
                      var chart = am4core.create("chartdiv", am4charts.XYChart3D);

                      // Add data
                      chart.data = <?php echo json_encode($stuChartData); ?>;

                      // Create axes
                      let categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                      categoryAxis.dataFields.category = "country";
                      categoryAxis.renderer.labels.template.rotation = 270;
                      categoryAxis.renderer.labels.template.hideOversized = false;
                      categoryAxis.renderer.minGridDistance = 20;
                      categoryAxis.renderer.labels.template.horizontalCenter = "right";
                      categoryAxis.renderer.labels.template.verticalCenter = "middle";
                      categoryAxis.tooltip.label.rotation = 270;
                      categoryAxis.tooltip.label.horizontalCenter = "right";
                      categoryAxis.tooltip.label.verticalCenter = "middle";

                      let valueAxis = chart.yAxes.push(new am4charts.ValueAxis());


                      // Create series
                      var series = chart.series.push(new am4charts.ColumnSeries3D());
                      series.dataFields.valueY = "visits";
                      series.dataFields.categoryX = "country";
                      series.name = "Visits";
                      series.tooltipText = "{categoryX}: [bold]{valueY}[/]";
                      series.columns.template.fillOpacity = .8;

                      var columnTemplate = series.columns.template;
                      columnTemplate.strokeWidth = 2;
                      columnTemplate.strokeOpacity = 1;
                      columnTemplate.stroke = am4core.color("#FFFFFF");

                      columnTemplate.adapter.add("fill", function (fill, target) {
                        return chart.colors.getIndex(target.dataItem.index);
                      })

                      columnTemplate.adapter.add("stroke", function (stroke, target) {
                        return chart.colors.getIndex(target.dataItem.index);
                      })

                      chart.cursor = new am4charts.XYCursor();
                      chart.cursor.lineX.strokeOpacity = 0;
                      chart.cursor.lineY.strokeOpacity = 0;

                    }); // end am4core.ready()
                  </script>

                  <!-- HTML -->
                  <div id="chartdiv"></div>
                </div>
              </div>
            </div>

          </div>

        </div>


      </div>









      <!-- <div class="row">


        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">
              <p class="text-muted font-weight-medium mt-1 mb-2 dashheader">SALES REPS</p>
              <div style="height:320px; overflow:auto;">
                <table width="100%" border="0" cellpadding="0" cellspacing="0" style=" font-size:12px;">
                  <tr>
                    <td align="left" style="padding:5px; border-bottom:1px solid #ddd;"><strong>Name</strong></td>
                    <td align="center" bgcolor="#F3F3F3" style="padding:5px;  border-bottom:1px solid #ddd;">
                      <strong>Assigned</strong>
                    </td>
                    <td align="center" bgcolor="#E8FFF1" style="padding:5px;  border-bottom:1px solid #ddd;">
                      <strong>Confirmed </strong>
                    </td>
                  </tr>

                  <tr>
                    <td width="72%" align="left" style="padding:5px; border-bottom:1px solid #ddd;">1. Education CRM
                    </td>
                    <td width="28%" align="center" bgcolor="#F3F3F3"
                      style="padding:5px;  border-bottom:1px solid #ddd;">8</td>
                    <td width="28%" align="center" bgcolor="#E8FFF1"
                      style="padding:5px;  border-bottom:1px solid #ddd;">1</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">
              <p class="text-muted font-weight-medium mt-1 mb-2 dashheader">TOP LEAD SOURCES</p>
              <div style="height:320px; overflow:auto;">
                <table width="100%" border="0" cellpadding="0" cellspacing="0" style=" font-size:12px;">
                  <tr>
                    <td align="left" style="padding:5px; border-bottom:1px solid #ddd;"><strong>Name</strong></td>
                    <td align="center" bgcolor="#F3F3F3" style="padding:5px;  border-bottom:1px solid #ddd;">
                      <strong>Total Leads </strong>
                    </td>
                    <td align="center" bgcolor="#E8FFF1" style="padding:5px;  border-bottom:1px solid #ddd;">
                      <strong>Confirmed </strong>
                    </td>
                  </tr>

                  <tr>
                    <td width="72%" align="left" style="padding:5px; border-bottom:1px solid #ddd;">1. Advertisment</td>
                    <td width="28%" align="center" bgcolor="#F3F3F3"
                      style="padding:5px;  border-bottom:1px solid #ddd;">8</td>
                    <td width="28%" align="center" bgcolor="#E8FFF1"
                      style="padding:5px;  border-bottom:1px solid #ddd;">1</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>



        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">
              <p class="text-muted font-weight-medium mt-1 mb-2 dashheader">Finance Report </p>

              <div style="padding: 5px; background-color: #d2f1ff; border-radius: 5px; margin-bottom: 4px;">
                <table width="100%" border="0" cellpadding="5" cellspacing="0" bordercolor="#CCCCCC">
                  <tr>
                    <td><strong>This Month Sales</strong></td>
                    <td width="40%" align="right" style="font-weight:800;">

                      &#8377;0 </td>
                  </tr>
                </table>
              </div>


              <div style="padding: 5px; background-color: #D2FFED; border-radius: 5px; margin-bottom: 4px;">
                <table width="100%" border="0" cellpadding="5" cellspacing="0" bordercolor="#CCCCCC">
                  <tr>
                    <td><strong>This&nbsp;Month&nbsp;Collections</strong></td>
                    <td width="40%" align="right" style="font-weight:800;">

                      &#8377;0
                    </td>
                  </tr>
                </table>
              </div>


              <div style="padding: 5px; background-color:#FFE1E1; border-radius: 5px; margin-bottom: 4px;">
                <table width="100%" border="0" cellpadding="5" cellspacing="0" bordercolor="#CCCCCC">
                  <tr>
                    <td><strong>Total&nbsp;Pending&nbsp;Collection</strong></td>
                    <td width="40%" align="right" style="font-weight:800;">


                      &#8377;-10,000
                    </td>
                  </tr>
                </table>
              </div>


              <div style="padding: 5px; background-color:#FFEEB3; border-radius: 5px; margin-bottom: 4px;">
                <table width="100%" border="0" cellpadding="5" cellspacing="0" bordercolor="#CCCCCC">
                  <tr>
                    <td><strong>Total&nbsp;Supplier&nbsp;Pending </strong></td>
                    <td width="40%" align="right" style="font-weight:800;">

                      &#8377;0

                    </td>
                  </tr>
                </table>
              </div>


              <div style="padding: 5px; background-color:#eee1ff; border-radius: 5px; margin-bottom: 4px;">
                <table width="100%" border="0" cellpadding="5" cellspacing="0" bordercolor="#CCCCCC">
                  <tr>
                    <td><strong>This&nbsp;Month&nbsp;Expense</strong></td>
                    <td width="40%" align="right" style="font-weight:800;">


                      0
                    </td>
                  </tr>
                </table>
              </div>

              <table width="100%" border="0" cellpadding="0" cellspacing="0"
                style="    margin-bottom: 5px; margin-top:5px;">
                <tr>
                  <td colspan="2" style="padding-right:3px;">
                    <div
                      style="padding: 15px 0px; text-align: center; border: 1px solid #ddd; border-radius: 5px; margin-top: 8px; background-color: #f9f9f9;">
                      <div style="font-size:20px; font-weight:700;">&#8377;0</div>
                      <div style="font-size:12px; font-weight:600;">2023 Sales</div>
                    </div>
                  </td>
                  <td width="50%" style="padding-left:3px;">
                    <div
                      style="padding: 15px 0px; text-align: center; border: 1px solid #ddd; border-radius: 5px; margin-top: 8px; background-color: #f9f9f9;">
                      <div style="font-size:20px; font-weight:700;">&#8377;10,000</div>
                      <div style="font-size:12px; font-weight:600;">2023 Collections</div>
                    </div>
                  </td>
                </tr>
              </table>




            </div>
          </div>
        </div>


      </div> -->
      <!-- end container-fluid -->
    </div>
    <div
      style="position:fixed; width:100%; height:100%; top:0; left:0; z-index:999; background-color:#00000094; display:none;"
      id="blackdiv"></div>

    <script>
      function closepayementbox() {
        /*$('#blackdiv').hide();
        $('#closepayment').hide();
        $('#showtodayspayment').removeClass('todayspayment');*/
      }
      function openpayementbox() {/*
											$('#blackdiv').show();
											$('#closepayment').show();
											$('#showtodayspayment').addClass('todayspayment');
										*/}
      openpayementbox();
    </script>
    <script>
      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $('.container-fluid').removeAttr('style');
      }
    </script>



    <div id="reminderouterrightbottom">
      <div style="padding:20px;">

        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2"><img src="images/remonder-bell_192.gif" style="width:70px;" /></td>
            <td width="90%" id="loadremindertask" style="padding-left:10px;">&nbsp;</td>
          </tr>
        </table>

      </div>
    </div>








    <script>
      var intervalId = window.setInterval(function () {
        showcurrentworkinghours();

      }, 60000);

      showcurrentworkinghours();
    </script>
    <!--- end fot the main contetn section --->

      <div style="height:50px;"></div>
      <iframe id="actoinfrm" name="actoinfrm" src="" style="display:none;"></iframe>
      @include('new_layouts.partials.footer') 

      <script>
        // Get the current date
        const currentDate = new Date();

        // Get the day of the week (e.g., "Sat")
        const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
        const dayOfWeek = daysOfWeek[currentDate.getDay()];

        // Get the month name (e.g., "September")
        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        const monthName = months[currentDate.getMonth()];

        // Get the year (e.g., "2023")
        const year = currentDate.getFullYear().toString().slice(-2);

        // Get the time of day (morning, noon, evening, or night)
        const hours = currentDate.getHours();
        let timeOfDay = "";

        if (hours >= 5 && hours < 12) {
            timeOfDay = "Good Morning";
        } else if (hours >= 12 && hours < 18) {
            timeOfDay = "Good Afternoon";
        } else {
            timeOfDay = "Good Evening";
        }

        // Update HTML elements with the generated information
        document.querySelector('#wise').textContent = timeOfDay;
        document.querySelector('#cdate').textContent = currentDate.getDate();
        document.querySelector('#CDinfo').textContent = `${dayOfWeek}, ${monthName} , ${year}`;
      </script>

      
    </div>                   
    
   </body>
   
</html>