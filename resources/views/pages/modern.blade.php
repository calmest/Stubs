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
    <img src="/images/thumbnail.jpg" />
</div>
<div aria-labelledby="modal-watch-demo" id="modal-watch-demo" class="modal fade"><div class="modal-dialog"><div class="modal-content">
  <div class="modal-header">
        <a class="close" data-dismiss="modal" aria-label="Close">&times;</a>
        <h4>Watch Demo</h4>
    </div>
    <div class="modal-body">
        <iframe width="100%" height="400" src="" frameborder="0" allowfullscreen></iframe>
    </div>
        </div>
  </div>
</div>
<script>
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
        },{
            element: '#companyAddress',
            intro: 'Company address'
        },{
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

<button onclick="startIntro();" class="btn btn-success" id="yw0" name="yt0" type="button">Tour</button>
</div>
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
<div class="sleeve  active">
<a href="/modern/"><img src="/images/min_modern.jpeg" width="100"/></a>
<span class="insert turquoise"><b>Modern</b></span>
</div>
<div class="sleeve ">
<a href="/modern2/"><img src="/images/min_modern2.jpeg" width="100"/></a>
<span class="insert turquoise2"><b>Modern2</b></span>
</div>
<div class="sleeve ">
<a href="/modern3/"><img src="/images/min_modern3.jpeg" width="100"/></a>
<span class="insert blue"><b>Modern3</b></span>
</div>
<div class="sleeve ">
<a href="/classic/"><img src="/images/min_classic.jpeg" width="100"/></a>
<span class="insert blue2"><b>Classic</b></span>
</div>
<div class="sleeve ">
<a href="/classic2/"><img src="/images/min_classic2.jpeg" width="100"/></a>
<span class="insert purpure"><b>Classic2</b></span>
</div>
<div class="sleeve ">
<a href="/classic3/"><img src="/images/min_classic3.jpeg" width="100"/></a>
<span class="insert purpure2"><b>Classic3</b></span>
</div>
<div class="sleeve ">
<a href="/classic4/"><img src="/images/min_classic4.jpeg" width="100"/></a>
<span class="insert purpure3"><b>Classic4</b></span>
</div>
<div class="sleeve ">
<a href="/classic5/"><img src="/images/min_classic5.jpeg" width="100"/></a>
<span class="insert pink"><b>Classic5</b></span>
</div>
<div class="sleeve ">
<a href="/classic6/"><img src="/images/min_classic6.jpeg" width="100"/></a>
<span class="insert pink2"><b>Classic6</b></span>
</div>
<div class="sleeve ">
<a href="/advanced/"><img src="/images/min_advanced.jpeg" width="100"/></a>
<span class="insert pink3"><b>Advanced</b></span>
</div>
<div class="sleeve ">
<a href="/advanced2/"><img src="/images/min_advanced2.jpeg" width="100"/></a>
<span class="insert pink4"><b>Advanced2</b></span>
</div>
<div class="sleeve ">
<a href="/advanced3/"><img src="/images/min_advanced3.jpeg" width="100"/></a>
<span class="insert red"><b>Advanced3</b></span>
</div>
<div class="sleeve ">
<a href="/advanced4/"><img src="/images/min_advanced4.jpeg" width="100"/></a>
<span class="insert orange"><b>Advanced4</b></span>
</div>
</div>
</div>
<h2>Modern Paycheck Stub Template</h2>
<hr>
<button class="btn btn-primary" id="call-mobile-modal" name="yt1" type="button" style="display: none;">Quick options window</button><br>
<form class="form" id="stubsForm" action="/order/details/" method="post"><div class="options_block well">
    @csrf
<div class="row">
<div class="col-sm-10">
    <div class="item-option">
        <label for="stubsAmount">How many stubs do you need?</label>
        <select class="form-control" name="stubs[header][stubsAmount]" id="stubsAmount" style="width:100px;"></select>
    </div>
    <div class="item-option">
        <label for="paymentPeriod">How are you paid?</label>
        <select class="form-control" name="stubs[header][paymentPeriod]" id="paymentPeriod" style="width:100px;" data-selected="weekly"></select>
    </div>
    <div class="item-option">
        <label for="state">Select State </label>
        <select class="form-control" name="stubs[header][state]" id="state" style="width:120px;"></select>
    </div>
    <div class="item-option checkbox">
        <label>
            <input type="checkbox" id="ssn-format"  value="1"> Enter entire SSN
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
        <select class="form-control" name="stubs[header][maritalStatus]" id="maritalStatus" style="width:100px;"></select>
    </div>
        <div class="item-option">
        <label for="exemptions">Exemptions</label>
        <select class="form-control" name="stubs[header][exemptions]" id="exemptions" style="width: 50px;"></select>
    </div>
    <div class="item-option">
    <label for="paymentPeriodAmounts">Pay Period YTD </label>
    <select class="form-control" name="stubs[header][paymentPeriodAmounts]" id="paymentPeriodAmounts" style="width: 50px;"></select>
</div>
<div class="item-option">
    <select class="form-control" name="stubs[header][cal-switch]" id="switchCalcul" style="width:164px;"></select>
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
    <input class="form-control refreshable" type="text" id="annual" name="stubs[header][annual]" value="0" style="width: 120px;">
</div>
    <div class="clearfix"></div>
    <label>The stub you build is the most recent. If ordering multiple stubs enter the most recent payday on the first stub.</label>
</div>
<br>
<div class="stub_zone">
<style type="text/css">
#temp {
font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
background: url(/images/quality/modern_w.jpg) no-repeat;
background-size: 100% 575px;
max-width: 1000px;
min-width: 918px;
font-size: 14px;
padding: 0;
color: #0F8DD8;
}
.temp_easy {height: 420px;}
.temp_ext {height: 575px;}
#temp input.require-error[type="text"]{border:2px dashed #a94442;}
#temp input[type="text"] {
font-size: 15px;
height: 20px;
line-height: 20px;
border: 1px dashed #333;
background: transparent;
margin: 1px 0;
color: #8e8d8d;
font-weight: normal
}

