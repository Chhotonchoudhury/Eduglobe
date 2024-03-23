<!-- new dahboars-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('assets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>

<script src="{{ asset('new_assets/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('new_assets/assets/js/modernizr.min.js')}}"></script>
<script src="{{ asset('new_assets/assets/js/waves.js')}}"></script>
<script src="{{ asset('new_assets/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('new_assets/plugins/peity-chart/jquery.peity.min.js')}}"></script>
<script src="{{ asset('new_assets/plugins/circlechart/progresscircle.js')}}"></script>

<!--Morris Chart-->
<script src="{{ asset('new_assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{ asset('new_assets/assets/pages/dashboard.js')}}"></script>
<!-- App js -->
<script src="{{ asset('new_assets/assets/js/app.js')}}"></script>
<!--end of the section-->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
--}}

<script>
  function createqueryfromclient(id) {
        $('#loadqueryadd').html('Loading...');
        $('.rnblkquery').show();
        $('body').css('overflow', 'hidden');
        $('html').css('overflow', 'hidden');
        $('#loadqueryadd').load('add_query.php?cid=' + id);
        if (id == '') {
          $('.rnblkquery .card-title').html('Create Lead');
        } else {
          $('.rnblkquery .card-title').html('Edit Lead');
        }
      }

      function createquery(id) {
        $('#loadqueryadd').html('Loading...');
        $('.rnblkquery').show();
        $('body').css('overflow', 'hidden');
        $('html').css('overflow', 'hidden');
        $('#loadqueryadd').load('add_query.php?id=' + id);
        if (id == '') {
          $('.rnblkquery .card-title').html('Create Lead');
        } else {
          $('.rnblkquery .card-title').html('Edit Lead');
        }
      }

      function createqueryclose() {
        $('.rnblkquery').hide();
        $('body').css('overflow', 'visible');
        $('html').css('overflow', 'visible');
        $('#loadqueryadd').html('Loading...');
      }
</script>
<style>
  .footerstripboxouter {
    box-shadow: 0 0 6px rgb(0 0 0 / 20%);
    background-color: #FFFFFF;
    position: fixed;
    left: 0px;
    bottom: 0px;
    width: 100%;
    min-height: 28px;
    z-index: 99999;
  }

  .footerstripboxouter .leftar {
    float: left;
  }

  .footerstripboxouter .righar {
    float: right;
  }

  .activefootertab {
    color: #CC3300 !important;
    background-color: #F9F9F9;
  }

  .footerstripboxouter .righar a {
    display: block;
    float: right;
    border-left: 1px solid #ddd;
    color: #000;
    padding: 4px 10px;
    font-size: 11px;
    line-height: 20px;
  }

  .footerstripboxouter .righar a span {
    font-weight: 600;
    text-transform: uppercase;
    line-height: 14px;
  }

  .footerstripboxouter .righar a:hover {
    background-color: #F9F9F9;
  }

  .footerpopboxs {
    position: fixed;
    right: 0px;
    bottom: 0px;
    width: 374px;
    background-color: #fff;
    box-shadow: 0 0 6px rgb(0 0 0 / 20%);
    min-height: 488px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    overflow: hidden;
    z-index: 9999;
  }

  .footerpopboxsheader {
    height: 40px;
    border-bottom: 1px solid #e3e8ee;
    align-items: center;
    display: flex;
    padding: 0 12px;
    cursor: default;
    position: relative;
    font-weight: 700;
    width: 100%;
  }

  .footerpopboxsheader .fa-times {
    position: absolute;
    right: 12px;
    font-size: 16px;
    color: #8a8a8a;
    cursor: pointer;
  }

  .footerpopboxs .popcontentbodybox {
    height: 418px;
    overflow: auto;
  }

  .footerpopboxs .popcontentbodybox .loadingboxin {
    padding: 20px;
    text-align: center;
    color: #999999;
    font-size: 13px;
  }

  .footerpopboxs .usernotesouter {
    padding: 10px;
  }

  .footerpopboxs .usernotesouter .usernotes {
    padding: 15px;
    background-color: #FFED7D;
    color: #000000;
    font-size: 14px;
    line-height: 24px;
    border-radius: 2px;
    box-shadow: 1px 2px 2px #00000029;
    margin-bottom: 10px;
    padding-bottom: 0px;
  }

  .footerpopboxs .usernotesouter .usernotes .noteareawrite {
    background-color: transparent;
    border: 0px;
    outline: 0px;
    min-height: 50px;
    overflow: hidden;
    padding: 0px;
    color: #000000;
    font-size: 14px;
    width: 100%;
  }

  .footerpopboxs .usernotesouter .usernotes .toolbarfoo {
    border-top: 1px solid #fff;
    overflow: hidden;
    padding-bottom: 10px;
  }

  .footerpopboxs .usernotesouter .usernotes .toolbarfoo a {
    padding: 5px 10px 0px;
    color: #000000 !important;
    font-size: 14px;
    cursor: pointer;
    display: block;
    float: left;
  }

  .addnotebookouter {
    overflow: hidden;
  }

  .addnotebookouter .notebookadd {
    display: block;
    color: #000000 !important;
    float: right;
    font-size: 22px;
    padding: 0px 12px;
    position: absolute;
    top: 3px;
    right: 30px;
    cursor: pointer;
  }

  .footerstripboxouter .leftar a {
    display: block;
    float: left;
    border-left: 1px solid #ddd;
    color: #000;
    padding: 4px 10px;
    font-size: 11px;
    line-height: 20px;
  }

  .footerstripboxouter .leftar a span {
    font-weight: 600;
    text-transform: uppercase;
    line-height: 14px;
  }
