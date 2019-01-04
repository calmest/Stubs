@extends('layouts.app')

@section('content')
<div class="container content-zone">
    <div id="yw8"></div><div id="content">
<div id="header-stub-info">
<div class="row">
<div class="col-xs-9">
<h3 id="hdd">
Simply fill in your information in the blanks below, and INSTANTLY create your own check stubs.
The powerful paycheck calculator does all of the hard work and provides you with a link to download and print
your paycheck stub(s) immediately after purchase. Watch the demo to see for
yourself how simple it is to create your own <b>paycheck stub</b>(s).
  <button id="cmd" class="btn btn-success">generate PDF</button>
</h3>
</div>

<div class="col-xs-3">
<div class="watch-demo well">
<h2>Watch Demo</h2>
<div id="btn-modal-watch-demo">
  <img src="/images/thumbnail.jpg">

</div>
<div aria-labelledby="modal-watch-demo" id="modal-watch-demo" class="modal fade"><div class="modal-dialog"><div class="modal-content">				<div class="modal-header">
    <a class="close" data-dismiss="modal" aria-label="Close">×</a>
    <h4>Watch Demo</h4>
  </div>
  <div class="modal-body">
    <iframe width="100%" height="400" src="" frameborder="0" allowfullscreen=""></iframe>
  </div>
</div></div></div><script>
function startIntro(){
var intro = introJs();
intro.setOptions({
steps: [{
  element: '#paymentPeriod',
  intro: "Choose pay frequency."
},{
  element: '#state',
  intro: "Select state",
},{
  element: '#maritalStatus',
  intro: 'Choose marital status.',
  position: 'right'
},{
  element: '#exemptions',
  intro: "Select exemptions",
},{
  element: '#companyName',
  intro: 'Enter company name'
},
        {
    element: '#companyAddress',
    intro: 'Company address'
  },
      {
  element: '#paymentDate',
  intro: 'Last 4 and pay date'
},{
  element: '#lbhtml',
  intro: 'Enter'
}]
});

intro.start();
}
</script>

<button onclick="startIntro();" class="btn btn-success" id="yw0" name="yt0" type="button">Tour</button>		</div>
</div>
</div>
<script>
$('#btn-modal-watch-demo').click(function () {
var src = 'https://www.youtube.com/embed/N6ntVuqnI6k';
$('#modal-watch-demo').modal('show');
$('#modal-watch-demo iframe').attr('src', src);
});

$('#modal-watch-demo').on('hidden.bs.modal', function () {
$('#modal-watch-demo iframe').removeAttr('src');
});
</script><div class="buttons">
<h2>Select Your Paycheck Stub Template Below</h2>
<hr>
<br>
<div class="sleeve ">
<a href="/modern/"><img src="/images/min_modern.jpeg" width="100"></a>
<span class="insert turquoise"><b>Modern</b></span>
</div>
      <div class="sleeve  active">
  <a href="/modern2/"><img src="/images/min_modern2.jpeg" width="100"></a>
  <span class="insert turquoise2"><b>Modern2</b></span>
</div>
      <div class="sleeve ">
  <a href="/modern3/"><img src="/images/min_modern3.jpeg" width="100"></a>
  <span class="insert blue"><b>Modern3</b></span>
</div>
        <div class="sleeve ">
<a href="/classic/"><img src="/images/min_classic.jpeg" width="100"></a>
<span class="insert blue2"><b>Classic</b></span>
</div>
    <div class="sleeve ">
<a href="/classic2/"><img src="/images/min_classic2.jpeg" width="100"></a>
<span class="insert purpure"><b>Classic2</b></span>
</div>
    <div class="sleeve ">
<a href="/classic3/"><img src="/images/min_classic3.jpeg" width="100"></a>
<span class="insert purpure2"><b>Classic3</b></span>
</div>
    <div class="sleeve ">
<a href="/classic4/"><img src="/images/min_classic4.jpeg" width="100"></a>
<span class="insert purpure3"><b>Classic4</b></span>
</div>
    <div class="sleeve ">
<a href="/classic5/"><img src="/images/min_classic5.jpeg" width="100"></a>
<span class="insert pink"><b>Classic5</b></span>
</div>
    <div class="sleeve ">
<a href="/classic6/"><img src="/images/min_classic6.jpeg" width="100"></a>
<span class="insert pink2"><b>Classic6</b></span>
</div>
    <div class="sleeve ">
<a href="/advanced/"><img src="/images/min_advanced.jpeg" width="100"></a>
<span class="insert pink3"><b>Advanced</b></span>
</div>
    <div class="sleeve ">
<a href="/advanced2/"><img src="/images/min_advanced2.jpeg" width="100"></a>
<span class="insert pink4"><b>Advanced2</b></span>
</div>
    <div class="sleeve ">
<a href="/advanced3/"><img src="/images/min_advanced3.jpeg" width="100"></a>
<span class="insert red"><b>Advanced3</b></span>
</div>
      <div class="sleeve ">
  <a href="/advanced4/"><img src="/images/min_advanced4.jpeg" width="100"></a>
  <span class="insert orange"><b>Advanced4</b></span>