#temp p {
color: #8e8d8d;
font-size: 15px;
height: 20px;
line-height: 20px;
font-weight: normal;
margin: 1px 0;
}

#temp .head_stub {
height: 70px;
padding: 0 2% 0 2%;
}
#temp .left_head_stub {
margin-top: 10px;
float: left;
width: 57%;
}
#temp .right_head_stub {
margin-top: 10px;
float: right;
width: 37%;
text-align: right;
}
#temp .right_head_stub span.earn_statement {
display: block;
height: 32px;
line-height: 32px;
font-size: 23px;
text-transform: uppercase;
font-weight: bold;
margin: 0;
padding: 0;
}
#temp .stub_top {
height: 81px;
margin: 0 2.5% 0 3%;
}
#temp .stub_top table,
#temp .stub_body table,
#temp .stub_total table {
width: 100%;
}
#temp .stub_top th {
text-transform: uppercase;
text-align: center;
height: 35px;
line-height: 30px;
font-size: 12px;
vertical-align: top;    }
#temp .stub_top td {
color: #8e8d8d;
font-weight: normal;
}
#temp .stub_body {
margin: 0 2.5%;
height: 194px;
}
#temp .stub_body th,
#temp .stub_total th {
text-transform: uppercase;
text-align: center;
height: 40px;
line-height: 35px;
color: #fff;
font-size: 17px;
vertical-align: top;    }
#temp .stub_total th {
height: 38px;
}
#temp .stub_body td {
height: 25px;
vertical-align: top;    }
#temp .stub_total {
margin: 0 2.5%;
height: 64px;
}
#temp .stub_total td {
text-align: center;
}

#temp .stub_body td.td_label {
font-size: 15px;
font-weight: normal;
text-transform: uppercase;
color: inherit;
}
#temp #stubNumber{
display: inline-block;
color: #8e8d8d;
font-weight: normal;
}
#temp #ssn,
#temp #paymentPeriodDate,
#temp #paymentDate,
#temp #employeeId {}
#temp #companyAddress1 {
height: 24px;
line-height: 24px;
padding: 0 3px;
font-size: 19px;
font-weight: normal;
color: inherit;
}
#temp #companyName {
height: 30px;
line-height: 30px;
padding: 0 3px;
font-size: 22px;
text-transform: uppercase;
font-weight: bold;
color: inherit;
}
#temp #employeeName,
#temp #employeeAddress1 {}

#extendform {
display: none;
margin: 44px 5% 0 5%;
height: 105px;
font-weight: normal;
color: #7d7d7d;
}
#temp .ext_price_zone td {
height: 30px;
}
#temp .ext_price_zone label {
display: inline-block;
color: #0173B1;
text-transform: uppercase;
padding: 0;
margin: 0;
font-size: 18px;
font-weight: bold;
}
#temp .ext_price_zone span {
text-transform: uppercase;
display: inline-block;
font-size: 17px;
padding:0;
}
#temp .ext_order_zone {
margin:  0;
}
#temp .ext_order_zone label {
display: inline-block;
color: #0173B1;
text-transform: uppercase;
line-height: 32px;
margin: 0;
font-size: 14px;
}
#temp .ext_order_zone span {
font-size: 12px;
}

#temp .ext_left {
float: left;
width: 67%;
margin: 32px 0 0 0;
height: 69px;
}
#temp .ext_left table {
width: 100%;
}

#temp .ext_right {
float: right;
width: 32%;
}
#temp .ext_check_zone {
width: 100%;
text-align: center;
font-size: 13px;
height: 34px;
}
#temp .ext_check_zone th {
color: #0173B1;
font-weight: normal;
text-transform: uppercase;
text-align: center;
font-size: 12px;
line-height: 18px;
height: 18px;
}
#temp .ext_check_zone td {
line-height: 16px;
font-size: 11px;
height: 16px;
}
#temp .text_check {
color: #0173B1;
font-weight: normal;
text-transform: uppercase;
text-align: center;
font-size: 10px;
line-height: 12px;
height: 12px;
}
#temp .text_non {
text-align: center;
text-transform: uppercase;
font-weight: bold;
font-size: 13px;
line-height: 17px;
height: 17px;
}
#temp .text_direct {
color: #0173B1;
text-transform: uppercase;
text-align: center;
font-weight: bold;
font-size: 18px;
line-height: 30px;
height: 30px;
}