</style>
<div style="height:30px;"></div>
<div class="footerstripboxouter">
  <div class="leftar"><a style="cursor:pointer;" title="Online Users"
      onclick="openfooterpop2('onlineusers','Online Users',this,'online_user','300px','400px','10px','531px');"><i
        class="fa fa-user" aria-hidden="true"></i> &nbsp;<span>Online Users</span></a></div>
  <div class="righar"><a style="cursor:pointer;"
      onclick="openfooterpop('footernotebook','Notebook',this,'user_notebook','374px','488px','0px','531px');"
      title="Notebook"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> &nbsp;<span>Notebook</span></a>

    <a style="cursor:pointer;"
      onclick="openfooterpop('footernotebook','Updates',this,'user_news_updates','500px','600px','96px','531px');"
      title="Notebook"><i class="fa fa-bullhorn" aria-hidden="true"></i> &nbsp;<span>Updates</span></a>

    <a style="cursor:pointer;" href="display.html?ga=&nighttheme=2" title="Night Theme"><i class="fa fa-moon-o"
        aria-hidden="true"></i> &nbsp;<span>Night Theme Off</span></a>
  </div>
</div>

<div class="footerpopboxs" id="footernotebook" style="display:none;">
  <div class="footerpopboxsheader"><span></span> <i class="fa fa-times" aria-hidden="true"
      onclick="clasefooterpop();"></i></div>
  <div class="popcontentbodybox"></div>
</div>

<div class="footerpopboxs" id="onlineusers" style="display:none;">
  <div class="footerpopboxsheader"><span></span> <i class="fa fa-times" aria-hidden="true"
      onclick="clasefooterpop();"></i></div>
  <div class="popcontentbodybox2"></div>
</div>

<script>
  function openfooterpop(id, name, obj, openfile, width, height, right, bodybox) {
        $('.footerstripboxouter a').removeClass('activefootertab');
        $('#' + id).show();
        $('#' + id).css('width', width);
        $('#' + id).css('min-height', height);
        $('.popcontentbodybox').css('height', bodybox);
        $('#' + id).css('right', right);

        $(obj).addClass('activefootertab');
        $('#' + id + ' .footerpopboxsheader span').html(name);
        $('.popcontentbodybox').html('<div class="loadingboxin">Wait Please...</div>');
        $('.popcontentbodybox').load(openfile + '.php');
      }

      function clasefooterpop() {
        $('.footerpopboxs').hide();
        $('.footerstripboxouter a').removeClass('activefootertab');
      }



      function openfooterpop2(id, name, obj, openfile, width, height, right, bodybox) {
        $('.footerstripboxouter a').removeClass('activefootertab');
        $('#footernotebook').hide();
        $('#' + id).show();
        $('#' + id).css('width', width);
        $('#' + id).css('min-height', height);
        $('.popcontentbodybox').css('height', bodybox);
        $('#' + id).css('left', right);

        $(obj).addClass('activefootertab');
        $('#' + id + ' .footerpopboxsheader span').html(name);
        $('.popcontentbodybox2').html('<div class="loadingboxin">Wait Please...</div>');
        $('.popcontentbodybox2').load(openfile + '.php');
      }
</script>