<div id="tmpl-classic" class="tmpl-show" style="display: block;"><script type="text/javascript" src="/js/classStubs.js"></script>
    <script type="text/javascript" src="/js/modalStubs.js"></script>
    <script type="text/javascript" src="/js/generateStubs.js"></script>
    <h2>Classic Paycheck Stub Template</h2>
    <hr>
    <button class="btn btn-primary" id="call-mobile-modal" name="yt0" type="button" style="display: none;">Quick options window</button><br>
    <form class="form" id="stubsForm" action="/generateStubs/selecttpl?template=classic" method="post"><div class="options_block well">
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
                    <label>The stub you build is the most recent. If ordering multiple stubs enter the most recent payday on the first stub.</label>
        </div>
        <br>
        <div class="stub_zone">
            <div class="centered-arrow">
        <div class="col-xs-6">
            <button id="back_to_select_tmpl" class="btn btn-success" name="yt1" type="button"><i class="fa fa-chevron-left"></i>&nbsp;Go Back Select Template</button>    </div>
        <div class="col-xs-6">
            <button id="preview_tmpl" class="pull-right btn btn-success" name="next" type="button"><i class="fa fa-chevron-right"></i>&nbsp;Preview Your Stub</button>    </div>
    </div><style type="text/css">
        #temp {
            font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
            background: url(/images/quality/classic1_w.jpg) no-repeat 0 54px;
            background-size: 100% 459px;
            max-width: 1000px;
            min-width: 918px;
            font-size: 13px;
            font-weight: bold;
            height: 513px;
            padding: 0;
        }

        #temp p {
            text-transform: none;
            font-weight: bold;
            height: 20px;
            line-height: 20px;
            margin: 1px 0;
            font-size: 15px;
            padding: 0 3px;
        }
        #temp input.require-error[type="text"] {border:2px dashed #a94442;}
        #temp input[type="text"] {
            border: 1px dashed #333;
            font-weight: bold;
            background: transparent;
            height: 20px;
            line-height: 20px;
            margin: 1px 0;
            font-size: 15px;
            padding: 0 3px;
        }

        #temp .head_stub {
            height: 54px;
            padding-left: 1%;
        }
        #temp .left_head_stub {
            float: left;
            width: 63%;
        }
        #temp .right_head_stub {
            float: right;
            width: 30%;
            font-weight: bold;
            font-size: 16px;
            letter-spacing: 3px;
            margin: 22px 2% 0 0;
            text-align: right;
        }
        #temp .stub_top  {
            margin: 0;
            height: 82px;
            padding-left: 1%;
        }
        #temp .stub_top table {
            color: #000000;
            width: 100%;
        }
        #temp .stub_top table th {
            text-transform: uppercase;
            color: #ffffff;
            text-align: center;
            height: 37px;
            line-height: 37px;
            letter-spacing: 2px;
            font-weight: bold;
        }

        #temp .stub_top table th:first-child,
        #temp .stub_top table td:first-child {
            text-align: left;
        }

        #temp .stub_body {
            margin: 0;
            color: #000000;
            height: 335px;
            padding-left: 1%;
        }
        #temp .stub_total {
            /*background: yellow;*/
            margin: 0;
            color: #000000;
            height: 38px;
        }
        #temp .stub_body table,
        #temp .stub_total table {
            width: 100%;
        }
        #temp .stub_body table th,
        #temp .stub_total table th {
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            padding: 0;
            vertical-align: top;
            height: 28px;
            line-height: 16px;
        }
        #temp .stub_total table th {
            height: 16px;
        }
        #temp .stub_body table td,
        #temp .stub_total table td {
            text-transform: uppercase;
            font-size: 12px;
            font-weight: bold;
            padding: 0 0 12px 0;
            height: 13px;
            line-height: 13px;
        }
        #temp .stub_total table td {
            padding: 0;
        }
        #temp .stub_total p {
            text-align: center;
        }

        #temp input[type="text"].readonly{
            border: 0;
        }
        #temp .stub_total input[type="text"].readonly{
            border: 0;
            text-align: center;
            width: 100%;
        }
        #temp #stubNumber {
            width: 50%;
            font-size: 12px;
            color: #fff;
            margin-left: 5px;
            display: inline-block;
        }
        #temp #companyAddress1 {
            padding: 0 3px;
            font-size: 16px;
        }
        #temp #companyName {
            font-size: 18px;
            height: 26px;
            line-height: 26px;
            padding: 0 3px;
        }
        #temp #employeeName,
        #temp #employeeAddress1 {
            margin: 1px 0;
            font-size: 12px;
            height: 18px;
            line-height: 18px;
        }
        #temp #ssn,
        #temp #paymentPeriodDate,
        #temp #paymentDate,
        #temp #employeeId {
            font-size: 13px;
        }
        #temp #employeeId {
            margin: 0;
            line-height: 18px;
        }

        #temp .state_tr,
        #temp .casdi_tr {
            height: 34px;
        }
        #temp .state_tr_hide td,
        #temp .casdi_tr_hide td {
            display: none;
        }

        #stub_wizard .centered-arrow{top:300px;}
        #stub_wizard #stub_wizard_tab_3 .centered-arrow{top:52%;min-width: 170px;}
        #temp  input[type="text"].line-up,
        #temp .line-up{
            text-align: right;
            width: 80%;
            display: block;
        }
    </style>
        <div class="all_preset" id="all_preset1">
        <div id="temp">
            <div class="head_stub">
                <div class="left_head_stub">
                                        <div class="require">
                            <input id="companyName" type="text" class="addtext" name="stubs[header][companyName]" placeholder="Type Company Name Here" value="Type Company Name Here" data-val="Type Company Name Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                        </div>
                        <div class="require" id="companyAddress">
                            <input id="companyAddress1" type="text" class="addtext" name="stubs[header][companyAddress1]" placeholder="Type Company Street Address Here" value="Type Company Street Address Here" data-val="Type Company Street Address Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                        </div>
                                </div>
                <div class="right_head_stub">EARNINGS STATEMENT</div>
                <div class="clear"></div>
            </div>

            <div class="stub_top">
            <div>
                <table cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                        <th width="40%">
                                                        <span class="employee_word">Employee</span>
                                                     name / address
                        </th>
                        <th width="13%">ssn</th>
                        <th width="21%">reporting period</th>
                        <th width="12%">pay date</th>
                        <th width="13%">
                                                        # <input id="stubNumber" type="text" class="addtext" name="stubs[stub][1][stubNumber]">
                                                </th>
                    </tr>

                    <tr>
                        <td valign="top">
                                                        <div class="require" style="width:93%;">
                                    <input type="text" class="addtext" name="stubs[header][employeeName]" id="employeeName" placeholder="Type Employee Name Here" value="Type Employee Name Here" data-val="Type Employee Name Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                </div>
                                <div class="require" style="width:93%;">
                                    <input type="text" class="addtext" name="stubs[header][employeeAddress1]" id="employeeAddress1" placeholder="Type Employee Street Address Here" value="Type Employee Street Address Here" data-val="Type Employee Street Address Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                </div>
                                                </td>
                        <td align="center" valign="middle">
                                                        <div class="require" style="width:83%;">
                                    <input type="text" class="addtext" name="stubs[header][ssn]" id="ssn" placeholder="XXX-XX-1234" value="XXX-XX-1234" data-val="XXX-XX-1234" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                </div>
                                                </td>
                        <td align="center" valign="middle">
                                                        <input type="text" name="stubs[stub][1][paymentPeriodDate]" id="paymentPeriodDate" class="paymentPeriodDate" style="width:85%;">
                                                </td>
                        <td align="center" valign="middle">
                                                        <div class="require" style="width:70%; margin-left:9%;">
                                    <input type="text" name="stubs[stub][1][paymentDate]" id="paymentDate" placeholder="11/12/2018" value="11/12/2018" class="hasDatepicker" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                </div>
                                                </td>
                        <td align="center" valign="middle" style="padding: 0 1% 0 0;">
                                                        <span style="display: inline-block;margin: 0 0 0 2%;">
                                    <b><span class="employee_word">Employee</span> # </b>
                                </span>
                                <div class="require" style="width:70%">
                                    <input type="text" class="addtext" id="employeeId" name="stubs[header][employeeId]" placeholder="123" value="123" maxlength="10" size="10" data-val="123" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                </div>
                                                </td>
                    </tr>
                </tbody></table>
            </div>
            </div>
            <div class="stub_body">
            <div>
                <table cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                        <th width="16%" style="text-align:left;">INCOME</th>
                        <th width="11%">RATE</th>
                        <th width="11%">HOURS</th>
                        <th width="15%">CURRENT PAY</th>
                        <th width="21%" style="text-align:left;">DEDUCTIONS</th>
                        <th width="12%">TOTAL</th>
                        <th>YTD TOTAL</th>
                    </tr>
                    <tr>
                        <td>GROSS EARNINGS</td>
                                                <td><input type="text" class="refreshable" name="stubs[header][payrate]" id="payrate" style="width:80%;margin-left: 10%;" value="11.47"></td>
                            <td><input type="text" class="payhours" name="stubs[stub][1][payhours]" id="payhours" style="width:80%;margin-left: 10%;"></td>
                            <td><input type="text" class="readonly refreshable" name="stubs[stub][1][paythis]" id="paythis" style="width: 90%;text-align: center;" readonly="readonly"></td>
                                            <td colspan="3" style="font-size: 15px;">STATUTORY DEDUCTIONS</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td>FICA - MEDICARE</td>
                                                <td><input class="readonly line-up refreshable" type="text" name="stubs[stub][1][ficamedtax]" id="ficamedtax" readonly="readonly"></td>
                            <td><input class="readonly line-up refreshable" type="text" name="stubs[stub][1][ytdficamedtax]" id="ytdficamedtax" readonly="readonly"></td>
                                        </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td>FICA - SOCIAL SECURITY</td>
                                                <td><input class="readonly line-up refreshable" type="text" name="stubs[stub][1][ficasstax]" id="ficasstax" readonly="readonly"></td>
                            <td><input class="readonly line-up refreshable" type="text" name="stubs[stub][1][ytdficasstax]" id="ytdficasstax" readonly="readonly"></td>
                                        </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td>FICA - FEDERAL TAX</td>
                                                <td><input class="readonly line-up refreshable" type="text" name="stubs[stub][1][ficafedtax]" id="ficafedtax" readonly="readonly"></td>
                            <td><input class="readonly line-up refreshable" type="text" name="stubs[stub][1][ytdficafedtax]" id="ytdficafedtax" readonly="readonly"></td>
                                        </tr>


                                        <tr class="state_tr state_tr_hide">
                            <td colspan="4" style="height:22px;"><input type="hidden" name="stubs[header][stateTax]" id="abbrState"></td>
                            <td id="stateAbbrId">State Tax W/H</td>
                            <td><input class="readonly line-up refreshable" type="text" name="stubs[stub][1][sttax]" id="sttax" readonly="readonly"></td>
                            <td><input class="readonly line-up refreshable" type="text" name="stubs[stub][1][ytdsttax]" id="ytdsttax" readonly="readonly"></td>
                        </tr>
                        <tr class="casdi_tr casdi_tr_hide">
                            <td colspan="4"></td>
                            <td>California SDI Tax</td>
                            <td><input class="readonly line-up refreshable" type="text" name="stubs[stub][1][casditax]" id="casditax" readonly="readonly"></td>
                            <td><input class="readonly line-up refreshable" type="text" name="stubs[stub][1][ytdcasditax]" id="ytdcasditax" readonly="readonly"></td>
                        </tr>
                                </tbody></table>
            </div>
            </div>
            <div class="stub_total">
            <div>
                <table cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                        <th align="center" width="17%">YTD GROSS</th>
                        <th align="center" width="19%">YTD DEDUCTIONS</th>
                        <th align="center" width="17%">YTD NET PAY</th>
                        <th align="center" width="15%">TOTAL</th>
                        <th align="center" width="17%">DEDUCTIONS</th>
                        <th align="center" width="15%">NET PAY</th>
                    </tr>
                    <tr>
                                                <td><input class="readonly refreshable" type="text" name="stubs[stub][1][ytdtotal]" id="ytdtotal" readonly="readonly"></td>
                            <td><input class="readonly refreshable" type="text" name="stubs[stub][1][ytddeductions]" id="ytddeductions" readonly="readonly"></td>
                            <td><input class="readonly refreshable" type="text" name="stubs[stub][1][ytdnetpay]" id="ytdnetpay" readonly="readonly"></td>
                            <td><input class="readonly refreshable" type="text" name="stubs[stub][1][total]" id="total" readonly="readonly"></td>
                            <td><input class="readonly refreshable" type="text" name="stubs[stub][1][deductions]" id="deductions" readonly="readonly"></td>
                            <td><input class="readonly refreshable" type="text" name="stubs[stub][1][netpay]" id="netpay" readonly="readonly"></td>
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
                                                </div>
                                    <br>
                </div>
                <div class="col-sm-3">
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
                            <input style="width: 120px;" type="text" class="form-control hasDatepicker" id="pre-paymentDate" value="11/12/2018">
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
        <input type="hidden" value="classic" name="stubs[template]">
        <input type="hidden" value="1" name="is_wizard">
    </form>
    <script type="text/javascript" src="/js/highlightsFields.js"></script>
    <script type="text/javascript">
    /*<![CDATA[*/

                    moment.locale('en');
                    $('#stub_zone').trigger('put:popover');
                    $(document).ready(function () {
                        $('#preview_tmpl').myStubPlugin({
                            modal: false,
                            w:1020,

                            loader:true,


                        });
                    })

    /*]]>*/
    </script>
    </div>
    </div>