#temp .state_tr,
#temp .casdi_tr {
height: 25px;
}
#temp .state_tr_hide td,
#temp .casdi_tr_hide td {
display: none;
}
#temp input[type="text"].readonly {
border: 0;
text-align: center;
}
#stub_wizard .centered-arrow {top:280px;}
#stub_wizard #stub_wizard_tab_3 .centered-arrow {top:45%;min-width: 170px;}
#temp  input[type="text"].line-up,
#temp .line-up {
text-align: right;
width: 80%;
display: block;
}
</style>

<div class="all_preset" id="all_preset1">
<div class="temp_easy" id="temp">

<div class="head_stub">
<div class="left_head_stub">
        <div class="require">
            <input id="companyName" type="text" class="addtext addtext2" name="stubs[header][companyName]" placeholder="Type Company Name Here" value="Type Company Name Here">
        </div>
        <div class="require" id="companyAddress">
            <input id="companyAddress1" type="text" class="addtext" name="stubs[header][companyAddress1]" placeholder="Type Company Street Address Here" value="Type Company Street Address Here">
        </div>
</div>
<div class="right_head_stub">
        # <input type="text" class="addtext addtext2" id="stubNumber" name="stubs[stub][1][stubNumber]" style="width:55px;">
        <span class="earn_statement">Earnings Statement</span>
</div>
<div class="clear"></div>
</div>

<div class="stub_top">
<div>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <th width="37%" style="font-size: 18px;">
                <span class="employee_word">Employee</span>
                name / address
            </th>
            <th width="13.5%">ssn</th>
            <th width="20.5%">reporting period</th>
            <th width="15%">pay date</th>
            <th width="12%">
                <span class="employee_word">employee</span>
                id
            </th>
        </tr>
        <tr>
            <td valign="top">
                <div class="require" style="width:95%;">
                    <input id="employeeName" type="text" class="addtext addtext2" name="stubs[header][employeeName]" placeholder="Type Employee Name Here" value="Type Employee Name Here"><br />
                </div>
                <div class="require" style="width:95%;">
                    <input id="employeeAddress1" type="text" class="addtext addtext2" name="stubs[header][employeeAddress1]" placeholder="Type Employee Street Address Here" value="Type Employee Street Address Here"><br />
                </div>
            </td>
            <td valign="top" align="center">
                <div class="require" style="width:85%;">
                    <input type="text" class="addtext" name="stubs[header][ssn]" id="ssn" placeholder="XXX-XX-1234" value="XXX-XX-1234">
                </div>
            </td>
            <td valign="top" align="center">
                <input type="text" style="width: 90%;" name="stubs[stub][1][paymentPeriodDate]" id="paymentPeriodDate" class="paymentPeriodDate">
            </td>
            <td valign="top" align="center">
                <span class="require" style="width:70%;">
                    <input type="text" name="stubs[stub][1][paymentDate]" id="paymentDate" placeholder="11/13/2018" value="11/13/2018">
                </span>
            </td>
            <td valign="top" align="center">
                <div class="require" style="width:80%;">
                    <input type="text" class="addtext" name="stubs[header][employeeId]" id="employeeId" placeholder="123" value="123" maxlength="10" size="10">
                </div>
            </td>
            </tr>
    </table>
</div>
</div>

<div class="stub_body">
<div>
    <table cellspacing="0" cellpadding="0" border="0">
            <tr>
                <th width="20%" style="text-align: left">INCOME</th>
                <th width="9%">RATE</th>
                <th width="9%">HOURS</th>
                <th width="14%">CURRENT PAY</th>
                <th width="24%">DEDUCTIONS</th>
                <th width="11%">TOTAL</th>
                <th width="13%">YTD TOTAL</th>
            </tr>
            <tr>
                <td style="font-size: 18px;color: #8e8d8d;font-weight: normal;">Gross Earnings</td>
                <td align="center">
                    <input type="text" name="stubs[header][payrate]" class="refreshable" id="payrate" style="width:80%;" value="11.47">
                </td>
                <td align="center">
                    <input type="text" name="stubs[stub][1][payhours]" class="payhours" id="payhours" style="width:80%;">
                </td>
                <td align="center">
                    <input type="text" name="stubs[stub][1][paythis]" id="paythis" class="readonly refreshable"  style="width:85%;">
                </td>
                <td style="font-size: 17px;font-weight: bold;    text-transform: uppercase;">Statutory Deductions</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td class="td_label">Fica - Medicare</td>
                <td style="padding-left:10px;">
                    <input type="text" name="stubs[stub][1][ficamedtax]" class="readonly line-up refreshable" id="ficamedtax">
                </td>
                <td style="padding-left:10px;">
                    <input type="text" name="stubs[stub][1][ytdficamedtax]" class="readonly line-up refreshable" id="ytdficamedtax">
                </td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td class="td_label">Fica - Social Security</td>
                <td style="padding-left:10px;">
                    <input type="text" name="stubs[stub][1][ficasstax]" class="readonly line-up refreshable" id="ficasstax">
                </td>
                <td style="padding-left:10px;">
                    <input type="text" name="stubs[stub][1][ytdficasstax]" class="readonly line-up refreshable" id="ytdficasstax">
                </td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td class="td_label"">Federal Tax</td>
                <td style="padding-left:10px;">
                    <input type="text" name="stubs[stub][1][ficafedtax]" class="readonly line-up refreshable" id="ficafedtax">
                </td>
                <td style="padding-left:10px;">
                    <input type="text" name="stubs[stub][1][ytdficafedtax]" class="readonly line-up refreshable" id="ytdficafedtax">
                </td>
            </tr>
            <tr class="state_tr state_tr_hide">
                <td colspan="4"><input type="hidden" name="stubs[header][stateTax]" id="abbrState" /></td>
                <td class="td_label">State Tax W/H</td>
                <td style="padding-left:10px;">
                    <input type="text" name="stubs[stub][1][sttax]" class="readonly line-up refreshable" id="sttax">
                </td>
                <td style="padding-left:10px;">
                    <input type="text" name="stubs[stub][1][ytdsttax]" class="readonly line-up refreshable" id="ytdsttax">
                </td>
            </tr>
            <tr class="casdi_tr casdi_tr_hide">
                <td colspan="4"></td>
                <td class="td_label">California SDI Tax</td>
                <td style="padding-left:10px;">
                    <input type="text" name="stubs[stub][1][casditax]" class="readonly line-up refreshable" id="casditax">
                </td>
                <td style="padding-left:10px;">
                    <input type="text" name="stubs[stub][1][ytdcasditax]" class="readonly line-up refreshable" id="ytdcasditax">
                </td>
            </tr>
    </table>
