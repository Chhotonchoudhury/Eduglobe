<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
  <title>educatoinBizz</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/x-icon"
    href="{{ (!empty($cp->logo)) ? asset('uploads/'.$cp->logo):asset('assets/assets/img/favicon.ico')}}" />
  @include('new_layouts.partials.header')


  <style>
    .header-bg {
      background-color: #2d72d9;
    }

    #topnav .navigation-menu>li .submenu li a:hover {
      color: #2d72d9;
    }

    .headerslideright .userinformationbox {
      background-image: url(images/gray-abstract-bg.png);
      background-repeat: repeat;
      padding: 15px;
      position: relative;
      border-top: 5px solid #2d72d9;
    }

    #tograypanelmenu .rightmenu a:hover {
      color: #2d72d9;
    }


    #topnav .navigation-menu>li>a {
      padding-top: 10px !important;
      padding-bottom: 10px !important;

    }

    .topmainlogomain {
      display: block;
    }

    .topmainlogomainmobile {
      display: none;
    }

    #navigation {
      display: block;
    }

    .hideinmobile {
      display: block;
    }

    .showinmobile {
      display: none;
    }

    .inquerytabsmain {
      width: 100%;
      background-color: #f5f7f9;
      padding: 13px;
      height: 100%;
      margin-bottom: 0px;
      position: relative;
      float: none;
      border-bottom: 0px;
      min-width: 250px;
    }

    .sectabnew {
      margin-bottom: 20px;
      float: left;
      width: 100%;
      border-top: 1px solid #dee2e6;
      border-bottom: 2px solid #dee2e6;
      background-color: #f3f3f3;
      padding: 8px;
    }

    .float-right button {
      float: left;
      margin-left: 5px;
      margin-bottom: 0px;
      margin-top: -8px;
      margin-bottom: 3px;
    }

    .float-right a {
      float: left;
      margin-left: 5px;
    }

    .searchquerymain {
      display: none;
    }


    .nav-tabs-custom .nav-item .nav-link {
      border: none !important;
      font-weight: 600;
      text-align: left;
      padding: 12px !important;
      font-weight: 400;
    }

    @media only screen and (max-width: 900px) {
      #topnav .navigation-menu>li .submenu {
        position: absolute;
        top: -220%;
        left: 80px;
        z-index: 1000;
        padding: 4px 0;
        list-style: none;
        min-width: 200px;
        text-align: left;
        visibility: hidden;
        opacity: 0;
        margin-top: 20px;
        -webkit-transition: all .2s ease;
        transition: all .2s ease;
        background-color: #fff;
        -webkit-box-shadow: 0 1px 12px rgb(0 0 0 / 10%);
        box-shadow: 0 0px 0px rgb(0 0 0 / 34%);
        border-radius: 4px;
        border-left: 3px solid #46cd93;
        background-color: #00000038 !important;
      }

      #navigation {
        display: none;
        position: fixed;
        left: 0px;
        top: 0px;
        width: 70%;
        background-color: #313949;
        height: 100%;
      }

      #topnav .navigation-menu>li {
        width: 100% !important;
        text-align: center;
        text-align: left;
        padding: 5px;
      }

      #topnav .navigation-menu>li .submenu {
        position: relative;
        display: block !IMPORTANT;
        top: 0px !important;
        left: 0px !important;
        z-index: 1000;
        padding: 4px 0;
        list-style: none;
        min-width: 200px;
        text-align: left;
        visibility: visible !important;
        opacity: 1;
        margin-top: 20px;
        -webkit-transition: all .2s ease;
        transition: all .2s ease;
        background-color: #fff;
      }

      #topnav .navigation-menu>li>a i {
        position: absolute;
        left: 16px;
        margin-top: 0px !IMPORTANT;
      }

      #topnav .navigation-menu>li>a {
        padding-top: 8px !important;
        padding-bottom: 8px !important;
        padding-left: 37px !important;
        font-size: 15px !important;
      }

      #topnav .navigation-menu>li .submenu {
        margin-top: 0px;
        margin-top: 16px !important;
      }

      #topnav .navigation-menu>li .submenu li a {
        color: #ffffff;
      }

      #topnav .has-submenu.active a {
        color: #fff !important;
        background-color: #ffffffcf !important;
        padding: 10px 38px !important;
      }

      .headersearchbarouter {
        display: none;
      }

      .footerstripboxouter {
        display: none;
      }

      #loadnotificationscreate {
        overflow: auto;
        height: 80% !important;
        position: fixed;
      }

      .mailopened {
        display: none !important;
      }

      .topmainlogomain {
        display: none;
      }

      .topmainlogomainmobile {
        display: block;
      }

      .topmainlogomainmobile .fa {
        color: #fff;
      }

      .topmainlogomainmobile {
        display: block;
        background-color: #23ae73;
        padding: 0px 10px;
        margin-left: -6px;
        margin-top: -7px;
        font-size: 24px;
        border-radius: 3px;
      }

      .header-bg {
        background-color: #ffffff;
        width: 0px !important;
      }

      .dashboardleft {
        background-color: #FFFFFF;
        width: 100%;
        position: relative;
        left: 0px;
        top: 0px;
        height: 100%;
        box-sizing: border-box;
      }

      .wrapper {
        padding-left: 10px !important;
        padding-right: 10px !important;
      }

      .container-fluid {
        padding-right: 5px !important;
        padding-top: 8px !important;
        padding-left: 4px !important;
      }

      .dashboardleft .dashboardleftinnter {
        padding-top: 14px;
        overflow: hidden;
      }

      .dashboardleft {
        background-color: #FFFFFF;
        width: 100%;
        position: relative;
        left: 0px;
        top: 0px;
        height: 100%;
        box-sizing: border-box;
        border-radius: 5px;
        margin-bottom: 10px;
      }

      .dashboardleft .listbox {
        padding: 10px 18px;
        background-color: #e5e4ff;
        font-size: 20px;
        margin-bottom: 10px;
        border-radius: 12px;
        border-left: 4px solid #00000024;
        width: 46%;
        text-align: center;
        float: left;
        height: 73px;
        margin: 6px;
      }

      .createquerybtnmaindash {
        margin-top: 10px !important;
      }

      .invitememberboxbutton {
        margin-bottom: 20px !important;
      }

      .topmainlogomainmobile {
        display: block;
        background-color: #23ae73;
        padding: 0px 10px;
        margin-left: -4px;
        margin-top: -4px;
        font-size: 24px;
        border-radius: 3px;
      }

      #tograypanelmenu .rightmenu a {
        color: #ffffff94;
      }

      #tograypanelmenu .rightmenu a {
        margin-left: 10px;
        margin-right: 10px;
      }

      #tograypanelmenu {
        background-color: #313949;
        border-bottom: 3px solid #46cd93;
        padding: 2px;
        height: 56px;
      }

      #tograypanelmenu .navirightlink {
        padding: 12px;
      }

      #topnav .navigation-menu {
        padding-top: 60px;
      }

      .rnblkquery .querywhitebox {
        width: 100% !important;
      }

      .modal-dialog {
        width: 100% !important;
      }

      .rnblkquery .modal-footer {
        position: relative !important;
        padding-right: 0px;
      }

      .headerslideright {
        overflow: auto;
      }

      .float-right {
        float: right !important;
        width: 100%;
        margin: 12px 0px;
      }

      .querytabslead {
        overflow: auto;
        width: 100%;
      }

      .querytabslead .statusbox {
        width: 130px;
        font-size: 10px !important;
        font-weight: 600 !important;
      }

      .statusbox {
        font-size: 12px !important;
      }

      .querytabsleadsearch table tr td {
        display: block !important;
        width: 100% !important;
        padding: 0px !important;
        padding-bottom: 5px !important;
      }

      .querytabsleadsearch table tr td input {
        width: 100% !important;
      }

      .querytabsleadsearch table tr td select {
        width: 100% !important;
      }

      .querytabsleadsearch table tr td button {
        width: 100% !important;
      }

      .querytabsleadsearch table {
        width: 100% !important;
      }

      .querylistbox {
        width: 100%;
        overflow: auto;
      }

      .querylistbox table {
        width: 1000px !important;
      }

      .hideinmobile {
        display: none;
      }

      .showinmobile {
        display: block;
      }

      .searchquerymain {
        padding: 0px !important;
        padding: 10px 0px !important;
        border-radius: 10px;
      }

      .d-none {
        display: block !important;
      }

      .d-block {
        display: none !important;
      }

      .inquerytabsmain {
        width: 100%;
        overflow: auto;
        margin-bottom: 10px;
      }


      .inquerytabsmain .nav-tabs-custom {
        width: 1150px !important;
      }

      .querystatustabmain {
        width: 97% !important;
        overflow: auto !important;
      }

      .querystatustabmain .breadcrumb {
        width: 1082px !important;
        margin-bottom: 10px;
      }

      .whatsappsharequerymain {
        position: fixed;
        right: 218px;
        top: 7px;
        z-index: 99999;
      }

      .whatsappsharequerymain img {
        height: 36px !important;
      }

      .mobilemargianbottomzero {
        margin-bottom: 0px !important;
      }

      .sectabnew .float-right {
        width: auto !important;
      }

      .overflowautomobiletable {
        overflow: auto;
        width: 100%;
      }

      .overflowautomobiletable table {
        min-width: 800px !important;
      }

      .message-list li .col-mail-2 {
        display: none;
      }
    }

    .ui-datepicker {
      box-shadow: 0px 0px 10px #00000045 !important;
      border: 1px solid #e5e5e5 !important;
      padding: 0px !important;
      width: auto !important;
    }

    .ui-datepicker .ui-widget-header {
      border: 1px solid #ffffff;
      background: #ffffff;
      color: #333333;
      font-weight: bold;
      font-size: 18px;
    }

    .ui-datepicker .ui-state-default {
      border: 0px;
      text-align: center;
      font-size: 14px;
      padding: 14px 12px !important;
      background-color: #fff !important;
      border: 0px !important;
    }

    .ui-datepicker .ui-state-default:hover {
      background-color: #f0f0f0 !important;
      border-radius: 4px;
      color: #000 !important;
    }

    .ui-datepicker table {
      margin-bottom: 0px !important;
    }

    .ui-datepicker table th {
      color: #8B9898 !important;
    }

    .ui-datepicker .ui-state-highlight {
      background-color: #d6fff1 !important;
      color: #3a8e71 !important;
      border-radius: 4px;
    }

    .ui-datepicker .ui-state-active {
      background-color: #008cff !important;
      color: #fff !important;
      border-radius: 4px;
    }

    .ui-datepicker .ui-datepicker-header {
      box-shadow: 0px 0px 10px #0000004d;
    }

    .ui-datepicker .ui-datepicker-title {
      font-size: 17px !important;
    }

    .ui-datepicker .ui-datepicker-prev {
      background-color: #fff !important;
      border: 0px !important;
      cursor: pointer;
    }

    .ui-datepicker .ui-datepicker-next {
      background-color: #fff !important;
      border: 0px !important;
      cursor: pointer;
    }

    .ui-datepicker .ui-datepicker-calendar tr td:first-child {
      padding-left: 15px !important;
    }

    .ui-datepicker .ui-datepicker-calendar tr td:last-child {
      padding-right: 15px !important;
    }

    .ui-datepicker .ui-datepicker-calendar tr th:first-child {
      padding-left: 15px !important;
    }

    .ui-datepicker .ui-datepicker-calendar tr th:last-child {
      padding-right: 15px !important;
    }

    .ui-datepicker .ui-datepicker-calendar tr th {
      padding-top: 25px !important;
    }

    .ui-datepicker .ui-datepicker-calendar {
      margin-bottom: 15px !important;
    }

    .ui-datepicker select.ui-datepicker-month,
    .ui-datepicker select.ui-datepicker-year {
      border: 1px solid #ddd !important;
      padding: 5px 4px !important;
      font-size: 13px !important;
      margin: 0px 2px !important;
      border-radius: 4px;
    }

    .btn-group .btn-secondary {
      border-radius: 0px !important;
      border: 1px solid #ddd !important;
      border-right: 0px !important;
      background-color: transparent !important;
      background-image: none;
      color: #000;
      padding: 5px 10px;
      background: rgb(255, 255, 255);
      background: linear-gradient(180deg, rgba(255, 255, 255, 1) 47%, rgba(244, 244, 244, 1) 100%);
      color: #000000 !important;
    }

    .btn-group .btn-secondary:hover {
      background: rgb(244, 244, 244);
      background: linear-gradient(180deg, rgba(244, 244, 244, 1) 0%, rgba(255, 255, 255, 1) 47%);
    }

    .btn-group {
      border-radius: 4px !important;
      overflow: hidden;
      border-right: 1px solid #cfd7df;
      margin-right: 3px;
    }

    .workinghoursstrip {
      background-color: #d9fffb;
      color: #000;
      padding: 10px;
      font-size: 12px;
      font-weight: 700;
      padding-left: 35px;
    }

    .width480 {
      width: 400px !important;
    }

    .mastericons {
      text-align: center;
      overflow: hidden;
    }

    .mastericons a {
      padding: 10px 0px !important;
      font-size: 30px !important;
      text-align: center;
      cursor: pointer;
      width: 32% !important;
      display: inline-block !important;
      margin: 1px 0px;
      border: 1px solid #e6f4ff;
    }

    .mastericons a .titilemaster {
      margin-top: 2px;
      font-size: 13px !important;
      color: #6d6d6d;
      font-weight: 400;
    }

    .mastericons a:hover {
      background-color: #e6f4ff !important;
      border-radius: 4px !important;
    }

    .mastericons a img {
      width: 32px !important;
    }

    .querylistbox .viewpackageheader {
      padding: 6px 8px;
      font-size: 11px;
      background-color: #ebebeb;
      color: #0a0a0a;
      text-transform: uppercase;
      font-weight: 600;
      line-height: 12px;
      cursor: pointer;
    }

    .querylistbox:hover .viewpackageheader {
      background-color: #35beff;
      color: #fff;
    }

    .querylistbox .proposallistouter {
      background-color: #FFFFFF;
      padding: 0px 0px;
    }

    .querylistbox .proposallistouter a {
      padding: 4px 8px;
      display: block;
      border-bottom: 1px solid #ddd;
      font-size: 12px;
      font-weight: 600;
      color: #000000;
    }

    .querylistbox .proposallistouter a:hover {
      background-color: #FFFFCC;
    }

    .roleouter {
      border-left: 2px dashed #c5c5c5;
      margin-left: 50px;
    }

    .roleouter .headrole {
      margin-top: 30px;
      padding: 5px 10px;
      font-weight: 600;
      margin-left: 30px;
      background-color: #dff0ff;
      border-radius: 4px;
      line-height: 25px;
      position: relative;
      width: max-content;
    }

    .roleouter .hyrouter {
      border-left: 2px dashed #ddd;
      padding: 13px 30px;
      margin-left: 50px;
      position: relative;
    }

    .roleouter .rolebox {
      background-color: #EFEFEF;
      width: fit-content;
      padding: 4px 10px;
      text-align: center;
      color: #000000;
      border-radius: 4px;
      font-weight: 600;
      line-height: 22px;
    }

    .roleouter .linerole {
      position: absolute;
      left: 0px;
      width: 31px;
      background-color: #EFEFEF;
      height: 4px;
      left: -30px;
      top: 15px;
    }

    .roleouter .hyrouter .linerole {
      position: absolute;
      left: 0px;
      width: 31px;
      background-color: #EFEFEF;
      height: 4px;
      left: 0px;
      top: 30px;
    }

    .roleouter .hyrouter .ingry {
      background-color: #EFEFEF;
      width: fit-content;
      padding: 4px 30px;
      text-align: center;
      color: #000000;
      border-radius: 4px;
      font-weight: 600;
      line-height: 22px;
    }

    .roleouter a {
      display: block;
      position: absolute;
      top: 18px;
      left: 14px;
      background-color: #000 !important;
      padding: 2px;
      height: 20px;
      width: 20px;
      font-size: 12px;
      color: #fff !important;
      line-height: 15px;
    }

    option:disabled {
      color: red;
      background-color: #FFFFCC;
      font-weight: 600;
      padding: 4px;
    }

    .modal-content {
      border: 0px;
      box-shadow: 2px 2px 9px #00000045;
    }

    .listtypehome {
      overflow: hidden;
    }

    .listtypehome a {
      float: left;
      display: block;
      margin-right: 10px;
      padding: 10px;
      border: 1px solid #fff;
      margin-bottom: 10px;
    }

    .listtypehome a img {
      width: 148px;
    }

    .listtypehome a div {
      font-weight: 600;
      color: #333333;
      text-align: center;
      padding-top: 10px;
    }

    .listtypehome a:hover {
      border: 1px solid #03acea3d;
      box-shadow: 2px 2px 5px #00000042;
      margin-bottom: 10px;
      border-radius: 10px;
    }

    #topnav .has-submenu.active a {
      color: #2d72d9 !important;
      background-color: #ffffffe8 !important;
      fill: #2d72d9;
    }

    #topnav .active>a:hover i {
      color: #2d72d9 !important;
    }

    #topnav .unified360-valign {
      width: 20px !important;
    }

    #topnav #navigation .unified360-valignimg {
      width: 20px !important;
      stroke: #ffffffd1;
    }

    #topnav #navigation .active .unified360-valignimg {
      stroke: #2d72d9;
    }

    body {
      background-color: #f8fafa !important;
    }

    html {
      background-color: #f8fafa !important;
    }

    .minwbox {
      max-width: 1070px;
      margin: auto;
      margin-top: 45px !important;
      padding-top: 50px;
    }

    .newboxheading {
      background: #f5f7f9;
      border-bottom: solid 1px #cfd7df;
      padding: 12px 10px;
      padding-left: 85px;
      font-weight: 700;
      margin-top: -10px;
      position: fixed;
      width: 100%;
      left: 0px;
      z-index: 9;
      height: 46px;
    }

    .newboxheading .newhead {
      position: relative;
    }

    .newboxheading .newoptionmenu {
      position: absolute;
      right: 0px;
      top: -7px;
      width: auto;
    }

    .newboxheading .newoptionmenu div {
      float: right;
      margin-top: -2px;
      margin-left: 5px;
    }

    .newboxheading .newoptionmenu div .btn {
      margin-top: 3px;
      height: 34px
    }

    .newbigpadding {
      padding: 20px !important;
    }

    .newbigheader {
      border-bottom: 1px dashed #cfd7df;
      padding-bottom: 10px;
      margin-bottom: 10px;
      font-size: 18px;
      font-weight: 600;
    }

    .settings-group-description {
      font-size: 12px;
      color: #666;
      font-weight: 400;
    }

    .mastericons a img {
      width: 36px !important;
      float: left;
    }

    .mastericons a .titilemaster {
      margin-top: 2px;
      color: #6d6d6d;
      font-weight: 400;
      text-align: left;
      font-size: 14px !important;
      line-height: 27px;
      padding-left: 46px;
    }

    .mastericons a {
      padding: 10px 0px !important;
      font-size: 30px !important;
      text-align: center;
      cursor: pointer;
      width: 32% !important;
      display: inline-block !important;
      margin: 1px 0px;
      border: 0px solid #e6f4ff;
      padding: 25px !important;
    }

    .page-content .card-title {
      padding: 20px !important;
      padding-bottom: 0px !important;
      margin-bottom: 10px !important;
    }

    .card-title-desc {
      margin-left: 20px !important;
    }

    .newsearchsecform {
      position: absolute;
      top: 10px;
      width: 220px;
      left: 196px !important;
    }

    .newsearchsec {
      margin-top: 3px;
      border-radius: 5px;
      padding: 10px;
      height: 34px;
    }

    .newpadding30 {
      padding-top: 30px !important;
    }

    .statusbox {
      font-size: 12px !important;
      padding: 8px !important;
      font-size: 10px !important;
      font-weight: 600 !important;
    }


    .inquerytabsmain .nav-tabs .nav-item.show .nav-link,
    .inquerytabsmain .nav-tabs .nav-link.active {
      color: #495057;
      background-color: #6c757d;
      border-color: #dee2e6 #dee2e6 #fff !important;
      color: #000 !important;
      border-radius: 3px;
      background-color: #fff !important;
      box-shadow: 1px 2px 6px #00000024;
      border-left: 4px solid #46cd93 !important;
    }

    .btn-primary {
      background: rgb(38, 73, 102);
      background: linear-gradient(180deg, rgba(38, 73, 102, 1) 0%, rgba(18, 52, 77, 1) 46%, rgba(18, 52, 77, 1) 100%);
    }

    .suplistingouter {
      width: 100%;
    }

    .suplistingouter .card-body {
      padding: 10px !important;
      font-size: 12px;
    }

    .suplistingouter .card {
      margin-bottom: 10px !important;
      margin-right: 5px;
    }

    .suplistingouter .card:hover {
      background-color: #FFFFCC;
    }

    .inquerytabsmain .nav-tabs-custom .nav-link:hover {
      background-color: #e6e9f1 !important;
      border-radius: 5px !important;
    }

    .newoptionmenu .form-control {
      font-family: 'Lato', sans-serif !important;
      font-size: 13px !important;
      height: 34px !important;
    }

    #topnav .navigation-menu>li .submenu div {
      background-color: #2d72d9 !important;
    }

    .statusbox {
      position: relative;
      overflow: hidden;
      box-shadow: 1px 3px 4px #0000005e;
    }


    .ripple {
      margin: auto;
      background-color: #ffffff0f;
      width: 1rem;
      height: 1rem;
      border-radius: 50%;
      animation: ripple 2s linear infinite;
      position: absolute;
      left: 45%;
      top: 61px;
    }

    @keyframes ripple {
      0% {
        box-shadow: 0 0 0 .7rem rgba(255, 255, 255, 0.2),
          0 0 0 1.5rem rgba(255, 255, 255, 0.2),
          0 0 0 5rem rgba(255, 255, 255, 0.2);
      }

      100% {
        box-shadow: 0 0 0 1.5rem rgba(255, 255, 255, 0.2),
          0 0 0 4rem rgba(255, 255, 255, 0.2),
          0 0 0 8rem rgba(255, 255, 255, 0);
      }
    }


    html {
      background-repeat: repeat;
    }

    #reminderouterrightbottom {
      background: #fff;
      border: 1px solid #cfd7df;
      box-shadow: 0 2px 5px rgb(39 49 58 / 15%) !important;
      border-radius: 8px;
      position: fixed;
      right: 10px;
      bottom: 40px;
      width: 390px;
      background: rgb(255, 255, 255);
      background: linear-gradient(52deg, rgba(255, 255, 255, 1) 44%, rgba(255, 221, 221, 1) 78%, rgba(254, 163, 163, 1) 100%);
      display: none;
    }

    #tograypanelmenu .rightmenu a {
      padding: 5px 12px;
    }

    body {
      background-color: #f8fafa !important;
    }

    .wrapper .card {
      box-shadow: 1px 1px 7px rgba(154, 154, 204, .1) !important;
      border: 1px solid #e6e6e6 !important;
    }

    .cardsmheading2 {
      font-size: 12px;
      font-weight: 600;
      margin-top: 5px;
      color: #4a4a69;
    }

    .cardsmheading {
      font-size: 12px;
      font-weight: 600;
      margin-bottom: 5px;
      color: #4a4a69;
    }

    .cardnumberbig {
      font-size: 26px;
      font-weight: 600;
      color: #4a4a69;
      line-height: 32px;
      position: relative;
    }

    .cardnumberbig .fa-external-link {
      font-size: 16px;
      position: absolute;
      right: 4px;
      top: -13px;
      padding: 9px;
      background-color: #38cab333;
      color: #38cab3;
      border-radius: 4px;
    }

    .taskfollowuplist .tasklist {
      padding: 10px 18px;
      background-color: transparent;
      font-size: 20px;
      margin-bottom: 10px;
      border-radius: 0px;
      border-left: 0px solid #00000024;
      border: 0px;
      position: relative;
      border-bottom: 1px solid #ededf5;
      padding-right: 0px;
      margin-right: 0px;
      padding-left: 0px;
    }

    .dashheader {
      border-left: 4px solid #0bbfa9;
      padding-left: 6px;
      line-height: 15px;
    }

    .taskfollowuplist .tasklist .badge {
      bottom: 26px !important;
      border-radius: 4px;
    }

    .morningh2 {
      font-size: 20px;
      line-height: 22px;
      margin: 0px;
      color: #38cab3;
      margin-bottom: 3px;
    }

    .bigbtntab table tr td {
      padding: 7px 6px;
      font-size: 13px;
    }

    #topnav .navigation-menu>li.last-elements .submenu {
      left: 45px !important;
      width: 240px;
    }
  </style>



  <script>
    function openloadsection(page,id){
      $('#'+id).html('<div style="padding:10px; text-align:center;"><img src="https://tripcrm.in/educrm/crm/images/loading.gif" width="32" ></div>');
      $('#'+id).load(page);
      }

      function getSearchCIty(citysearchfield,cityresultfield,listsearch){
      var citysearchfieldval = encodeURI($('#'+citysearchfield).val());
      var citysearchfield = citysearchfield;

      if(citysearchfieldval!=''){
      $('#'+listsearch).show();
      $('#'+listsearch).load('searchcitylists.php?keyword='+citysearchfieldval+'&searchcitylists='+listsearch+'&cityresultfield='+cityresultfield+'&citysearchfield='+citysearchfield);
      }
      }




      function selectcity(){
        var stateId = $('#state').val();
        $('#city').load('loadcity.php?id='+stateId+'&selectId=');
        }

        function selectstate(){
        var countryId = $('#country').val();
        $('#state').load('loadstate.php?id='+countryId+'&selectId=');
        }

  </script>

