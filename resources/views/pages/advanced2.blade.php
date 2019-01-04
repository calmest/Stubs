@extends('layouts.app')

@section('content')
<div class="container content-zone">
    <div id="yw8"></div><div id="content">
<div id="header-stub-info">
<div class="row">
<div class="col-xs-9">
<h3>
Simply fill in your information in the blanks below, and INSTANTLY create your own check stubs.
The powerful paycheck calculator does all of the hard work and provides you with a link to download and print
your paycheck stub(s) immediately after purchase. Watch the demo to see for
yourself how simple it is to create your own <b>paycheck stub</b>(s).
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
      <div class="sleeve ">
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
    <div class="sleeve  active">
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
<h2>Advanced2 Paycheck Stub Template</h2>
<hr>
<button class="btn btn-primary" id="call-mobile-modal" name="yt1" type="button" style="display: none;">Quick options window</button><br>
<form class="form" id="stubsForm" action="/order/details" method="post"><div class="options_block well">
  @csrf
  <div class="row">
      <div class="col-sm-10">
          <div class="item-option">
              <label for="stubsAmount">How many stubs do you need?</label>
              <select class="form-control" name="stubs[header][stubsAmount]" id="stubsAmount" style="width:100px;"><option value="0">1</option><option value="1">2</option><option value="2">3</option><option value="3">4</option><option value="4">5</option><option value="5">6</option><option value="6">7</option><option value="7">8</option><option value="8">9</option><option value="9">10</option><option value="10">11</option><option value="11">12</option></select>
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
          <label for="paymentPeriodAmounts">Pay Period YTD </label>
          <select class="form-control" name="stubs[header][paymentPeriodAmounts]" id="paymentPeriodAmounts" style="width: 50px;"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
      </div>
      <div class="item-option">
          <select class="form-control" name="stubs[header][cal-switch]" id="switchCalcul" style="width:164px;"><option value="on">Auto-Calculator ON</option><option value="off">Turn OFF Auto-Calculator</option></select>
      </div>
      <div class="clearfix"></div>
  </div>
              <input type="hidden" name="stubs[stub][1][extended]" id="extended" value="0">
      <div class="extend">
          <div class="btn-group">
              <button class="btn btn-primary" id="extendedBtn" type="button" value="extended">Deposit slip(+4.99)</button>
          </div>
      </div>
  
                  <div class="clearfix"></div>
          <label>The stub you build is the most recent. If ordering multiple stubs enter the most recent payday on the first stub.</label>
</div>
<br>
<div class="stub_zone">
<style type="text/css">
#temp {
font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
background: url(/images/quality/advanced2_w.jpg) no-repeat;
background-size: 100% 1160px;
max-width: 1000px;
min-width: 918px;
font-size: 16px;
margin:0;
}
#temp p {
text-transform: none;
font-weight: bold;
height: 22px;
line-height: 22px;
margin: 2px 0;
font-size: 14px;
}

.temp_easy {height: 840px;}
.temp_ext {height: 1161px;}

#temp select {
display: inline-block;
border: 1px dashed #333;
background: transparent;
height: 20px;
line-height: 20px;
margin: 2px 0;
font-size: 14px;
vertical-align: middle;
font-weight: bold;
}
#temp input.require-error[type="text"]{border:2px dashed #a94442;}
#temp input[type="text"] {
border: 1px dashed #333;
background: transparent;
font-weight: bold;
height: 22px;
line-height: 22px;
margin: 2px 0;
font-size: 14px;
}
#temp .lable_input {
font-weight: bold;
font-size: 17px;
display: inline-block;
line-height: 24px;
height: 24px;
margin: 0 5px 0 0;
}

#temp .top_stub {
height: 277px;
}
#temp .top_left_head {
float:left;
width: 55%;
margin: 50px 0 0 15px;
height: 227px;
}
#temp .top_left_head .head_stub_l{
/*height: 82px;*/
margin-bottom: 5px;
}
#temp .top_left_head .head_stub_r{
/*height: 54px;*/
margin-top: 5px;
}
.top_right_head {
float:right;
width: 41%;
margin: 50px 0 0 0;
height: 227px;
}
.top_right_head  h3{
font-weight: bold;
font-size: 26px;
margin: 0 0 58px 0;
height: 30px;
line-height: 30px;
padding: 0;
}