</div>
</div>

<div class="stub_total">
<div>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <th width="16%">YTD GROSS</th>
            <th width="18%">YTD DEDUCTIONS</th>
            <th width="16%">YTD NET PAY</th>
            <th width="16%">TOTAL</th>
            <th width="18%">DEDUCTIONS</th>
            <th width="16%">NET PAY</th>
        </tr>
        <tr>
            <td><input type="text" name="stubs[stub][1][ytdtotal]" class="readonly refreshable" id="ytdtotal" style="width:80%;"></td>
            <td><input type="text" name="stubs[stub][1][ytddeductions]" class="readonly refreshable" id="ytddeductions" style="width: 80%;"></td>
            <td><input type="text" name="stubs[stub][1][ytdnetpay]" class="readonly refreshable" id="ytdnetpay"  style="width: 80%;"></td>
            <td><input type="text" name="stubs[stub][1][total]" class="readonly refreshable" id="total"  style="width: 80%;"></td>
            <td><input type="text" name="stubs[stub][1][deductions]" class="readonly refreshable" id="deductions"  style="width: 80%;"></td>
            <td><input type="text" name="stubs[stub][1][netpay]" id="netpay" class="readonly refreshable"  style="width: 80%;"></td>
        </tr>
    </table>
</div>
</div>

<div id="extendform">
<div class="ext_left">
    <table cellpadding="0" cellspacing="0" border="0">
        <tr class="ext_price_zone">
            <td width="25%" valign="middle"><label>PAY</label></td>
            <td width="75%" valign="middle">
                <span id="extpay">
                    **<span id="extdollars"></span>** DOLLARS AND **<span id="extcents"></span>** CENTS
                </span>
            </td>
        </tr>
    </table>
    <table cellpadding="0" cellspacing="0" border="0" style="margin-top: 2px">
        <tr class="ext_order_zone">
            <td width="25%" valign="middle"><label>To the order of:</label></td>
            <td width="75%" valign="middle">
                <span id="extemployeeName" class="ext_div">
                    Type Employee Name Here</span>
                <br>
                <span id="extemployeeAddress1" class="ext_div">
                    Type Employee Street Address Here</span>
            </td>
        </tr>
    </table>
</div>

<div class="ext_right">
     <table class="ext_check_zone" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <th width="50%">Check Date</th>
            <th width="50%">Check Number</th>
        </tr>
        <tr>
            <td id="extpaymentDate" class="ext_div">
                11/13/2018</td>
            <td id="extstubNumber" class="ext_div">
                10015</td>
        </tr>
    </table>
    <div class="ext_center_right">
        <div class="text_check">THIS IS NOT A CHECK</div>
        <div class="text_non">Non-Negotiable</div>
        <div class="text_direct">VOID</div>
    </div>

</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>  </div>
<br>

