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
<h2>Modern4 Paycheck Stub Template</h2>
<hr>
<button class="btn btn-primary" id="call-mobile-modal" name="yt1" type="button" style="display: inline-block;">Quick options window</button><br>
<form class="form" id="stubsForm" action="/stubs/modern4?hash=bb566f7d1edebc59e0b601b51e7cdb19" method="post"><div class="options_block well">
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
                    <input type="hidden" name="stubs[stub][1][extended]" id="extended" value="1">
            <div class="extend">
                <div class="btn-group">
                    <button class="btn btn-primary active" id="extendedBtn" type="button" value="extended">Deposit slip(+4.99)</button>
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
	<div class="stub_zone">
		<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=VT323');
    @font-face {
        font-family: "OCRAEXT";
        src: local("OCR A Extended") ,url(/fonts/OCRAEXT.TTF) format('truetype'),url(/fonts/OCRAExtendedRegular.otf) format('opentype');
        font-weight: normal;
        font-style: normal;
    }

    #temp {
        background: url(/images/quality/modern4_w.jpg) no-repeat;
        background-size: 100% 618px;
        max-width: 1000px;
        min-width: 918px;
        font-size: 14px;
        padding: 11px 0 0 0;
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
    .temp_easy {height: 508px;}
    .temp_ext {height: 618px;}
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
    #temp .stub_top{
        padding: 0 4.7% 0 4.8%;
        height: 46px;
    }
    #temp .stub_top .stub_top_left{
        float: left;
        width: 59.3%;
        height: 46px;
    }
    #temp .stub_top .stub_top_left table{
        width: 100%;
        height: 46px;
    }
    #temp .stub_top .stub_top_left table tr{
        height: 24px;
    }
    #temp .stub_top .stub_top_left table tr td{
        text-align: center;
    }
    #temp .stub_top .stub_top_left table tr:nth-child(1){
        font-family: OCRAEXT;        text-transform: uppercase;
        color: #FFF;
        font-size: 18px;
        line-height: 18px;
    }
    #temp .stub_top .stub_top_left table tr:nth-child(2), #temp .stub_top .stub_top_left table tr:nth-child(2) td input{
        font-family: 'VT323', monospace;        color: #0e0e0e;
        text-align: center;
        font-size: 20px;
        line-height: 20px;
    }
    #temp .stub_top .stub_top_right{
        float: right;
        font-size: 28px;
        font-weight: bold;
        color: #939598;
        width: 40%;
        text-align: right;
        height: 45px;
        font-family: Arial, sans-serif;
    }
    #temp .stub_center{
        padding: 6px 4.7% 0 4.8%;        height: 219px;
        position: relative;
    }
    #temp .stub_center table{
        width: 100%;
    }
    #temp .stub_center table tr:nth-child(1) td{
        color: #fff;
        font-family: OCRAEXT;        font-size: 20px;
    }
    #temp .stub_center table tr:nth-child(2) td:nth-child(2){
        font-family: 'VT323', monospace;        color: #0e0e0e;
    }
    #temp .stub_center table tr:nth-child(2) td:nth-child(2),
    #temp .stub_center table tr:nth-child(2) td:nth-child(3),
    #temp .stub_center table tr:nth-child(2) td:nth-child(4),
    #temp .stub_center table tr:nth-child(2) td:nth-child(5){
        font-family: 'VT323', monospace;        color: #0e0e0e;
        font-size: 24px;
    }
    #temp .stub_center table tr:nth-child(2) td:nth-child(2) input,
    #temp .stub_center table tr:nth-child(2) td:nth-child(3) input,
    #temp .stub_center table tr:nth-child(2) td:nth-child(4) input,
    #temp .stub_center table tr:nth-child(2) td:nth-child(5) input{
        font-family: 'VT323', monospace;        color: #0e0e0e;
    }
    #temp .stub_center table tr:nth-child(2) td:nth-child(1) input,#temp .stub_center table tr:nth-child(2) td:nth-child(1){
        font-family: 'VT323', monospace;        color: #0e0e0e;
        font-size: 20px;
    }
    #temp select {
        font-family: 'VT323', monospace;        border: 1px dashed #333;
        background: transparent;
        margin: 0;
        font-size: 20px;
        height: 22px;
        line-height: 22px;
        color: #0e0e0e;
    }
    #temp .stub_button_top{
        padding: 6px 4.7% 0 4.8%;
        height: 162px;
    }

    #temp .stub_button_top .stub_button_top_note{
        float:left;
        width: 40.5%;
        /*width: 360px;*/
        /*background: #0e0e0e;*/
    }
    #temp .stub_button_top .stub_button_top_ytd{
        float:right;
        width: 28.5%;
        /*width: 258px;*/
        /*background: #0A246A;*/
    }
    #temp .stub_button_top .stub_button_top_tax{
        float:right;
        width: 31%;        padding: 0 1%;
        /*width: 260px;*/
        /*padding: 0 9px;*/

        /*background: #0e509e;*/
    }

    #temp .stub_button_top .stub_button_top_note{
        font-family: OCRAEXT;        color: #939598;
        font-size: 16px;
        line-height: 16px;
        padding: 3px;
    }
    #temp .stub_button_top .stub_button_top_note textarea{
        margin: 0px;
        width: 359px;
        max-width: 359px;
        min-width: 359px;
        height: 149px;
        max-height: 149px;
        min-height: 149px;
        border: 0;
        background: none;
        font-family: OCRAEXT;        color: #939598;
        font-size: 16px;
        line-height: 16px;
        text-align: justify;
    }

    .state_tr_hide,
    .casdi_tr_hide {
        display: none;
    }
    #temp .stub_button_top .stub_button_top_tax_text{
        height: 16px;
        font-family: OCRAEXT;        font-size: 14px;
        line-height: 14px;
        color: #fff;
        padding-left: 5px;
    }
    #temp .stub_button_top .stub_button_top_tax table{
        font-size: 14px;
        width: 98%;
        margin-left: 5px;    }
    #temp .stub_button_top .stub_button_top_tax table tr td:nth-child(1){
        font-family: OCRAEXT;        text-transform: uppercase;
        color: #0e0e0e;
        font-size: 14px;
        line-height: 14px;    }
    #temp .stub_button_top .stub_button_top_tax table tr td:nth-child(2){
        font-family: 'VT323', monospace;        color: #0e0e0e;
        font-size: 17px;
        line-height: 17px;
        text-align: center;
    }
    #temp .stub_button_top .stub_button_top_tax table tr td:nth-child(2) input{
        height: 14px;
        border: 0;
        background: none;
        color: #0e0e0e;
        text-align: center;
    }
    #temp .stub_button_top .stub_button_top_ytd .stub_button_top_ytd_text{
        height: 16px;
        font-family: OCRAEXT;        font-size: 14px;
        line-height: 14px;
        color: #fff;
        padding-left: 5px;
    }
    #temp .stub_button_top .stub_button_top_ytd table{
        width: 100%;
        font-size: 14px;
        margin-left: 5px;    }
    #temp .stub_button_top .stub_button_top_ytd table tr td:nth-child(1){
        font-family: OCRAEXT;        text-transform: uppercase;
        color: #0e0e0e;
        font-size: 14px;
        line-height: 14px;
    }
    #temp .stub_button_top .stub_button_top_ytd table tr td:nth-child(2){
    font-family: 'VT323', monospace;        color: #0e0e0e;
        font-size: 18px;
        line-height: 18px;
        text-align: right;
        padding-right: 12px;
    }
    #temp .stub_button_top .stub_button_top_ytd table tr td:nth-child(2) input{
        height: 14px;
        border: 0;
        background: none;
        color: #0e0e0e;
        text-align: right;
    }
    #ext2abbreviation{
        position: absolute;
        color: #d7d8d8;
        font-size: 73px;
        line-height: 73px;
        top: 126px;
        width: 903px;
        text-align: center;
    }
    .stub_button_buttom{
        padding: 6px 4.7% 0 4.8%;        height: 70px;
    }
    .stub_button_buttom_left{
        float: left;
        width: 70%;
        height: 44px;
        color: #939598;
    }
    .stub_button_buttom_left table{
        height: 44px;
        width: 100%;
    }
    .stub_button_buttom_right{
        float: right;
        width: 28.7%;
        height: 44px;
    }
    #companyAddress1 {
        font-family: OCRAEXT;        font-size: 18px;
        line-height: 18px;
    }
    #temp .stub_button_buttom_right table{
        width: 100%;
        height: 44px;
    }
    #temp .stub_button_buttom_right table tr td:nth-child(1){
        font-family: OCRAEXT;        color: #939598;
        font-size: 18px;
        line-height: 18px;        font-weight: bold;
        text-align: center;
    }
    #temp .stub_button_buttom_right table tr td:nth-child(2){
        font-family: 'VT323', monospace;        font-size: 24px;
        line-height: 24px;
        color: #0e0e0e;
    }
    #temp .stub_button_buttom_right table tr td:nth-child(2) input{
        border: 0;
        background: none;
        text-align: right;
        color: #0e0e0e;

    }
    #temp .stub_button_buttom_right table tr td:nth-child(2) p{
        text-align: right;
    }
    .extendform_text{
        font-family: OCRAEXT;        color: #939598;
        text-align: center;
        font-size: 11px;
        height: 20px;
        padding-top: 3px;
    }
    #extendform{
        display: none;
        padding: 9px 4.7% 0 4.8%;    }
    #extendform .extendform_inform{
        font-family: OCRAEXT;        font-size: 16px;
        text-align: right;
        color: #939598;
        padding-right: 8px;
    }
    #extendform .extendform_inform span{
        font-family: 'VT323', monospace;        color: #000;
        font-size: 20px;
    }
    #extendform .extendform_block{
        width: 69%;
        height: 67px;
        padding-left: 5px;
    }
    #extendform .extendform_block_pay .ext_left_payinform_text{
        font-size: 29px;
        line-height: 29px;
        font-weight: bold;
        color: #939598;
        font-family: Arial, sans-serif;
    }
    #extendform .extendform_block_pay .ext_left_payinform_paytext{
        font-family: 'VT323', monospace;        color: #000;
        font-size: 22px;
        line-height: 22px;
    }
    #extendform .extendform_block_emploer .extendform_text_whom_left{
        font-family: OCRAEXT;        color: #939598;
        text-transform: uppercase;
        font-size: 16px;
        line-height: 16px;
    }
    #extendform .extendform_block_emploer .extendform_text_whom_right{
        font-family: 'VT323', monospace;        color: #000;
        font-size: 18px;
        line-height: 18px;    }
    .extendform_block_pay table{
        height: 29px;
    }
    .extendform_block_emploer table{
        height: 39px;
    }
    #temp .stub_button_top .stub_button_top_tax table tr td:nth-child(2) input#deductionotherrate{
        height: 20px;
        line-height: 20px;
        border: 1px dashed #333;
        background: transparent;
        margin: 1px 0;
        font-weight: normal;
    }
