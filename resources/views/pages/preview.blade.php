<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
    <!-- Scripts -->
       <script src="{{ asset('js/jquery-1.9.1.min.js') }}" ></script>
       <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
       <script src="{{ asset('js/bootstrap-noconflict.js') }}" ></script>
       <script src="{{ asset('js/bootbox.min.js') }}" ></script>
       <script src="{{ asset('js/notify.min.js') }}" ></script>
       <script src="{{ asset('js/jquery-ui-no-conflict.min.js') }}" ></script>
       <script src="{{ asset('js/jquery.bootstrap.wizard.min.js') }}" ></script>
       <script src="{{ asset('js/jquery.yiiactiveform.js') }}" ></script>
       <script src="{{ asset('js/jquery.metadata.js') }}"></script>
       <script src="{{ asset('js/jquery.rating.js') }}" ></script>
       <script src="{{ asset('js/intro.js') }}" ></script>
       <script src="{{ asset('js/characterLimitFields.js') }}" ></script>
       <script src="{{ asset('js/moment.min.js') }}" ></script>

       <script src="{{ asset('js/jquery.formatter.min.js') }}" ></script>
       <script src="{{ asset('js/states.js') }}" ></script>
       <script src="{{ asset('js/taxes.js') }}" ></script>
       <script src="{{ asset('js/previewStubs.js') }}" ></script>
       <script src="{{ asset('js/jspdf.min.js') }}" ></script>
       <script src="{{ asset('js/html2canvas.min.js') }}" ></script>
       <script src="{{ asset('js/html2pdf.bundle.min.js') }}" ></script>
       <script src="{{ asset('js/html2pdf.min.js') }}" ></script>
       <script src="{{ asset('js/classStubs.js') }}" ></script>
       <script src="{{ asset('js/modalStubs.js') }}"></script>
       <script src="{{ asset('js/generateStubs.js') }}" ></script>
       <script src="{{ asset('js/toastr.js') }}" ></script>
       <script src="{{ asset('js/toastr.js') }}" ></script>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

       <!-- Minified version of `es6-promise-auto` below. -->
       <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
  <link rel="stylesheet" href="">