<div class="after-stub">
<div class="row">
<div class="col-sm-9">
    <div class="stub" id="stub2">
            <label>Type the Pay Date and Pay Period for each additonal stub selected.</label>
            <br><br>
            <label>Stub 2:</label>
            <input type="text" name="stubs[stub][2][paymentDate]" class="form-control paymentDate" id="paymentDate2">
            <input type="text" name="stubs[stub][2][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate2">
            <label class="payhours" style="display: inline-block;">hours:
            <input class="form-control payhours" type="text" name="stubs[stub][2][payhours]" id="payhours2" style="width:60px;">
            </label>
            <label style="display: inline-block;">
            <input class="extended" type="checkbox" id="extended2" name="stubs[stub][2][extended]" value="1" />
                    Deposit slip(+4.99)
                </label>
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][paythis]" id="paythis2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][total]" id="total2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][deductions]" id="deductions2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][netpay]" id="netpay2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][stubNumber]" id="stubNumber2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdtotal]" id="ytdtotal2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytddeductions]" id="ytddeductions2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdnetpay]" id="ytdnetpay2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ficamedtax]" id="ficamedtax2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ficasstax]" id="ficasstax2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ficafedtax]" id="ficafedtax2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][sttax]" id="sttax2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][casditax]" id="casditax2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdficamedtax]" id="ytdficamedtax2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdficasstax]" id="ytdficasstax2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdficafedtax]" id="ytdficafedtax2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdsttax]" id="ytdsttax2">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdcasditax]" id="ytdcasditax2">
        </div>
        <div class="stub" id="stub3">
            <label>Stub 3:</label>
            <input type="text" name="stubs[stub][3][paymentDate]" class="form-control paymentDate" id="paymentDate3">
            <input type="text" name="stubs[stub][3][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate3">
            <label class="payhours" style="display: inline-block;">hours:
            <input class="form-control payhours" type="text" name="stubs[stub][3][payhours]" id="payhours3" style="width:60px;">
            </label>
            <label style="display: inline-block;">
            <input class="extended" type="checkbox" id="extended3" name="stubs[stub][3][extended]" value="1" />
                    Deposit slip(+4.99)
            </label>
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][paythis]" id="paythis3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][total]" id="total3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][deductions]" id="deductions3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][netpay]" id="netpay3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][stubNumber]" id="stubNumber3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdtotal]" id="ytdtotal3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytddeductions]" id="ytddeductions3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdnetpay]" id="ytdnetpay3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ficamedtax]" id="ficamedtax3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ficasstax]" id="ficasstax3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ficafedtax]" id="ficafedtax3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][sttax]" id="sttax3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][casditax]" id="casditax3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdficamedtax]" id="ytdficamedtax3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdficasstax]" id="ytdficasstax3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdficafedtax]" id="ytdficafedtax3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdsttax]" id="ytdsttax3">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdcasditax]" id="ytdcasditax3">
        </div>
        <div class="stub" id="stub4">
            <label>Stub 4:</label>
            <input type="text" name="stubs[stub][4][paymentDate]" class="form-control paymentDate" id="paymentDate4">
            <input type="text" name="stubs[stub][4][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate4">
            <label class="payhours" style="display: inline-block;">hours:
            <input class="form-control payhours" type="text" name="stubs[stub][4][payhours]" id="payhours4" style="width:60px;">
            </label>
            <label style="display: inline-block;">
            <input class="extended" type="checkbox" id="extended4" name="stubs[stub][4][extended]" value="1" />
                Deposit slip(+4.99)
            </label>
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][paythis]" id="paythis4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][total]" id="total4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][deductions]" id="deductions4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][netpay]" id="netpay4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][stubNumber]" id="stubNumber4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdtotal]" id="ytdtotal4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytddeductions]" id="ytddeductions4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdnetpay]" id="ytdnetpay4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ficamedtax]" id="ficamedtax4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ficasstax]" id="ficasstax4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ficafedtax]" id="ficafedtax4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][sttax]" id="sttax4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][casditax]" id="casditax4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdficamedtax]" id="ytdficamedtax4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdficasstax]" id="ytdficasstax4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdficafedtax]" id="ytdficafedtax4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdsttax]" id="ytdsttax4">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdcasditax]" id="ytdcasditax4">
                                </div>
                        <div class="stub" id="stub5">
                                    <label>Stub 5:</label>
            <input type="text" name="stubs[stub][5][paymentDate]" class="form-control paymentDate" id="paymentDate5">
            <input type="text" name="stubs[stub][5][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate5">
            <label class="payhours" style="display: inline-block;">hours:
                <input class="form-control payhours" type="text" name="stubs[stub][5][payhours]" id="payhours5" style="width:60px;">
            </label>
                                        <label style="display: inline-block;">
                    <input class="extended" type="checkbox" id="extended5" name="stubs[stub][5][extended]" value="1" />
                    Deposit slip(+4.99)
                </label>
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][paythis]" id="paythis5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][total]" id="total5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][deductions]" id="deductions5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][netpay]" id="netpay5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][stubNumber]" id="stubNumber5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdtotal]" id="ytdtotal5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytddeductions]" id="ytddeductions5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdnetpay]" id="ytdnetpay5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ficamedtax]" id="ficamedtax5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ficasstax]" id="ficasstax5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ficafedtax]" id="ficafedtax5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][sttax]" id="sttax5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][casditax]" id="casditax5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdficamedtax]" id="ytdficamedtax5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdficasstax]" id="ytdficasstax5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdficafedtax]" id="ytdficafedtax5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdsttax]" id="ytdsttax5">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdcasditax]" id="ytdcasditax5">
                                </div>
                        <div class="stub" id="stub6">
                                    <label>Stub 6:</label>
            <input type="text" name="stubs[stub][6][paymentDate]" class="form-control paymentDate" id="paymentDate6">
            <input type="text" name="stubs[stub][6][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate6">
            <label class="payhours" style="display: inline-block;">hours:
                <input class="form-control payhours" type="text" name="stubs[stub][6][payhours]" id="payhours6" style="width:60px;">
            </label>
                                        <label style="display: inline-block;">
                    <input class="extended" type="checkbox" id="extended6" name="stubs[stub][6][extended]" value="1" />
                    Deposit slip(+4.99)
                </label>
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][paythis]" id="paythis6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][total]" id="total6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][deductions]" id="deductions6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][netpay]" id="netpay6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][stubNumber]" id="stubNumber6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdtotal]" id="ytdtotal6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytddeductions]" id="ytddeductions6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdnetpay]" id="ytdnetpay6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ficamedtax]" id="ficamedtax6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ficasstax]" id="ficasstax6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ficafedtax]" id="ficafedtax6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][sttax]" id="sttax6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][casditax]" id="casditax6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdficamedtax]" id="ytdficamedtax6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdficasstax]" id="ytdficasstax6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdficafedtax]" id="ytdficafedtax6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdsttax]" id="ytdsttax6">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdcasditax]" id="ytdcasditax6">
                                </div>
                        <div class="stub" id="stub7">
                                    <label>Stub 7:</label>
            <input type="text" name="stubs[stub][7][paymentDate]" class="form-control paymentDate" id="paymentDate7">
            <input type="text" name="stubs[stub][7][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate7">
            <label class="payhours" style="display: inline-block;">hours:
                <input class="form-control payhours" type="text" name="stubs[stub][7][payhours]" id="payhours7" style="width:60px;">
            </label>
                                        <label style="display: inline-block;">
                    <input class="extended" type="checkbox" id="extended7" name="stubs[stub][7][extended]" value="1" />
                    Deposit slip(+4.99)
                </label>
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][paythis]" id="paythis7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][total]" id="total7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][deductions]" id="deductions7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][netpay]" id="netpay7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][stubNumber]" id="stubNumber7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdtotal]" id="ytdtotal7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytddeductions]" id="ytddeductions7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdnetpay]" id="ytdnetpay7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ficamedtax]" id="ficamedtax7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ficasstax]" id="ficasstax7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ficafedtax]" id="ficafedtax7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][sttax]" id="sttax7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][casditax]" id="casditax7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdficamedtax]" id="ytdficamedtax7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdficasstax]" id="ytdficasstax7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdficafedtax]" id="ytdficafedtax7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdsttax]" id="ytdsttax7">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdcasditax]" id="ytdcasditax7">
                                </div>
                        <div class="stub" id="stub8">
                                    <label>Stub 8:</label>
            <input type="text" name="stubs[stub][8][paymentDate]" class="form-control paymentDate" id="paymentDate8">
            <input type="text" name="stubs[stub][8][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate8">
            <label class="payhours" style="display: inline-block;">hours:
                <input class="form-control payhours" type="text" name="stubs[stub][8][payhours]" id="payhours8" style="width:60px;">
            </label>
                                        <label style="display: inline-block;">
                    <input class="extended" type="checkbox" id="extended8" name="stubs[stub][8][extended]" value="1" />
                    Deposit slip(+4.99)
                </label>
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][paythis]" id="paythis8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][total]" id="total8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][deductions]" id="deductions8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][netpay]" id="netpay8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][stubNumber]" id="stubNumber8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdtotal]" id="ytdtotal8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytddeductions]" id="ytddeductions8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdnetpay]" id="ytdnetpay8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ficamedtax]" id="ficamedtax8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ficasstax]" id="ficasstax8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ficafedtax]" id="ficafedtax8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][sttax]" id="sttax8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][casditax]" id="casditax8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdficamedtax]" id="ytdficamedtax8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdficasstax]" id="ytdficasstax8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdficafedtax]" id="ytdficafedtax8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdsttax]" id="ytdsttax8">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdcasditax]" id="ytdcasditax8">
                                </div>
                        <div class="stub" id="stub9">
                                    <label>Stub 9:</label>
            <input type="text" name="stubs[stub][9][paymentDate]" class="form-control paymentDate" id="paymentDate9">
            <input type="text" name="stubs[stub][9][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate9">
            <label class="payhours" style="display: inline-block;">hours:
                <input class="form-control payhours" type="text" name="stubs[stub][9][payhours]" id="payhours9" style="width:60px;">
            </label>
                                        <label style="display: inline-block;">
                    <input class="extended" type="checkbox" id="extended9" name="stubs[stub][9][extended]" value="1" />
                    Deposit slip(+4.99)
                </label>
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][paythis]" id="paythis9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][total]" id="total9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][deductions]" id="deductions9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][netpay]" id="netpay9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][stubNumber]" id="stubNumber9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdtotal]" id="ytdtotal9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytddeductions]" id="ytddeductions9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdnetpay]" id="ytdnetpay9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ficamedtax]" id="ficamedtax9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ficasstax]" id="ficasstax9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ficafedtax]" id="ficafedtax9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][sttax]" id="sttax9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][casditax]" id="casditax9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdficamedtax]" id="ytdficamedtax9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdficasstax]" id="ytdficasstax9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdficafedtax]" id="ytdficafedtax9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdsttax]" id="ytdsttax9">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdcasditax]" id="ytdcasditax9">
                                </div>
                        <div class="stub" id="stub10">
                                    <label>Stub 10:</label>
            <input type="text" name="stubs[stub][10][paymentDate]" class="form-control paymentDate" id="paymentDate10">
            <input type="text" name="stubs[stub][10][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate10">
            <label class="payhours" style="display: inline-block;">hours:
                <input class="form-control payhours" type="text" name="stubs[stub][10][payhours]" id="payhours10" style="width:60px;">
            </label>
                                        <label style="display: inline-block;">
                    <input class="extended" type="checkbox" id="extended10" name="stubs[stub][10][extended]" value="1" />
                    Deposit slip(+4.99)
                </label>
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][paythis]" id="paythis10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][total]" id="total10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][deductions]" id="deductions10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][netpay]" id="netpay10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][stubNumber]" id="stubNumber10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdtotal]" id="ytdtotal10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytddeductions]" id="ytddeductions10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdnetpay]" id="ytdnetpay10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ficamedtax]" id="ficamedtax10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ficasstax]" id="ficasstax10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ficafedtax]" id="ficafedtax10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][sttax]" id="sttax10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][casditax]" id="casditax10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdficamedtax]" id="ytdficamedtax10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdficasstax]" id="ytdficasstax10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdficafedtax]" id="ytdficafedtax10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdsttax]" id="ytdsttax10">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdcasditax]" id="ytdcasditax10">
                                </div>
                        <div class="stub" id="stub11">
                                    <label>Stub 11:</label>
            <input type="text" name="stubs[stub][11][paymentDate]" class="form-control paymentDate" id="paymentDate11">
            <input type="text" name="stubs[stub][11][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate11">
            <label class="payhours" style="display: inline-block;">hours:
                <input class="form-control payhours" type="text" name="stubs[stub][11][payhours]" id="payhours11" style="width:60px;">
            </label>
                                        <label style="display: inline-block;">
                    <input class="extended" type="checkbox" id="extended11" name="stubs[stub][11][extended]" value="1" />
                    Deposit slip(+4.99)
                </label>
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][paythis]" id="paythis11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][total]" id="total11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][deductions]" id="deductions11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][netpay]" id="netpay11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][stubNumber]" id="stubNumber11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdtotal]" id="ytdtotal11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytddeductions]" id="ytddeductions11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdnetpay]" id="ytdnetpay11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ficamedtax]" id="ficamedtax11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ficasstax]" id="ficasstax11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ficafedtax]" id="ficafedtax11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][sttax]" id="sttax11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][casditax]" id="casditax11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdficamedtax]" id="ytdficamedtax11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdficasstax]" id="ytdficasstax11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdficafedtax]" id="ytdficafedtax11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdsttax]" id="ytdsttax11">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdcasditax]" id="ytdcasditax11">
                                </div>
                        <div class="stub" id="stub12">
                                    <label>Stub 12:</label>
            <input type="text" name="stubs[stub][12][paymentDate]" class="form-control paymentDate" id="paymentDate12">
            <input type="text" name="stubs[stub][12][paymentPeriodDate]" class="form-control paymentPeriodDate" id="paymentPeriodDate12">
            <label class="payhours" style="display: inline-block;">hours:
                <input class="form-control payhours" type="text" name="stubs[stub][12][payhours]" id="payhours12" style="width:60px;">
            </label>
                                        <label style="display: inline-block;">
                    <input class="extended" type="checkbox" id="extended12" name="stubs[stub][12][extended]" value="1" />
                    Deposit slip(+4.99)
                </label>
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][paythis]" id="paythis12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][total]" id="total12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][deductions]" id="deductions12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][netpay]" id="netpay12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][stubNumber]" id="stubNumber12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdtotal]" id="ytdtotal12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytddeductions]" id="ytddeductions12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdnetpay]" id="ytdnetpay12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ficamedtax]" id="ficamedtax12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ficasstax]" id="ficasstax12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ficafedtax]" id="ficafedtax12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][sttax]" id="sttax12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][casditax]" id="casditax12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdficamedtax]" id="ytdficamedtax12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdficasstax]" id="ytdficasstax12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdficafedtax]" id="ytdficafedtax12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdsttax]" id="ytdsttax12">
            <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdcasditax]" id="ytdcasditax12">
                                </div>
                    <br>