.taxrate,.taxrate2 {
margin-left: 1px;
border: 1px dashed #333!important;
width: 45px;
height:19px!important;
background: transparent!important;
}
.no_select {
height: 15px;
display: inline-block;
line-height: 15px;
text-align: center;
font-weight: bold;
}
.dumb2 {
margin: 0 0 121px 10px;
}
.dumb2 table{
width: 100%;
}
.dumb2 table th {
font-size: 13px;
padding: 0 0 10px 0;
margin: 0;
height: 35px;
line-height: 35px;
text-align: center;
}
#temp .dumb2 span {
font-size: 13px;
font-weight: bold;
}
.dumb2 table td {
padding-bottom: 8px;
}

.state_tr_hide, .casdi_tr_hide {
display: none;
}

#extendform {
display: none;
margin: 0px 3% 0px 4%;
width: 93%;
padding-top: 33px;
}
.ext_top_left {
float: left;
width:52%;
height: 76px;
margin-top: 10px;
font-weight: bold;
line-height: 23px;
font-size: 12px;
}
.ext_top_right th,
.ext_top_right td{
text-align: center;
height: 30px;
line-height: 30px;
text-transform: uppercase;
font-size: 15px;
font-weight: bold;
}
.ext_top_right {
text-align: center;
float: right;
width:45%;
margin-top: 13px;
}

#temp .ext_center_left {
float: left;
width: 62%;
font-size: 24px;
font-weight: bold;
margin-top: 26px;
margin-right: 3%;
}
#temp .ext_center_left tr td,
#temp .ext_center_left span{
font-weight: bold;
font-size: 21px;
}

#temp .ext_center_right {
float: right;
width: 32%;
/*margin-left: 5%;*/
text-align: center;
font-weight: bold;
}
#temp .top_right_head .require {
display: inline-block;
}
#temp #stubNumber {
width: 80px;
display: inline-block;
}
#temp #paymentPeriodDate,
#temp #paymentDate,
#temp #employeeId,
#temp #ssn {
display: inline-block;
}
#temp .top_left_head #maritalStatus,
#temp .top_left_head #exemptions {
height: 22px;
display: inline-block;
text-align: left;
line-height: 22px;
width: 100px
}

#temp #companyName {
font-size: 18px;
line-height: 26px;
height: 26px;
font-weight: bold;
}
#temp #companyAddress {
width: 100%;
}
#temp #companyAddress1,
#temp #companyAddress2 {
font-size: 16px;
line-height: 24px;
height: 24px;
font-weight: bold;
}
#stateAbbrId {
padding-left:6px;
font-weight: bolder;
font-size: 12px;
}
#temp #employeeName,
#temp #employeeAddress1{
font-size:14px;
font-weight: bold;
}
#extcompanyName {
font-size: 17px;
line-height: 32px;
}
#temp #extcompanyAddress1,
#temp #extcompanyAddress2 {
font-size: 15px;
line-height: 28px;
}
#extemployeeName,
#extemployeeAddress1 {
font-size: 14px;
line-height: 22px;
}

#stub_wizard .centered-arrow{top:287px;}
#stub_wizard #stub_wizard_tab_3 .centered-arrow{top:45%;min-width: 170px;}
#temp .text_check {text-transform: uppercase;font-size: 15px;}
#temp .text_direct {height: 36px;font-size: 21px;line-height: 36px;}
#temp .text_non {height: 50px;margin: 30px 0 0 0;line-height: 50px;font-size: 31px;text-align: left;}

#temp input[type="text"].readonly,
#temp p.readonly {
border: 0;
text-align: right;
width: 85%;
}
#temp input[type="text"].center-line-up,
#temp .center-line-up {
text-align: right;
width: 70%;
}
#temp p.input{
text-align: right;
width: 85%;
}
#temp select.period,
#temp select.period2 {
width: 25%;
}