</head>
<body id="app">
  <br>
  <br>
  <br>
  <br>


    <button id="cmd" class="btn btn-success">generate PDF</button>
  <style type="text/css">
  @import  url('https://fonts.googleapis.com/css?family=VT323');
  @font-face {
    font-family: "OCRAEXT";
    src: local("OCR A Extended") ,url(/fonts/OCRAEXT.TTF) format('truetype'),url(/fonts/OCRAExtendedRegular.otf) format('opentype');
    font-weight: normal;
    font-style: normal;
  }

  #temp {
    background: url(/images/quality/modern2_w.jpg) no-repeat;
    background-size: 100% 550px;
    max-width: 1000px;
    min-width: 918px;
    font-size: 14px;
    padding: 0;
    color: #0F8DD8;
  }
  #temp tr,#temp td, #temp th ,#temp p{
    margin: 0;
    padding: 0;
  }
        @media (max-width: 979px){
        .right_head_stub{
            font-size: 17px !important;
        }
    }
    .clear {clear: both;}
    .temp_easy {height: 425px;}
    .temp_ext {height: 550px;}
    #temp input.require-error[type="text"]{border:2px dashed #a94442;}
    #temp input[type="text"] {
        height: 20px;
        line-height: 20px;
        border: none;
        background: transparent;
        margin: 1px 0;
        color: #B55047;
        font-weight: normal
    }
    #stub_wizard .centered-arrow {top:280px;}
  #stub_wizard #stub_wizard_tab_3 .centered-arrow {top:45%;min-width: 170px;}
  #extendform {
    display: none;
    margin: 3px 2% 0 2%;
    height: 114px;
    font-weight: normal;
    color: #7d7d7d;
  }
  #temp .head_stub{
    margin: 0 2%;
    height: 47px;
  }
  #temp .head_stub table{
    height: 47px;
  }
  #temp .head_stub .left_head_stub input{
    font-family: 'VT323', monospace;        font-size: 31px;
    height: 25px;
    color: #ff0000;
  }
  #temp .head_stub .left_head_stub p#stubNumber{
    display: inline-block;
    font-family: 'VT323', monospace;        font-size: 31px;
    height: 25px;
    color: #ff0000;
  }
  #temp .head_stub .left_head_stub{
        }
  #temp .head_stub .left_head_stub span:nth-child(1){
    color: #006699;
    font-size: 28px;
    font-family: "OCRAEXT";    }
  #temp .head_stub .center_head_stub .require{
    width: 70%;
    margin: 0 auto;
  }
  #temp .head_stub .center_head_stub p#companyName,#temp .head_stub .center_head_stub p#companyAddress1{
    font-family: 'VT323', monospace;        color: #000000;
    font-size: 21px;
    text-align: center;
  }
  #temp .head_stub .center_head_stub p#companyAddress1{
    font-size: 14px;
    padding-top: 2px;            }
  #temp .head_stub .center_head_stub input{
    font-family: 'VT323', monospace;        color: #000000;
    font-size: 18px;
    text-align: center;
  }
  #temp .head_stub .center_head_stub .require:nth-child(1) input{
    text-transform: uppercase;
  }
  #temp .head_stub .right_head_stub{
    text-align: right;
    font-family: "OCRAEXT";        text-transform: uppercase;
    color: #006699;
    font-weight: bold;
    font-size: 18px;
    vertical-align: bottom;        padding-bottom: 2px;
  }
  #temp .stub_top{
    margin: 0 2% 0 2.5%;
    height: 72px;
  }
  #temp .left_top_stub{
    float: left;
    width: 57.5%;
    height: 72px;
  }
  #temp .left_top_stub_employee_text{
    font-family: "OCRAEXT";        text-transform: uppercase;
    font-weight: bold;
    color: #006699;
    margin-top: 8px;        font-size: 12px;
    margin-bottom: 5px;    }
  #temp .left_top_stub_input input#employeeName,#temp .left_top_stub_input p#employeeName{
    text-transform: uppercase;
  }
  #temp .left_top_stub_input input#employeeName,#temp .left_top_stub_input input#employeeAddress1 {
    color: #000000;
    font-size: 16px;
    height: 20px;
    border: none;
    /*background: transparent;*/
    font-weight: normal;
    font-family: 'VT323', monospace;    }
  #temp .left_top_stub_input p#employeeName,#temp .left_top_stub_input p#employeeAddress1{
    font-family: 'VT323', monospace;        color: #000000;
    font-size: 18px;
    line-height: 18px;
  }
  #temp .right_top_stub{
    float: right;
    width: 42.5%;
    height: 72px;
  }
  #temp .right_top_stub .right_top_stub_title_snn,
  #temp .right_top_stub .right_top_stub_title_reportingperiod,
  #temp .right_top_stub .right_top_stub_title_paydate,
  #temp .right_top_stub .right_top_stub_title_employee{
    font-family: "OCRAEXT";        text-align: center;
    text-transform: uppercase;
    font-size: 9px;
    font-weight: bold;
    height: 19px;
    vertical-align: middle;
    color: #006699;
    padding-top: 3px;    }
  #temp .right_top_stub .right_top_stub_title_paydate{
    color: white;
  }
  #temp .right_top_stub .right_top_stub_input_ssn,
  #temp .right_top_stub .right_top_stub_input_reportingperiod,
  #temp .right_top_stub .right_top_stub_input_paydate,
  #temp .right_top_stub .right_top_stub_input_title_employee
  {
    height: 52px;
    vertical-align: top;
  }
  #temp .right_top_stub .right_top_stub_input_ssn input,
  #temp .right_top_stub .right_top_stub_input_reportingperiod input,
  #temp .right_top_stub .right_top_stub_input_paydate input,
  #temp .right_top_stub .right_top_stub_input_title_employee input
  {
    font-family: 'VT323', monospace;        font-size: 14px;
    color: #000000;
    margin-left: 5px;
    margin-top: 5px;
  }
  #temp .right_top_stub .right_top_stub_input_ssn p#ssn,
  #temp .right_top_stub .right_top_stub_input_reportingperiod p#paymentPeriodDate,
  #temp .right_top_stub .right_top_stub_input_paydate p#paymentDate,
  #temp .right_top_stub .right_top_stub_input_title_employee p#employeeId{
    font-family: 'VT323', monospace;        >font-size: 14px;        color: #000000;
    text-align: center;
    padding-top: 5px;    }
  #temp .right_top_stub .right_top_stub_input_reportingperiod p#paymentPeriodDate{
        }
  #temp .stub_body .left_stub_body{
    float: left;
    width: 57.8%;
    height: 246px;
  }
  #temp .stub_body .right_stub_body{
    float: right;
    width: 42.2%;
    height: 246px;
  }
  #temp .stub_body{
    margin: 0 2%;
    height: 246px;
    position: relative;
  }
  #temp .stub_body .left_stub_body .left_stub_body_title_income,
  #temp .stub_body .left_stub_body .left_stub_body_title_rate,
  #temp .stub_body .left_stub_body .left_stub_body_title_hrs,
  #temp .stub_body .left_stub_body .left_stub_body_title_current_pay{
    font-family: "OCRAEXT";        color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: bold;
    height: 22px;

  }
  #temp .stub_body .left_stub_body .left_stub_body_title_rate,
  #temp .stub_body .left_stub_body .left_stub_body_title_hrs,
  #temp .stub_body .left_stub_body .left_stub_body_title_current_pay{
    text-align: center;
  }
  #temp .stub_body .left_stub_body .left_stub_body_title_income{
    padding-left: 4px;
  }
  #temp .left_stub_body_pay_inform_text{
    color: #000000;
    text-transform: uppercase;
    /*font-weight: bold;*/
    font-size: 18px;
    font-family: 'VT323', monospace;        padding-left: 5px;
    padding-top: 2px;        vertical-align: top;
  }
  #temp .left_stub_body_pay_inform_payrate,
  #temp .left_stub_body_pay_inform_payhours,
  #temp .left_stub_body_pay_inform_paythis
  {
    text-align: center;
    padding-top: 2px;
  }
  #temp .left_stub_body_pay_inform_payrate input,
  #temp .left_stub_body_pay_inform_payrate p,
  #temp .payrate_pdf_right,
  #temp .payrate_pdf_left
  {
    margin: 0 6px;
    color: #000000;
    text-transform: uppercase;
    /*font-weight: bold;*/
    font-size: 18px;
    font-family: 'VT323', monospace;    }
  #temp .left_stub_body_pay_inform_payhours p,
  #temp .left_stub_body_pay_inform_payhours input{
    margin: 0 5px;
    color: #000000;
    text-transform: uppercase;
    /*font-weight: bold;*/
    font-size: 18px;
    font-family: 'VT323', monospace;        vertical-align: top;
  }
  #temp .left_stub_body_pay_inform_paythis,
  #temp .left_stub_body_pay_inform_paythis input{
    margin: 0 5px;
    color: #000000;
    text-transform: uppercase;
    /*font-weight: bold;*/
    font-size: 18px;
    font-family: 'VT323', monospace;    }
  #temp .payrate_pdf_left{
    float: left;
    width: 50%;
    margin: 0;
  }
  #temp .payrate_pdf_right{
    float: right;
    width: 50%;
    margin: 0;
  }
  #temp .paythis_pdf_left{
    float: left;
    width: 52%;
    margin: 0;
    text-align: right;
  }
  #temp .paythis_pdf_right{
    float: right;
    width: 40%;
    padding-left: 8px;
    text-align: left;
  }
  #temp .stub_body .right_stub_body_title_deductions,
  #temp .stub_body .right_stub_body_title_totaltax,
  #temp .stub_body .right_stub_body_title_ytdtotal
  {
    font-family: "OCRAEXT";        font-size: 14px;
    color: #006699;
    font-weight: bold;
    height: 22px;
  }
  #temp .stub_body .right_stub_body_title_deductions{
    padding-left: 5px;
  }
  #temp .stub_body .right_stub_body_title_totaltax,
  #temp .stub_body .right_stub_body_title_ytdtotal
  {
    text-align: center;
  }
  #temp .stub_body .right_stub_body input{
    border:none;
    width: 95%;
  }
  #temp .stub_body .right_stub_body_statutorydeductions_text{
    font-family: "OCRAEXT";        font-size: 14px;
    color: #006699;
    text-transform: uppercase;
    font-weight: bold;
    padding: 5px 0 3px 5px;
  }
  #temp .state_tr_hide,
  #temp .casdi_tr_hide{
    display: none;
  }
  #temp .stub_body .right_stub_body_ficamedicare_text,
  #temp .stub_body .right_stub_body_ficasocialsecurity_text,
  #temp .stub_body .right_stub_body_federaltax_text,
  #temp .stub_body .right_stub_body_stateTax_text,
  #temp .stub_body .right_stub_body_california_text,
  #temp .stub_body .right_stub_body_california_text{
    text-transform: uppercase;
    font-size: 12px;
    color: #006699;
    font-family: "OCRAEXT";        padding: 0 2px 0 6px;
    height: 22px;
  }
  #temp .stub_body .right_stub_body_ficamedicare_totaltax,
  #temp .stub_body .right_stub_body_ficasocialsecurity_totaltax,
  #temp .stub_body .right_stub_body_federaltax_totaltax,
  #temp .stub_body .right_stub_body_california_totaltax,
  #temp .stub_body .right_stub_body_stateTax_totaltax{
    padding: 0 2px 0 3px;
    font-family: 'VT323', monospace;        font-size: 12px;
    color: #000000;
  }
  #temp .stub_body .right_stub_body_ficamedicare_totaltax input,
  #temp .stub_body .right_stub_body_ficasocialsecurity_totaltax input,
  #temp .stub_body .right_stub_body_federaltax_totaltax input,
  #temp .stub_body .right_stub_body_california_totaltax input,
  #temp .stub_body .right_stub_body_stateTax_totaltax input,
  #temp .stub_body .right_stub_body_ficamedicare_totaltax p,
  #temp .stub_body .right_stub_body_ficasocialsecurity_totaltax p,
  #temp .stub_body .right_stub_body_federaltax_totaltax p,
  #temp .stub_body .right_stub_body_california_totaltax p,
  #temp .stub_body .right_stub_body_stateTax_totaltax p{
    font-size: 18px;
    color: #000000;
    width: 87% !important;        font-family: 'VT323', monospace;        text-align: right;
  }

  #temp .stub_body .right_stub_body_ficamedicare_ytdtotal input,
  #temp .stub_body .right_stub_body_ficasocialsecurity_ytdtotal input,
  #temp .stub_body .right_stub_body_federaltax_ytdtotal input,
  #temp .stub_body .right_stub_body_california_ytdtotal input,
  #temp .stub_body .right_stub_body_stateTax_ytdtotal input,
  #temp .stub_body .right_stub_body_ficamedicare_ytdtotal p,
  #temp .stub_body .right_stub_body_ficasocialsecurity_ytdtotal p,
  #temp .stub_body .right_stub_body_federaltax_ytdtotal p,
  #temp .stub_body .right_stub_body_california_ytdtotal p,
  #temp .stub_body .right_stub_body_stateTax_ytdtotal p{
    font-size: 18px;
    color: #000000;
    width: 84% !important;        font-family: 'VT323', monospace;        text-align: right;
  }
  #temp .totaltax_pdf_left{
    float: left;
    width: 65%;
    text-align: right;
    font-size: 18px;
    font-family: 'VT323', monospace;        color: #000000;
  }
  #temp .ytdtotal_pdf_left{
    float: left;
    width: 63%;
    text-align: right;
    font-size: 18px;
    font-family: 'VT323', monospace;        color: #000000;
  }
  #temp .totaltax_pdf_right{
    float: right;
    width: 26%;
    text-align: left;
    font-size: 18px;
    font-family: 'VT323', monospace;        color: #000000;
  }
  #temp .ytdtotal_pdf_right{
    float: right;
    width: 27%;
    text-align: left;
    font-size: 18px;
    font-family: 'VT323', monospace;        color: #000000;
  }
  #ext2abbreviation{
    position: absolute;
    color: #b3bfc5;
    font-size: 38px;
    top: 105px;
    left: 167px;
    font-family: "OCRAEXT";    }
  #temp .stub_total{
    margin: 0 2%;
    height: 47px;
  }
  #temp .right_stub_total_titel_ytdgross,
  #temp .right_stub_total_titel_ytdnetpay,
  #temp .right_stub_total_titel_netpay{
    color: white;
  }

  #temp .right_stub_total_titel_ytddeductions,
  #temp .right_stub_total_titel_total,
  #temp .right_stub_total_titel_deductions{
    color: #006699;
  }

  #temp .right_stub_total_titel_ytdgross,
  #temp .right_stub_total_titel_ytddeductions,
  #temp .right_stub_total_titel_ytdnetpay,
  #temp .right_stub_total_titel_total,
  #temp .right_stub_total_titel_deductions,
  #temp .right_stub_total_titel_netpay{
    text-align: center;
    font-family: "OCRAEXT";        font-size: 11px;
    font-weight: bold;
    height: 22px;
    vertical-align: middle;
  }
  #temp .right_stub_total_value_ytdgross p,
  #temp .right_stub_total_value_ytddeductions p,
  #temp .right_stub_total_value_ytdnetpay p,
  #temp .right_stub_total_value_total p,
  #temp .right_stub_total_value_deductions p,
  #temp .right_stub_total_value_netpay p,
  #temp .right_stub_total_value_ytdgross input,
  #temp .right_stub_total_value_ytddeductions input,
  #temp .right_stub_total_value_ytdnetpay input,
  #temp .right_stub_total_value_total input,
  #temp .right_stub_total_value_deductions input,
  #temp .right_stub_total_value_netpay input{
    font-family: 'VT323', monospace;        color: #000;
    text-align: center;
    font-size: 20px;
    border: none;
  }
  #temp .right_stub_total_value_ytdgross,
  #temp .right_stub_total_value_ytddeductions,
  #temp .right_stub_total_value_ytdnetpay,
  #temp .right_stub_total_value_total,
  #temp .right_stub_total_value_deductions,
  #temp .right_stub_total_value_netpay{
    height: 26px;
  }
  #temp #extcompanyAddress1{
    vertical-align: bottom;
    padding-bottom: 4px;
    text-align: right;
    font-size: 12px;
    padding-right: 5px;
    padding-left: 5px;
    font-family: "OCRAEXT";        line-height: 12px;    }
  #temp #extabbreviation{
    font-size: 20px;
    padding-left: 4px;
    vertical-align: bottom;
    padding-bottom: 4px;
    line-height: 20px;        font-family: "OCRAEXT";    }
  #temp .extendform_text{
    font-family: "OCRAEXT";        font-size: 10px;
    text-align: center;
    padding-top: 3px;
    margin-bottom: 16px;
    color: #006699;
  }
  #temp .ext_left {
    float: left;
    width: 69%;
    margin: 0px 0 0 0;
    height: 84px;
    padding: 27px 0px 0 12px;    }
  #temp .ext_left table {
    width: 100%;
  }
  #temp .ext_left_payinform_text{
    font-family: "OCRAEXT";        color: #fff;
    padding-left: 8px;
    font-size: 14px;
    height: 20px;
    width: 18%;
    font-weight: bold;
  }
  #temp .ext_right {
    float: right;
    width: 25.3%;
    margin-left: 3%;
    margin-right: 2.5%;
    margin-top: 0.5%;    }
  #temp .ext_left_payinform_paytext{
    padding-left: 15px;
    font-family: 'VT323', monospace;        color: #000;
    font-size: 18px;
  }
  #temp .extendform_text_whom_left{
    font-family: "OCRAEXT";        text-transform: uppercase;
    font-size: 10px;
    padding-left: 9px;
    padding-top: 7px;        color: #165C94;
    vertical-align: top;
  }
  #temp .extendform_text_whom_right{
    font-size: 12px;
    color: #201600;
    font-family: 'VT323', monospace;        padding-top: 7px;        height: 31px;
  }
  #temp .extendform_text_whom_right #extemployeeName{
    text-transform: uppercase;
        }
  #temp .ext_left_checkdate_text,
  #temp .ext_right_checknumber_text{
    font-family: "OCRAEXT";        text-transform: uppercase;
    font-size: 11px;
    color: #006699;
    padding-top: 4px;        font-weight: bold;
    text-align: center;
    /*height: 12px;*/
  }
  #temp .ext_right_checknumber_numb .ext_div,#temp .ext_left_checkdate_date .ext_div{
    font-family: 'VT323', monospace;        color: #000;
    text-align: center;
    padding-top: 2px;        height: 14px;
    font-size: 14px;
    vertical-align: top;
        }
  #temp .text_check {
    color: #006699;
    font-weight: normal;
    text-transform: uppercase;
    text-align: center;
    font-size: 8px;
    font-family: "OCRAEXT";        padding-top: 3px;    }
  #temp .text_non {
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 12px;
    font-family: "OCRAEXT";        color: #999999;
    padding-top: 2px;        vertical-align: top;
    height: 14px;
        line-height: 11px;
  }
  #temp .text_direct {
    color: #006699;
    text-transform: uppercase;
    text-align: center;
    font-weight: bold;
    font-size: 17px;
    height: 16px;
    font-family: OCRAEXT;        padding-top: 2px;
                }
  #temp .require input[type="text"], #temp .require textarea {
    width: 100%;
    background: rgba(255, 200, 79, 0.38);
  }
  </style>

  <div class="all_preset" id="all_preset1">
            <div class="temp_easy" id="temp">

        <div class="head_stub">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody><tr>
                    <td class="left_head_stub" width="21%">
                                                        <span>SEQ:</span> <input type="text" class="addtext addtext2" id="stubNumber" name="stubs[stub][1][stubNumber]" style="width:100px;">
                                                </td>
                    <td class="center_head_stub" width="58%">
                                                        <div class="require">
                                <input id="companyName" type="text" class="addtext addtext2" name="stubs[header][companyName]" placeholder="{{ AUth::user()->companyname }}" value="{{ AUth::user()->companyname }}" disabled="on">
                            </div>
                            <div class="require">
                                <input id="companyAddress1" type="text" class="addtext addtext2" name="stubs[header][companyAddress1]" placeholder="{{ AUth::user()->companystreetaddress }}" value="{{ AUth::user()->companystreetaddress }}">
                            </div>
                                                </td>
                    <td class="right_head_stub" width="21%">
                        <span class="earn_statement">Earnings Statement</span>
                    </td>
                </tr>
            </tbody></table>
        </div>

        <div class="stub_top">
            <div class="left_top_stub">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                        <td>
                            <div class="left_top_stub_employee_text">
                                                                        <span class="employee_word">Employee</span>
                                                                    name / address
                            </div>
                            <div class="left_top_stub_input">
                                                                        <div class="require" style="width:95%;">
                                        <input id="employeeName" type="text" class="addtext addtext2" name="stubs[header][employeeName]" placeholder="Type Employee Name Here" value="Type Employee Name Here"><br>
                                    </div>
                                    <div class="require" style="width:95%;">
                                        <input id="employeeAddress1" type="text" class="addtext addtext2" name="stubs[header][employeeAddress1]" placeholder="Type Employee Street Address Here" value="Type Employee Street Address Here"><br>
                                    </div>
                                                                </div>
                        </td>
                    </tr>
                </tbody></table>
            </div>
            <div class="right_top_stub">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                        <td class="right_top_stub_title_snn" width="26.5%">ssn</td>
                        <td class="right_top_stub_title_reportingperiod" width="29%">reporting period</td>
                        <td class="right_top_stub_title_paydate" width="25%">pay date</td>
                        <td class="right_top_stub_title_employee" width="">
                                                                <span class="employee_word">employee</span>
                                                            id
                        </td>
                    </tr>
                    <tr>
                        <td class="right_top_stub_input_ssn">
                                                                <div class="require" style="width:79%;">
                                    <input type="text" class="addtext" name="stubs[header][ssn]" id="ssn" placeholder="XXX-XX-1234" value="XXX-XX-1234">
                                </div>
                                                        </td>
                        <td class="right_top_stub_input_reportingperiod">
                                                                <input type="text" style="width: 90%;" name="stubs[stub][1][paymentPeriodDate]" id="paymentPeriodDate" class="paymentPeriodDate">
                                                        </td>
                        <td class="right_top_stub_input_paydate">
                                                                <div class="require" style="width:76%;">
                                    <input type="text" name="stubs[stub][1][paymentDate]" id="paymentDate" placeholder="11/13/2018" value="11/13/2018">
                                </div>
                                                        </td>
                        <td class="right_top_stub_input_title_employee">
                                                                <div class="require" style="width:80%;">
                                    <input type="text" class="addtext" name="stubs[header][employeeId]" id="employeeId" placeholder="123" value="123" maxlength="10" size="10">
                                </div>
                                                        </td>
                    </tr>
                </tbody></table>
            </div>
            <div class="clear"></div>
        </div>

        <div class="stub_body">
            <div id="ext2abbreviation" class="ext_div" data-old=""></div>
            <div class="left_stub_body">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                        <td class="left_stub_body_title_income" width="61.8%">INCOME</td>
                        <td class="left_stub_body_title_rate" width="10.7%">RATE</td>
                        <td class="left_stub_body_title_hrs" width="8.5%">HRS</td>
                        <td class="left_stub_body_title_current_pay" width="19%">CURRENT PAY</td>
                    </tr>
                    <tr>
                        <td class="left_stub_body_pay_inform_text">Gross Earnings</td>
                        <td class="left_stub_body_pay_inform_payrate">
                                                                <input type="text" name="stubs[header][payrate]" class="refreshable" id="payrate" style="width:80%;" value="11.47">
                                                        </td>
                        <td class="left_stub_body_pay_inform_payhours">
                                                                <input type="text" name="stubs[stub][1][payhours]" class="payhours" id="payhours" style="width:80%;">
                                                        </td>
                        <td class="left_stub_body_pay_inform_paythis">
                                                                <input type="text" name="stubs[stub][1][paythis]" id="paythis" class="readonly refreshable" style="width:92%;" readonly="readonly">
                                                        </td>
                    </tr>
                </tbody></table>
            </div>

            <div class="right_stub_body">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                        <td class="right_stub_body_title_deductions" width="49%">DEDUCTIONS</td>
                        <td class="right_stub_body_title_totaltax" width="24%">TOTAL TAX</td>
                        <td class="right_stub_body_title_ytdtotal" width="24%">YTD TOTAL</td>
                    </tr>
                    <tr>
                        <td class="right_stub_body_statutorydeductions_text">Statutory Deductions</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="right_stub_body_ficamedicare_text">Fica - Medicare</td>
                                                        <td class="right_stub_body_ficamedicare_totaltax">
                                <input type="text" name="stubs[stub][1][ficamedtax]" class="readonly line-up refreshable" id="ficamedtax" readonly="readonly">
                            </td>
                            <td class="right_stub_body_ficamedicare_ytdtotal">
                                <input type="text" name="stubs[stub][1][ytdficamedtax]" class="readonly line-up refreshable" id="ytdficamedtax" readonly="readonly">
                            </td>
                                                </tr>
                    <tr>
                        <td class="right_stub_body_ficasocialsecurity_text">Fica - Social Security</td>
                                                        <td class="right_stub_body_ficasocialsecurity_totaltax">
                                <input type="text" name="stubs[stub][1][ficasstax]" class="readonly line-up refreshable" id="ficasstax" readonly="readonly">
                            </td>
                            <td class="right_stub_body_ficasocialsecurity_ytdtotal">
                                <input type="text" name="stubs[stub][1][ytdficasstax]" class="readonly line-up refreshable" id="ytdficasstax" readonly="readonly">
                            </td>
                                                </tr>
                    <tr>
                        <td class="right_stub_body_federaltax_text">Federal Tax</td>
                                                        <td class="right_stub_body_federaltax_totaltax">
                                <input type="text" name="stubs[stub][1][ficafedtax]" class="readonly line-up refreshable" id="ficafedtax" readonly="readonly">
                            </td>
                            <td class="right_stub_body_federaltax_ytdtotal">
                                <input type="text" name="stubs[stub][1][ytdficafedtax]" class="readonly line-up refreshable" id="ytdficafedtax" readonly="readonly">
                            </td>
                                                </tr>
                                                <tr class="state_tr state_tr_hide">
                            <input type="hidden" name="stubs[header][stateTax]" id="abbrState">
                            <td class="right_stub_body_stateTax_text">State Tax W/H</td>
                            <td class="right_stub_body_stateTax_totaltax"><input type="text" name="stubs[stub][1][sttax]" class="readonly line-up refreshable" id="sttax" readonly="readonly"></td>
                            <td class="right_stub_body_stateTax_ytdtotal"><input type="text" name="stubs[stub][1][ytdsttax]" class="readonly line-up refreshable" id="ytdsttax" readonly="readonly"></td>
                        </tr>

                        <tr class="casdi_tr casdi_tr_hide">
                            <td class="right_stub_body_california_text">California SDI Tax</td>
                            <td class="right_stub_body_california_totaltax"><input type="text" name="stubs[stub][1][casditax]" class="readonly line-up refreshable" id="casditax" readonly="readonly"></td>
                            <td class="right_stub_body_california_ytdtotal"><input type="text" name="stubs[stub][1][ytdcasditax]" class="readonly line-up refreshable" id="ytdcasditax" readonly="readonly"></td>
                        </tr>
                                        </tbody></table>
            </div>
        </div>

        <div class="stub_total">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <tr>
                    <td rowspan="2" id="extabbreviation" class="ext_div" data-old="
                                                " width="18.5%">
                                                </td>
                    <td rowspan="2" style="" id="extcompanyAddress1" class="ext_div" data-old="
                        Type Company Street Address Here                        " width="17.3%">Type Company Street Address Here</td>
                    <td class="right_stub_total_titel_ytdgross" width="11.2%" height="19px">YTD GROSS</td>
                    <td class="right_stub_total_titel_ytddeductions" width="11%" height="19px">YTD DEDUCTIONS</td>
                    <td class="right_stub_total_titel_ytdnetpay" width="10.8%" height="19px">YTD NET PAY</td>
                    <td class="right_stub_total_titel_total" width="10.7%" height="19px">TOTAL</td>
                    <td class="right_stub_total_titel_deductions" width="10.3%" height="19px">DEDUCTIONS</td>
                    <td class="right_stub_total_titel_netpay" height="19px">NET PAY</td>
                </tr>
                <tr>
                                                <td class="right_stub_total_value_ytdgross"><input type="text" name="stubs[stub][1][ytdtotal]" class="readonly refreshable" id="ytdtotal" style="width:98%;" readonly="readonly"></td>
                        <td class="right_stub_total_value_ytddeductions"><input type="text" name="stubs[stub][1][ytddeductions]" class="readonly refreshable" id="ytddeductions" style="width: 98%;" readonly="readonly"></td>
                        <td class="right_stub_total_value_ytdnetpay"><input type="text" name="stubs[stub][1][ytdnetpay]" class="readonly refreshable" id="ytdnetpay" style="width: 98%;" readonly="readonly"></td>
                        <td class="right_stub_total_value_total"><input type="text" name="stubs[stub][1][total]" class="readonly refreshable" id="total" style="width: 98%;" readonly="readonly"></td>
                        <td class="right_stub_total_value_deductions"><input type="text" name="stubs[stub][1][deductions]" class="readonly refreshable" id="deductions" style="width: 98%;" readonly="readonly"></td>
                        <td class="right_stub_total_value_netpay"><input type="text" name="stubs[stub][1][netpay]" id="netpay" class="readonly refreshable" style="width: 98%;" readonly="readonly"></td>
                                        </tr>
                </tbody>
            </table>
        </div>





        <div id="extendform">
            <div class="extendform_text">STATEMENT OF EARNINGS AND DEDUCTIONS • DETACH AND KEEP FOR YOUR RECORDS</div>
            <div class="ext_left">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr>
                        <td class="ext_left_payinform_text">PAY</td>
                        <td class="ext_left_payinform_paytext" id="extpay">
                                                                **<span id="extdollars">369</span>** DOLLARS AND **<span id="extcents">78</span>** CENTS
                                                        </td>
                    </tr>
                    <tr>
                        <td class="extendform_text_whom_left">To the order of:</td>
                        <td class="extendform_text_whom_right">
                            <div id="extemployeeName" class="ext_div" data-old="
                                Type Employee Name Here                                ">Type Employee Name Here</div>
                            <div id="extemployeeAddress1" class="ext_div" data-old="
                                Type Employee Street Address Here                                ">Type Employee Street Address Here</div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="ext_right">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr>
                        <td class="ext_left_checkdate_text" width="50%">Check Date</td>
                        <td class="ext_right_checknumber_text" width="50%">Check Number</td>
                    </tr>
                    <tr>
                        <td class="ext_left_checkdate_date">
                            <div class="ext_div" id="extpaymentDate" data-old="
                                11/13/2018                                ">
                                11/13/2018                                </div>
                        </td>
                        <td class="ext_right_checknumber_numb">
                            <div class="ext_div" id="extstubNumber" data-old="
                                10015                                ">10015</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text_check">THIS IS NOT A CHECK</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text_non">Non Negotiable</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text_direct">VOID</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
  </div>

  <script>
var doc = new jsPDF();
var specialElementHandlers = {
    '#app': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>
</body>
</html>