</div>
      </div>
</div>
<h2>Modern2 Paycheck Stub Template</h2>
<hr>
<button class="btn btn-primary" id="call-mobile-modal" name="yt1" type="button" style="display: none;">Quick options window</button><br>
<form class="form" id="stubsForm" action="/order/details" method="post"><div class="options_block well">
  @csrf
  <div class="row">
      <div class="col-sm-10">
          <div class="item-option">
            <label for="stubsAmount">How many stubs do you need?</label>
            <select class="form-control" name="stubs[header][stubsAmount]" id="stubsAmount" style="width:100px;"></select>
          </div>
          <div class="item-option">
              <label for="paymentPeriod">How are you paid?</label>
              <select class="form-control" name="stubs[header][paymentPeriod]" id="paymentPeriod" style="width:100px;" data-selected="weekly"><option value="weekly" selected="selected">Weekly</option><option value="biweekly">Biweekly</option><option value="semimonthly">Semimonthly</option><option value="monthly">Monthly</option><option value="annually">Annually</option></select>
          </div>
                              <div class="item-option">
                  <label for="state">Select State </label>
                  <select class="form-control" name="stubs[header][state]" id="state" style="width:120px;"><option value="0">Select a State</option><option value="al">Alabama</option><option value="ak">Alaska</option><option value="az">Arizona</option><option value="ar">Arkansas</option><option value="ca">California</option><option value="co">Colorado</option><option value="ct">Connecticut</option><option value="de">Delaware</option><option value="dc">District Of Columbia</option><option value="fl">Florida</option><option value="ga">Georgia</option><option value="hi">Hawaii</option><option value="id">Idaho</option><option value="il">Illinois</option><option value="in">Indiana</option><option value="ia">Iowa</option><option value="ks">Kansas</option><option value="ky">Kentucky</option><option value="la">Louisiana</option><option value="me">Maine</option><option value="md">Maryland</option><option value="ma">Massachusetts</option><option value="mi">Michigan</option><option value="mn">Minnesota</option><option value="ms">Mississippi</option><option value="mo">Missouri</option><option value="mt">Montana</option><option value="ne">Nebraska</option><option value="nv">Nevada</option><option value="nh">New Hampshire</option><option value="nj">New Jersey</option><option value="nm">New Mexico</option><option value="ny">New York</option><option value="nc">North Carolina</option><option value="nd">North Dakota</option><option value="oh">Ohio</option><option value="ok">Oklahoma</option><option value="or">Oregon</option><option value="pa">Pennsylvania</option><option value="ri">Rhode Island</option><option value="sc">South Carolina</option><option value="sd">South Dakota</option><option value="tn">Tennessee</option><option value="tx">Texas</option><option value="ut">Utah</option><option value="vt">Vermont</option><option value="va">Virginia</option><option value="wa">Washington</option><option value="wv">West Virginia</option><option value="wi">Wisconsin</option><option value="wy">Wyoming</option></select>
              </div>
                                          <div class="item-option checkbox">
              <label>
                  <input type="checkbox" id="ssn-format" value="1"> Enter entire SSN
              </label>
          </div>
                          <div class="clearfix"></div>
      </div>
      <div class="col-sm-2">
          <div class="pull-right">
              <a role="button" class="collapse-link" data-toggle="collapse" href="#collapse_options1" aria-expanded="false" aria-controls="collapse_options1">
                  Advanced options
              </a>
          </div>
          <div class="clearfix"></div>
      </div>
  </div>
  <div class="collapse" id="collapse_options1">
                      <div class="item-option">
              <label for="maritalStatus">Marital Status</label>
              <select class="form-control" name="stubs[header][maritalStatus]" id="maritalStatus" style="width:100px;"><option value="Single">Single</option><option value="Married">Married</option></select>
          </div>
                      <div class="item-option">
              <label for="exemptions">Exemptions</label>
              <select class="form-control" name="stubs[header][exemptions]" id="exemptions" style="width: 50px;"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select>
          </div>
                  <div class="item-option">
          <label for="paymentPeriodAmounts">Pay Period YTD </label>
          <select class="form-control" name="stubs[header][paymentPeriodAmounts]" id="paymentPeriodAmounts" style="width: 50px;"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
      </div>
      <div class="item-option">
          <select class="form-control" name="stubs[header][cal-switch]" id="switchCalcul" style="width:164px;"><option value="on">Auto-Calculator ON</option><option value="off">Turn OFF Auto-Calculator</option></select>
      </div>
      <div class="clearfix"></div>
  </div>
              <div class="contractor">
          <div class="btn-group">
              <label class="btn btn-primary active">
                  <input type="radio" name="stubs[header][contractorStatus]" id="employee" value="0" checked="checked"> Employee
              </label>
              <label class="btn btn-primary">
                  <input type="radio" name="stubs[header][contractorStatus]" id="contractor" value="1"> Contractor
              </label>
          </div>
      </div>
              <input type="hidden" name="stubs[stub][1][extended]" id="extended" value="0">
      <div class="extend">
          <div class="btn-group">
              <button class="btn btn-primary" id="extendedBtn" type="button" value="extended">Deposit slip(+4.99)</button>
          </div>
      </div>

              <div class="change_template_block" style="display: inline-block;">
          <input type="hidden" name="stubs[header][background]" id="background" value="0">
          <div class="background" style="display: inline-block;">
              <div class="btn-group">
                  <button class="btn btn-primary" id="backgroundBtn" type="button" value="background">Change background</button>
              </div>
          </div>
          <div id="change_template" style="display: inline-block;">
              <select name="stubs[header][templateBackground]" disabled="disabled" id="templateBackgroundModern2" class="form-control templateBackgroundAdvanced5">
                  <option value="/images/quality/modern2_w.jpg">Default</option>
                  <option value="/images/quality/modern2_bg1_w.jpg">Template 1(+2.00)</option>
                  <option value="/images/quality/modern2_bg2_w.jpg">Template 2(+2.00)</option>
                  <option value="/images/quality/modern2_bg3_w.jpg">Template 3(+2.00)</option>
                  <option value="/images/quality/modern2_bg4_w.jpg">Template 3(+2.00)</option>
                </select>
          </div>
      </div>
                      <div class="paymentTypes">
          <div class="btn-group">
              <label class="btn btn-primary active">
                  <input type="radio" name="stubs[header][paymentTypes]" id="hourly" value="hourly" checked="checked"> Hourly
              </label>
              <label class="btn btn-primary">
                  <input type="radio" name="stubs[header][paymentTypes]" id="salary" value="salary"> Salary
              </label>
          </div>
      </div>
      <div style="display: none;" id="annualPayment">
          <label>Annual: </label>
          <input class="form-control refreshable" type="text" id="annual" name="stubs[header][annual]" value="0" style="width: 120px;" disabled="disabled">
      </div>
          <div class="clearfix"></div>
              <div id="company_abbreviation">
          <label>Company abbreviation: </label>
          <input class="form-control refreshable addtext addtext2" type="text" maxlength="13" id="abbreviation" name="stubs[header][abbreviation]" value="" style="width: 120px;">
      </div>
          <label>The stub you build is the most recent. If ordering multiple stubs enter the most recent payday on the first stub.</label>