</style>
<div class="all_preset" id="all_preset1">
<div id="temp" class="temp_easy">
<div class="top_stub">
<div class="top_left_head">
  <div class="head_stub_l">
              <div class="left_head_stub">
                <div class="require" style="width:93%;">
                    <input type="text" class="addtext addtext2" name="stubs[header][companyName]" id="companyName" placeholder="Type Company Name Here" value="Type Company Name Here">
                </div>
        <div id="companyAddress">
                    <div class="require" style="width:93%;">
                        <input type="text" class="addtext addtext2" name="stubs[header][companyAddress1]" id="companyAddress1" placeholder="Type Company Street Address Here" value="Type Company Street Address Here">
                    </div>
                    <div class="require" style="width:93%;">
                        <input type="text" class="addtext addtext2" name="stubs[header][companyAddress2]" id="companyAddress2" placeholder="Type Company City Address Here" value="Type Company City Address Here">
                    </div>
        </div>
                </div>
  </div>

        <div>
          <label class="lable_input">Taxable Marital Status:
                </label>
      <select name="stubs[header][maritalStatus]" id="maritalStatus"><option value="Single">Single</option><option value="Married">Married</option></select>
    
    <br class="clear">
    <label class="lable_input">Exemptions:
                </label>
      <select name="stubs[header][exemptions]" id="exemptions"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select>
    
    <br class="clear">
    <label class="lable_input">Control #:
                </label>
      <input type="text" class="addtext addtext2" name="stubs[stub][1][stubNumber]" id="stubNumber" style="width:25%;">
              <div class="head_stub_r">
                <div class="right_head_stub">
                  <div class="require" style="width:93%;">
                      <input type="text" class="addtext addtext2" name="stubs[header][employeeName]" id="employeeName" placeholder="Type Employee Name Here" value="Type Employee Name Here">
                  </div>
                  <div class="require" style="width:93%;">
                      <input type="text" class="addtext addtext2" name="stubs[header][employeeAddress1]" id="employeeAddress1" placeholder="Type Employee Street Address Here" value="Type Employee Street Address Here">
                  </div>
            </div>
                          </div>
        </div>
    </div>

    <div class="top_right_head">
        <h3>Employee Earnings Statement</h3>
        <label class="lable_input">Period Ending:
                  </label>
    <input type="text" name="stubs[stub][1][paymentPeriodDate]" class="input_text paymentPeriodDate" id="paymentPeriodDate">
                <br>
        <label class="lable_input">Pay Date:
                  </label>
          <div id="step7" class="require" style="width: 80px;">
              <input type="text" name="stubs[stub][1][paymentDate]" id="paymentDate" placeholder="11/13/2018" value="11/13/2018">
          </div>
                <br>
        <div style="margin-top: 20px;">
        <label class="lable_input">Employee id:
                  </label>
          <div class="require" style="width: 80px;">
              <input type="text" class="addtext input_text" id="employeeId" name="stubs[header][employeeId]" placeholder="123" value="123" maxlength="10" size="10">
          </div>
          <br>
        <label class="lable_input">Social Security Number:
                  </label>
          <div class="require" style="width: 100px;">
              <input type="text" class="addtext input_text" name="stubs[header][ssn]" id="ssn" placeholder="XXX-XX-1234" value="XXX-XX-1234">
          </div>
            </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>