</head>

<body>





  <style>
    .welcomename {
      background: rgb(233, 45, 24);
      background: linear-gradient(180deg, rgba(233, 45, 24, 1) 0%, rgba(246, 173, 1, 1) 32%, rgba(49, 116, 241, 1) 66%, rgba(36, 154, 65, 1) 100%);
      border: 0px;
    }

    #tograypanelmenu .welcomename {
      height: 27px;
      width: 27px;
      padding: 2px;
      border: 0px;
    }

    #tograypanelmenu .welcomename .inside {
      width: 100%;
      height: 100%;
      border-radius: 100%;
      text-align: center;
      background-color: #fff;
      font-size: 15px;
    }


    .prifilemenuouter {
      background-color: #2d2f31;
      position: fixed;
      right: 10px;
      top: 40px;
      color: #fff;
      z-index: 999;
      width: 376px;
      border-radius: 28px;
      padding: 10px;
      display: none;
    }

    .prifilemenuouter .inside {
      background-color: #1f1f1f;
      border-radius: 24px;
    }

    .prifilemenuouter .content {
      padding: 10px;
    }

    .buddyouter {
      background: rgb(233, 45, 24);
      background: linear-gradient(180deg, rgba(233, 45, 24, 1) 0%, rgba(246, 173, 1, 1) 32%, rgba(49, 116, 241, 1) 66%, rgba(36, 154, 65, 1) 100%);
      padding: 4px;
      border-radius: 100px;
      width: 64px;
      height: 64px;
      margin-right: 5px;
      position: relative;
    }

    .buddyouter .buddyimg {
      background-color: #fff;
      width: 100%;
      height: 100%;
      border-radius: 100px;
      font-size: 35px;
      text-align: center;
      color: #000;
    }

    .buttonprofile {
      border: 1px solid #adadad70;
      padding: 5px 10px;
      color: #FFFFFF;
      font-size: 14px;
      font-weight: 600;
      margin-top: 10px;
      text-align: left;
      border-radius: 10px;
      cursor: pointer;
    }

    .buttonprofile:hover {
      background-color: #cccccc12;
    }
  </style>




  <div id="preloader" style="background-color: #ffffffdb;">



    <div id="status">



      <div class="spinner"></div>



    </div>



  </div>




  <!--top gray panel menu-->
  @include('new_layouts.topnavbar')
  <!--end of the top gray panel menue-->






  <!--sidebnavbar section-->
  @include('new_layouts.sidenavbar')
  <!--end of the section-->



  <!---alert message --->
  @if(session('s_success'))
  <div class="alert alert-success bg-success text-white headersavealert" role="alert">
    {{ session('s_success') }}
  </div>
  @endif
  <!---end message --->

  <!---alert message --->
  @if(session('info'))
  <div class="alert alert-danger bg-danger text-white headersavealert" role="alert">
    {{ session('info') }}
  </div>
  @endif
  <!---end message --->
  {{--
  @php dd($errors->has('catForm_name')); @endphp --}}
  @if($errors->has('category_name') || $errors->has('category_arabic_name') || $errors->has('category_photo'))
  @php $activeTab = 2; @endphp
  @elseif(session('active_tab'))
  @php $activeTab = session('active_tab'); @endphp
  @elseif ($errors->has('types'))
  @php $activeTab = 3; @endphp
  @elseif($errors->has('name') || $errors->has('email') || $errors->has('phone') || $errors->has('password') ||
  $errors->has('photo') || $errors->has('role'))
  @php $activeTab = 5; @endphp
  @else
  @php $activeTab = 1; @endphp
  @endif






  <script src="tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
    tinymce.init({
    selector: "#emailsignature",
    themes: "modern",
    plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
  </script>



  <div class="wrapper">
    <div class="container-fluid">
      <div class="main-content">



        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" align="left" valign="top">


              <style>
                .newboxheading {
                  padding-left: 296px;
                }

                .settingleftsection {
                  width: 220px;
                  position: fixed;
                  left: 64px;
                  top: 0px;
                  height: 100%;
                  z-index: 99;
                  border-right: 1px solid #E5EBEF;
                  background: #f9fbfc;
                  overflow: auto;
                }

                body {
                  background-color: #FFFFFF !important;
                  background-image: none !important;
                }

                html {
                  background-image: none !important;
                  background-color: #FFFFFF !important;
                }

                .col-xl-12 {
                  padding-left: 0px;
                  padding-right: 0px;
                }

                .settingleftsection .lmenu {
                  padding-top: 56px;
                }

                .settingleftsection .lmenu ul {
                  list-style: none;
                  padding: 0px;
                  margin: 0px;
                }

                .settingleftsection .lmenu ul li a {
                  padding: 10px 15px;
                  display: block;
                  font-size: 15px;
                  color: #333333;
                }

                .settingleftsection .lmenu h5 {
                  padding-left: 15px;
                }

                .settingleftsection .lmenu ul li .active {
                  color: #1980d8;
                  background-color: #D9EFFF;
                }

                .settingleftsection .lmenu ul li a .fa {
                  margin-right: 5px;
                }

                .settingleftsection .lmenu ul li a:hover {
                  background-color: #f1f1f1;
                }

                .nav-tabs .nav-link {
                  text-align: left;
                }
              </style>
              <div class="settingleftsection">
                <div class="lmenu">
                  <h5>Settings</h5>

                  <ul class="nav nav-tabs ">

                    <li><a class="nav-link {{ $activeTab === 1 ? 'active show' : '' }} " data-toggle="tab"
                        href="#lead-details-tab2"><i class="fa fa-building-o" aria-hidden="true"></i>
                        Organisation Settings</a></li>

                    <li><a class="nav-link {{ $activeTab === 2 ? 'active show' : '' }} " data-toggle="tab"
                        href="#lead-details-tab"><i class="fa fa-book" aria-hidden="true"></i>
                        Course Category</a></li>

                    <li><a class="nav-link {{ $activeTab === 3 ? 'active show' : '' }} " data-toggle="tab"
                        href="#lead-details-tab3"><i class="fa fa-money" aria-hidden="true"></i>
                        Payments type</a></li>

                    <li><a class="nav-link {{ $activeTab === 4 ? 'active show' : '' }} " data-toggle="tab"
                        href="#lead-details-tab4"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        Status</a></li>

                    <li><a class="nav-link {{ $activeTab === 5 ? 'active show' : '' }} " data-toggle="tab"
                        href="#lead-details-tab5"><i class="fa fa-user-o" aria-hidden="true"></i>
                        User Manage</a></li>

                    <li><a class="nav-link {{ $activeTab === 6 ? 'active show' : '' }} " data-toggle="tab"
                        href="#lead-details-tab6"><i class="fa fa-shield" aria-hidden="true"></i>
                        Rols & permissions</a></li>

                    {{-- <li><a href="display.html?ga=defaultsettings"><i class="fa fa-sliders" aria-hidden="true"></i>
                        Default Settings</a></li>

                    <li><a href="display.html?ga=adminsetting"><i class="fa fa-cog" aria-hidden="true"></i> Admin
                        Settings</a></li>
                    <li><a href="display.html?ga=automation"><i class="fa fa-retweet" aria-hidden="true"></i>
                        Automation</a></li>
                    <li><a href="display.html?ga=branches"><i class="fa fa-home" aria-hidden="true"></i> Branch
                        Setting</a></li>
                    <li><a href="display.html?ga=roles"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Roles</a>
                    </li> --}}

                  </ul>
                </div>

              </div>

              <div style="width:220px;"></div>
            </td>
            <td align="left" valign="top" width="90%">
              <div class="page-content">

                <div class="tab-content">

                  <!---orginisition tab--->
                  <div class="tab-pane fade {{ $activeTab === 1 ? 'active show' : '' }} " id="lead-details-tab2">

                    <div class="newboxheading">
                      <div class="newhead">Orginisation settings<div class="newoptionmenu">

                          <div> <button type="button" class="btn btn-secondary btn-lg waves-effect waves-light "
                              data-toggle="modal" data-target=".model2" popaction="action=organisationsettings">Edit
                              Setting</button></div>

                        </div>
                      </div>


                    </div><br>

                    <!---organization start--->
                    <div class=" ">
                      <div class="col-md-12 col-xl-12">
                        <div>
                          <div class="card-body" style="padding:10px;">

                            <div style="border:1px solid #ddd; margin:10px;">
                              <table width="100%" class="table table-striped" style="margin-bottom: 0px;">

                                <thead>
                                </thead>
                                <tbody>

                                  <tr>

                                    <td width="20%">
                                      <div style="font-size:30px; color:#247fdd; "><i class="fa fa-university"></i>
                                        <strong>{{
                                          $cp->name
                                          }}</strong>
                                      </div>

                                    </td>

                                    <td width="71%">
                                      <img src="{{ asset('uploads/'.$cp->logo.'') }}" alt="Organization Logo"
                                        width="200">
                                    </td>

                                  </tr>

                                  <tr>
                                    <td width=" 20%">Organisation name
                                    </td>
                                    <td width="71%">
                                      <div style="font-size:15px; color:#000; "><strong>{{ $cp->name }}</strong></div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td width="20%">Email (Invoicing use)</td>
                                    <td>
                                      <div style="font-size:15px; color:#000; "><strong>{{ $cp->email }}</strong></div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="20%">Phone (Invoicing use)</td>
                                    <td>
                                      <div style="font-size:15px; color:#000; "><strong>{{ $cp->phone }}</strong></div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="20%">Address</td>
                                    <td>
                                      <div style="font-size:15px; color:#000; "><strong>{{ $cp->address }}</strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="20%">Description</td>
                                    <td>
                                      <div style="font-size:15px; color:#000; "><strong>{{ $cp->description }}</strong>
                                      </div>
                                    </td>
                                  </tr>

                                </tbody>
                              </table>
                            </div>



                          </div>


                        </div>


                      </div>


                    </div>
                    <!---organication end--->
                  </div>
                  <!---end of the orginisation tab--->


                  <!---category tab---->
                  <div class="tab-pane fade {{ $activeTab === 2 ? 'active show' : '' }} " id="lead-details-tab">
                    <!---start---->

                    <div class="newboxheading">
                      <div class="newhead">All course category list<div class="newoptionmenu">

                          <div> <button id="addcategory" type="button"
                              class="btn btn-secondary btn-lg waves-effect waves-light" popaction="action=addstaff">Add
                              New
                              category</button></div>

                        </div>
                      </div>


                    </div>

                    <!--main contetn-->
                    <div class=" ">
                      <div class="col-md-12 col-xl-12" style="padding-top:32px;">
                        <div class=" ">
                          <div class="card-body">


                            <form class="custom-validation" action="frmaction.html" target="actoinfrm" novalidate=""
                              method="post" enctype="multipart/form-data">
                              <table class="table table-hover mb-0">

                                <thead>
                                  <tr>
                                    <th width="0%">&nbsp;</th>
                                    <th width="0%">Category Name</th>
                                    <th width="0%">Arabic name</th>
                                    <th width="1%">&nbsp;</th>
                                    <th width="1%">&nbsp;</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($category as $row)
                                  <tr>
                                    <td width="2%">
                                      <a><img
                                          src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('https://bootdey.com/img/Content/avatar/avatar7.png') }}"
                                          width="40" height="40" style="border-radius: 25px;"></a>
                                    </td>
                                    <td width="0%">{{ $row->name }}</td>
                                    <td width="0%">@if($row->name_arabic) {{ $row->name_arabic }}@else ...............
                                      @endif</td>

                                    <td width="1%">
                                      <a class="dropdown-item neweditpan catedite" data-id="{{ $row->id }}"><i
                                          class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </td>
                                    <td width="1%">
                                      <a class="dropdown-item neweditpan delete-confirm" href="#"
                                        data-id="{{ route('category.delete',$row->id) }}"><i class="fa fa-trash"
                                          aria-hidden="true"></i></a>
                                    </td>
                                  </tr>
                                  @endforeach

                                </tbody>
                              </table>
                              <input name="action" type="hidden" id="action" value="stepverificationaction">
                              <div class="modal-footer d-none" style="padding-right:10px;">
                                <input name="Save" type="submit" value="Save Changes" id="savingbutton"
                                  class="btn btn-primary"
                                  onclick="this.form.submit(); this.disabled=true; this.value='Saving...';">
                              </div>
                            </form>
                          </div>


                        </div>


                      </div>




                      <style>
                        .upmsg {
                          color: #CC3300;
                          font-weight: 400;
                          font-size: 14px;
                          padding: 5px 10px;
                          border: 1px solid #ffe18f;
                          background-color: #fffdd4;
                        }
                      </style>


                    </div>

                    <!---end --->
                  </div>
                  <!---category tab end ---->


                  <!---payment types tab--->
                  <div class="tab-pane fade {{ $activeTab === 3 ? 'active show' : '' }} " id="lead-details-tab3">

                    <div class="newboxheading">
                      <div class="newhead">All payment types are below<div class="newoptionmenu">



                        </div>
                      </div>


                    </div><br>
                    <!---organization start--->
                    <div class=" ">
                      <div class="col-md-12 col-xl-12">
                        <div>
                          <div class="card-body" style="padding:10px;">


                            <div class="row">
                              <div class="col-md-6">
                                <div style="border:1px solid #ddd; margin:10px;">
                                  <table class="table table-hover mb-0">

                                    <thead>
                                      <tr>
                                        <th width="0%"></th>
                                        <th width="0%">Payment type name</th>
                                        <th width="0%">Time </th>
                                        <th width="1%">&nbsp;</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($Paymenttypes as $row)
                                      <tr>
                                        <td width="0%">
                                          <div class="bulbblue" style="margin-right:0px; margin:auto;">{{
                                            substr($row->type, 0, 1) }}
                                            /div>
                                        </td>
                                        <td width="0%">{{ $row->type }}</td>
                                        <td width="0%">{{ \Carbon\Carbon::parse($row->created_at)->format('F j, Y') }}
                                        </td>
                                        <td width="1%">
                                          <a class="dropdown-item neweditpan delete-confirm2" href="#"
                                            data-id="{{ route('delete.pay',$row->id) }}"><i class="fa fa-trash"
                                              aria-hidden="true"></i></a>
                                        </td>
                                      </tr>
                                      @endforeach

                                    </tbody>
                                  </table>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class=" ">
                                  <div class="col-md-12 col-xl-12">
                                    <div class="card" style="margin:10px;">
                                      <div class="card-body">
                                        <h5 class="card-title" style=" margin-top:0px; overflow:hidden;">Payments types
                                        </h5>
                                        <div class=" ">

                                          <form action="{{ route('store.pay') }}" method="post">
                                            @csrf
                                            <div class=" ">
                                              <div class="col-lg-12">


                                                <div class="row">



                                                  <div class="col-lg-12">

                                                    <div class="row"
                                                      style="padding: 5px; margin: 5px; border: 1px solid #ddd; padding-top: 12px; border-radius: 4px;">



                                                      <div class="col-lg-12">
                                                        <div class="form-group">
                                                          <label for="validationCustom02">Payment type </label>
                                                          <input type="text" class="form-control redborder" id="name"
                                                            name="types" value="{{ old('types') }}"
                                                            placeholder="Enter new & unique Payments types" required="">
                                                          @error('types')<ul class="parsley-errors-list filled"
                                                            id="parsley-id-13" aria-hidden="false">
                                                            <li class="parsley-required text-danger">{{ $message }}</li>
                                                          </ul>@enderror
                                                        </div>
                                                      </div>


                                                    </div>

                                                    <div class="row">
                                                      <div class="col-lg-12">

                                                        <div class="form-group mb-0"
                                                          style="padding: 20px 10px;  border-top: 1px solid #e6e6e6; overflow:hidden; margin-top:20px;">



                                                          <button type="submit" id="savingbutton"
                                                            class="btn btn-secondary" onclick="this.value='Saving...';"
                                                            style="float:right;">
                                                            Save payments type
                                                          </button>
                                                          <input autocomplete="false" name="action" type="hidden"
                                                            id="action" value="addemailtemplate">
                                                          <input autocomplete="false" name="editid" type="hidden"
                                                            id="editid" value="">
                                                        </div>

                                                      </div>


                                                    </div>

                                                  </div>


                                                </div>


                                              </div>



                                            </div>
                                          </form>
                                        </div>


                                      </div>


                                    </div>








                                  </div>
                                  <!--end col-->

                                  <!-- end row -->

                                </div>
                              </div>
                            </div>



                          </div>


                        </div>


                      </div>
                    </div>
                    <!---organication end--->
                  </div>
                  <!----end of the payment type tab---->



                  <!---Application status tab--->
                  <div class="tab-pane fade {{ $activeTab === 4 ? 'active show' : '' }} " id="lead-details-tab4">

                    <div class="newboxheading">
                      <div class="newhead">All types of status are below<div class="newoptionmenu">

                        </div>
                      </div>


                    </div><br>
                    <!---organization start--->
                    <div class=" ">
                      <div class="col-md-12 col-xl-12">
                        <div>
                          <div class="card-body" style="padding:10px;">

                            <br>
                            <style>
                              .header-title {
                                padding: 6px 10px;
                                background-color: #f7f7f7;
                                border-radius: 4px;
                              }
                            </style>

                            <h4 class="mt-0 header-title">Application status</h4>
                            <div class="row" style="padding-left:10px;  ">

                              @foreach($status as $row)
                              <div class="col-lg-2">
                                <div class="form-group input-group"
                                  style="position: relative; padding: 10px; background-color: #e1f5ff; border: 1px solid #93d5f2; border-left: 5px solid #93d5f2; border-radius: 4px;">

                                  <!-- Add the trash icon here -->
                                  <form action="http://localhost/eduglobe/student-remove-course" method="post">
                                    <input type="hidden" name="_token" value="zelymi2fa4XXirO1ZCQoOwhGHU8COqoMq3JcvL8y">
                                    <input type="hidden" name="student" value="73">
                                    <input type="hidden" name="course" value="1">
                                    <a href="#" data-id="{{ route('delete.status',$row->id) }}"
                                      class="delete-confirm3"><button type="button"
                                        style="position: absolute; top: 5px; right: 5px; background: none; border: none; color: red; cursor: pointer;">
                                        <i class="fa fa-times"></i>
                                      </button></a>

                                  </form>

                                  <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                      <tr>
                                        <td>{{ $row->status }}</td>
                                      </tr>
                                    </tbody>
                                  </table>


                                </div>
                              </div>
                              @endforeach

                              <div class="col-lg-2">
                                <div class="form-group input-group"
                                  style="position: relative; padding: 0px; background-color: #f2fcff; border: 2px dashed #eaeaea; border-radius: 4px;"
                                  data-toggle="modal" data-target=".model3"
                                  popaction="action=addqualification&amp;qid=100004&amp;sid=3">
                                  <div
                                    style="text-align: center; width: 100%; padding: 10px; font-size: 16px; cursor: pointer;">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add status
                                  </div>
                                </div>
                              </div>
                            </div>

                            <h4 class="mt-0 header-title">EMGS status</h4>
                            <div class="row" style="padding-left:10px;  ">


                              @foreach($emgs_status as $row)
                              <div class="col-lg-2">
                                <div class="form-group input-group"
                                  style="position: relative; padding: 10px; background-color: #e1f5ff; border: 1px solid #93d5f2; border-left: 5px solid #93d5f2; border-radius: 4px;">

                                  <!-- Add the trash icon here -->
                                  <form action="http://localhost/eduglobe/student-remove-course" method="post">
                                    <input type="hidden" name="_token" value="zelymi2fa4XXirO1ZCQoOwhGHU8COqoMq3JcvL8y">
                                    <input type="hidden" name="student" value="73">
                                    <input type="hidden" name="course" value="1">
                                    <a href="#" data-id="{{ route('emgs.delete.status',$row->id) }}"
                                      class="delete-confirm4"><button type="button"
                                        style="position: absolute; top: 5px; right: 5px; background: none; border: none; color: red; cursor: pointer;">
                                        <i class="fa fa-times"></i>
                                      </button></a>

                                  </form>

                                  <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                      <tr>
                                        <td>{{ $row->status }}</td>
                                      </tr>
                                    </tbody>
                                  </table>


                                </div>
                              </div>
                              @endforeach

                              <div class="col-lg-2">
                                <div class="form-group input-group"
                                  style="position: relative; padding: 0px; background-color: #f2fcff; border: 2px dashed #eaeaea; border-radius: 4px;"
                                  data-toggle="modal" data-target=".model4"
                                  popaction="action=addqualification&amp;qid=100004&amp;sid=3">
                                  <div
                                    style="text-align: center; width: 100%; padding: 10px; font-size: 16px; cursor: pointer;">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add status
                                  </div>
                                </div>
                              </div>
                            </div>



                            <h4 class="mt-0 header-title">Payment status</h4>
                            <div class="row" style="padding-left:10px;  ">

                              @foreach($payment_status as $row)
                              <div class="col-lg-2">
                                <div class="form-group input-group"
                                  style="position: relative; padding: 10px; background-color: #e1f5ff; border: 1px solid #93d5f2; border-left: 5px solid #93d5f2; border-radius: 4px;">

                                  <!-- Add the trash icon here -->
                                  <form action="http://localhost/eduglobe/student-remove-course" method="post">
                                    <input type="hidden" name="_token" value="zelymi2fa4XXirO1ZCQoOwhGHU8COqoMq3JcvL8y">
                                    <input type="hidden" name="student" value="73">
                                    <input type="hidden" name="course" value="1">
                                    <a href="#" data-id="{{ route('payment.delete.status',$row->id) }}"
                                      class="delete-confirm5"><button type="button"
                                        style="position: absolute; top: 5px; right: 5px; background: none; border: none; color: red; cursor: pointer;">
                                        <i class="fa fa-times"></i>
                                      </button></a>

                                  </form>

                                  <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                      <tr>
                                        <td>{{ $row->status }}</td>
                                      </tr>
                                    </tbody>
                                  </table>


                                </div>
                              </div>
                              @endforeach

                              <div class="col-lg-2">
                                <div class="form-group input-group"
                                  style="position: relative; padding: 0px; background-color: #f2fcff; border: 2px dashed #eaeaea; border-radius: 4px;"
                                  data-toggle="modal" data-target=".model5"
                                  popaction="action=addqualification&amp;qid=100004&amp;sid=3">
                                  <div
                                    style="text-align: center; width: 100%; padding: 10px; font-size: 16px; cursor: pointer;">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add status
                                  </div>
                                </div>
                              </div>
                            </div>



                          </div>


                        </div>


                      </div>
                    </div>
                    <!---organication end--->
                  </div>
                  <!----end of the application status tab---->


                  <!---users manage  tab--->
                  <div class="tab-pane fade {{ $activeTab === 5 ? 'active show' : '' }} " id="lead-details-tab5">

                    <div class="newboxheading">
                      <div class="newhead">All Users<div class="newoptionmenu">

                          <div> <button id="useradd" type="button"
                              class="btn btn-secondary btn-lg waves-effect waves-light" popaction="action=addstaff">Add
                              new user</button></div>

                        </div>
                      </div>


                    </div>
                    <!---organization start--->
                    <div class=" ">
                      <div class="col-md-12 col-xl-12" style="padding-top:32px;">
                        <div class=" ">
                          <div class="card-body">


                            <form class="custom-validation" action="frmaction.html" target="actoinfrm" novalidate=""
                              method="post" enctype="multipart/form-data">
                              <table class="table table-hover mb-0">

                                <thead>
                                  <tr>
                                    <th width="0%">&nbsp;</th>
                                    <th width="0%">Name</th>
                                    <th width="0%">Email</th>
                                    <th width="0%">Phone</th>
                                    <th width="0%">Role</th>
                                    <th width="1%">&nbsp;</th>
                                    {{-- <th width="1%">&nbsp;</th> --}}
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($users as $row)
                                  <tr>
                                    <td width="2%">
                                      <a><img
                                          src="{{ (!empty($row->profile)) ? asset('uploads/'.$row->profile.''):('https://bootdey.com/img/Content/avatar/avatar7.png') }}"
                                          width="40" height="40" style="border-radius: 25px;"></a>
                                    </td>
                                    <td width="0%">{{ $row->name }}</td>
                                    <td width="0%">{{ $row->email }}</td>
                                    <td width="0%">{{ $row->number }}</td>
                                    <td width="0%">
                                      @foreach($row->roles->pluck('name') as $role)
                                      @if($role == "Admin")
                                      <span class="badge bg-primary text-white" style="font-size: 12px;"><b>{{ $role
                                          }}</b></span>
                                      @elseif($role == "Stuff")
                                      <span class="badge bg-secondary text-white" style="font-size: 12px;">{{ $role
                                        }}</span>
                                      @elseif($role == "Agent")
                                      <span class="badge bg-danger text-white" style="font-size: 12px;">{{ $role
                                        }}</span>
                                      @elseif($role == "conselor")
                                      <span class="badge bg-success text-white" style="font-size: 12px;">{{ $role
                                        }}</span>
                                      @else
                                      <span class="badge bg-warning text-white" style="font-size: 12px;">{{ $role
                                        }}</span>
                                      @endif

                                      @endforeach
                                    </td>
                                    <td width="1%">
                                      <a class="dropdown-item neweditpan useredite" data-id="{{ $row->id }}"><i
                                          class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </td>
                                    {{-- <td width="1%">
                                      <a class="dropdown-item neweditpan delete-confirm" href="#"
                                        data-id="{{ route('category.delete',$row->id) }}"><i class="fa fa-trash"
                                          aria-hidden="true"></i></a>
                                    </td> --}}
                                  </tr>
                                  @endforeach

                                </tbody>
                              </table>
                              <input name="action" type="hidden" id="action" value="stepverificationaction">
                              <div class="modal-footer d-none" style="padding-right:10px;">
                                <input name="Save" type="submit" value="Save Changes" id="savingbutton"
                                  class="btn btn-primary"
                                  onclick="this.form.submit(); this.disabled=true; this.value='Saving...';">
                              </div>
                            </form>
                          </div>


                        </div>


                      </div>




                      <style>
                        .upmsg {
                          color: #CC3300;
                          font-weight: 400;
                          font-size: 14px;
                          padding: 5px 10px;
                          border: 1px solid #ffe18f;
                          background-color: #fffdd4;
                        }
                      </style>


                    </div>

                    <!---organication end--->
                  </div>
                  <!----end of the application status tab---->

                  <!---this is roles and permissions tab-->

                  <div class="tab-pane fade {{ $activeTab === 6 ? 'active show' : '' }} " id="lead-details-tab6">

                    <div class="newboxheading">
                      <div class="newhead">Roles & permission<div class="newoptionmenu">

                          <div> <button id="roleadd" type="button"
                              class="btn btn-secondary btn-lg waves-effect waves-light" popaction="action=addstaff">Add
                              new roles </button></div>

                        </div>
                      </div>


                    </div>
                    <!---organization start--->
                    <div class=" ">
                      <div class="col-md-12 col-xl-12" style="padding-top:32px;">
                        <div class=" ">
                          <div class="card-body">


                            <form class="custom-validation" action="frmaction.html" target="actoinfrm" novalidate=""
                              method="post" enctype="multipart/form-data">
                              <table class="table table-hover mb-0">

                                <thead>
                                  <tr>

                                    <th width="0%">Roles</th>
                                    <th width="0%">Permissions</th>

                                    <th width="1%">&nbsp;</th>
                                    <th width="1%">&nbsp;</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($role_permissions as $role)
                                  <tr>

                                    <td width="0%">{{ $role->name }}</td>
                                    <td width="0%">
                                      @foreach($permission as $permiss)
                                      <p
                                        class="badge badge-outline text-white @if($role->hasPermissionTo($permiss->name )) badge-success @else badge-danger @endif">
                                        {{ $permiss->name }}</p>&nbsp;
                                      @endforeach
                                      <!-- @foreach($role->permissions->pluck('name') as $per )
                                            <p class="badge bg-primary">{{ $per  }}</p>&nbsp;
                                        @endforeach -->
                                    </td>

                                    <td width="1%">
                                      <a class="dropdown-item neweditpan roleseditebtn" data-id="{{ $role->id }}"><i
                                          class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </td>
                                    <td width="1%">
                                      <a class="dropdown-item neweditpan delete-confirm6" href="#"
                                        data-id="{{ route('role.permission.delete',$role->id) }}"><i class="fa fa-trash"
                                          aria-hidden="true"></i></a>
                                    </td>
                                  </tr>
                                  @endforeach

                                </tbody>
                              </table>
                              <input name="action" type="hidden" id="action" value="stepverificationaction">
                              <div class="modal-footer d-none" style="padding-right:10px;">
                                <input name="Save" type="submit" value="Save Changes" id="savingbutton"
                                  class="btn btn-primary"
                                  onclick="this.form.submit(); this.disabled=true; this.value='Saving...';">
                              </div>
                            </form>
                          </div>


                        </div>


                      </div>




                      <style>
                        .upmsg {
                          color: #CC3300;
                          font-weight: 400;
                          font-size: 14px;
                          padding: 5px 10px;
                          border: 1px solid #ffe18f;
                          background-color: #fffdd4;
                        }
                      </style>


                    </div>

                    <!---organication end--->
                  </div>

                  <!----end of the roles and permission tab-->


                </div>



                <!-- end row -->

              </div>
            </td>
          </tr>
        </table>



        <!-- End Page-content -->


      </div>
    </div>
  </div>


  <script>
    $(function () {
      $("#checkAll2step").click(function () {
        if ($("#checkAll2step").is(':checked')) {
            $(".stip1").prop("checked", true);
        } else {
            $(".stip1").prop("checked", false);
        }
    });


	   $("#checkAllQrcodeon").click(function () {
        if ($("#checkAllQrcodeon").is(':checked')) {
            $(".stip2").prop("checked", true);
        } else {
            $(".stip2").prop("checked", false);
        }
    });

    });
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
    var intervalId = window.setInterval(function(){
 showcurrentworkinghours();

}, 60000);

