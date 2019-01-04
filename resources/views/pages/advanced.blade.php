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
</script>
<div class="buttons">
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
    <div class="sleeve  active">
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
<h2>Advanced Paycheck Stub Template</h2>
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

                  <div class="clearfix"></div>
          <label>The stub you build is the most recent. If ordering multiple stubs enter the most recent payday on the first stub.</label>
</div>
<br>
<div class="stub_zone">
<style type="text/css">
#temp {
font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
background: url(/images/quality/advanced1_w.jpg) no-repeat;
max-width: 1000px;
min-width: 918px;
background-size: 100% 692px;
height: 692px;
font-size: 16px;
font-weight: bold;
margin: 10px 0 0;
padding: 2px 2% 0 1.5%;
}
#temp p {
text-transform: none;
font-weight: bold;
line-height: 20px;
margin: 1px 0;
font-size: 13px;
padding: 0;
}

#temp input.require-error[type="text"],
#temp textarea.require-error {border:2px dashed #a94442;}
#temp select {border: 1px dashed #333;}
#temp input[type="text"],
#temp textarea  {
border: 1px dashed #333;
height: 20px;
line-height: 20px;
background: transparent;
margin: 1px 0;
font-weight: bold;
font-size: 13px;
}

#temp .lable_input {
margin: 0;
font-size: 16px;
height: 22px;
line-height: 22px;
display: inline-block;
font-weight: bold;
width: auto;
}
#temp .top_stub {
height: 251px;
}
#temp .top_left_head {
margin: 0 0 0 2%;
float: left;
width: 51%;
height: 246px;
}
#temp .top_left_head .head_stub_l {
height: 90px;
margin-bottom: 15px;
}
#temp .top_left_head #maritalStatus,
#temp .top_left_head #exemptions {
width: 60px;
height: 22px;
line-height: 22px;
padding: 0 2px;
font-size: 14px;
display: inline-block;
font-weight: bold;
background: transparent;
margin: 0 1px;
}
#temp #paymentPeriodDate,
#temp #paymentDate,
#temp #employeeId,
#temp #stubNumber,
#temp #ssn {
height: 22px;
line-height: 22px;
padding: 0;
display: inline-block;
font-weight: bold;
margin: 0 1px;
font-size: 14px;
}
#temp #stubNumber {
width: 80px;
}
#temp #paymentPeriodDate {
width: 160px;
}
#temp #employeeName,
#temp #employeeAddress1,
#temp #employeeAddress2 {
height: 22px;
line-height: 22px;
padding: 0;
margin: 1px;
}
#temp .top_right_head {
float: right;
width: 45%;
height: 246px;
}
#temp .top_right_head h3 {
font-size: 23px;
margin: 0 0 16px 0;
padding: 0;
line-height: 25px;
font-weight: bold;
}
#temp .top_right_head .head_stub_r{
height: 70px;
margin: 5px 0;
}

#temp .top_right_head .require {
display: inline-block;
}
#temp #companyName,
#temp #companyAddress1,
#temp #companyAddress2 {
width: 100%;
margin: 0 0 2px 0;
font-size: 15px;
height: 26px;
line-height: 26px;
}
#temp #companyName {
font-size: 17px;
}

#temp .dumb {
line-height: 19px;
height: auto;
min-height: 412px;
margin: 0 1.5%;
font-size: 13px;
top: 0;
}
#temp .cacl-table table {
color: #000;
width: 100%;
}
#temp .period {
margin-left: 1px;
border: 1px dashed #333;
width: 40px;
height: 19px;
line-height: 19px;
background: transparent;
}
#temp .no_select {
width: 40px;
height: 15px;
display: inline-block;
line-height: 15px;
/*text-align: center;*/
}
#temp .cacl-table td {
height: 27px;
line-height: 27px;
font-size: 13px;
font-weight: bold;
}
#temp .cacl-table td b {
font-size: 14px;
}

#temp .cacl-table .head td {
height: 19px;
line-height: 19px;
font-size: 13px;
font-weight: bold;
margin: 0;
padding: 0;
border: none;
}