<div class="dumb2">
    <div>
      <table cellpadding="0" cellspacing="0" border="0">
          <tbody><tr>
              <th width="11%">Earnings</th>
              <th width="9%">Rate</th>
              <th width="7.5%">Hours</th>
              <th width="14.5%">This Period</th>
              <th width="12%">Year To Date</th>
              <th width="12%">Deduction</th>
              <th width="13.5%">Statutory</th>
              <th width="10.5%">This Period</th>
              <th width="10%">Year To Date</th>
          </tr>
          <tr>
      <td align="left"><span>Regular</span></td>
      <td align="center">
                        <input type="text" name="stubs[header][payrate]" class="refreshable" id="payrate" style="width:90%;" value="11.47">
                    </td>
      <td align="center">
                        <input type="text" name="stubs[stub][1][payhours]" class="payhours" id="payhours" style="width:90%;">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][paythis]" class="readonly center-line-up refreshable" id="paythis" readonly="readonly">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][payytd]" class="readonly refreshable" id="payytd" readonly="readonly">
                    </td>
              <td></td>
      <td align="left" style="padding-left:6px;"><span>Federal Income Tax</span></td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][ficafedtax]" class="readonly refreshable" id="ficafedtax" readonly="readonly">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][ytdficafedtax]" class="readonly refreshable" id="ytdficafedtax" readonly="readonly">
                    </td>
          </tr>
          <tr>
            <td align="left"><span>Overtime</span></td>
            <td align="center">
                        <input type="text" name="stubs[header][overtimerate]" class="refreshrate" id="overtimerate" style="width:90%;">
                    </td>
      <td align="center">
                        <input type="text" name="stubs[header][overtimehours]" class="advhours" id="overtimehours" style="width:90%;">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[header][overtimethis]" class="readonly center-line-up refreshthis" id="overtimethis" readonly="readonly">
          <select name="stubs[header][overtimeperiod]" class="period" id="overtimeperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][overtimeytd]" class="readonly refreshable" id="overtimeytd" readonly="readonly">
                    </td>
              <td align="center"></td>
      <td align="left" style="padding-left:6px;"><span>Social Security Tax</span></td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][ficasstax]" class="readonly refreshable" id="ficasstax" readonly="readonly">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][ytdficasstax]" class="readonly refreshable" id="ytdficasstax" readonly="readonly">
                    </td>
          </tr>
          <tr>
              <td align="left"><span>Holiday</span></td>
              <td align="center">
                        <input type="text" name="stubs[header][holidayrate]" class="refreshrate" id="holidayrate" style="width:90%;">
                    </td>
      <td align="center">
                        <input type="text" name="stubs[header][holidayhours]" class="advhours" id="holidayhours" style="width:90%;">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[header][holidaythis]" class="readonly center-line-up refreshthis" id="holidaythis" readonly="readonly">
          <select name="stubs[header][holidayperiod]" class="period" id="holidayperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][holidayytd]" class="readonly refreshable" id="holidayytd" readonly="readonly">
                    </td>
              <td align="center"></td>
      <td align="left" style="padding-left:6px;"><span>Medicare Tax</span></td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][ficamedtax]" class="readonly refreshable" id="ficamedtax" readonly="readonly">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][ytdficamedtax]" class="readonly refreshable" id="ytdficamedtax" readonly="readonly">
                    </td>
          </tr>
          <tr>
              <td align="left"><span>Vacation</span></td>
              <td align="center">
                        <input type="text" name="stubs[header][vacationrate]" class="refreshrate" id="vacationrate" style="width:90%;">
                    </td>
      <td align="center">
                        <input type="text" name="stubs[header][vacationhours]" class="advhours" id="vacationhours" style="width:90%;">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[header][vacationthis]" class="readonly center-line-up refreshthis" id="vacationthis" readonly="readonly">
          <select name="stubs[header][vacationperiod]" class="period" id="vacationperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][vacationytd]" class="readonly refreshable" id="vacationytd" readonly="readonly">
                    </td>
                                       <td><input type="hidden" name="stubs[header][stateTax]" id="abbrState"></td>
        <td class="state_tr state_tr_hide" id="stateAbbrId" align="left">State Tax W/H</td>
        <td class="state_tr state_tr_hide" align="left"><input type="text" name="stubs[stub][1][sttax]" class="readonly refreshable" id="sttax" readonly="readonly"></td>
        <td class="state_tr state_tr_hide" align="left"><input type="text" name="stubs[stub][1][ytdsttax]" class="readonly refreshable" id="ytdsttax" readonly="readonly"></td>
                      </tr>
          <tr>
              <td align="left"><span>Bonus</span></td>
              <td align="center">
                        <input type="text" name="stubs[header][bonusrate]" class="refreshrate" id="bonusrate" style="width:90%;">
                    </td>
      <td align="center">
                        <input type="text" name="stubs[header][bonushours]" class="advhours" id="bonushours" style="width:90%;">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[header][bonusthis]" class="readonly center-line-up refreshthis" id="bonusthis" readonly="readonly">
          <select name="stubs[header][bonusperiod]" class="period" id="bonusperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][bonusytd]" class="readonly refreshable" id="bonusytd" readonly="readonly">
                    </td>
               <td></td>
                                       <td class="casdi_tr casdi_tr_hide" align="left" style="padding-left:6px;font-weight: bolder;font-size: 12px;">California SDI Tax</td>
                  <td class="casdi_tr casdi_tr_hide" align="left"><input type="text" name="stubs[stub][1][casditax]" class="readonly refreshable" id="casditax" readonly="readonly"></td>
                  <td class="casdi_tr casdi_tr_hide" align="left"><input type="text" name="stubs[stub][1][ytdcasditax]" class="readonly refreshable" id="ytdcasditax" readonly="readonly"></td>
                              </tr>
          <tr>
            <td align="left"><span>Float</span></td>
            <td align="center">
                        <input type="text" name="stubs[header][floatrate]" class="refreshrate" id="floatrate" style="width:90%;">
                    </td>
      <td align="center">
                        <input type="text" name="stubs[header][floathours]" class="advhours" id="floathours" style="width:90%;">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[header][floatthis]" class="readonly center-line-up refreshthis" id="floatthis" readonly="readonly">
          <select name="stubs[header][floatperiod]" class="period" id="floatperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][floatytd]" class="readonly refreshable" id="floatytd" readonly="readonly">
                    </td>
              <td colspan="4"></td>
          </tr>
          <tr>
      <td align="center" colspan="6"></td>
      <td align="left" style="padding-left:6px;"><span>Medical/Dental</span></td>
      <td align="left">
                        <input type="text" name="stubs[header][medicalrate]" class="refreshrate center-line-up" id="medicalrate">
          <select name="stubs[header][medicalperiod]" class="period2" id="medicalperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][medicalytd]" class="readonly refreshable" id="medicalytd" readonly="readonly">
                    </td>
    </tr>
    <tr>
      <td align="center" colspan="6"></td>
      <td align="left" style="padding-left:6px;"><span>Retirement</span></td>
      <td align="left">
                        <input type="text" name="stubs[header][retirerate]" class="refreshrate center-line-up" id="retirerate">
          <select name="stubs[header][retireperiod]" class="period2" id="retireperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][retireytd]" class="readonly refreshable" id="retireytd" readonly="readonly">
                    </td>
    </tr>
          <tr>
              <td align="center" colspan="6"></td>
      <td align="left" style="padding-left:6px;"><span>Deduction Total</span></td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][deductions]" class="readonly refreshable" id="deductions" readonly="readonly">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][ytddeductions]" class="readonly refreshable" id="ytddeductions" readonly="readonly">
                    </td>
          </tr>
          <tr>
              <td align="center" colspan="9" style="padding-bottom:57px"></td>
          </tr>
          <tr>
            <td></td>
              <td align="left" colspan="2"> <p style="font-weight: bold;font-size: 13px;padding-left:10px;">Gross Pay</p></td>
              <td align="left">
                        <input type="text" name="stubs[stub][1][total]" class="readonly center-line-up refreshable" id="total" readonly="readonly">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][ytdtotal]" class="readonly refreshable" id="ytdtotal" readonly="readonly">
                    </td>
              <td></td>
              <td align="left"><p style="font-weight: bold;font-size: 13px;padding-left:10px;">Net Pay</p></td>
              <td align="left">
                        <input type="text" name="stubs[stub][1][netpay]" class="readonly refreshable" id="netpay" readonly="readonly">
                    </td>
      <td align="left">
                        <input type="text" name="stubs[stub][1][ytdnetpay]" class="readonly refreshable" id="ytdnetpay" readonly="readonly">
                    </td>
          </tr>
      </tbody></table>