</style>
    <div class="all_preset" id="all_preset1">
                <div class="temp_ext" id="temp">

            <div class="stub_top">
                <div class="stub_top_left">
                    <table>
                        <tbody><tr>
                            <td width="21.3%">EMPLOYEE#</td>
                            <td width="19.3%">PAY DATE</td>
                            <td width="35.5%">REPORTING PERIOD</td>
                            <td>SSN</td>
                        </tr>
                        <tr>
                            <td>
                                                                    <div class="require" style="width:80%;">
                                        <input type="text" class="addtext" name="stubs[header][employeeId]" id="employeeId" placeholder="123" value="123" maxlength="10" size="10" data-val="123" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: -2px; left: 91px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                    </div>
                                                            </td>
                            <td>
                                                                    <div class="require" style="width:76%;">
                                        <input type="text" name="stubs[stub][1][paymentDate]" id="paymentDate" placeholder="12/28/2018" value="12/28/2018" class="hasDatepicker" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: -2px; left: 79px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                    </div>
                                                            </td>
                            <td>
                                                                    <input type="text" style="width: 90%;" name="stubs[stub][1][paymentPeriodDate]" id="paymentPeriodDate" class="paymentPeriodDate">
                                                            </td>
                            <td>
                                                                    <div class="require" style="width:79%;">
                                        <input type="text" class="addtext" name="stubs[header][ssn]" id="ssn" placeholder="XXX-XX-1234" value="XXX-XX-1234" data-val="XXX-XX-1234" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: -2px; left: 103px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                    </div>
                                                            </td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="stub_top_right">Payment Statement</div>
                <div class="clear"></div>
            </div>
            <div class="stub_center">
                <table>
                    <tbody><tr>
                        <td width="24%" style="padding-left: 5px;">NAME &amp; ADDRESS</td>
                        <td width="35.2%" style="padding-left: 5px;">INCOME</td>
                        <td width="11.8%" align="center">RATE</td>
                        <td width="11.9%" align="center">HOURS</td>
                        <td align="center">CURRENT PAY</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 5px;padding-right: 5px;padding-top: 5px;">
                                                            <div class="require" style="width:90%;">
                                    <input type="text" class="addtext addtext2" name="stubs[header][employeeName]" id="employeeName" placeholder="Type Employee Name Here" value="Type Employee Name Here" data-val="Type Employee Name Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in green" style="top: -1px; left: 186px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                </div>
                                <div class="require" style="width:90%;">
                                    <input type="text" class="addtext addtext2" name="stubs[header][employeeAddress1]" id="employeeAddress1" placeholder="Type Employee Street Address Here" value="Type Employee Street Address Here" data-val="Type Employee Street Address Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in green" style="top: -1px; left: 186px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                </div>
                                <div class="require" style="width:90%;">
                                    <input type="text" class="addtext addtext2" name="stubs[header][employeeAddress2]" id="employeeAddress2" placeholder="Type Employee City Address Here" value="Type Employee City Address Here" data-val="Type Employee City Address Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in green" style="top: -1px; left: 186px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                </div>
                                <div>
                                    <input type="hidden" name="stubs[header][statename]" id="statename" value="New York">
                                    <select name="stubs[header][state]" id="state" style="width:90%;"><option value="0">Select a State</option><option value="al">Alabama</option><option value="ak">Alaska</option><option value="az">Arizona</option><option value="ar">Arkansas</option><option value="ca">California</option><option value="co">Colorado</option><option value="ct">Connecticut</option><option value="de">Delaware</option><option value="dc">District Of Columbia</option><option value="fl">Florida</option><option value="ga">Georgia</option><option value="hi">Hawaii</option><option value="id">Idaho</option><option value="il">Illinois</option><option value="in">Indiana</option><option value="ia">Iowa</option><option value="ks">Kansas</option><option value="ky">Kentucky</option><option value="la">Louisiana</option><option value="me">Maine</option><option value="md">Maryland</option><option value="ma">Massachusetts</option><option value="mi">Michigan</option><option value="mn">Minnesota</option><option value="ms">Mississippi</option><option value="mo">Missouri</option><option value="mt">Montana</option><option value="ne">Nebraska</option><option value="nv">Nevada</option><option value="nh">New Hampshire</option><option value="nj">New Jersey</option><option value="nm">New Mexico</option><option value="ny">New York</option><option value="nc">North Carolina</option><option value="nd">North Dakota</option><option value="oh">Ohio</option><option value="ok">Oklahoma</option><option value="or">Oregon</option><option value="pa">Pennsylvania</option><option value="ri">Rhode Island</option><option value="sc">South Carolina</option><option value="sd">South Dakota</option><option value="tn">Tennessee</option><option value="tx">Texas</option><option value="ut">Utah</option><option value="vt">Vermont</option><option value="va">Virginia</option><option value="wa">Washington</option><option value="wv">West Virginia</option><option value="wi">Wisconsin</option><option value="wy">Wyoming</option></select>
                                </div>
                                                    </td>
                        <td valign="top" style="padding-left: 5px;text-transform: uppercase;padding-top: 5px;">Gross Earnings</td>
                        <td valign="top" style="text-align: center;padding-top: 5px;">
                                                            <input type="text" name="stubs[header][payrate]" class="refreshable" id="payrate" style="width:80%;text-align: center;" value="11.47">
                                                    </td>
                        <td valign="top" style="text-align: center; padding-top: 5px;">
                                                            <input type="text" name="stubs[stub][1][payhours]" class="payhours" id="payhours" style="width:80%;text-align: center;">
                                                    </td>
                        <td valign="top" style="text-align: center;padding-top: 5px;">
                                                            <input type="text" name="stubs[stub][1][paythis]" id="paythis" class="readonly refreshable" style="width:80%;text-align: center;" readonly="readonly">
                                                    </td>
                    </tr>
                </tbody></table>
                <div id="ext2abbreviation" class="ext_div" data-old="">ICOMPASS Acad</div>
            </div>
            <div class="stub_button_top">
                <div class="stub_button_top_note">
                                            <textarea placeholder="NOTES" name="stubs[header][notes]" id="notes_zone" maxlength="280"></textarea>
                                    </div>
                <div class="stub_button_top_ytd">
                    <div class="stub_button_top_ytd_text">YEAR-TO-DATE</div>
                    <table>
                        <tbody><tr>
                            <td width="50%">YTD GROSS</td>
                                                            <td class="right_stub_total_value_ytdgross"><input type="text" name="stubs[stub][1][ytdtotal]" class="readonly refreshable" id="ytdtotal" style="width:98%;" readonly="readonly"></td>
                                                    </tr>
                        <tr>
                            <td>YTD DEDUCTIONS</td>
                                                            <td class="right_stub_total_value_ytddeductions"><input type="text" name="stubs[stub][1][ytddeductions]" class="readonly refreshable" id="ytddeductions" style="width: 98%;" readonly="readonly"></td>
                                                    </tr>
                        <tr>
                            <td>YTD NET PAY</td>
                                                            <td class="right_stub_total_value_ytdnetpay"><input type="text" name="stubs[stub][1][ytdnetpay]" class="readonly refreshable" id="ytdnetpay" style="width: 98%;" readonly="readonly"></td>
                                                    </tr>
                        <tr class="deductionothertr">
                            <td>YTD <span class="repidedeductionotherfield"></span></td>
                            <td>
                                                                <input type="text" name="stubs[header][deductionotherytdtaxe]" class="readonly refreshable" id="deductionotherytd" style="width: 98%;" readonly="readonly">
                                                            </td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="stub_button_top_tax">
                    <div class="stub_button_top_tax_text">STATUTORY DEDUCTIONS</div>
                    <table>
                        <tbody><tr>
                            <td class="right_stub_body_ficamedicare_text" style="width: 75%;">Fica - Medicare</td>
                                                            <td class="right_stub_body_ficamedicare_totaltax" align="center">
                                    <input type="text" name="stubs[stub][1][ficamedtax]" class="readonly line-up refreshable" id="ficamedtax" style="width: 95%;" readonly="readonly">
                                </td>
                                                    </tr>
                        <tr>
                            <td class="right_stub_body_ficasocialsecurity_text">Fica - Social Security</td>
                                                            <td class="right_stub_body_ficasocialsecurity_totaltax" align="center">
                                    <input type="text" name="stubs[stub][1][ficasstax]" class="readonly line-up refreshable" id="ficasstax" style="width: 95%;" readonly="readonly">
                                </td>
                                                    </tr>
                        <tr>
                            <td class="right_stub_body_federaltax_text">Federal Tax</td>
                                                            <td class="right_stub_body_federaltax_totaltax" align="center">
                                    <input type="text" name="stubs[stub][1][ficafedtax]" class="readonly line-up refreshable" id="ficafedtax" style="width: 95%;" readonly="readonly">
                                </td>
                                                    </tr>
                                                    <tr class="state_tr">
                                <td class="right_stub_body_stateTax_text">State Tax W/H</td>
                                <td class="right_stub_body_stateTax_totaltax" align="center"><input type="text" name="stubs[stub][1][sttax]" class="readonly line-up refreshable" id="sttax" style="width: 95%;" readonly="readonly"></td>
                                <input type="hidden" name="stubs[header][stateTax]" id="abbrState" value="NY State Tax">
                            </tr>

                            <tr class="casdi_tr casdi_tr_hide">
                                <td class="right_stub_body_california_text">California SDI Tax</td>
                                <td class="right_stub_body_california_totaltax" align="center"><input type="text" name="stubs[stub][1][casditax]" class="readonly line-up refreshable" id="casditax" style="width: 95%;" readonly="readonly"></td>
                            </tr>
                                                                            <tr class="deductionothertr">
                                <td><input type="text" name="stubs[header][deductionotherfield]" id="deductionotherfield" maxlength="10" class="deductionotherfield" placeholder="New field" style="width:90%;"></td>
                                <td><input type="text" name="stubs[header][deductionotherrate]" class="refreshrate deductionotherrate" id="deductionotherrate" style="width: 90%;"></td>
                            </tr>
                                            </tbody></table>
                </div>
                <div class="clear"></div>
            </div>
            <div class="stub_button_buttom">
                <div class="stub_button_buttom_left">
                    <table>
                        <tbody><tr>
                            <td style="width: 30%;font-size: 20px;line-height: 20px;padding-left: 10px;line-height: 20px;"><div id="ext3abbreviation" class="ext_div" data-old="">ICOMPASS Acad</div></td>
                            <td>
                                                                <div class="require" style="width:95%;">
                                    <input type="text" class="addtext addtext2" name="stubs[header][companyAddress1]" id="companyAddress1" placeholder="Type Company Street Address Here" value="Type Company Street Address Here" data-val="Type Company Street Address Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in green" style="top: -2px; left: 421px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                </div>
                                                            </td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="stub_button_buttom_right">
                    <table>
                        <tbody><tr>
                            <td width="37%">NET PAY</td>
                            <td style="padding-right: 5px;">
                                                                    <input type="text" name="stubs[stub][1][netpay]" class="readonly center-line-up refreshable" id="netpay" style="width: 100%;" readonly="readonly">
                                                            </td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="clear"></div>
                <div class="extendform_text">STATEMENT OF EARNINGS AND DEDUCTIONS • DETACH AND KEEP FOR YOUR RECORDS</div>
            </div>

            <div id="extendform" style="display: block;">
                <div class="extendform_inform">THIS IS NOT A CHECK ∙ NON-NEGOTIABLE ∙ CHECK NO <span class="ext_div" id="extstubNumber" data-old="10015">10015</span> ∙ CHECK DATE <span class="ext_div" id="extpaymentDate" data-old="12/28/2018">12/28/2018</span></div>
                <div class="extendform_block">
                    <div class="extendform_block_pay">
                        <table cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td class="ext_left_payinform_text" style="padding-right: 10px;">Pay</td>
                                <td class="ext_left_payinform_paytext" id="extpay">
                                                                            **<span id="extdollars">19621</span>** DOLLARS AND **<span id="extcents">16</span>** CENTS
                                                                    </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="extendform_block_emploer">
                        <table cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td class="extendform_text_whom_left" width="28%" valign="top">To the order of:</td>
                                <td class="extendform_text_whom_right">
                                    <span id="extemployeeName">gvhycgtj</span>
                                    <span id="extemployeeAddress1">24 Ago Alaga Street. Lusada, Ogun State</span>
                                    <span id="extemployeeAddress2">jhgjfvj</span>
                                    <span id="statenamerepide">New York</span>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
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
	<input type="hidden" value="modern4" name="stubs[template]">
	<input type="hidden" value="" name="is_wizard">
</form><div class="modal fade" id="PreviewStubs" tabindex="-1" role="dialog" aria-labelledby="PreviewStubs" style="overflow-x: auto; display: none;" aria-hidden="true">
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
				<div data-tmpl="modern4" id="carusel_preview" class="carousel slide"><div class="carousel-inner"></div><a class="carousel-control left" href="#carusel_preview" data-slide="prev" style="display: none;"><span class="glyphicon glyphicon-chevron-left"></span></a><a class="carousel-control right" href="#carusel_preview" data-slide="next" style="display: none;"><span class="glyphicon glyphicon-chevron-right"></span></a></div>			</div>
		</div>
	</div>
</div><div class="clear"></div></div><!-- content -->
				</div>
</div>