</div>
<br>
<div class="stub_zone" id="stub_zone">
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=VT323');
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
      border: 1px dashed #333;
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
  border: 1px dashed #333;
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
          <table cellspacing="0" cellpadding="0" border="0" width="100%">
              <tbody><tr>
                  <td width="21%" class="left_head_stub">
                                                      <span>SEQ:</span> <input type="text" class="addtext addtext2" id="stubNumber" name="stubs[stub][1][stubNumber]" style="width:100px;">
                                              </td>
                  <td width="58%" class="center_head_stub">
                                                      <div class="require">
                              <input id="companyName" type="text" class="addtext addtext2" name="stubs[header][companyName]" placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
                          </div>
                          <div class="require">
                              <input id="companyAddress1" type="text" class="addtext addtext2" name="stubs[header][companyAddress1]" placeholder="Type Company Street Address Here" value="Type Company Street Address Here">
                          </div>
                                              </td>
                  <td width="21%" class="right_head_stub">
                      <span class="earn_statement">Earnings Statement</span>
                  </td>
              </tr>
          </tbody></table>
      </div>

      <div class="stub_top">
          <div class="left_top_stub">
              <table cellspacing="0" cellpadding="0" border="0" width="100%">
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
                                      <input id="employeeAddress1" type="text" class="addtext addtext2" name="stubs[header][employeeAddress1]" placeholder="Type Employee Street Address Here" value="Type Employee Street Address Here" ><br>
                                  </div>
                                                              </div>
                      </td>
                  </tr>
              </tbody></table>
          </div>
          <div class="right_top_stub">
              <table cellspacing="0" cellpadding="0" border="0" width="100%">
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
                                  <input type="text" name="stubs[stub][1][paymentDate]" id="paymentDate" placeholder="11/13/2018" value="11/13/2018" >
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
              <table cellspacing="0" cellpadding="0" border="0" width="100%">
                  <tbody><tr>
                      <td width="61.8%" class="left_stub_body_title_income">INCOME</td>
                      <td width="10.7%" class="left_stub_body_title_rate">RATE</td>
                      <td width="8.5%" class="left_stub_body_title_hrs">HRS</td>
                      <td width="19%" class="left_stub_body_title_current_pay">CURRENT PAY</td>
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
              <table cellspacing="0" cellpadding="0" border="0" width="100%">
                  <tbody><tr>
                      <td width="49%" class="right_stub_body_title_deductions">DEDUCTIONS</td>
                      <td width="24%" class="right_stub_body_title_totaltax">TOTAL TAX</td>
                      <td width="24%" class="right_stub_body_title_ytdtotal">YTD TOTAL</td>
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
          <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tbody>
              <tr>
                  <td rowspan="2" width="18.5%" id="extabbreviation" class="ext_div" data-old="
                                              ">
                                              </td>
                  <td rowspan="2" width="17.3%" style="" id="extcompanyAddress1" class="ext_div" data-old="
                      Type Company Street Address Here                        ">Type Company Street Address Here</td>
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
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
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
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tbody>
                  <tr>
                      <td width="50%" class="ext_left_checkdate_text">Check Date</td>
                      <td width="50%" class="ext_right_checknumber_text">Check Number</td>
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
</div>
<br>