</div>
</div>
      <div id="extendform">
      <div class="ext_top_left">
  <div id="extcompanyName" style="font-size: 16px;line-height: 30px;" class="ext_div" data-old="
    Type Company Name Here				">Type Company Name Here</div>
  <div id="extcompanyAddress1" class="ext_div" data-old="
            Type Company Street Address Here                ">Type Company Street Address Here</div>
          <div id="extcompanyAddress2" class="ext_div" data-old="
            Type Company City Address Here                ">Type Company City Address Here</div>
</div>
      <table class="ext_top_right" cellspacing="0" cellpadding="0" border="0">
          <tbody><tr>
              <th width="50%">Check Date</th>
              <th width="50%">Check Number</th>
          </tr>
          <tr>
              <td id="extpaymentDate" class="ext_div" data-old="
                11/13/2018                    ">
                11/13/2018                    </td>
              <td id="extstubNumber" class="ext_div" data-old="
                10015                    ">10015</td>
          </tr>
      </tbody></table>
      <div class="clear"></div>
      <table class="ext_center_left" cellspacing="0" cellpadding="0" border="0">
          <tbody><tr>
              <td width="65px" style="padding-bottom: 15px;">PAY</td>
              <td>
                  <div id="extpay" style="padding-bottom: 15px;">
                                                  **<span id="extdollars">1170</span>** DOLLARS AND **<span id="extcents">44</span>** CENTS
                                              </div>
              </td>
          </tr>
          <tr>
              <td style="font-size: 16px;padding-right: 10px;">To the order of:</td>
              <td valign="top">
                  <div id="extemployeeName" class="ext_div" data-old="
                    Type Employee Name Here                        ">Type Employee Name Here</div>
            <div id="extemployeeAddress1" class="ext_div" data-old="
              Type Employee Street Address Here            			">Type Employee Street Address Here</div>
              </td>
          </tr>
      </tbody></table>
      <div class="ext_center_right">
        <div class="text_check">THIS IS NOT A CHECK</div>
          <div class="text_direct">Direct Deposit</div>
          <div class="text_non">Non-Negotiable</div>
      </div>
      <div class="clear"></div>

