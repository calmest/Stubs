<div class="header well">
    <div class="container">
        <h1>Create Your Own Paycheck Stub Below in Less Than One Minute!</h1>
    </div>
</div>

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
<h2>Advanced6 Paycheck Stub Template</h2>
<hr>
<button class="btn btn-primary" id="call-mobile-modal" name="yt1" type="button" style="display: inline-block;">Quick options window</button><br>
<form class="form" id="stubsForm" action="/stubs/advanced6?hash=67daf1e0583988966236b8ae1aa4f4b8" method="post"><div class="options_block well">
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
                    <input type="hidden" name="stubs[stub][1][extended]" id="extended" value="1">
            <div class="extend">
                <div class="btn-group">
                    <button class="btn btn-primary active" id="extendedBtn" type="button" value="extended">Deposit slip(+4.99)</button>
                </div>
            </div>

                        <div class="clearfix"></div>
                    <div id="company_abbreviation">
                <label>Company abbreviation: </label>
                <input class="form-control refreshable addtext addtext2" type="text" maxlength="10" id="abbreviation" name="stubs[header][abbreviation]" value="" style="width: 120px;">
            </div>
                <label>The stub you build is the most recent. If ordering multiple stubs enter the most recent payday on the first stub.</label>
    </div>
	<br>
	<div class="stub_zone">
		<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=VT323');
    /*'font-family: dompdf_vt323;':'font-family: \'VT323\', monospace;'*/
    /*'font-family: dompdf_ocraext;':'font-family: "OCRAEXT";'*/
    /*'font-family: dompfd_OCRAStdMedium;':'font-family: "OCRAStdMedium";'*/
    @font-face {
        font-family: "OCRAEXT";
        src: local("OCR A Extended") ,url(/fonts/OCRAEXT.TTF) format('truetype'),url(/fonts/OCRAExtendedRegular.otf) format('opentype');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: "OCRAStdMedium";
        src: local("OCR A Std Medium") ,url(/fonts/OCRAStdMedium.ttf) format('truetype');
    }

    #temp {
        font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
        background: url(/images/quality/advanced6_w.jpg) no-repeat;
        background-size: 100% 812px;
        width: 1000px;
        min-width: 918px;
        font-size: 12px;
    }
    #temp input,#temp select{
        border: 1px dashed #333;
        background: rgba(255, 200, 79, 0.38);
    }
    #temp p,#temp table,#temp table tr,#temp table tr td,#temp table tr th{
        margin: 0;
        padding: 0;
    }
    .clear {clear: both;}

        .temp_easy {height: 412px;}
    .temp_ext {height: 812px;}
        .stub-top{
        /*padding: 28px 0.6% 0 0.8%;*/
        padding: 0px 0.6% 0 0.8%;
        height: 92px;
    }
    .stub-top-first{
        height: 28px;
    }
    .stub-top-first table{
        width: 100%;
        height: 26px;
        color: #006699;
        font-family: "OCRAEXT";        text-transform: uppercase;
        font-size: 13px;
    }
    .stub-top-first table tr td{
        text-align: center;
    }
    .stub-top-second{
        height: 34px;
    }
    .stub-top-second table{
        width: 100%;
        height: 34px;
        color:#000;
        font-family: 'VT323', monospace;        text-transform: uppercase;
        font-size: 20px;
    }
    .stub-top-second table tr td{
        text-align: center;
    }
    .stub_center{
        padding: 0 0.6% 0 0.8%;
        height: 251px;
    }
    .stub_center_left{
        float: left;
        width: 51%;
        height: 251px;
        font-family: 'VT323', monospace;        text-transform: uppercase;
        font-size: 21px;                padding-top: 5px;
    }
    .stub_center_left table tr td:nth-child(2),
    .stub_center_left table tr td:nth-child(3),
    .stub_center_left table tr td:nth-child(4){
        text-align: center;
    }
    .stub_center_left table tr td:nth-child(3) input,
    .stub_center_left table tr td:nth-child(4) input{
        border: none !important;
        background: none !important;
    }
    .stub_center_left input{
        text-align: center !important;
    }
    .stub_center_right{
        float: right;
        width: 49%;
        height: 251px;
        font-family: 'VT323', monospace;
        text-transform: uppercase;
        font-size: 21px;
                padding-top: 5px;
    }
    .stub_bottom{
        padding: 0 0.6% 0 0.8%;
        height: 63px;
    }
    .stub_bottom_first{
        height: 36px;
    }
    .stub_bottom_first table{
        width: 100%;
        height: 36px;
    }
    .stub_bottom .stub_bottom_first .checnumbertext {
        font-family: "OCRAEXT";        color: #006699;
        vertical-align: bottom;
        padding-bottom: 6px !important;
        font-size: 14px;
    }
    .stub_bottom .stub_bottom_first .checnumber, .stub_bottom .stub_bottom_first .checnumber p,.stub_bottom .stub_bottom_first .checnumber input[type="text"]{
        color:#000;
        font-family: 'VT323', monospace;        text-align: center;
    }
    .stub_bottom .stub_bottom_first .checnumber p,.stub_bottom .stub_bottom_first .checnumber{
        font-size: 28px;
    }
    .stub_bottom .stub_bottom_first .checnumber input[type="text"]{
        font-size: 28px;
    }
    .stub_bottom .stub_bottom_first .total_text{
        font-family: "OCRAEXT";        color: #006699;
        font-size: 14px;
        vertical-align: bottom;
        padding-bottom: 6px !important;
        padding-right: 34px !important;
    }
    .stub_bottom .stub_bottom_first .total_input input,.stub_bottom .stub_bottom_first .total_input{
        border: 0 !important;
        background: none !important;
        color:#000;
        font-family: 'VT323', monospace;        text-align: center;
    }
    .stub_bottom .stub_bottom_first .total_input p,.stub_bottom .stub_bottom_first .total_input{
        font-size: 28px;
    }
    .stub_bottom .stub_bottom_first .total_input input[type="text"]{
        font-size: 24px;
    }
    .stub_bottom .stub_bottom_first .net_pay_text{
        font-family: 'VT323', monospace;        font-size: 22px;
        color:#000;
        text-align: center;
    }
    .stub_bottom .stub_bottom_first .net_pay_input input,.stub_bottom .stub_bottom_first .net_pay_input{
        border: 0 !important;
        background: none !important;
        color:#000;
        font-family: 'VT323', monospace;        text-align: center;
    }
    .stub_bottom .stub_bottom_first .net_pay_input p,.stub_bottom .stub_bottom_first .net_pay_input{
        font-size: 28px;
    }
    .stub_bottom .stub_bottom_first .net_pay_input input[type="text"]{
        font-size: 24px;
    }
    .stub_bottom_second{
        margin: 0 auto;
        width: 469px;
        height: 26px;
        font-family: 'VT323', monospace;        font-size: 22px;
    }
    .stub_bottom_second table{
        width: 100%;
        height: 26px;
    }
    #extendform {
        height: 405px;
        display: none;
        padding: 17px 21px 22px 22px;
        position: relative;
    }
    .rotate_text1_position{
        position: absolute;
        bottom: 47px;        left: -4px;        width: 48px;
        height: 10px;
    }
    .rotate_text2_position{
        position: absolute;
        bottom: 114px;        right: -4px;        width: 48px;
        height: 10px;
    }
    .rotate_text3_position{
        position: absolute;
        top: 11px;        left: 28px;
        font-family: "OCRAEXT";        font-size: 8px;
        color: #006699;
        width: 48px;
        height: 10px;
    }
    .rotate_text4_position{
        position: absolute;
        bottom: 17px;        left: 28px;
        font-family: "OCRAEXT";        font-size: 8px;
        color: #006699;
        width: 48px;
        height: 10px;
    }
    .rotate_text{
        color: #006699;
        -webkit-transform: rotate(270deg);
        -moz-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        -o-transform: rotate(270deg);
        transform: rotate(270deg);
        font-family: "OCRAEXT";        font-size: 8px;
    }
    .extendform_left{
        float: left;
        width: 57%;
        height: 366px;
    }
    .extendform_right{
        float: right;
        width: 31%;
        height: 156px;
        padding-left: 4px;
        padding-right: 6px;
        padding-top: 8px;
    }
    .first_block{
        height: 60px;
    }
    .first_block table{
        width: 100%;
        height: 60px;
    }
    .first_block_text_top{
        font-family: "OCRAEXT";        color: #006699;
        font-size: 16px;
    }
    .extendform_left_bottom input,.extendform_left_bottom,#extpaymentDate, #extstubNumber{
        font-family: 'VT323', monospace;        color: #0e0e0e;
        font-size: 24px;
    }
    .text_pay{
        font-family: "OCRAEXT";        color: #006699;
        padding-left: 81px;
        text-align: center;
        padding-top: 19px;        font-size: 14px;
    }
    .pay_sum{
        font-family: 'VT323', monospace;        color: #0e0e0e;
        font-size: 24px;
        padding-left: 80px;
        padding-top: 11px;        text-align: center;
    }
    .extendform_left_top_text{
    font-family: "OCRAEXT";        color: #006699;
        font-size: 20px;
    }
    .extendform_left_top_sum{
        font-family: 'VT323', monospace;        color: #0e0e0e;
        font-size: 21px;
        padding-left: 118px !important;
    }
    .extendform_left_top{
        padding-top: 114px;
        padding-left: 10px;
    }
    .extendform_left_bottom{
        padding-top: 50px;
        padding-left: 10px;
    }
    .extemployeeText{
        font-family: "OCRAEXT";        color: #006699;
        font-size: 14px;
        padding-top: 4px;
    }
    #extemployeeName,#extemployeeAddress1,#extemployeeAddress2{
        font-family: 'VT323', monospace;        color: #0e0e0e;
        font-size: 21px;
        text-transform: uppercase;
    }
    .state_tr_hide,
    .casdi_tr_hide {
        display: none;
    }
    .stub_center_right_top table input,.stub_center_right_top{
        /*border: none !important;*/
        /*background: none !important;*/
        text-align: center !important;
    }
    .stub_center_right_top{
        width: 32%;
    }
    .stub_center_right_bottom{
        padding-top: 15px;
    }
    .stub_center_right_bottom input{
        text-align: center;
    }