.state_tr_hide, .casdi_tr_hide {
display: none;
}
#temp input[type="text"].readonly,
#temp p.readonly {
border: 0;
text-align: right;
width: 85%;
}
#temp .payhours,
#temp .advhours {
width: 85%;
}
#temp .rate {
width: 80%;
}
#temp p.payhours,
#temp p.advhours,
#temp p.rate {
margin: 0px;
border: 0px;
text-align: right;
}
#stub_wizard .centered-arrow{top:270px;}
#stub_wizard #stub_wizard_tab_3 .centered-arrow{top:55%;min-width: 170px;}
#temp .line-up{
text-align: right;
width: 85%;
/*display: block;*/
}
</style>
<div class="all_preset" id="all_preset1">
<div id="temp">
<div class="top_stub">
<div class="top_left_head">
        <div class="head_stub_l">
            <div class="left_head_stub">
                    <div class="require">
                      <input id="companyName" type="text" class="addtext input_text" name="stubs[header][companyName]" placeholder="Type Company Name Here" value="Type Company Name Here">
                  </div>
                  <div id="companyAddress">
                      <div class="require">
                          <input type="text" class="addtext input_text" id="companyAddress1" name="stubs[header][companyAddress1]" placeholder="Type Company Street Address Here" value="Type Company Street Address Here">
                      </div>
                      <div class="require">
                          <input type="text" class="addtext input_text" id="companyAddress2" name="stubs[header][companyAddress2]" placeholder="Type Company City Address Here" value="Type Company City Address Here">
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
        </div>
    </div>

    <div class="top_right_head">
        <h3>Employee Earning Statement</h3>
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
        <label class="lable_input">Employee id:
                  </label>
          <div class="require" style="width: 80px;">
              <input type="text" class="addtext input_text" id="employeeId" name="stubs[header][employeeId]" placeholder="123" value="123" maxlength="10" size="10">
          </div>
          <br>
        <label class="lable_input">Control #:
                  </label>
          <input type="text" class="addtext input_text" name="stubs[stub][1][stubNumber]" id="stubNumber" value="10015">
                <br>
        <div class="head_stub_r">
            <div class="right_head_stub">
                    <div class="require" style="width: 95%;">
                      <input type="text" class="addtext input_text" id="employeeName" name="stubs[header][employeeName]" placeholder="Type Employee Name Here" value="Type Employee Name Here">
                  </div>
                  <div class="require" style="width: 95%;">
                      <input type="text" class="addtext input_text" id="employeeAddress1" name="stubs[header][employeeAddress1]" placeholder="Type Employee Street Address Here" value="Type Employee Street Address Here">
                  </div>
                  <div class="require" style="width: 95%;">
                      <input type="text" class="addtext input_text" id="employeeAddress2" name="stubs[header][employeeAddress2]" placeholder="Type Employee City Address Here" value="Type Employee City Address Here">
                  </div>
                        </div>
        </div>
        <label class="lable_input">Social Security Number:
                  </label>
          <div class="require" style="width: 100px;">
              <input type="text" class="addtext input_text" name="stubs[header][ssn]" id="ssn" placeholder="XXX-XX-1234" value="XXX-XX-1234">
          </div>
            </div>
    <div class="clear"></div>