</div>
</div>
</div>	</div>
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
                    <!-- new hiddens input -->
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][payytd]" id="payytd2" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][overtimeytd]" id="overtimeytd2" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][holidayytd]" id="holidayytd2" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][vacationytd]" id="vacationytd2" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][bonusytd]" id="bonusytd2" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][floatytd]" id="floatytd2" value="">
                        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][medicalytd]" id="medicalytd2">
          <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][retireytd]" id="retireytd2">
                                                                                                <!-- /new hiddens input -->
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
                    <!-- new hiddens input -->
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][payytd]" id="payytd3" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][overtimeytd]" id="overtimeytd3" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][holidayytd]" id="holidayytd3" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][vacationytd]" id="vacationytd3" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][bonusytd]" id="bonusytd3" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][floatytd]" id="floatytd3" value="">
                        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][medicalytd]" id="medicalytd3">
          <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][retireytd]" id="retireytd3">
                                                                                                <!-- /new hiddens input -->
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
                    <!-- new hiddens input -->
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][payytd]" id="payytd4" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][overtimeytd]" id="overtimeytd4" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][holidayytd]" id="holidayytd4" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][vacationytd]" id="vacationytd4" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][bonusytd]" id="bonusytd4" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][floatytd]" id="floatytd4" value="">
                        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][medicalytd]" id="medicalytd4">
          <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][retireytd]" id="retireytd4">
                                                                                                <!-- /new hiddens input -->
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
                    <!-- new hiddens input -->
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][payytd]" id="payytd5" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][overtimeytd]" id="overtimeytd5" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][holidayytd]" id="holidayytd5" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][vacationytd]" id="vacationytd5" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][bonusytd]" id="bonusytd5" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][floatytd]" id="floatytd5" value="">
                        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][medicalytd]" id="medicalytd5">
          <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][retireytd]" id="retireytd5">
                                                                                                <!-- /new hiddens input -->
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
                    <!-- new hiddens input -->
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][payytd]" id="payytd6" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][overtimeytd]" id="overtimeytd6" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][holidayytd]" id="holidayytd6" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][vacationytd]" id="vacationytd6" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][bonusytd]" id="bonusytd6" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][floatytd]" id="floatytd6" value="">
                        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][medicalytd]" id="medicalytd6">
          <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][retireytd]" id="retireytd6">
                                                                                                <!-- /new hiddens input -->
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
                    <!-- new hiddens input -->
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][payytd]" id="payytd7" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][overtimeytd]" id="overtimeytd7" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][holidayytd]" id="holidayytd7" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][vacationytd]" id="vacationytd7" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][bonusytd]" id="bonusytd7" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][floatytd]" id="floatytd7" value="">
                        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][medicalytd]" id="medicalytd7">
          <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][retireytd]" id="retireytd7">
                                                                                                <!-- /new hiddens input -->
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
                    <!-- new hiddens input -->
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][payytd]" id="payytd8" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][overtimeytd]" id="overtimeytd8" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][holidayytd]" id="holidayytd8" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][vacationytd]" id="vacationytd8" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][bonusytd]" id="bonusytd8" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][floatytd]" id="floatytd8" value="">
                        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][medicalytd]" id="medicalytd8">
          <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][retireytd]" id="retireytd8">
                                                                                                <!-- /new hiddens input -->
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
                    <!-- new hiddens input -->
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][payytd]" id="payytd9" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][overtimeytd]" id="overtimeytd9" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][holidayytd]" id="holidayytd9" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][vacationytd]" id="vacationytd9" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][bonusytd]" id="bonusytd9" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][floatytd]" id="floatytd9" value="">
                        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][medicalytd]" id="medicalytd9">
          <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][retireytd]" id="retireytd9">
                                                                                                <!-- /new hiddens input -->
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
                    <!-- new hiddens input -->
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][payytd]" id="payytd10" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][overtimeytd]" id="overtimeytd10" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][holidayytd]" id="holidayytd10" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][vacationytd]" id="vacationytd10" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][bonusytd]" id="bonusytd10" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][floatytd]" id="floatytd10" value="">
                        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][medicalytd]" id="medicalytd10">
          <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][retireytd]" id="retireytd10">
                                                                                                <!-- /new hiddens input -->
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
                    <!-- new hiddens input -->
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][payytd]" id="payytd11" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][overtimeytd]" id="overtimeytd11" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][holidayytd]" id="holidayytd11" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][vacationytd]" id="vacationytd11" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][bonusytd]" id="bonusytd11" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][floatytd]" id="floatytd11" value="">
                        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][medicalytd]" id="medicalytd11">
          <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][retireytd]" id="retireytd11">
                                                                                                <!-- /new hiddens input -->
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
                    <!-- new hiddens input -->
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][payytd]" id="payytd12" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][overtimeytd]" id="overtimeytd12" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][holidayytd]" id="holidayytd12" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][vacationytd]" id="vacationytd12" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][bonusytd]" id="bonusytd12" value="">
        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][floatytd]" id="floatytd12" value="">
                        <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][medicalytd]" id="medicalytd12">
          <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][retireytd]" id="retireytd12">
                                                                                                <!-- /new hiddens input -->
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
                                      <div class="extend">
                      <div class="btn-group">
                          <button class="btn btn-primary" id="pre-extendedBtn" type="button" value="extended">Deposit slip(+4.99)</button>
                      </div>
                  </div>
                                  <div class="clearfix"></div>
              <div id="pre-rate">
                  <div class="item-option">
                      <label for="pre-payrate">Rate: </label>
                      <input class="form-control pre-refreshable" type="text" id="pre-payrate" value="11.47" style="width: 100px;">
                  </div>
                  <div class="item-option">
                      <label>Hours: </label>
                      <input class="form-control pre-payhours" type="text" id="pre-payhours" value="40.00" data-old="40.00" style="width: 100px;">
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
                                                      <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-companyAddress2" data-field="companyAddress2" placeholder="Type Company City Address Here" value="Type Company City Address Here" data-val="Type Company City Address Here">
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