</style>

    <div class="all_preset" id="all_preset1">
                <div id="temp" class="temp_ext">
            <div class="stub-top">
                <div style="height: 28px;"></div>
                <div class="stub-top-first">
                    <table>
                        <tbody><tr>
                            <td width="15.5%" style="line-height: 11px;">
                                <div>INVOICE NO.</div>
                                                                <div class="require">
			                     <input type="text" id="ssn" class="addtext" name="stubs[header][ssn]" style="text-align: center;" placeholder="XXX-XX-1234" value="XXX-XX-1234" data-val="XXX-XX-1234" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: -5px; left: 152px; display: block;"><div class="arrow" style="top: 48.1481%;"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
		                        </div>
                                                            </td>
                            <td width="10.6%">INVOICE DATE</td>
                            <td width="24.8%">DESCRIPTION</td>
                            <td width="15.8%">GROSS AMOUNT</td>
                            <td width="16.3%">DISCOUNT</td>
                            <td>NET AMOUNT</td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="stub-top-second">
                    <table>
                        <tbody><tr>
                            <td width="15.6%"></td>
                            <td width="10.5%">HOURS</td>
                            <td width="12.5%">CURRENT</td>
                            <td width="12.5%">Y-T-D</td>
                            <td width="15.6%">RATE</td>
                            <td width="16.4%">CURRENT</td>
                            <td>Y-T-D</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
            <div class="stub_center">
                <div class="stub_center_left">
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tbody><tr>
                            <td width="30.4%" style="padding-left: 24px;">REGULAR-S</td>
                            <td width="20.5%">
                                                                    <input type="text" name="stubs[stub][1][payhours]" class="payhours" id="payhours" style="width: 90%;">
                                                            </td>
                            <td width="24.5%">
                                                                    <input type="text" name="stubs[stub][1][paythis]" class="readonly center-line-up refreshable" id="paythis" style="width: 90%;" readonly="readonly">
                                                            </td>
                            <td>
                                                                    <input type="text" name="stubs[stub][1][payytd]" class="readonly refreshable" id="payytd" style="width: 90%;" readonly="readonly">
                                                            </td>
                        </tr>
                        <tr>
                            <td width="30.4%" style="padding-left: 24px;">OT-SHOP</td>
                            <td width="20.5%">
                                                                    <input type="text" name="stubs[header][floathours]" class="advhours" id="floathours" style="width: 90%;">
                                                            </td>
                            <td width="24.5%">
                                                                    <input type="text" name="stubs[header][floatthis]" class="readonly center-line-up refreshthis" id="floatthis" style="width: 90%;" readonly="readonly">
                                                            </td>
                            <td>
                                                                    <input type="text" name="stubs[stub][1][floatytd]" class="readonly refreshable" id="floatytd" style="width: 90%;" readonly="readonly">
                                                            </td>
                        </tr>
                        <tr>
                            <td width="30.4%" style="padding-left: 24px;">VACATION-</td>
                            <td width="20.5%">
                                                                    <input type="text" name="stubs[header][vacationhours]" class="advhours" id="vacationhours" style="width: 90%;">
                                                            </td>
                            <td width="24.5%">
                                                                    <input type="text" name="stubs[header][vacationthis]" class="readonly center-line-up refreshthis" id="vacationthis" style="width: 90%;" readonly="readonly">
                                                            </td>
                            <td>
                                                                    <input type="text" name="stubs[stub][1][vacationytd]" class="readonly refreshable" id="vacationytd" style="width: 90%;" readonly="readonly">
                                                            </td>
                        </tr>
                        <tr>
                            <td width="30.4%" style="padding-left: 24px;">HOLIDAY-S</td>
                            <td width="20.5%">
                                                                    <input type="text" name="stubs[header][holidayhours]" class="advhours" id="holidayhours" style="width:90%;">
                                                            </td>
                            <td width="24.5%">
                                                                    <input type="text" name="stubs[header][holidaythis]" class="readonly center-line-up refreshthis" id="holidaythis" style="width: 90%;" readonly="readonly">
                                                            </td>
                            <td>
                                                                    <input type="text" name="stubs[stub][1][holidayytd]" class="readonly refreshable" id="holidayytd" style="width: 90%;" readonly="readonly">
                                                            </td>
                        </tr>

                        <tr>
                            <td width="30.4%" style="padding-left: 24px;">Fica - Medicare</td>
                            <td width="20.5%"> </td>
                            <td width="24.5%">
                                                                    <input type="text" name="stubs[stub][1][ficamedtax]" class="readonly center-line-up refreshable" id="ficamedtax" style="width: 90%;" readonly="readonly">
                                                            </td>
                            <td>
                                                                    <input type="text" name="stubs[stub][1][ytdficamedtax]" class="readonly refreshable" id="ytdficamedtax" style="width: 90%;" readonly="readonly">
                                                            </td>
                        </tr>
                        <tr>
                            <td width="30.4%" style="padding-left: 24px;">Fica - Social Security</td>
                            <td width="20.5%"> </td>
                            <td width="24.5%">
                                                                    <input type="text" name="stubs[stub][1][ficasstax]" class="readonly center-line-up refreshable" id="ficasstax" style="width: 90%;" readonly="readonly">
                                                            </td>
                            <td>
                                                                    <input type="text" name="stubs[stub][1][ytdficasstax]" class="readonly refreshable" id="ytdficasstax" style="width: 90%;" readonly="readonly">
                                                            </td>
                        </tr>
                        <tr>
                            <td width="30.4%" style="padding-left: 24px;">Federal TAX</td>
                            <td width="20.5%"> </td>
                            <td width="24.5%">
                                                                    <input type="text" name="stubs[stub][1][ficafedtax]" class="readonly center-line-up refreshable" id="ficafedtax" style="width: 90%;" readonly="readonly">
                                                            </td>
                            <td>
                                                                    <input type="text" name="stubs[stub][1][ytdficafedtax]" class="readonly refreshable" id="ytdficafedtax" style="width: 90%;" readonly="readonly">
                                                            </td>
                        </tr>

                        <tr>

                                <td width="30.4%" style="padding-left: 24px;" class="state_tr state_tr_hide" id="stateAbbrId">State Tax</td>
                                <td width="20.5%"><input type="hidden" name="stubs[header][stateTax]" id="abbrState"></td>
                                <td width="24.5%" class="state_tr state_tr_hide">
                                    <input type="text" name="stubs[stub][1][sttax]" class="readonly center-line-up refreshable" id="sttax" style="width: 90%;" readonly="readonly">
                                </td>
                                <td align="left" class="state_tr state_tr_hide">
                                    <input type="text" name="stubs[stub][1][ytdsttax]" class="readonly refreshable" id="ytdsttax" style="width: 90%;" readonly="readonly">
                                </td>
                                                    </tr>
                        <tr>
                                                            <td width="30.4%" style="padding-left: 24px;" class="casdi_tr casdi_tr_hide">California SDI Tax</td>
                                <td width="20.5%"> </td>
                                <td width="24.5%" class="casdi_tr casdi_tr_hide">
                                    <input type="text" name="stubs[stub][1][casditax]" class="readonly center-line-up refreshable" id="casditax" style="width: 90%;" readonly="readonly">
                                </td>
                                <td class="casdi_tr casdi_tr_hide">
                                    <input type="text" name="stubs[stub][1][ytdcasditax]" class="readonly refreshable" id="ytdcasditax" style="width: 90%;" readonly="readonly">
                                </td>
                                                    </tr>

                    </tbody></table>
                </div>
                <div class="stub_center_right">
                    <div class="stub_center_right_top">
                        <table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
                            <tbody><tr>
                                <td>
                                                                            <input type="text" name="stubs[header][payrate]" class="refreshable rate" id="payrate" style="width:97%;" value="20.00">
                                                                    </td>
                            </tr>
                            <tr>
                                <td>
                                                                            <input type="text" name="stubs[header][floatrate]" class="refreshrate rate" id="floatrate" style="width:97%;">
                                                                    </td>
                            </tr>
                            <tr>
                                <td>
                                                                            <input type="text" name="stubs[header][vacationrate]" class="refreshrate rate" id="vacationrate" style="width:97%;">
                                                                    </td>
                            </tr>
                            <tr>
                                <td>
                                                                            <input type="text" name="stubs[header][holidayrate]" class="refreshrate rate" id="holidayrate" style="width:97%;">
                                                                    </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="stub_center_right_bottom">
                        <table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
                            <tbody><tr>
                                <td width="31.7%" align="center">401K MATCH</td>
                                <td width="33%" align="center">
                                                                            <input type="text" name="stubs[header][deductioncustom1rate]" id="deductioncustom1rate" class="refreshrate" style="width: 95%;">
                                                                    </td>
                                <td align="center">
                                                                            <input type="text" name="stubs[header][deductioncustom1ytd]" class="readonly refreshable" id="deductioncustom1ytd" style="width: 95%;border: none;background: none;" readonly="readonly">
                                                                    </td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="stub_bottom">
                <div class="stub_bottom_first">
                    <table>
                        <tbody><tr>
                            <td class="checnumbertext" width="10%">CHECK NO.</td>
                            <td class="checnumber" width="16.2%">
                                                                    <input type="text" id="stubNumber" class="addtext addtext2" name="stubs[stub][1][stubNumber]" style="width:96%;">
                                                            </td>
                            <td width="25%" class="total_text" align="right">TOTALS</td>
                            <td class="total_input" width="15.6%">
                                                                    <input type="text" name="stubs[stub][1][total]" class="readonly center-line-up refreshable" id="total" style="width: 96%;" readonly="readonly">
                                                            </td>
                            <td class="net_pay_text" width="16.2%">NET PAY</td>
                            <td class="net_pay_input">
                                                                    <input type="text" name="stubs[stub][1][netpay]" class="readonly center-line-up refreshable" id="netpay" style="width: 96%;" readonly="readonly">
                                                            </td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="stub_bottom_second">
                    <table>
                        <tbody><tr>
                            <td class="employee_text" width="23%">EMPLOYEE #:</td>
                            <td class="employee_input" width="30%">
                                                                <span class="require">
			                        <input type="text" id="employeeId" class="addtext addtext2" name="stubs[header][employeeId]" placeholder="123" value="123" maxlength="10" size="10" data-val="123" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: -1px; left: 100px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
			                    </span>
                                                            </td>
                            <td class="date_text" width="11%">DATE:</td>
                            <td class="date_input">
                                                                <span class="require">
			                        <input type="text" name="stubs[stub][1][paymentDate]" id="paymentDate" placeholder="12/28/2018" value="12/28/2018" style="width:90px;" class="hasDatepicker" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in green" style="top: -1px; left: 90px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
			                    </span>
                                                            </td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
            <div class="clear"></div>

            <div id="extendform" style="display: block;">
                <div class="rotate_text rotate_text1_position" id="extabbreviation"></div>
                <div class="rotate_text rotate_text2_position" id="ext2abbreviation"></div>
                <div class="rotate_text3_position" id="ext3abbreviation"></div>
                <div class="rotate_text4_position" id="ext4abbreviation"></div>
                <div class="extendform_left">
                    <div class="extendform_left_top">
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tbody><tr>
                                <td width="11%" class="extendform_left_top_text">PAY</td>
                                <td class="extendform_left_top_sum">
                                                                            **<span id="extdollars">936</span>** DOLLARS AND **<span id="extcents">60</span>** CENTS
                                                                    </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="extendform_left_bottom">
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tbody><tr>
                                <td rowspan="3" width="33%" class="extemployeeText" valign="top">TO THE ORDER OF:</td>
                                <td valign="top">
                                                                            <div class="require" style="width:90%;">
                                            <input type="text" class="addtext addtext2" name="stubs[header][employeeName]" id="employeeName" placeholder="Type Employee Name Here" value="Type Employee Name Here" data-val="Type Employee Name Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                        </div>
                                                                    </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                                                           <div class="require" style="width:90%;">
                                            <input type="text" class="addtext addtext2" name="stubs[header][employeeAddress1]" id="employeeAddress1" placeholder="Type Employee Street Address Here" value="Type Employee Street Address Here" data-val="Type Employee Street Address Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                        </div>
                                                                    </td>
                            </tr>
                            <tr>
                                <td ivalign="top">
                                                                            <div class="require" style="width:90%;">
                                            <input type="text" class="addtext addtext2" name="stubs[header][employeeAddress2]" id="employeeAddress2" placeholder="Type Employee City Address Here" value="Type Employee City Address Here" data-val="Type Employee City Address Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                        </div>
                                                                    </td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
                <div class="extendform_right">
                    <div class="first_block">
                        <table>
                            <tbody><tr style="height: 24px;">
                                <td width="50%" align="center" class="first_block_text_top">CHECK DATE</td>
                                <td width="50%" align="center" class="first_block_text_top">CHECK NUMBER</td>
                            </tr>
                            <tr>
                                <td width="50%" align="center">
                                    <div id="extpaymentDate" style="text-align:center;" class="ext_div" data-old="
                                        12/28/2018                                    ">12/13/2018</div>
                                </td>
                                <td width="50%" align="center">
                                    <div id="extstubNumber" style="text-align:center;" class="ext_div" data-old="
                                        10015                                    ">18</div>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="text_pay">PAY THIS AMOUNT</div>
                    <div class="pay_sum">
                                                    ******<span id="extdollars2">936</span>.<span id="extcents2">60</span>*
                                            </div>
                </div>
                <div class="clear"></div>

                <div id="extpay" style="display: none;">
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tbody><tr>
                            <td width="11%">PAY:</td>
                            <td>
                                                                    **<span id="extdollars">369</span>** DOLLARS AND **<span id="extcents">78</span>** CENTS
                                                            </td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="extendform_left" style="display: none;">
                    <div class="extendform_left_block">
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tbody><tr>
                                <td rowspan="3" width="33%" class="extemployeeText">TO THE ORDER OF:</td>
                                <td id="extemployeeName" class="ext_div" data-old="
                                    Type Employee Name Here                                ">Type Employee Name Here</td>
                            </tr>
                            <tr>
                                <td id="extemployeeAddress1" class="ext_div" data-old="
                                    Type Employee Street Address Here                                ">Type Employee Street Address Here</td>
                            </tr>
                            <tr>
                                <td id="extemployeeAddress2" class="ext_div" data-old="
                                    Type Employee City Address Here                                ">Type Employee City Address Here</td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div id="ext3abbreviation" class="ext_div" data-old=""></div>
                </div>
                <div class="extendform_right" style="display: none;">
                    <div class="extendform_right_top">
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tbody><tr>
                                <td width="50%" align="center">CHECK DATE</td>
                                <td width="50%" align="center">CHECK NUMBER</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <div id="extpaymentDate" style="text-align:center;" class="ext_div" data-old="
                                        12/28/2018                                    ">
                                        12/28/2018                                    </div>
                                </td>
                                <td align="center">
                                    <div id="extstubNumber" style="text-align:center;" class="ext_div" data-old="
                                        10015                                    ">
                                        10015                                    </div>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="extendform_right_text1">THIS IS NOT A CHECK</div>
                    <div class="extendform_right_text2">NON NEGOTIABLE</div>
                    <div class="extendform_right_text3">VOID</div>
                </div>
                <div class="clear"></div>
            </div>



            <input type="hidden" name="stubs[header][overtimerate]" class="refreshrate rate" id="overtimerate" style="width:90%;text-align: center;" value="17.21">

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
                                            <div class="form-group" style="margin-bottom: 8px;">
                            <label>Company abbreviation: </label>
                            <input class="form-control addtext pre-input" data-field="abbreviation" type="text" maxlength="10" id="pre-abbreviation" value="" style="width: 120px;">
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
                        <input style="width: 120px;" type="text" class="form-control hasDatepicker" id="pre-paymentDate" value="12/28/2018">
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
	<input type="hidden" value="advanced6" name="stubs[template]">
	<input type="hidden" value="" name="is_wizard">
<div class="modal fade" id="PreviewStubs" tabindex="-1" role="dialog" aria-labelledby="PreviewStubs" style="overflow-x: auto; display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document" style="width: auto; max-width: 960px;">
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
				<div data-tmpl="advanced6" id="carusel_preview" class="carousel slide"><div class="carousel-inner"></div><a class="carousel-control left" href="#carusel_preview" data-slide="prev" style="display: none;"><span class="glyphicon glyphicon-chevron-left"></span></a><a class="carousel-control right" href="#carusel_preview" data-slide="next" style="display: none;"><span class="glyphicon glyphicon-chevron-right"></span></a></div>			</div>
		</div>
	</div>
</div><div class="clear"></div></div></form><!-- content -->
				</div>

</div>
