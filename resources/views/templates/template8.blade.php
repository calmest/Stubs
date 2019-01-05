<div id="tmpl-classic5" class="tmpl-show" style="display: block;">
    <script type="text/javascript" src="/js/classStubs.js"></script>
    <script type="text/javascript" src="/js/modalStubs.js"></script>
    <script type="text/javascript" src="/js/generateStubs.js"></script>
    <h2>Classic5 Paycheck Stub Template</h2>
    <hr>
    <button class="btn btn-primary" id="call-mobile-modal" name="yt0" type="button" style="display: none;">Quick options window</button><br>
    <form class="form" id="stubsForm" action="/generateStubs/selecttpl?template=classic5" method="post"><div class="options_block well">
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
            background: url(/images/quality/classic5_w.jpg) no-repeat;
            background-size: 100% 773px;
            background-position: 0 0;
            max-width: 1000px;
            min-width: 918px;
            font-size: 14px;
            font-weight: bold;
            padding: 0;
            color: #0F8DD8;
        }
        #temp label {
            margin:0;
            color: #0F8DD8;
            font-size: 12px;
        }
                .temp_easy {height: 617px;}
            .temp_ext {height: 773px;}
            #temp input.require-error[type="text"]{border:2px dashed #a94442;}
            #temp input[type="text"] {
                font-size: 15px;
                height: 20px;
                line-height: 20px;
                border: 1px dashed #333;
                background: transparent;
                margin: 1px 0;
                font-weight: normal;
            }
            #temp .employee_word {
                text-transform: uppercase;
            }
            #temp p {
            font-size: 15px;
            height: 20px;
            line-height: 20px;
            font-weight: normal;
            margin: 1px 0;
        }
        #temp .company_name_zone {
            margin: 0 80px;
            height: 46px;
            text-align: center;
            padding: 14px 0 3px 0;
        }

        #temp .header_of_stub {
            padding: 0 2.5%;
            height: 140px;
            margin: 0;
        }

        #temp .header_of_stub table,
        #temp .center_of_stub table {
            width: 100%;
        }
        #temp .header_of_stub table tr th {
            text-align: center;
            font-size: 10px;
            height: 29px;
            line-height: 29px;
            font-weight: bold;
            letter-spacing: -0.4px;
        }
        #temp .header_of_stub table tr td:first-child {
            text-align: left;
        }
        #temp .header_of_stub table tr td {
            color: #7d7d7d;
            height: 25px;
            font-size: 13px;
            padding:0 0.5%;
            font-weight: normal;
        }
        #temp .header_of_stub input,
        #temp .header_of_stub p {
            height: 22px;
            line-height: 22px;
        }
        #temp #companyName {
            text-align: center;
            font-size: 22px;
            text-transform: uppercase;
            height: 25px;
            line-height: 25px;
            margin: 0;
            font-weight: bold;
        }
        #temp #companyAddress1,
        #temp #companyAddress2,
        #temp #companyPhone,
        #temp #employeeName,
        #temp #employeeAddress1,
        #temp #employeeAddress2,
        #temp #employeePhone {
            padding:0 2px;
            font-size: 12px;
        }
        #temp #employeeName {
            text-align: center;
        }
        #temp #stubNumber {
            display: inline-block;
            width: 70%;
        }
        #temp #companyPhone {
            width: 95%;
        }
        #temp #payRoll {
            width: 80%;
        }

        #temp #paymentDate,
        #temp #employeeId,
        #temp #stubNumber,
        #temp #payRoll {
            padding:0 2px;
            font-size: 13px;
        }

        #temp #paymentPeriodDate {
            width: 98%;
            font-size: 12px;
            margin-left: 2%;
        }
        #temp .ssn_td label,
        #temp .exemptions_td label,
        #temp .marital_status_td label {
            float: left;		display: inline-block;
            color: #0F8DD8;
            font-weight: normal;
            font-size: 12px;
            line-height: 27px;
        }

        #temp .ssn_td div.require {
            float: left;
            width: 70%;
            margin-left: 2%;
            display: inline-block;
        }
        #temp #ssn{
            height: 25px;
            line-height: 25px;
            padding: 0 2px;
            font-size: 13px;
            color: #7d7d7d;
        }
        #temp p#ssn {
            width: 70%;
            margin-left: 5px;
            display: inline-block;
        }

        #temp #exemptions,
        #temp #maritalStatus {
            height: 25px;
            line-height: 25px;
            padding: 0 2px;
            font-size: 13px;
            color: #7d7d7d;
            display: inline-block;
        }

        #temp select#exemptions,
        #temp select#maritalStatus {
            padding: 0;
            color: #7d7d7d;
            background: #F6F5FB;
            width: 100%;
        }
        #temp .marital_status_td div {
            float: right;
            width: 48%;
            margin-left: 2%;
        }
        #temp p#maritalStatus {
            width: 30%;
            margin-left: 5px;
        }
        #temp .exemptions_td div {
            float: right;
            width: 30%;
            margin-left: 2%;
        }
        #temp p#exemptions {
            width: 20%;
            margin-left: 5px;
        }

        #temp .ssn_td:after,
        #temp .exemptions_td:after,
        #temp .marital_status_td:after {
            content: '';
            clear: both;
        }

        #temp .center_of_stub {
            padding: 0 2.5%;
            height: 409px;
            margin: 0;
        }
        #temp .center_of_stub table tr th {
            text-align: center;
            font-size: 15px;
            height: 34px;
            line-height: 34px;
            font-weight: bold;
            color: #fff;
        }
        #temp .center_of_stub table tr.center_head_tr th {
            height: 37px;
            line-height: 36px;
        }
        #temp .center_of_stub table tr td {
            color: #7d7d7d;
            height: 27px;
            line-height: 27px;
            font-size: 14px;
            padding: 0 0.5%;
            font-weight: normal;
        }
        #temp .center_of_stub table tr td p {
            padding: 0 1%;
        }
        #temp .center_of_stub table tr td.td_label {
            color: #0F8DD8;
            font-size: 12px;
            text-transform: uppercase;
        }
        #temp .center_of_stub table tr.net_pay th {
            color: #0F8DD8;
            height: 38px;
            line-height: 38px;
            font-size: 22px;
        }
        #temp .center_of_stub td.total_td{
            color: #0F8DD8;
            line-height: 30px;
            font-size: 18px;
            text-align: center;
            font-weight: bold;
        }

        #temp .center_of_stub input,
        #temp .center_of_stub p {
            color: #7d7d7d;
            font-weight: normal;
            font-size: 14px;
            width: 100%;
        }

        #temp .state_tr {
            height: 27px;
        }
        #temp .state_tr_hide td div.state_td,
        #temp .casdi_tr_hide td div.casdi_td {
            display: none;
        }
        #temp input[type="text"].readonly {
            border: 0;
            text-align: center;
        }
        #temp  input[type="text"].line-up,
        #temp .line-up {
            text-align: right;
            width: 90%;
            display: block;
        }
        #temp .bottom_of_stub {
            padding: 0 2.5%;
            text-transform: uppercase;
            text-align: center;
            height: 22px;
            line-height: 22px;
            font-size: 15px;
        }

        #extendform {
            display: none;
            margin: 33px 5% 0 5%;
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
            height: 69px
        }
        #temp .ext_left table {
            width: 100%;
        }

        #temp .ext_right {
            float: right;
            width: 32%;
            margin-top: 1px;
        }
        #temp .ext_check_zone {
            width: 100%;
            text-align: center;
            font-size: 13px;
            height: 34px;
        }
        #temp .ext_check_zone th {
            color: #0F8DD8;
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
            color: #0F8DD8;
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
            color: #0F8DD8;
            text-transform: uppercase;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            line-height: 30px;
            height: 30px;
        }
        #stub_wizard .centered-arrow{top:390px;}
        #stub_wizard #stub_wizard_tab_3 .centered-arrow{top:45%;min-width: 170px;}


    </style>
        <div class="all_preset" id="all_preset1">
        <div class="temp_easy" id="temp">

            <div class="company_name_zone">
                                <div class="require">
                        <input id="companyName" type="text" class="addtext addtext2" name="stubs[header][companyName]" placeholder="Type Company Name Here" value="Type Company Name Here" data-val="Type Company Name Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                    </div>
                        </div>

            <div class="header_of_stub">
                <div>
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tbody><tr>
                            <th width="17%">COMPANY REF#</th>
                            <th width="40%" style="font-size: 17px;text-transform: uppercase;">
                                                                <span class="employee_word">Employee</span>
                                                             NAME</th>
                            <th width="16x%">DATE</th>
                            <th width="9.5%">PAYSLIP No.</th>
                            <th width="7.5%">PAYROLL</th>
                            <th width="10%">
                                                                <span class="employee_word">Employee</span>
                                                             No.
                             </th>
                        </tr>
                        <tr>
                            <td> </td>
                            <td>
                                                                <div class="require">
                                        <input id="employeeName" type="text" class="addtext addtext2" name="stubs[header][employeeName]" placeholder="Type Employee Name Here" value="Type Employee Name Here" data-val="Type Employee Name Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div><br>
                                    </div>
                                                        </td>
                            <td align="center"><label>PAY PERIOD</label></td>
                            <td colspan="3" rowspan="3"> </td>
                        </tr>
                        <tr>
                            <td>
                                                                <div class="require" style="width: 94%;">
                                        <input id="companyAddress1" type="text" class="addtext addtext2" name="stubs[header][companyAddress1]" placeholder="Company Address Line 1" value="Company Address Line 1" data-val="Company Address Line 1" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                    </div>
                                                        </td>
                            <td rowspan="3">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tbody><tr>
                                        <td width="60%">
                                                                                        <div class="require" style="width: 92%;">
                                                    <input id="employeeAddress1" type="text" class="addtext addtext2" name="stubs[header][employeeAddress1]" placeholder="Employee Address Line 1" value="Employee Address Line 1" data-val="Employee Address Line 1" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div><br>
                                                </div>
                                                                                </td>
                                        <td class="marital_status_td" width="40%">
                                            <label style="width: 63px;">POSITION: </label>
                                            <div>
                                                                                                <select name="stubs[header][maritalStatus]" id="maritalStatus"><option value="Single">Single</option><option value="Married">Married</option></select>
                                                                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                                                        <div class="require" style="width: 92%;">
                                                    <input id="employeeAddress2" type="text" class="addtext addtext2" name="stubs[header][employeeAddress2]" placeholder="Employee Address Line 2" value="Employee Address Line 2" data-val="Employee Address Line 2" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                                </div>
                                                                                </td>
                                        <td class="exemptions_td">
                                            <label style="width: 75px;">EXEMPTION: </label>
                                            <div>
                                                                                                    <select name="stubs[header][exemptions]" id="exemptions"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select>
                                                                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                                                        <input id="employeePhone" type="text" name="stubs[header][employeePhone]" placeholder="Phone">
                                                                                </td>
                                        <td class="ssn_td">
                                            <label style="width: 36px;">SSN: </label>
                                                                                        <div class="require">
                                                    <input type="text" class="addtext" name="stubs[header][ssn]" id="ssn" placeholder="XXX-XX-1234" value="XXX-XX-1234" data-val="XXX-XX-1234" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                                </div>
                                                                                </td>
                                    </tr>
                                </tbody></table>
                            </td>
                            <td align="center">
                                                                <input type="text" name="stubs[stub][1][paymentPeriodDate]" id="paymentPeriodDate" class="paymentPeriodDate" value="11/04/2018 - 11/10/2018">
                                                        </td>
                        </tr>
                        <tr>
                            <td>
                                                                <div class="require" style="width: 94%;">
                                        <input id="companyAddress2" type="text" class="addtext addtext2" name="stubs[header][companyAddress2]" placeholder="Company Address Line 2" value="Company Address Line 2" data-val="Company Address Line 2" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                    </div>
                                                        </td>
                            <td align="center"><label>PAY DATE</label></td>
                        </tr>
                        <tr>
                            <td>
                                                                <input id="companyPhone" type="text" name="stubs[header][companyPhone]" placeholder="Phone">
                                                        </td>

                            <td style="text-align: center;" align="center">
                                                                <div class="require" style="width: 60%;margin-left: 20%;">
                                        <input type="text" name="stubs[stub][1][paymentDate]" id="paymentDate" placeholder="11/12/2018" value="11/12/2018" class="hasDatepicker" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                    </div>
                                                        </td>
                            <td style="text-align: center;">
                                <label># </label>
                                                                <input type="text" class="addtext addtext2" id="stubNumber" name="stubs[stub][1][stubNumber]">
                                                        </td>
                            <td align="center">
                                                                <input type="text" class="addtext" name="stubs[header][payRoll]" id="payRoll" placeholder="87773" value="87773" maxlength="6" size="6" data-val="87773">
                                                        </td>
                            <td style="text-align: center;">
                                                                <div class="require" style="width: 95%">
                                        <input type="text" class="addtext" name="stubs[header][employeeId]" id="employeeId" placeholder="123" value="123" maxlength="10" size="10" data-val="123" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                    </div>
                                                        </td>
                        </tr>

                    </tbody></table>
                </div>
            </div>

            <div class="center_of_stub">
                <div>
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tbody><tr class="center_head_tr">
                            <th width="17%">EARNINGS</th>
                            <th width="10%"> </th>
                            <th width="8%">RATE</th>
                            <th width="6%">HRS</th>
                            <th width="8.5%">PAY</th>
                            <th width="16.5%" ;"="">DEDUCTIONS</th>
                            <th width="9%" style="text-align: right;">PERIOD</th>
                            <th width="9%" style="text-align: right;padding-right:1%;">YTD</th>
                            <th width="16%">TAXABLE PAY</th>
                        </tr>
                        <tr>
                            <td rowspan="4" valign="top" class="total_td">YTD TOTALS</td>
                            <td>Regular Pay</td>
                            <td align="center">
                                                                <input type="text" name="stubs[header][payrate]" class="refreshable" id="payrate" value="11.47">
                                                        </td>
                            <td align="center">
                                                                <input type="text" name="stubs[stub][1][payhours]" class="payhours" id="payhours">
                                                        </td>
                            <td align="center">
                                                                <input type="text" name="stubs[stub][1][paythis]" id="paythis" class="readonly refreshable" readonly="readonly">
                                                        </td>
                            <td class="td_label">FEDERAL TAX</td>
                            <td align="center">
                                                                <input type="text" name="stubs[stub][1][ficafedtax]" class="readonly line-up refreshable" id="ficafedtax" readonly="readonly">
                                                        </td>
                            <td align="center">
                                                                <input type="text" name="stubs[stub][1][ytdficafedtax]" class="readonly line-up refreshable" id="ytdficafedtax" readonly="readonly">
                                                        </td>
                            <td rowspan="4" valign="top" class="total_td">THIS PERIOD TOTALS</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td class="td_label">SS EMPLOYEE</td>
                            <td align="center">
                                                                <input type="text" name="stubs[stub][1][ficasstax]" class="readonly line-up refreshable" id="ficasstax" readonly="readonly">
                                                        </td>
                            <td align="center">
                                                                <input type="text" name="stubs[stub][1][ytdficasstax]" class="readonly line-up refreshable" id="ytdficasstax" readonly="readonly">
                                                        </td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td class="td_label">MEDICARE EMPLOYEE</td>
                            <td align="center">
                                                                <input type="text" name="stubs[stub][1][ficamedtax]" class="readonly line-up refreshable" id="ficamedtax" readonly="readonly">
                                                        </td>
                            <td align="center">
                                                                <input type="text" name="stubs[stub][1][ytdficamedtax]" class="readonly line-up refreshable" id="ytdficamedtax" readonly="readonly">
                                                        </td>
                        </tr>
                        <tr class="state_tr state_tr_hide">
                                                        <td colspan="4">
                                    <input type="hidden" name="stubs[header][stateTax]" id="abbrState">
                                </td>
                                <td class="td_label"><div id="stateAbbrId" class="state_td">State Tax W/H</div></td>
                                <td align="center"><div class="state_td">
                                    <input type="text" name="stubs[stub][1][sttax]" class="readonly line-up refreshable" id="sttax" readonly="readonly">
                                </div></td>
                                <td align="center"><div class="state_td">
                                    <input type="text" name="stubs[stub][1][ytdsttax]" class="readonly line-up refreshable" id="ytdsttax" readonly="readonly">
                                </div></td>
                                                </tr>
                        <tr class="casdi_tr casdi_tr_hide">
                            <th align="center">YTD GROSS</th>
                                                        <td colspan="4"></td>
                                <td valign="top" class="td_label"><div class="casdi_td">California SDI Tax</div></td>
                                <td valign="top" align="center"><div class="casdi_td">
                                    <input type="text" name="stubs[stub][1][casditax]" class="readonly line-up refreshable" id="casditax" readonly="readonly">
                                </div></td>
                                <td valign="top" align="center"><div class="casdi_td">
                                    <input type="text" name="stubs[stub][1][ytdcasditax]" class="readonly line-up refreshable" id="ytdcasditax" readonly="readonly">
                                </div></td>
                                                    <th align="center">*NON-TAXABLE</th>
                        </tr>

                        <tr>
                            <td valign="top" align="center" style="height: 53px;">
                                                                <input type="text" name="stubs[stub][1][ytdtotal]" class="readonly refreshable" id="ytdtotal" style="width:80%;" readonly="readonly">
                                                        </td>
                            <td colspan="7"> </td>
                            <td valign="top" align="center">
                                                                <input type="text" name="stubs[stub][1][total]" class="readonly refreshable" id="total" style="width: 80%;" readonly="readonly">
                                                        </td>
                        </tr>
                        <tr>
                            <th align="center">YTD DEDUCTIONS</th>
                            <th colspan="7"> </th>
                            <th align="center">DEDUCTIONS</th>
                        </tr>
                        <tr>
                            <td valign="top" align="center" style="height: 53px;">
                                                                <input type="text" name="stubs[stub][1][ytddeductions]" class="readonly refreshable" id="ytddeductions" style="width: 80%;" readonly="readonly">
                                                        </td>
                            <td colspan="7"> </td>
                            <td valign="top" align="center">
                                                                <input type="text" name="stubs[stub][1][deductions]" class="readonly refreshable" id="deductions" style="width: 80%;" readonly="readonly">
                                                        </td>
                        </tr>
                        <tr class="net_pay">
                            <th align="center">YTD NET PAY</th>
                            <th colspan="7"> </th>
                            <th align="center">NET PAY</th>
                        </tr>
                        <tr>
                            <td valign="top" align="center">
                                                                <input type="text" name="stubs[stub][1][ytdnetpay]" class="readonly refreshable" id="ytdnetpay" style="width: 80%;" readonly="readonly">
                                                        </td>
                            <td colspan="7"> </td>
                            <td valign="top" align="center">
                                                                <input type="text" name="stubs[stub][1][netpay]" id="netpay" class="readonly refreshable" style="width: 80%;" readonly="readonly">
                                                        </td>
                        </tr>
                    </tbody></table>
                </div>
            </div>

            <div class="bottom_of_stub">
                <span id="extcompanyName" class="ext_div" data-old="
                    Type Company Name Here			">Type Company Name Here</span>
                <span id="extcompanyAddress1" class="ext_div" data-old="
                    Company Address Line 1			">Company Address Line 1</span>
                <span id="extcompanyAddress2" class="ext_div" data-old="
                    Company Address Line 2			">Company Address Line 2</span>
            </div>


            <div id="extendform">
                <div class="ext_left">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody><tr class="ext_price_zone">
                            <td width="25%" valign="middle"><label>PAY</label></td>
                            <td width="75%" valign="middle">
                                <span id="extpay">
                                                                        **<span id="extdollars">369</span>** DOLLARS AND **<span id="extcents">78</span>** CENTS
                                                                </span>
                            </td>
                        </tr>
                    </tbody></table>
                    <table cellpadding="0" cellspacing="0" border="0" style="margin-top: 2px">
                        <tbody><tr class="ext_order_zone">
                            <td width="25%" valign="middle"><label>To the order of:</label></td>
                            <td width="75%" valign="middle">
                                <span id="extemployeeName" class="ext_div" data-old="
                                    Type Employee Name Here							">Type Employee Name Here</span>
                                <br>
                                <span id="extemployeeAddress1" class="ext_div" data-old="
                                    Employee Address Line 1							">Employee Address Line 1</span>,
                                <span id="extemployeeAddress2" class="ext_div" data-old="
                                    Employee Address Line 2							">Employee Address Line 2</span>
                            </td>
                        </tr>
                    </tbody></table>
                </div>

                <div class="ext_right">
                     <table class="ext_check_zone" cellspacing="0" cellpadding="0" border="0">
                        <tbody><tr>
                            <th width="50%">Check Date</th>
                            <th width="50%">Check Number</th>
                        </tr>
                        <tr>
                            <td id="extpaymentDate" class="ext_div" data-old="
                                11/12/2018						">
                                11/12/2018						</td>
                            <td id="extstubNumber" class="ext_div" data-old="
                                10015						">10015</td>
                        </tr>
                    </tbody></table>
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
                                <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-companyAddress1" data-field="companyAddress1" placeholder="Company Address Line 1" value="Company Address Line 1" data-val="Company Address Line 1">
                                <br>
                                                                <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-companyAddress2" data-field="companyAddress2" placeholder="Company Address Line 2" value="Company Address Line 2" data-val="Company Address Line 2">
                                                        </div>
                                            <div class="form-group" style="margin-bottom: 5px;">
                            <label class="control-label" for="pre-employeeName">Employee Name <span class="required">*</span></label>
                            <br>
                            <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-employeeName" data-field="employeeName" placeholder="Type Employee Name Here" value="Type Employee Name Here" data-val="Type Employee Name Here">
                        </div>
                                                <div class="form-group" style="margin-bottom: 5px;">
                                <label class="control-label" for="pre-employeeAddress1">Employee Address <span class="required">*</span></label>
                                <br>
                                <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-employeeAddress1" data-field="employeeAddress1" placeholder="Employee Address Line 1" value="Employee Address Line 1" data-val="Employee Address Line 1">
                                <br>
                                                                <input style="max-width: 300px;" type="text" class="form-control addtext pre-input" id="pre-employeeAddress2" data-field="employeeAddress2" placeholder="Employee Address Line 2" value="Employee Address Line 2" data-val="Employee Address Line 2">
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
        <input type="hidden" value="classic5" name="stubs[template]">
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
                            extend:true,

                        });
                    })

    /*]]>*/
    </script>
    </div>
    </div>