<div class="clearfix"></div>
<input type="hidden" value="advanced2" name="stubs[template]">
<input type="hidden" value="" name="is_wizard">
<div class="modal fade" id="PreviewStubs" tabindex="-1" role="dialog" aria-labelledby="PreviewStubs">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
  <div style="float:left;margin: 0 0 10px 0;">
    <div class="btn-group"><button data-dismiss="modal" aria-label="Close" class="btn btn-default" id="yw1" name="yt3" type="button">Back to edit</button><button onclick="$('#stubsForm').submit();" class="btn btn-primary" id="yw2" type="submit" name="yt4">Submit information</button></div>				</div>
  <div style="float:right;margin: 0 0 10px 0;">
    <div class="btn-group"><button data-dismiss="modal" aria-label="Close" class="btn btn-default" id="yw3" name="yt5" type="button">Back to edit</button><button onclick="$('#stubsForm').submit();" class="btn btn-primary" id="yw4" type="submit" name="yt6">Submit information</button></div>				</div>
  <div class="clear"></div>
</div>
<div class="modal-body">
  <div class="loader-line">
    <div class="line"></div>
  </div>
  <div data-tmpl="advanced2" id="carusel_preview" class="carousel slide"><div class="carousel-inner"></div><a class="carousel-control left" href="#carusel_preview" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a><a class="carousel-control right" href="#carusel_preview" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></div>			</div>
</div>
</div>
</div><div class="clear"></div></div></form><!-- content -->
  </div>

        </div>
@endsection