</div>

  <div class="dumb">
  <div class="cacl-table">
      <table celpadding="0" celspacing="0" border="0">
          <tbody><tr class="head">
              <td width="9%">Earnings</td>
              <td align="center" width="10%">Rate</td>
              <td align="center" width="7%">Hours</td>
              <td width="11%" style="padding-left:2%">This Period</td>
              <td width="5%"> </td>
              <td width="9%">Year To Day</td>
              <td width="11.5%" style="padding-left:2%;">Deductions</td>
              <td width="14%">Statutory</td>
              <td align="right" width="12%" style="padding-right:5px;">This Period</td>
              <td align="right" width="11.5%" style="padding-right:5px;">Year To Day</td>
          </tr>
          <tr>
    <td>Regular</td>
            <td align="left">
                <input type="text" name="stubs[header][payrate]" class="refreshable input_text_small rate" id="payrate" value="11.47">
            </td>
            <td align="left">
                <input type="text" name="stubs[stub][1][payhours]" class="payhours input_text_small" id="payhours">
            </td>
            <td>
                <input type="text" name="stubs[stub][1][paythis]" class="readonly input_text_small" id="paythis" readonly="readonly">
            </td>
            <td> </td>
            <td>
                <input type="text" name="stubs[stub][1][payytd]" class="readonly input_text_small" id="payytd" readonly="readonly">
            </td>

              <td> </td>
              <td>Federal Income Tax</td>
                    <td><input type="text" name="stubs[stub][1][ficafedtax]" class="readonly  input_text_small" id="ficafedtax" readonly="readonly"></td>
                <td><input type="text" name="stubs[stub][1][ytdficafedtax]" class="readonly  input_text_small" id="ytdficafedtax" readonly="readonly"></td>
                    </tr>
          <tr>
              <td>Overtime</td>
                                  <td align="left">
                  <input type="text" name="stubs[header][overtimerate]" class="refreshrate input_text_small rate" id="overtimerate">
                </td>
                <td align="left">
                  <input type="text" name="stubs[header][overtimehours]" class="advhours input_text_small" id="overtimehours">
                </td>
                <td>
                  <input type="text" name="stubs[header][overtimethis]" class="readonly refreshthis input_text_small" id="overtimethis" readonly="readonly">
                </td>
                <td>
                    <select name="stubs[header][overtimeperiod]" class="period" id="overtimeperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                </td>
                <td>
                  <input type="text" name="stubs[stub][1][overtimeytd]" class="readonly  input_text_small" id="overtimeytd" readonly="readonly">
                </td>
                                 <td> </td>
              <td>Social Security Tax</td>
                                  <td><input type="text" name="stubs[stub][1][ficasstax]" class="readonly  input_text_small" id="ficasstax" readonly="readonly"></td>
                <td><input type="text" name="stubs[stub][1][ytdficasstax]" class="readonly  input_text_small" id="ytdficasstax" readonly="readonly"></td>
                    </tr>
          <tr>
              <td>Holiday</td>
                                  <td align="left">
                  <input type="text" id="holidayrate" class="refreshrate input_text_small rate" name="stubs[header][holidayrate]">
                </td>
                <td align="left">
                  <input type="text" id="holidayhours" class="advhours input_text_small" name="stubs[header][holidayhours]">
                </td>
                <td>
                  <input type="text" id="holidaythis" class="readonly refreshthis input_text_small" name="stubs[header][holidaythis]" readonly="readonly">
                </td>
                <td>
                    <select name="stubs[header][holidayperiod]" class="period" id="holidayperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                </td>
                <td>
                  <input type="text" id="holidayytd" class="readonly  input_text_small" name="stubs[stub][1][holidayytd]" readonly="readonly">
                </td>
                                 <td> </td>
              <td>Medicare Tax</td>
                                  <td><input type="text" name="stubs[stub][1][ficamedtax]" class="readonly input_text_small" id="ficamedtax" readonly="readonly"></td>
                <td><input type="text" name="stubs[stub][1][ytdficamedtax]" class="readonly input_text_small" id="ytdficamedtax" readonly="readonly"></td>
                    </tr>
          <tr>
              <td>Vacation</td>
                                    <td align="left">
                  <input type="text" name="stubs[header][vacationrate]" class="refreshrate input_text_small rate" id="vacationrate">
                </td>
                <td align="left">
                  <input type="text" name="stubs[header][vacationhours]" class="advhours input_text_small" id="vacationhours">
                </td>
                <td>
                  <input type="text" name="stubs[header][vacationthis]" class="readonly refreshthis input_text_small" id="vacationthis" readonly="readonly">
                </td>
                <td>
                    <select name="stubs[header][vacationperiod]" class="period" id="vacationperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                </td>
                <td>
                  <input type="text" name="stubs[stub][1][vacationytd]" class="readonly input_text_small" id="vacationytd" readonly="readonly">
                </td>
                                                      <td><input type="hidden" name="stubs[header][stateTax]" id="abbrState"></td>
                <td class="state_tr state_tr_hide" id="stateAbbrId" style="font-size: 13px;font-weight: bold;">State Tax W/H</td>
                <td class="state_tr state_tr_hide"><input type="text" name="stubs[stub][1][sttax]" class="readonly input_text_small" id="sttax" readonly="readonly"></td>
                <td class="state_tr state_tr_hide"><input type="text" name="stubs[stub][1][ytdsttax]" class="readonly input_text_small" id="ytdsttax" readonly="readonly"></td>
                    </tr>
          <tr>
              <td>Bonus</td>
                                    <td align="left">
                  <input type="text" id="bonusrate" class="refreshrate input_text_small rate" name="stubs[header][bonusrate]">
                </td>
                <td align="left">
                  <input type="text" id="bonushours" class="advhours input_text_small" name="stubs[header][bonushours]">
                </td>
                <td>
                  <input type="text" id="bonusthis" class="readonly refreshthis input_text_small" name="stubs[header][bonusthis]" readonly="readonly">
                </td>
                <td>
                    <select name="stubs[header][bonusperiod]" class="period" id="bonusperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                </td>
                <td>
                  <input type="text" id="bonusytd" class="readonly input_text_small" name="stubs[stub][1][bonusytd]" readonly="readonly">
                </td>
                                <td></td>
                                   <td class="casdi_tr casdi_tr_hide" style="font-size: 13px;font-weight: bold;">California SDI Tax</td>
                <td class="casdi_tr casdi_tr_hide"><input type="text" name="stubs[stub][1][casditax]" class="readonly input_text_small" id="casditax" readonly="readonly"></td>
                <td class="casdi_tr casdi_tr_hide"><input type="text" name="stubs[stub][1][ytdcasditax]" class="readonly input_text_small" id="ytdcasditax" readonly="readonly"></td>
                            </tr>
          <tr>
              <td>Commission</td>
                                    <td align="left">
                  <input type="text" id="floatrate" class="refreshrate input_text_small rate" name="stubs[header][floatrate]">
                </td>
                <td align="left">
                  <input type="text" id="floathours" class="advhours input_text_small" name="stubs[header][floathours]">
                </td>
                <td>
                  <input type="text" id="floatthis" class="readonly refreshthis input_text_small" name="stubs[header][floatthis]" readonly="readonly">
                </td>
                <td>
                    <select name="stubs[header][floatperiod]" class="period" id="floatperiod"><option value="0"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option></select>
                </td>
                <td>
                  <input type="text" id="floatytd" class="readonly input_text_small" name="stubs[stub][1][floatytd]" readonly="readonly">
                </td>
                                 <td colspan="4"></td>
          </tr>
          <tr>
            <td colspan="7"></td>
              <td>Deduction Total</td>
                                    <td><input type="text" name="stubs[stub][1][deductions]" class="readonly input_text_small" id="deductions" readonly="readonly"></td>
                <td><input type="text" name="stubs[stub][1][ytddeductions]" class="readonly input_text_small" id="ytddeductions" readonly="readonly"></td>
                            </tr>
          <tr>
              <td colspan="10" style="height:34px;"></td>
          </tr>
          <tr>
              <td></td>
              <td><b>Gross Pay</b></td>
              <td></td>
                                    <td><input type="text" name="stubs[stub][1][total]" class="readonly input_text" id="total" readonly="readonly"></td>
                <td> </td>
                <td><input type="text" name="stubs[stub][1][ytdtotal]" class="readonly input_text" id="ytdtotal" readonly="readonly"></td>
                                <td></td>
              <td><b>Net Pay</b></td>
                                    <td><input type="text" name="stubs[stub][1][netpay]" class="readonly input_text" id="netpay" readonly="readonly"></td>
                <td><input type="text" name="stubs[stub][1][ytdnetpay]" class="readonly input_text" id="ytdnetpay" readonly="readonly"></td>
                            </tr>
      </tbody></table>
  </div>
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
                                                                                                <!-- /new hiddens input -->
                </div>
            <div class="stub" id="stub3">
                  <label>Stub 3:</label>
      <input type="text" name="stubs[stub][3][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate3">
      <input type="text" name="stubs[stub][3][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate3">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][3][payhours]" id="payhours3" style="width:60px;">
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
                                                                                                <!-- /new hiddens input -->
                </div>
            <div class="stub" id="stub4">
                  <label>Stub 4:</label>
      <input type="text" name="stubs[stub][4][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate4">
      <input type="text" name="stubs[stub][4][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate4">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][4][payhours]" id="payhours4" style="width:60px;">
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
                                                                                                <!-- /new hiddens input -->
                </div>
            <div class="stub" id="stub5">
                  <label>Stub 5:</label>
      <input type="text" name="stubs[stub][5][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate5">
      <input type="text" name="stubs[stub][5][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate5">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][5][payhours]" id="payhours5" style="width:60px;">
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
                                                                                                <!-- /new hiddens input -->
                </div>
            <div class="stub" id="stub6">
                  <label>Stub 6:</label>
      <input type="text" name="stubs[stub][6][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate6">
      <input type="text" name="stubs[stub][6][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate6">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][6][payhours]" id="payhours6" style="width:60px;">
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
                                                                                                <!-- /new hiddens input -->
                </div>
            <div class="stub" id="stub7">
                  <label>Stub 7:</label>
      <input type="text" name="stubs[stub][7][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate7">
      <input type="text" name="stubs[stub][7][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate7">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][7][payhours]" id="payhours7" style="width:60px;">
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
                                                                                                <!-- /new hiddens input -->
                </div>
            <div class="stub" id="stub8">
                  <label>Stub 8:</label>
      <input type="text" name="stubs[stub][8][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate8">
      <input type="text" name="stubs[stub][8][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate8">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][8][payhours]" id="payhours8" style="width:60px;">
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
                                                                                                <!-- /new hiddens input -->
                </div>
            <div class="stub" id="stub9">
                  <label>Stub 9:</label>
      <input type="text" name="stubs[stub][9][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate9">
      <input type="text" name="stubs[stub][9][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate9">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][9][payhours]" id="payhours9" style="width:60px;">
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
                                                                                                <!-- /new hiddens input -->
                </div>
            <div class="stub" id="stub10">
                  <label>Stub 10:</label>
      <input type="text" name="stubs[stub][10][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate10">
      <input type="text" name="stubs[stub][10][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate10">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][10][payhours]" id="payhours10" style="width:60px;">
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
                                                                                                <!-- /new hiddens input -->
                </div>
            <div class="stub" id="stub11">
                  <label>Stub 11:</label>
      <input type="text" name="stubs[stub][11][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate11">
      <input type="text" name="stubs[stub][11][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate11">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][11][payhours]" id="payhours11" style="width:60px;">
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
                                                                                                <!-- /new hiddens input -->
                </div>
            <div class="stub" id="stub12">
                  <label>Stub 12:</label>
      <input type="text" name="stubs[stub][12][paymentDate]" class="form-control paymentDate hasDatepicker" id="paymentDate12">
      <input type="text" name="stubs[stub][12][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate12">
      <label class="payhours" style="display: inline-block;">hours:
        <input class="form-control payhours" type="text" name="stubs[stub][12][payhours]" id="payhours12" style="width:60px;">
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
                                                      <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-employeeAddress2" data-field="employeeAddress2" placeholder="Type Employee City Address Here" value="Type Employee City Address Here" data-val="Type Employee City Address Here">
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
    $(function() {
        $("#btnSave").click(function() {
            html2canvas($("#widget"), {
                onrendered: function(canvas) {
                    theCanvas = canvas;
                    document.body.appendChild(canvas);

                    // Convert and download as image
                    Canvas2Image.saveAsPNG(canvas);
                    $("#img-out").append(canvas);
                    // Clean up
                    //document.body.removeChild(canvas);
                }
            });
        });
    });