<div class="after-stub">
<div class="row">
<div class="col-sm-9">
            <div class="stub" id="stub2">
                    <label>Type the Pay Date and Pay Period for each additonal stub selected.</label>
        <br>
        <br>
                  <label>Stub 2:</label>
      <input type="text" name="stubs[stub][2][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate2">
      <input type="text" name="stubs[stub][2][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate2">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][2][payhours]" id="payhours2" style="width:60px;">
      </label>
                    <label style="display: inline-block;">
          <input class="extended" type="checkbox" id="extended2" name="stubs[stub][2][extended]" value="">
          Deposit slip(+4.99)
        </label>
                  <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][paythis]" id="paythis2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][total]" id="total2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][deductions]" id="deductions2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][netpay]" id="netpay2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][stubNumber]" id="stubNumber2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdtotal]" id="ytdtotal2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytddeductions]" id="ytddeductions2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdnetpay]" id="ytdnetpay2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ficamedtax]" id="ficamedtax2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ficasstax]" id="ficasstax2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ficafedtax]" id="ficafedtax2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][sttax]" id="sttax2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][casditax]" id="casditax2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdficamedtax]" id="ytdficamedtax2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdficasstax]" id="ytdficasstax2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdficafedtax]" id="ytdficafedtax2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdsttax]" id="ytdsttax2" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdcasditax]" id="ytdcasditax2" value="">
                </div>
            <div class="stub" id="stub3">
                  <label>Stub 3:</label>
      <input type="text" name="stubs[stub][3][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate3">
      <input type="text" name="stubs[stub][3][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate3">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][3][payhours]" id="payhours3" style="width:60px;">
      </label>
                    <label style="display: inline-block;">
          <input class="extended" type="checkbox" id="extended3" name="stubs[stub][3][extended]" value="">
          Deposit slip(+4.99)
        </label>
                  <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][paythis]" id="paythis3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][total]" id="total3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][deductions]" id="deductions3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][netpay]" id="netpay3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][stubNumber]" id="stubNumber3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdtotal]" id="ytdtotal3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytddeductions]" id="ytddeductions3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdnetpay]" id="ytdnetpay3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ficamedtax]" id="ficamedtax3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ficasstax]" id="ficasstax3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ficafedtax]" id="ficafedtax3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][sttax]" id="sttax3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][casditax]" id="casditax3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdficamedtax]" id="ytdficamedtax3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdficasstax]" id="ytdficasstax3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdficafedtax]" id="ytdficafedtax3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdsttax]" id="ytdsttax3" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdcasditax]" id="ytdcasditax3" value="">
                </div>
            <div class="stub" id="stub4">
                  <label>Stub 4:</label>
      <input type="text" name="stubs[stub][4][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate4">
      <input type="text" name="stubs[stub][4][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate4">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][4][payhours]" id="payhours4" style="width:60px;">
      </label>
                    <label style="display: inline-block;">
          <input class="extended" type="checkbox" id="extended4" name="stubs[stub][4][extended]" value="">
          Deposit slip(+4.99)
        </label>
                  <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][paythis]" id="paythis4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][total]" id="total4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][deductions]" id="deductions4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][netpay]" id="netpay4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][stubNumber]" id="stubNumber4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdtotal]" id="ytdtotal4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytddeductions]" id="ytddeductions4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdnetpay]" id="ytdnetpay4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ficamedtax]" id="ficamedtax4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ficasstax]" id="ficasstax4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ficafedtax]" id="ficafedtax4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][sttax]" id="sttax4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][casditax]" id="casditax4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdficamedtax]" id="ytdficamedtax4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdficasstax]" id="ytdficasstax4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdficafedtax]" id="ytdficafedtax4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdsttax]" id="ytdsttax4" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdcasditax]" id="ytdcasditax4" value="">
                </div>
            <div class="stub" id="stub5">
                  <label>Stub 5:</label>
      <input type="text" name="stubs[stub][5][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate5">
      <input type="text" name="stubs[stub][5][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate5">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][5][payhours]" id="payhours5" style="width:60px;">
      </label>
                    <label style="display: inline-block;">
          <input class="extended" type="checkbox" id="extended5" name="stubs[stub][5][extended]" value="">
          Deposit slip(+4.99)
        </label>
                  <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][paythis]" id="paythis5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][total]" id="total5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][deductions]" id="deductions5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][netpay]" id="netpay5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][stubNumber]" id="stubNumber5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdtotal]" id="ytdtotal5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytddeductions]" id="ytddeductions5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdnetpay]" id="ytdnetpay5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ficamedtax]" id="ficamedtax5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ficasstax]" id="ficasstax5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ficafedtax]" id="ficafedtax5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][sttax]" id="sttax5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][casditax]" id="casditax5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdficamedtax]" id="ytdficamedtax5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdficasstax]" id="ytdficasstax5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdficafedtax]" id="ytdficafedtax5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdsttax]" id="ytdsttax5" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdcasditax]" id="ytdcasditax5" value="">
                </div>
            <div class="stub" id="stub6">
                  <label>Stub 6:</label>
      <input type="text" name="stubs[stub][6][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate6">
      <input type="text" name="stubs[stub][6][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate6">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][6][payhours]" id="payhours6" style="width:60px;">
      </label>
                    <label style="display: inline-block;">
          <input class="extended" type="checkbox" id="extended6" name="stubs[stub][6][extended]" value="">
          Deposit slip(+4.99)
        </label>
                  <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][paythis]" id="paythis6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][total]" id="total6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][deductions]" id="deductions6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][netpay]" id="netpay6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][stubNumber]" id="stubNumber6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdtotal]" id="ytdtotal6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytddeductions]" id="ytddeductions6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdnetpay]" id="ytdnetpay6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ficamedtax]" id="ficamedtax6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ficasstax]" id="ficasstax6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ficafedtax]" id="ficafedtax6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][sttax]" id="sttax6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][casditax]" id="casditax6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdficamedtax]" id="ytdficamedtax6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdficasstax]" id="ytdficasstax6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdficafedtax]" id="ytdficafedtax6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdsttax]" id="ytdsttax6" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdcasditax]" id="ytdcasditax6" value="">
                </div>
            <div class="stub" id="stub7">
                  <label>Stub 7:</label>
      <input type="text" name="stubs[stub][7][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate7">
      <input type="text" name="stubs[stub][7][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate7">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][7][payhours]" id="payhours7" style="width:60px;">
      </label>
                    <label style="display: inline-block;">
          <input class="extended" type="checkbox" id="extended7" name="stubs[stub][7][extended]" value="">
          Deposit slip(+4.99)
        </label>
                  <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][paythis]" id="paythis7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][total]" id="total7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][deductions]" id="deductions7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][netpay]" id="netpay7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][stubNumber]" id="stubNumber7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdtotal]" id="ytdtotal7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytddeductions]" id="ytddeductions7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdnetpay]" id="ytdnetpay7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ficamedtax]" id="ficamedtax7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ficasstax]" id="ficasstax7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ficafedtax]" id="ficafedtax7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][sttax]" id="sttax7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][casditax]" id="casditax7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdficamedtax]" id="ytdficamedtax7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdficasstax]" id="ytdficasstax7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdficafedtax]" id="ytdficafedtax7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdsttax]" id="ytdsttax7" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdcasditax]" id="ytdcasditax7" value="">
                </div>
            <div class="stub" id="stub8">
                  <label>Stub 8:</label>
      <input type="text" name="stubs[stub][8][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate8">
      <input type="text" name="stubs[stub][8][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate8">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][8][payhours]" id="payhours8" style="width:60px;">
      </label>
                    <label style="display: inline-block;">
          <input class="extended" type="checkbox" id="extended8" name="stubs[stub][8][extended]" value="">
          Deposit slip(+4.99)
        </label>
                  <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][paythis]" id="paythis8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][total]" id="total8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][deductions]" id="deductions8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][netpay]" id="netpay8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][stubNumber]" id="stubNumber8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdtotal]" id="ytdtotal8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytddeductions]" id="ytddeductions8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdnetpay]" id="ytdnetpay8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ficamedtax]" id="ficamedtax8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ficasstax]" id="ficasstax8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ficafedtax]" id="ficafedtax8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][sttax]" id="sttax8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][casditax]" id="casditax8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdficamedtax]" id="ytdficamedtax8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdficasstax]" id="ytdficasstax8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdficafedtax]" id="ytdficafedtax8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdsttax]" id="ytdsttax8" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdcasditax]" id="ytdcasditax8" value="">
                </div>
            <div class="stub" id="stub9">
                  <label>Stub 9:</label>
      <input type="text" name="stubs[stub][9][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate9">
      <input type="text" name="stubs[stub][9][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate9">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][9][payhours]" id="payhours9" style="width:60px;">
      </label>
                    <label style="display: inline-block;">
          <input class="extended" type="checkbox" id="extended9" name="stubs[stub][9][extended]" value="">
          Deposit slip(+4.99)
        </label>
                  <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][paythis]" id="paythis9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][total]" id="total9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][deductions]" id="deductions9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][netpay]" id="netpay9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][stubNumber]" id="stubNumber9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdtotal]" id="ytdtotal9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytddeductions]" id="ytddeductions9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdnetpay]" id="ytdnetpay9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ficamedtax]" id="ficamedtax9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ficasstax]" id="ficasstax9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ficafedtax]" id="ficafedtax9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][sttax]" id="sttax9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][casditax]" id="casditax9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdficamedtax]" id="ytdficamedtax9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdficasstax]" id="ytdficasstax9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdficafedtax]" id="ytdficafedtax9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdsttax]" id="ytdsttax9" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdcasditax]" id="ytdcasditax9" value="">
                </div>
            <div class="stub" id="stub10">
                  <label>Stub 10:</label>
      <input type="text" name="stubs[stub][10][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate10">
      <input type="text" name="stubs[stub][10][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate10">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][10][payhours]" id="payhours10" style="width:60px;">
      </label>
                    <label style="display: inline-block;">
          <input class="extended" type="checkbox" id="extended10" name="stubs[stub][10][extended]" value="">
          Deposit slip(+4.99)
        </label>
                  <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][paythis]" id="paythis10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][total]" id="total10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][deductions]" id="deductions10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][netpay]" id="netpay10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][stubNumber]" id="stubNumber10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdtotal]" id="ytdtotal10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytddeductions]" id="ytddeductions10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdnetpay]" id="ytdnetpay10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ficamedtax]" id="ficamedtax10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ficasstax]" id="ficasstax10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ficafedtax]" id="ficafedtax10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][sttax]" id="sttax10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][casditax]" id="casditax10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdficamedtax]" id="ytdficamedtax10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdficasstax]" id="ytdficasstax10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdficafedtax]" id="ytdficafedtax10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdsttax]" id="ytdsttax10" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdcasditax]" id="ytdcasditax10" value="">
                </div>
            <div class="stub" id="stub11">
                  <label>Stub 11:</label>
      <input type="text" name="stubs[stub][11][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate11">
      <input type="text" name="stubs[stub][11][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate11">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][11][payhours]" id="payhours11" style="width:60px;">
      </label>
                    <label style="display: inline-block;">
          <input class="extended" type="checkbox" id="extended11" name="stubs[stub][11][extended]" value="">
          Deposit slip(+4.99)
        </label>
                  <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][paythis]" id="paythis11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][total]" id="total11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][deductions]" id="deductions11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][netpay]" id="netpay11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][stubNumber]" id="stubNumber11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdtotal]" id="ytdtotal11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytddeductions]" id="ytddeductions11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdnetpay]" id="ytdnetpay11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ficamedtax]" id="ficamedtax11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ficasstax]" id="ficasstax11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ficafedtax]" id="ficafedtax11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][sttax]" id="sttax11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][casditax]" id="casditax11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdficamedtax]" id="ytdficamedtax11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdficasstax]" id="ytdficasstax11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdficafedtax]" id="ytdficafedtax11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdsttax]" id="ytdsttax11" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdcasditax]" id="ytdcasditax11" value="">
                </div>
            <div class="stub" id="stub12">
                  <label>Stub 12:</label>
      <input type="text" name="stubs[stub][12][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate12">
      <input type="text" name="stubs[stub][12][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate12">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][12][payhours]" id="payhours12" style="width:60px;">
      </label>
                    <label style="display: inline-block;">
          <input class="extended" type="checkbox" id="extended12" name="stubs[stub][12][extended]" value="">
          Deposit slip(+4.99)
        </label>
                  <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][paythis]" id="paythis12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][total]" id="total12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][deductions]" id="deductions12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][netpay]" id="netpay12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][stubNumber]" id="stubNumber12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdtotal]" id="ytdtotal12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytddeductions]" id="ytddeductions12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdnetpay]" id="ytdnetpay12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ficamedtax]" id="ficamedtax12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ficasstax]" id="ficasstax12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ficafedtax]" id="ficafedtax12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][sttax]" id="sttax12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][casditax]" id="casditax12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdficamedtax]" id="ytdficamedtax12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdficasstax]" id="ytdficasstax12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdficafedtax]" id="ytdficafedtax12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdsttax]" id="ytdsttax12" value="">
      <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdcasditax]" id="ytdcasditax12" value="">
                </div>
          <br>