</div>
<div class="col-sm-3">
    <button class="pull-right btn btn-success btn-lg" id="lbhtml" name="yt2" type="button">View Your Stub</button>                  <div class="clearfix"></div>
                </div>
</div>
<br>
<div class="other_hours1" style="display:none;">
All other stubs from beginning of the year will be calculated according to
<input class="payhours" id="payhoursdef" type="hidden" value="40" />
hours per each
</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" data-isrun="0" id="mobile-modal-for-stubs">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Create your stub from a mobile device by completing this form</h4>
</div>
<div class="modal-body">
    <div class="options_block well">
        <div class="item-option">
            <label for="stubsAmount">How many stubs do you need?</label>
            <select class="form-control pre-select" id="pre-stubsAmount" data-field="stubsAmount" style="width:100px;"></select>
        </div>
        <div class="item-option">
            <label for="paymentPeriod">How are you paid?</label>
            <select class="form-control pre-select" id="pre-paymentPeriod" data-field="paymentPeriod" style="width:100px;" data-selected="weekly"></select>
        </div>
        <div class="item-option">
            <label for="state">Select State </label>
            <select class="form-control pre-select" id="pre-state" data-field="state" style="width:120px;"></select>
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
                <select class="form-control pre-select" id="pre-maritalStatus" data-field="maritalStatus" style="width:100px;"></select>
            </div>
            <div class="item-option">
                <label for="exemptions">Exemptions</label>
                <select class="form-control pre-select" id="pre-exemptions" data-field="exemptions" style="width: 50px;"></select>
            </div>
            <div class="item-option">
                <label for="paymentPeriodAmounts">Pay Period YTD </label>
                <select class="form-control pre-select" id="pre-paymentPeriodAmounts" data-field="paymentPeriodAmounts" style="width: 50px;"></select>
            </div>
            <div class="item-option">
                <select class="form-control pre-select" style="width:170px;" id="pre-switchCalcul" data-field="switchCalcul"></select>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
                            <label>The stub you build is the most recent. If ordering multiple stubs enter the most recent payday on the first stub.</label>
        <br><br>
        <div class="form-group" style="margin-bottom: 5px;">
            <label class="control-label" for="pre-companyName">Company Name <span class="required">*</span></label>
            <br>
            <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-companyName" data-field="companyName" placeholder="Type Company Name Here" value="Type Company Name Here">
        </div>
                                <div class="form-group" style="margin-bottom: 5px;">
                <label class="control-label" for="pre-companyAddress1">Company Address <span class="required">*</span></label>
                <br>
                <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-companyAddress1" data-field="companyAddress1" placeholder="Type Company Street Address Here" value="Type Company Street Address Here">
                <br>
                                        </div>
                            <div class="form-group" style="margin-bottom: 5px;">
            <label class="control-label" for="pre-employeeName">Employee Name <span class="required">*</span></label>
            <br>
            <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-employeeName" data-field="employeeName" placeholder="Type Employee Name Here" value="Type Employee Name Here">
        </div>
                                <div class="form-group" style="margin-bottom: 5px;">
                <label class="control-label" for="pre-employeeAddress1">Employee Address <span class="required">*</span></label>
                <br>
                <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-employeeAddress1" data-field="employeeAddress1" placeholder="Type Employee Street Address Here" value="Type Employee Street Address Here">
                <br>
                                        </div>
                                                <div class="form-group" style="margin-bottom: 5px;">
            <label class="control-label" for="pre-ssn">SSN <span class="required">*</span></label>
            <input style="max-width: 120px;" type="text" class="form-control addtext pre-input" id="pre-ssn" data-field="ssn" placeholder="XXX-XX-1234" value="XXX-XX-1234">
        </div>
                            <div class="form-group" style="margin-bottom: 5px;">
            <label class="control-label" for="pre-paymentDate">Pay Date <span class="required">*</span></label>
            <input style="width: 120px;" type="text" class="form-control" id="pre-paymentDate" value="11/13/2018" >
        </div>
                            <div class="form-group" style="margin-bottom: 5px;">
            <label class="control-label" for="pre-employeeId">Employee Id <span class="required">*</span></label>
            <input style="max-width: 100px;" type="text" class="form-control addtext pre-input" id="pre-employeeId" data-field="employeeId" placeholder="123" value="123">
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
<input type="hidden" value="modern" name="stubs[template]"/>
<input type="hidden" value="" name="is_wizard"/>
</form>
<div class="modal fade" id="PreviewStubs" tabindex="-1" role="dialog" aria-labelledby="PreviewStubs" aria-hidden="true" style="overflow-x: auto; display: none;">
<div class="modal-dialog modal-lg" role="document" style="width: auto; max-width: 960px;">
<div class="modal-content">
<div class="modal-header">
  <div style="float:left;margin: 0 0 10px 0;">
    <div class="btn-group"><button data-dismiss="modal" aria-label="Close" class="btn btn-default" id="yw1" name="yt3" type="button">Back to edit</button><button onclick="$('#stubsForm').submit();" class="btn btn-primary" id="yw2" type="submit" name="yt4">Submit information</button></div>               </div>
  <div style="float:right;margin: 0 0 10px 0;">
    <div class="btn-group"><button data-dismiss="modal" aria-label="Close" class="btn btn-default" id="yw3" name="yt5" type="button">Back to edit</button><button onclick="$('#stubsForm').submit();" class="btn btn-primary" id="yw4" type="submit" name="yt6">Submit information</button></div>               </div>
  <div class="clear"></div>
</div>
<div class="modal-body">
  <div class="loader-line">
    <div class="line"></div>
  </div>
  <div data-tmpl="modern2" id="carusel_preview" class="carousel slide">
      <div class="carousel-inner"></div>
    <a class="carousel-control left" href="#carusel_preview" data-slide="prev" style="display: none;">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#carusel_preview" data-slide="next" style="display: none;">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>

</div>
</div>
</div>
</div>
</div><div class="clear"></div></div><!-- content -->
  </div>
</div>
@endsection