</script>

<div class="clearfix"></div>
<input type="hidden" value="advanced" name="stubs[template]">
<input type="hidden" value="" name="is_wizard">
</form>
<div class="modal fade" id="PreviewStubs" tabindex="-1" role="dialog" aria-labelledby="PreviewStubs">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
  <div style="float:left;margin: 0 0 10px 0;">
    <div class="btn-group">
        <button data-dismiss="modal" aria-label="Close" class="btn btn-default" id="yw1" name="yt3" type="button">Back to edit</button>
        <button onclick="$('#stubsForm').submit();" class="btn btn-primary" id="btnSave yw2" type="submit" name="yt4">Submit information</button>
    </div>
</div>
  <div style="float:right;margin: 0 0 10px 0;">
    <div class="btn-group">
        <button data-dismiss="modal" aria-label="Close" class="btn btn-default" id="yw3" name="yt5" type="button">Back to edit</button>
        <button onclick="$('#stubsForm').submit();" class="btn btn-primary" id="btnSave yw4" type="submit" name="yt6">Submit information</button>
    </div>
</div>
  <div class="clear"></div>
</div>
<div class="modal-body">
  <div class="loader-line">
    <div class="line"></div>
  </div>
  <div data-tmpl="advanced" id="carusel_preview" class="carousel slide"><div class="carousel-inner"></div><a class="carousel-control left" href="#carusel_preview" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a><a class="carousel-control right" href="#carusel_preview" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></div>			</div>
</div>
</div>
</div>
<div class="clear"></div>
</div>
<!-- content -->
</div>

</div>
@endsection