showcurrentworkinghours();
  </script>


  <div style="height:50px;"></div>
  <iframe id="actoinfrm" name="actoinfrm" src="" style="display:none;"></iframe>

  @include('new_layouts.partials.footer')



  <!---model1 for showing ----->
  <div class="modal fade bs-example-modal-center " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form method="POST" action="{{ route('settings.category.add') }}" name="category" id="catForm"
          enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="poptitle">course category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="popcontent">

            <div class="from-control col-md-12">
              <lable>Enter category Name</lable>
              <input type="text" id="catname" name="category_name" placeholder="Enter Category Name"
                value="{{ old('category_name') }}" class="form-control">
              @error('category_name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                <li class="parsley-required text-danger">{{ $message }}</li>
              </ul>@enderror
            </div><br>

            <div class="from-control col-md-12">
              <lable>Enter category Name in arabic</lable>
              <input type="text" id="name_arabic" name="category_name_arabic"
                placeholder="Enter Category Name in arabic" value="{{ old('category_name_arabic') }}"
                class="form-control">
              @error('category_name_arabic')<ul class="parsley-errors-list filled" id="parsley-id-13"
                aria-hidden="false">
                <li class="parsley-required text-danger">{{ $message }}</li>
              </ul>@enderror
            </div><br>

            <div class="from-control col-md-12">
              <lable>Upload a category picture</lable>
              <input type="file" id="photo" name="category_photo" class="form-control">
              @error('category_photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                <li class="parsley-required text-danger">{{ $message }}</li>
              </ul>@enderror
            </div>

            <input name="editId" type="hidden" id="editId" value="{{ old('editId', '') }}">

            <div class="col-md-12">
              <label for="example-email-input" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <img class="rounded " alt="100x100" width="120"
                  src="{{ old('photo', asset('assets/assets/img/NoBg.jpeg')) }}" data-holder-rendered="true"
                  id="updatephoto">
              </div>
            </div>


          </div>

          <div class="modal-footer">
            <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
              onclick="this.form.submit(); this.disabled=true; this.value='Saving...';">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!---end of the model ---->


  <!----model2 for showing --->
  <div class="modal fade  model2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " style="max-width: 600px; width: 600px;">
      <div class="modal-content">
        <form method="POST" action="{{ route('company.profile') }}" id="orgForm" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="poptitle">Edite Organisation data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="popcontent">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <lable>Name</lable>
                  <input type="text" id="Oname" name="org_name" value="{{ old('org_name' , $cp->name) }}"
                    class="form-control">
                  @error('org_name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <lable>Email</lable>
                  <input type="text" id="Oemail" name="org_email" value="{{ old('org_email',$cp->email) }}"
                    class="form-control">
                  @error('org_email')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <lable>Phone</lable>
                  <input type="number" id="Ophone" name="org_phone" placeholder="Enter Category Name"
                    value="{{ old('org_phone',$cp->phone) }}" class="form-control">
                  @error('org_phone')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <lable>Address</lable>
                  <input type="text" id="Oaddress" name="org_address" value="{{ old('org_address',$cp->address) }}"
                    class="form-control">
                  @error('org_address')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <lable>Description</lable>
                  <textarea class="form-control"
                    name="org_description">{{ old('org_description',$cp->description) }}</textarea>

                  @error('org_description')<ul class="parsley-errors-list filled" id="parsley-id-13"
                    aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <lable>Logo</lable>
                <input type="file" id="logo" name="logo" class="form-control">
                @error('logo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                  <li class="parsley-required text-danger">{{ $message }}</li>
                </ul>@enderror
              </div>
            </div>

            <div class="col-md-12">
              <label for="example-email-input" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <img class="rounded " alt="100x100" width="150" src="{{ asset('uploads/'.$cp->logo.'') }}"
                  data-holder-rendered="true" id="updatephoto1">
              </div>
            </div>

            <input name="id" type="hidden" value="{{ $cp->id }}">





          </div>

          <div class="modal-footer">
            <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
              onclick="this.form.submit(); this.disabled=true; this.value='Saving...';">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!---end of the model --->

  <!----this is model for user list add --->
  <div class="modal fade  useradd" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 600px; width: 600px;">
      <div class="modal-content">
        <form method="POST" action="{{ route('userStore') }}" id="userForm" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="poptitle">User information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="popcontent">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <lable>Name</lable>
                  <input type="text" id="user_name" name="name" value="{{ old('name') }}" class="form-control"
                    placeholder="Enter full name">
                  @error('name')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <lable>Email</lable>
                  <input type="text" id="user_email" name="email" value="{{ old('email') }}" class="form-control"
                    placeholder="Enter email address">
                  @error('email')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <lable>Phone</lable>
                  <input type="number" id="user_phone" name="phone" placeholder="Enter phone number"
                    value="{{ old('phone') }}" class="form-control">
                  @error('phone')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <lable>Assing role</lable>
                  <select class="form-control" name="role" id="user_role">
                    <option value="">assing role</option>
                    @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{ old('role')==$role->id ? ' selected' : '' }}>{{ $role->name }}
                    </option>
                    @endforeach
                  </select>
                  @error('role')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <lable>Password</lable>
                  <input type="password" name="password" placeholder="Enter password" value="{{ old('password') }}"
                    class="form-control">
                  @error('password')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <lable>Confirm password</lable>
                  <input type="password" name="password_confirmation" placeholder="Enter Confirm password"
                    value="{{ old('password_confirmation') }}" class="form-control">
                  @error('password_confirmation')<ul class="parsley-errors-list filled" id="parsley-id-13"
                    aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>
            </div>



            <div class="row">
              <div class="col-md-12">
                <lable>User photo (optional)</lable>
                <input type="file" id="userphoto" name="photo" class="form-control">
                @error('photo')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                  <li class="parsley-required text-danger">{{ $message }}</li>
                </ul>@enderror
              </div>
            </div>
            <input name="editId" type="hidden" id="usereditId" value="{{ old('editId', '') }}">

            <div class="col-md-12">
              <label for="example-email-input" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <img class="rounded " alt="100x100" width="150" src="{{ asset('assets/assets/img/NoProfile.png') }}"
                  data-holder-rendered="true" id="updatephoto2">
              </div>
            </div>

            {{-- <input name="id" type="hidden" value="{{ $cp->id }}"> --}}





          </div>

          <div class="modal-footer">
            <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
              onclick="this.value='Saving...';">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!---end of the model --->


  <!----model3 for entry of status --->
  <div class="modal fade  model3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form method="POST" action="{{ route('store.status') }}">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="poptitle">Enter a new application status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="popcontent">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <lable>Application ststus</lable>
                  <input type="text" id="Oname" name="status" class="form-control"
                    placeholder="Enter new application status" required>
                  @error('status')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>

            </div>
          </div>

          <div class="modal-footer">
            <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
              onclick="this.value='Saving...';">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!---end of the model --->

  <!----model4 for entry of emgs status --->
  <div class="modal fade  model4" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form method="POST" action="{{ route('emgs.store.status') }}">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="poptitle">Enter a new EMGS status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="popcontent">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <lable>EMGS ststus</lable>
                  <input type="text" id="Oname" name="status" class="form-control" placeholder="Enter EMGS status"
                    required>
                  @error('status')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>

            </div>
          </div>

          <div class="modal-footer">
            <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
              onclick="this.value='Saving...';">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!---end of the model --->

  <!----model5 for entry of payment status --->
  <div class="modal fade  model5" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form method="POST" action="{{ route('payment.store.status') }}" id="orgForm" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="poptitle">Enter a new payment status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="popcontent">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <lable>Payment ststus</lable>
                  <input type="text" id="Oname" name="status" class="form-control"
                    placeholder="Enter new payment status" required>
                  @error('status')<ul class="parsley-errors-list filled" id="parsley-id-13" aria-hidden="false">
                    <li class="parsley-required text-danger">{{ $message }}</li>
                  </ul>@enderror
                </div>
              </div>

            </div>
          </div>

          <div class="modal-footer">
            <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
              onclick="this.value='Saving...';">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!---end of the model --->

  <!----this is model for role and permission add --->
  <div class="modal fade  roles" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 650px; width: 650px;">
      <div class="modal-content">
        <form method="POST" action="{{ route('role.permission') }}" id="userForm" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="poptitle">Roles & permissions</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="popcontent">



            <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="validationCustom02">Role Name</label>
                  <input type="text" class="form-control" required="" name="role" value=""
                    placeholder="Enter role name">
                </div>
              </div>



              <div class="col-md-12">
                <table width="100%" border="0" cellspacing="0" cellpadding="10"
                  style="border:1px solid #ddd; margin-bottom:20px;">
                  <tbody>
                    <tr>
                      <td height="30" colspan="2" align="left" valign="middle" bgcolor="#DEE6F8"><strong>Module
                          Permission </strong></td>
                      <td width="25%" height="15" align="left" valign="middle" bgcolor="#DEE6F8"><strong>View</strong>
                      </td>
                      <td width="25%" height="15" align="left" valign="middle" bgcolor="#DEE6F8">
                        <strong>Add</strong>
                      </td>
                      <td width="25%" height="20" align="left" valign="middle" bgcolor="#DEE6F8"><strong>Edite</strong>
                      </td>
                      <td width="25%" height="20" align="left" valign="middle" bgcolor="#DEE6F8">
                        <strong>Delete</strong>
                      </td>
                    </tr>

                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">University</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[0]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[1]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[2]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[3]['name']  }}" checked></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">University( student payment )</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[12]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[13]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[14]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[15]['name']  }}" checked></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">University(student commission)</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[16]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[17]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[18]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[19]['name']  }}" checked></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Student</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[4]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[5]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[6]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[7]['name']  }}" checked></td>
                    </tr>

                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Student(payment)</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[8]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[9]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[10]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[11]['name']  }}" checked></td>
                    </tr>

                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Courses</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[20]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[21]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[22]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[23]['name']  }}" checked></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Courses(PDf)</td>
                      <td align="left">...</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[24]['name']  }}" checked></td>
                      <td align="left">...</td>
                      <td align="left">...</td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Settings(course category)</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[28]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[29]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[30]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[31]['name']  }}" checked></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Settings(Organisation)</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[33]['name']  }}" checked></td>
                      <td align="left">...</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[33]['name']  }}" checked></td>
                      <td align="left">...</td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Settings(Payment type)</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[34]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[35]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[36]['name']  }}" checked></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[37]['name']  }}" checked></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Application</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[26]['name']  }}" checked></td>
                      <td align="left">...</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[27]['name']  }}" checked></td>
                      <td align="left">...</td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Reports</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[25]['name']  }}" checked></td>
                      <td align="left">...</td>
                      <td align="left">...</td>
                      <td align="left">...</td>
                    </tr>


                  </tbody>
                </table>

              </div>



              {{-- <div class="col-md-6">
                <label for="example-text-input" class="col-md-1 col-form-label">Active</label>
                <div class="col-md-10">
                  <input name="status" type="checkbox" id="switch3" value="1" switch="bool" checked="">
                  <label for="switch3" data-on-label="Yes" data-off-label="No" style="margin-top: 6px;"></label>
                </div>
              </div> --}}

            </div>
            <input name="editId" type="hidden" id="usereditId" value="{{ old('editId', '') }}">

            {{-- <input name="id" type="hidden" value="{{ $cp->id }}"> --}}





          </div>

          <div class="modal-footer">
            <input name="Save" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
              onclick="this.value='Saving...';">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!---end of the model --->

  <!--this is model for edite role and permissions --->
  <div class="modal fade  rolesedite" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 650px; width: 650px;">
      <div class="modal-content">
        <form method="POST" action="{{ route('role.permission.edite') }}" id="userForm" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="poptitle">Roles & permissions edite</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="popcontent">



            <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="validationCustom02">Edite Role Name</label>
                  <input type="text" class="form-control" required="" name="role" id="role" value=""
                    placeholder="Enter role name">
                </div>
              </div>



              <div class="col-md-12">
                <table width="100%" border="0" cellspacing="0" cellpadding="10"
                  style="border:1px solid #ddd; margin-bottom:20px;">
                  <tbody>
                    <tr>
                      <td height="30" colspan="2" align="left" valign="middle" bgcolor="#DEE6F8"><strong>Module
                          Permission </strong></td>
                      <td width="25%" height="15" align="left" valign="middle" bgcolor="#DEE6F8"><strong>View</strong>
                      </td>
                      <td width="25%" height="15" align="left" valign="middle" bgcolor="#DEE6F8">
                        <strong>Add</strong>
                      </td>
                      <td width="25%" height="20" align="left" valign="middle" bgcolor="#DEE6F8"><strong>Edite</strong>
                      </td>
                      <td width="25%" height="20" align="left" valign="middle" bgcolor="#DEE6F8">
                        <strong>Delete</strong>
                      </td>
                    </tr>

                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">University</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[0]['name']  }}" id="p0"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[1]['name']  }}" id="p1"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[2]['name']  }}" id="p2"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[3]['name']  }}" id="p3"></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">University( student payment )</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[12]['name']  }}" id="p12"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[13]['name']  }}" id="p13"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[14]['name']  }}" id="p14"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[15]['name']  }}" id="p15"></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">University(student commission)</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[16]['name']  }}" id="p16"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[17]['name']  }}" id="p17"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[18]['name']  }}" id="p18"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[19]['name']  }}" id="p19"></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Student</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[4]['name']  }}" id="p4"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[5]['name']  }}" id="p5"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[6]['name']  }}" id="p6"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[7]['name']  }}" id="p7"></td>
                    </tr>

                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Student(payment)</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[8]['name']  }}" id="p8"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[9]['name']  }}" id="p9"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[10]['name']  }}" id="p10"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[11]['name']  }}" id="p11"></td>
                    </tr>

                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Courses</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[20]['name']  }}" id="p20"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[21]['name']  }}" id="p21"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[22]['name']  }}" id="p22"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[23]['name']  }}" id="p23"></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Courses(PDf)</td>
                      <td align="left">...</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[24]['name']  }}" id="p24"></td>
                      <td align="left">...</td>
                      <td align="left">...</td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Settings(course category)</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[28]['name']  }}" id="p28"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[29]['name']  }}" id="p29"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[30]['name']  }}" id="p30"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[31]['name']  }}" id="p31"></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Settings(Organisation)</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[32]['name']  }}" id="p32"></td>
                      <td align="left">...</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[33]['name']  }}" id="p33"></td>
                      <td align="left">...</td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Settings(Payment type)</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[34]['name']  }}" id="p34"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[35]['name']  }}" id="p35"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[36]['name']  }}" id="p36"></td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[37]['name']  }}" id="p37"></td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Application</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[26]['name']  }}" id="p26"></td>
                      <td align="left">...</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[27]['name']  }}" id="p27"></td>
                      <td align="left">...</td>
                    </tr>
                    <tr style="border-bottom:1px solid #ddd;">
                      <td align="right" style=" font-size:13px;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </td>
                      <td align="left">Reports</td>
                      <td align="left"><input type="checkbox" name="permissions[]"
                          value="{{  $permission[25]['name']  }}" id="p25"></td>
                      <td align="left">...</td>
                      <td align="left">...</td>
                      <td align="left">...</td>
                    </tr>


                  </tbody>
                </table>

              </div>



              {{-- <div class="col-md-6">
                <label for="example-text-input" class="col-md-1 col-form-label">Active</label>
                <div class="col-md-10">
                  <input name="status" type="checkbox" id="switch3" value="1" switch="bool" checked="">
                  <label for="switch3" data-on-label="Yes" data-off-label="No" style="margin-top: 6px;"></label>
                </div>
              </div> --}}

            </div>
            <input name="id" type="hidden" id="id" value="">

            {{-- <input name="id" type="hidden" value="{{ $cp->id }}"> --}}





          </div>

          <div class="modal-footer">
            <input name="Update" type="submit" value="Save" id="savingbutton" class="btn btn-primary"
              onclick="this.value='Saving...';">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--------end of the model ---->

  <!---This is the delete model for showing ----->
  <div class="modal fade " id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header flex-column">
          {{-- <div class="icon-box">
            <i class="las la-exclamation-triangle">&#xE5CD;</i>
          </div> --}}
          <h4 class="modal-title w-100">Are you sure ?</h4>
        </div>
        <div class="modal-body">
          <p style="font-size: 20px;">Do you really want to delete these records? This process cannot be undone.</p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-dark" data-dismiss="modal" style="border-radius: 5px;">Cancel</button>
          <a class="btn btn-danger del" style="border-radius: 5px;">Delete</a>
        </div>
      </div>
    </div>
  </div>
  <!---end of the model ---->

  <!---This is the second delete model for showing ----->
  <div class="modal fade " id="DeleteModal2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header flex-column">
          {{-- <div class="icon-box">
            <i class="las la-exclamation-triangle">&#xE5CD;</i>
          </div> --}}
          <h4 class="modal-title w-100">Are you sure ?</h4>
        </div>
        <div class="modal-body">
          <p style="font-size: 20px;">Do you really want to delete these records? This process cannot be undone.</p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-dark" data-dismiss="modal" style="border-radius: 5px;">Cancel</button>
          <a class="btn btn-danger del2" style="border-radius: 5px;">Delete</a>
        </div>
      </div>
    </div>
  </div>
  <!---end of the model ---->

  <!--this is ection for delete model of all status 

  <!-This is the second delete model for showing ----->
  <div class="modal fade" id="DeleteModal3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header flex-column">
          {{-- <div class="icon-box">
            <i class="las la-exclamation-triangle">&#xE5CD;</i>
          </div> --}}
          <h4 class="modal-title w-100">Are you sure ?</h4>
        </div>
        <div class="modal-body">
          <p style="font-size: 20px;">Do you really want to delete these status ? This process cannot be undone.</p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-dark" data-dismiss="modal" style="border-radius: 5px;">Cancel</button>
          <a class="btn btn-danger del3" style="border-radius: 5px;">Delete</a>
        </div>
      </div>
    </div>
  </div>
  <!---end of the model ---->

  <!--This is the second delete model for showing ----->
  <div class="modal fade " id="DeleteModal4" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header flex-column">
          {{-- <div class="icon-box">
            <i class="las la-exclamation-triangle">&#xE5CD;</i>
          </div> --}}
          <h4 class="modal-title w-100">Are you sure ?</h4>
        </div>
        <div class="modal-body">
          <p style="font-size: 20px;">Do you really want to delete these status ? This process cannot be undone.</p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-dark" data-dismiss="modal" style="border-radius: 5px;">Cancel</button>
          <a class="btn btn-danger del4" style="border-radius: 5px;">Delete</a>
        </div>
      </div>
    </div>
  </div>
  <!---end of the model ---->

  <!--This is the second delete model for showing ----->
  <div class="modal fade " id="DeleteModal5" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header flex-column">
          {{-- <div class="icon-box">
            <i class="las la-exclamation-triangle">&#xE5CD;</i>
          </div> --}}
          <h4 class="modal-title w-100">Are you sure ?</h4>
        </div>
        <div class="modal-body">
          <p style="font-size: 20px;">Do you really want to delete these status ? This process cannot be undone.</p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-dark" data-dismiss="modal" style="border-radius: 5px;">Cancel</button>
          <a class="btn btn-danger del5" style="border-radius: 5px;">Delete</a>
        </div>
      </div>
    </div>
  </div>
  <!---end of the model ---->

  <!--This is the second delete model for showing ----->
  <div class="modal fade " id="DeleteModal6" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id=""
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header flex-column">
          {{-- <div class="icon-box">
            <i class="las la-exclamation-triangle">&#xE5CD;</i>
          </div> --}}
          <h4 class="modal-title w-100">Are you sure ?</h4>
        </div>
        <div class="modal-body">
          <p style="font-size: 18px;">Do you really want to delete these role & permissions ? This process cannot be
            undone.</p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-dark" data-dismiss="modal" style="border-radius: 5px;">Cancel</button>
          <a class="btn btn-danger del6" style="border-radius: 5px;">Delete</a>
        </div>
      </div>
    </div>
  </div>
  <!---end of the model ---->


  <div class="modelnew modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">

          <h4 class="modal-title" id="poptitle2">Right Sidebar</h4>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body" id="popcontent2">
        </div>

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->




  <style>
    .modelnew.show .modal-dialog {
      right: 0px !important;
      transform: translate(-100%, 0);
    }


    .modal.left .modal-dialog,
    .modal.right .modal-dialog {
      position: fixed;
      margin: auto;
      width: 320px;
      height: 100%;
      -webkit-transform: translate3d(0%, 0, 0);
      -ms-transform: translate3d(0%, 0, 0);
      -o-transform: translate3d(0%, 0, 0);
      transform: translate3d(0%, 0, 0);
    }



    .modal.left .modal-content,
    .modal.right .modal-content {
      height: 100%;
      overflow-y: auto;
    }

    .modal.left .modal-body,
    .modal.right .modal-body {
      padding: 15px 15px 80px;
    }

    /*Left*/
    .modal.left.fade .modal-dialog {
      left: -320px;
      -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
      -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
      -o-transition: opacity 0.3s linear, left 0.3s ease-out;
      transition: opacity 0.3s linear, left 0.3s ease-out;
    }

    .modal.left.fade.in .modal-dialog {
      left: 0;
    }

    /*Right*/
    .modal.right.fade .modal-dialog {
      right: -320px;
      -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
      -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
      -o-transition: opacity 0.3s linear, right 0.3s ease-out;
      transition: opacity 0.3s linear, right 0.3s ease-out;
    }

    .modal.right.fade.in .modal-dialog {
      right: 0;
    }









    .container-fluid {
      max-width: 100%;
      padding-left: 92px;
      padding-right: 22px;
      padding-top: 8px;
    }

    .wrapper {
      margin-top: 56px;
      padding-left: 20px;
    }

    .table>tbody>tr>td,
    .table>tfoot>tr>td,
    .table>thead>tr>td {
      padding: 10px 12px;
    }

    .container-fluid .col-md-12 .card-body {
      padding: 0px;
    }

    body,
    html {
      background-color: #fff;
    }

    .card {
      -webkit-box-shadow: 0 0 1.25rem rgb(108 118 134 / 0%);
      box-shadow: 0 0 1.25rem rgb(108 118 134 / 0%);
    }

    .topnavigation {
      padding-top: 0px !important;
    }

    #ui-datepicker-div {
      z-index: 99999999 !important;
    }
  </style>






  <div class="rnblkquery">
    <i class="fa fa-times" aria-hidden="true"
      style="position: absolute; right: 25px; top: 15px; color: #666666; font-size: 20px; cursor: pointer;"
      onclick="createqueryclose();"></i>
    <div class="querywhitebox">
      <h4 class="card-title"
        style="margin-top: 0px; margin-bottom:0px; padding: 15px; background-color: #f8f8f8; border-bottom: 1px solid #ddd; font-size: 20px; text-transform: uppercase;padding-left: 25px;">
        Add Query</h4>
      <div id="loadqueryadd" style="padding:20px;">Loading...</div>
    </div>
  </div>





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

      <a style="cursor:pointer;" href="display.html?ga=team&nighttheme=2" title="Night Theme"><i class="fa fa-moon-o"
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

  <!---tab activation logic --->

  <!---end of the ab activation logic -->

  <script>
    $(document).ready(function() {
          // Check if the success alert exists
          if ($('.headersavealert').length) {
              setTimeout(function() {
                  $('.headersavealert').slideUp(500, function() {
                      $(this).remove(); // Remove the alert from the DOM
                  });
              }, 3000); // Hide the alert after 3 seconds (adjust as needed)
          }
      });

      $('#useradd').on('click', function() {
          // Get the form element by its ID
          var form = document.getElementById('userForm');
          
          // Reset the form
          form.reset();
          $('.text-danger').html(''); 
          $('#updatephoto2').attr('src', "{{ asset('assets/assets/img/Noprofile.png') }}");

          $('.useradd').modal('show');
      });
      
      $('#addcategory').on('click', function() {
          // Get the form element by its ID
          var form = document.getElementById('catForm');
          
          // Reset the form
          form.reset();
          $('.text-danger').html(''); 
          $('#updatephoto').attr('src', "{{ asset('assets/assets/img/NoBg.jpeg') }}");
          $('.bs-example-modal-center').modal('show');
      });

      $('#roleadd').on('click', function() {
          $('.roles').modal('show');
      });


    $(document).ready(function(){
      @if($errors->has('category_name') || $errors->has('category_arabic_name') || $errors->has('category_photo'))
      $('.bs-example-modal-center').modal('show');
      @elseif($errors->has('org_name') || $errors->has('org_email') || $errors->has('org_phone') || $errors->has('org_address') ||  $errors->has('org_description') || $errors->has('logo'))
      $('.model2').modal('show');
      @elseif($errors->has('name') || $errors->has('email') || $errors->has('phone') || $errors->has('password') ||  $errors->has('photo') || $errors->has('role'))
      $('.useradd').modal('show');
      @endif
    
    });

    

      //this is for instant image showing for ptofile
      $(document).ready(function(){
            $('#photo').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatephoto').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    // end of the section

     //this is for instant image showing for ptofile
     $(document).ready(function(){
            $('#logo').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatephoto1').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    // end of the section

       //this is for instant image showing for ptofile
       $(document).ready(function(){
            $('#userphoto').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#updatephoto2').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    // end of the section

    //this is for course catefory ajax part 
    $(document).ready(function() {
          $('.catedite').on('click', function(e) {
              e.preventDefault();

              // Get the record ID from the data-id attribute
              var recordId = $(this).data('id');

             
              // AJAX request to fetch the record data based on the ID
              $.ajax({
                  url: "category-record/"+recordId, // Replace with your actual URL
                  type: 'GET',
                   // Use the appropriate HTTP method
                  dataType: 'json', // Expect JSON response
                  success: function(response) {
                      if (response.success) {
                        $('.text-danger').html(''); 
                        
                        $('#catname').val(response.data.name);
                        $('#name_arabic').val(response.data.name_arabic);
                        // Update the image source
                        $('#editId').val(response.data.id);
                        $('#updatephoto').attr('src', "{{ asset('uploads/') }}/"+ response.data.photo);
                        // $('#name').val(response.name);
                        $('.bs-example-modal-center').modal('show');

                        
                          // Populate the form fields or display the fetched data as needed
                          console.log('Fetched data:', response.data.name);
                          // Add your code to display or manipulate the data
                      }
                  },
                  error: function(xhr, status, error) {
                      // Handle AJAX errors
                      console.error('AJAX request failed:', error);
                  }
              });
          });
      });

    //end of the course category ajax part

    //this is for course catefory ajax part 
       $(document).ready(function() {
          $('.useredite').on('click', function(e) {
              e.preventDefault();

              // Get the record ID from the data-id attribute
              var recordId = $(this).data('id');

             
              // AJAX request to fetch the record data based on the ID
              $.ajax({
                  url: "user-record/"+recordId, // Replace with your actual URL
                  type: 'GET',
                   // Use the appropriate HTTP method
                  dataType: 'json', // Expect JSON response
                  success: function(response) {
                      if (response.success) {
                        $('.text-danger').html(''); 
                        
                        $('#user_name').val(response.data.name);
                        $('#user_email').val(response.data.email);
                        $('#user_phone').val(response.data.number);

                        
                        // $('#user_role').val(response.role);  

                        var targetRole = response.role; // The role value you want to select
        
                        // alert(response.role);
                        // Reset the select element by deselecting all options
                        $('#user_role').val(targetRole);

                    

                         
                        // Update the image source
                        $('#usereditId').val(response.data.id);
                        $('#updatephoto2').attr('src', "{{ asset('uploads/') }}/"+ response.data.profile);
                        // $('#name').val(response.name);
                        $('.useradd').modal('show');

                        
                          // Populate the form fields or display the fetched data as needed
                          // console.log(response.role);
                          // Add your code to display or manipulate the data
                      }
                  },
                  error: function(xhr, status, error) {
                      // Handle AJAX errors
                      console.error('AJAX request failed:', error);
                  }
              });
          });
      });
    //end of the course category ajax part

    //this is for roles & permission fetch and edite part 
    $(document).ready(function() {
      $('.roleseditebtn').on('click', function(e) {

        e.preventDefault();
        // Get the record ID from the data-id attribute
        var recordId = $(this).data('id');

        
        // AJAX request to fetch the record data based on the ID
           $.ajax({
                  url: "role-user-permissions/"+recordId, // Replace with your actual URL
                  type: 'GET',
                   // Use the appropriate HTTP method
                  dataType: 'json', // Expect JSON response
                  success: function(response) {
                      if (response.success) {

                        $('#role').val(response.role_name.name);
                        $('#id').val(response.role_name.id);
                          // Uncheck all checkboxes first
                          for (var i = 0; i < 38; i++) {
                              $(`#p${i}`).prop("checked", false);
                          }
                          $.each(response.role, function(index, role) {
                              for (var i = 0; i < 38; i++) {
                                  if ($(`#p${i}`).val() === role.name) {
                                      $(`#p${i}`).prop("checked", true);
                                  }
                              }
                          });
                        
                       $('.rolesedite').modal('show');
                      }
                  },
                  error: function(xhr, status, error) {
                      // Handle AJAX errors
                      console.error('AJAX request failed:', error);
                  }
          });


       
      });
    });
    //end of the fetching 


    //delete part model
    $(document).ready(function() { 
      $(".delete-confirm").on('click', function() {
        
        let id = $(this).attr("data-id");
        $('#DeleteModal').modal('show');
        $(".del").attr("href", id)
      });
    });

    //delete part end model

    //second delete part model
      $(document).ready(function() { 
      $(".delete-confirm2").on('click', function() {
        
        let id = $(this).attr("data-id");
        $('#DeleteModal2').modal('show');
        $(".del2").attr("href", id)
      });
    });

    //delete part end model

    //second delete 3 part model
    $(document).ready(function() { 
      $(".delete-confirm3").on('click', function() {
        
        let id = $(this).attr("data-id");
        $('#DeleteModal3').modal('show');
        $(".del3").attr("href", id)
      });
    });

    //delete part end model

    //second delete 4 part model
    $(document).ready(function() { 
      $(".delete-confirm4").on('click', function() {
        
        let id = $(this).attr("data-id");
        $('#DeleteModal4').modal('show');
        $(".del4").attr("href", id)
      });
    });

    //delete part end model

    //second delete 5 part model
    $(document).ready(function() { 
      $(".delete-confirm5").on('click', function() {
        
        let id = $(this).attr("data-id");
        $('#DeleteModal5').modal('show');
        $(".del5").attr("href", id)
      });
    });

    //delete part end model

    //second delete 6 part model
        $(document).ready(function() { 
      $(".delete-confirm6").on('click', function() {
        
        let id = $(this).attr("data-id");
        $('#DeleteModal6').modal('show');
        $(".del6").attr("href", id)
      });
    });

    //delete part end model


    //this is for ftch orginisition information ajax part 
    $(document).ready(function() {
      $('.orgedite').on('click', function(e) {

          // AJAX request to fetch the record data based on the ID
          $.ajax({
              url: "category-record/"+recordId, // Replace with your actual URL
              type: 'GET',
                // Use the appropriate HTTP method
              dataType: 'json', // Expect JSON response
              success: function(response) {
                  if (response.success) {
                    $('.text-danger').html(''); 

                  
                    
                    $('#catname').val(response.data.name);
                    $('#name_arabic').val(response.data.name_arabic);
                    // Update the image source
                    $('#editId').val(response.data.id);
                    $('#updatephoto').attr('src', "{{ asset('uploads/') }}/"+ response.data.photo);
                    // $('#name').val(response.name);
                    $('.bs-example-modal-center').modal('show');

                    
                      // Populate the form fields or display the fetched data as needed
                      console.log('Fetched data:', response.data.name);
                      // Add your code to display or manipulate the data
                  }
              },
              error: function(xhr, status, error) {
                  // Handle AJAX errors
                  console.error('AJAX request failed:', error);
              }
          });
      });
    });

    //end of the course category ajax part




  </script>









</body>

</html>