</div>
<div class="col-sm-3">
  <button class="pull-right btn btn-success btn-lg" id="lbhtml" name="yt2" type="button">View Your Stub</button>					<div class="clearfix"></div>
        </div>
</div>
<br>
<div class="other_hours1" style="display:none;">
All other stubs from beginning of the year will be calculated according to
<input class="payhours" id="payhoursdef" type="hidden" value="" style="display: inline-block;">
hours per each
</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" data-isrun="0" id="mobile-modal-for-stubs">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Create your stub from a mobile device by completing this form</h4>
      </div>
      <div class="modal-body">
          <div class="options_block well">
              <div class="item-option">
                  <label for="stubsAmount">How many stubs do you need?</label>
                  <select class="form-control pre-select" id="pre-stubsAmount" data-field="stubsAmount" style="width:100px;"><option value="0">1</option><option value="1">2</option><option value="2">3</option><option value="3">4</option><option value="4">5</option><option value="5">6</option><option value="6">7</option><option value="7">8</option><option value="8">9</option><option value="9">10</option><option value="10">11</option><option value="11">12</option></select>
              </div>
              <div class="item-option">
                  <label for="paymentPeriod">How are you paid?</label>
                  <select class="form-control pre-select" id="pre-paymentPeriod" data-field="paymentPeriod" style="width:100px;" data-selected="weekly"><option value="weekly" selected="selected">Weekly</option><option value="biweekly">Biweekly</option><option value="semimonthly">Semimonthly</option><option value="monthly">Monthly</option><option value="annually">Annually</option></select>
              </div>
              <div class="item-option">
                  <label for="state">Select State </label>
                  <select class="form-control pre-select" id="pre-state" data-field="state" style="width:120px;"><option value="0">Select a State</option><option value="al">Alabama</option><option value="ak">Alaska</option><option value="az">Arizona</option><option value="ar">Arkansas</option><option value="ca">California</option><option value="co">Colorado</option><option value="ct">Connecticut</option><option value="de">Delaware</option><option value="dc">District Of Columbia</option><option value="fl">Florida</option><option value="ga">Georgia</option><option value="hi">Hawaii</option><option value="id">Idaho</option><option value="il">Illinois</option><option value="in">Indiana</option><option value="ia">Iowa</option><option value="ks">Kansas</option><option value="ky">Kentucky</option><option value="la">Louisiana</option><option value="me">Maine</option><option value="md">Maryland</option><option value="ma">Massachusetts</option><option value="mi">Michigan</option><option value="mn">Minnesota</option><option value="ms">Mississippi</option><option value="mo">Missouri</option><option value="mt">Montana</option><option value="ne">Nebraska</option><option value="nv">Nevada</option><option value="nh">New Hampshire</option><option value="nj">New Jersey</option><option value="nm">New Mexico</option><option value="ny">New York</option><option value="nc">North Carolina</option><option value="nd">North Dakota</option><option value="oh">Ohio</option><option value="ok">Oklahoma</option><option value="or">Oregon</option><option value="pa">Pennsylvania</option><option value="ri">Rhode Island</option><option value="sc">South Carolina</option><option value="sd">South Dakota</option><option value="tn">Tennessee</option><option value="tx">Texas</option><option value="ut">Utah</option><option value="vt">Vermont</option><option value="va">Virginia</option><option value="wa">Washington</option><option value="wv">West Virginia</option><option value="wi">Wisconsin</option><option value="wy">Wyoming</option></select>
              </div>
                                  <div class="item-option checkbox">
                  <label>
                      <input type="checkbox" id="pre-ssn-format" value="1"> Enter entire SSN
                  </label>
              </div>
                                  <div class="clearfix"></div>
                                      <div class="contractor">
                      <div class="btn-group">
                          <label class="btn btn-primary active">
                              <input type="radio" name="pre-stubs[header][contractorStatus]" id="pre-employee" value="0" checked="checked"> Employee
                          </label>
                          <label class="btn btn-primary">
                              <input type="radio" name="pre-stubs[header][contractorStatus]" id="pre-contractor" value="1"> Contractor
                          </label>
                      </div>
                  </div>
                                      <div class="extend">
                      <div class="btn-group">
                          <button class="btn btn-primary" id="pre-extendedBtn" type="button" value="extended">Deposit slip(+4.99)</button>
                      </div>
                  </div>
                                      <div class="paymentTypes">
                      <div class="btn-group">
                          <label class="btn btn-primary active">
                              <input type="radio" name="pre-stubs[header][type]" id="pre-hourly" value="hourly" checked="checked"> Hourly
                          </label>
                          <label class="btn btn-primary">
                              <input type="radio" name="pre-stubs[header][type]" id="pre-salary" value="salary"> Salary
                          </label>
                      </div>
                  </div>
                  <div style="display: none;" id="pre-annualPayment">
                      <label>Annual: </label>
                      <input class="form-control pre-refreshable" type="text" id="pre-annual" value="0" style="width: 100px;">
                  </div>
                                  <div class="clearfix"></div>
              <div id="pre-rate">
                  <div class="item-option">
                      <label for="pre-payrate">Rate: </label>
                      <input class="form-control pre-refreshable" type="text" id="pre-payrate" value="11.47" style="width: 100px;">
                  </div>
                  <div class="item-option">
                      <label>Hours: </label>
                      <input class="form-control pre-payhours" type="text" id="pre-payhours" value="40" data-old="40" style="width: 100px;">
                  </div>
              </div>
              <div class="clearfix"></div>
              <div class="pull-right">
                  <a role="button" class="collapse-link" data-toggle="collapse" href="#collapse_options" aria-expanded="false" aria-controls="collapse_options">
                      Advanced options
                  </a>
              </div>
              <div class="clearfix"></div>
              <div class="collapse" id="collapse_options">
                  <div class="item-option">
                      <label for="maritalStatus">Marital Status</label>
                      <select class="form-control pre-select" id="pre-maritalStatus" data-field="maritalStatus" style="width:100px;"><option value="Single">Single</option><option value="Married">Married</option></select>
                  </div>
                  <div class="item-option">
                      <label for="exemptions">Exemptions</label>
                      <select class="form-control pre-select" id="pre-exemptions" data-field="exemptions" style="width: 50px;"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select>
                  </div>
                  <div class="item-option">
                      <label for="paymentPeriodAmounts">Pay Period YTD </label>
                      <select class="form-control pre-select" id="pre-paymentPeriodAmounts" data-field="paymentPeriodAmounts" style="width: 50px;"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                  </div>
                  <div class="item-option">
                      <select class="form-control pre-select" style="width:170px;" id="pre-switchCalcul" data-field="switchCalcul"><option value="on">Auto-Calculator ON</option><option value="off">Turn OFF Auto-Calculator</option></select>
                  </div>
                  <div class="clearfix"></div>
              </div>

              <div class="clearfix"></div>
                                      <div class="form-group" style="margin-bottom: 8px;">
                      <label>Company abbreviation: </label>
                      <input class="form-control addtext pre-input" data-field="abbreviation" type="text" maxlength="13" id="pre-abbreviation" value="" style="width: 120px;">
                  </div>
                                  <label>The stub you build is the most recent. If ordering multiple stubs enter the most recent payday on the first stub.</label>
              <br><br>
              <div class="form-group" style="margin-bottom: 5px;">
                  <label class="control-label" for="pre-companyName">Company Name <span class="required">*</span></label>
                  <br>
                  <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-companyName" data-field="companyName" placeholder="Type Company Name Here" value="Type Company Name Here" data-val="Type Company Name Here">
              </div>
                                      <div class="form-group" style="margin-bottom: 5px;">
                      <label class="control-label" for="pre-companyAddress1">Company Address <span class="required">*</span></label>
                      <br>
                      <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-companyAddress1" data-field="companyAddress1" placeholder="Type Company Street Address Here" value="Type Company Street Address Here" data-val="Type Company Street Address Here">
                      <br>
                                              </div>
                                  <div class="form-group" style="margin-bottom: 5px;">
                  <label class="control-label" for="pre-employeeName">Employee Name <span class="required">*</span></label>
                  <br>
                  <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-employeeName" data-field="employeeName" placeholder="Type Employee Name Here" value="Type Employee Name Here" data-val="Type Employee Name Here">
              </div>
                                      <div class="form-group" style="margin-bottom: 5px;">
                      <label class="control-label" for="pre-employeeAddress1">Employee Address <span class="required">*</span></label>
                      <br>
                      <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-employeeAddress1" data-field="employeeAddress1" placeholder="Type Employee Street Address Here" value="Type Employee Street Address Here" data-val="Type Employee Street Address Here">
                      <br>
                                              </div>
                                                      <div class="form-group" style="margin-bottom: 5px;">
                  <label class="control-label" for="pre-ssn">SSN <span class="required">*</span></label>
                  <input style="max-width: 120px;" type="text" class="form-control addtext pre-input" id="pre-ssn" data-field="ssn" placeholder="XXX-XX-1234" value="XXX-XX-1234" data-val="XXX-XX-1234">
              </div>
                                  <div class="form-group" style="margin-bottom: 5px;">
                  <label class="control-label" for="pre-paymentDate">Pay Date <span class="required">*</span></label>
                  <input style="width: 120px;" type="text" class="form-control hasDatepicker" id="pre-paymentDate" value="11/13/2018">
              </div>
                                  <div class="form-group" style="margin-bottom: 5px;">
                  <label class="control-label" for="pre-employeeId">Employee Id <span class="required">*</span></label>
                  <input style="max-width: 100px;" type="text" class="form-control addtext pre-input" id="pre-employeeId" data-field="employeeId" placeholder="123" value="123" data-val="123">
              </div>
                              </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="save-pre-form">Save options</button>
      </div>
  </div>
</div>
</div>
<script type="text/javascript">

function runQuickModal() {
  //if ($('#mobile-modal-for-stubs').attr('data-isrun') == 0 && $(window).width() < 767) {
  if ($(window).width() < 767) {
      $('#mobile-modal-for-stubs').modal('show');
  } else {
      $('#mobile-modal-for-stubs').modal('hide');
  }
}
function runQuickModalButton() {
  if ($(window).width() < 767) {
      $('#call-mobile-modal').show();
  } else {
      $('#call-mobile-modal').hide();
  }
}
$(window).resize(runQuickModalButton);
runQuickModalButton();
runQuickModal();
</script>

<script>
var doc = new jsPDF();
var specialElementHandlers = {
    '#app': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#all_preset1').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>


<div class="clearfix"></div>
<input type="hidden" value="modern2" name="stubs[template]">
<input type="hidden" value="" name="is_wizard">
</form>
@include('partials.modal')</div><!-- content -->
  </div>
</div>
@endsection
@section('footer')

@endsection('footer')
