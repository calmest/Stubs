<div id="tmpl-advanced4" class="tmpl-show" style="display: block;">
    <script type="text/javascript" src="/js/classStubs.js"></script>
    <script type="text/javascript" src="/js/modalStubs.js"></script>
    <script type="text/javascript" src="/js/generateStubs.js"></script>
    <h2>Advanced4 Paycheck Stub Template</h2>
    <hr>
    <button class="btn btn-primary" id="call-mobile-modal" name="yt0" type="button" style="display: none;">Quick options window</button><br>
    <form class="form" id="stubsForm" action="/generateStubs/selecttpl?template=advanced4" method="post"><div class="options_block well">
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

                        <div class="change_template_block" style="display: inline-block;">
                    <input type="hidden" name="stubs[header][background]" id="background" value="0">
                    <div class="background" style="display: inline-block;">
                        <div class="btn-group">
                            <button class="btn btn-primary" id="backgroundBtn" type="button" value="background">Change background</button>
                        </div>
                    </div>
                    <div id="change_template" style="display: inline-block;">
                        <select name="stubs[header][templateBackground]" disabled="disabled" id="templateBackgroundAdvanced4" class="form-control templateBackgroundAdvanced5"><option value="advanced4_w.jpg">Default</option><option value="advanced4_bg1_w.jpg">Template 1(+2.00)</option><option value="advanced4_bg2_w.jpg">Template 2(+2.00)</option><option value="advanced4_bg3_w.jpg">Template 3(+2.00)</option><option value="advanced4_bg4_w.jpg">Template 4(+2.00)</option></select>
                    </div>
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
        @import url('https://fonts.googleapis.com/css?family=VT323');
        @font-face {
            font-family: "OCRAStd";
            src: local("OCRAStd") ,url(/fonts/OCRAStd.ttf) format('truetype'),url(/fonts/OCRAStd.otf) format('opentype');
        }
        #temp {
            /*font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;*/
            background: url(/images/quality/advanced4_w.jpg) no-repeat;
            background-size: 100% 468px;
            max-width: 1000px;
            min-width: 918px;
            font-size: 14px;
            margin:0;
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

                .temp_easy {height: 400px;}
            .temp_ext {height: 468px;}

        #stub_wizard .centered-arrow{top:287px;transform: translate(-50%,-295%);}
        #stub_wizard #stub_wizard_tab_3 .centered-arrow{top:45%;min-width: 170px;}

        *#temp .top_stub{
                margin: 0 1.5%;
                height: 163px;
        }
        #temp .bottom_stub{
            /*height: 165px;*/
            height: 217px;
            margin: 0 1.5%;
        }
        #temp .top_stub_left{
            float: left;
            width: 14.3%;
            padding: 0 5px 0 0;
            font-family: 'VT323', monospace;        font-size: 14px;
            line-height: 14px;
            padding-top: 7px;        height: 120px;
        }
        #temp .top_stub_right{
            width: 85.7%;
            float: right;
            padding-top: 7px;    }
        #temp .top_stub_right .top_stub_right_first_table{
            height: 40px;
        }
        #temp .top_stub_right .top_stub_right_first_table table tr th.top_stub_right_text{
            font-weight: normal;
            font-family: "OCRAStd";        font-size: 14px;
            text-align: center;
            color: #006699;
            height: 20px;
            vertical-align: top;
            padding-top: 4px;    }
        #temp .top_stub_right .top_stub_right_first_table table tr td.top_stub_right_employer_name,
        #temp .top_stub_right .top_stub_right_first_table table tr td.top_stub_right_work_location,
        #temp .top_stub_right .top_stub_right_first_table table tr td.top_stub_right_stubNumber,
        {
            vertical-align: top;
            padding-top: 4px;    }
        #temp .top_stub_right .top_stub_right_first_table table tr td.top_stub_right_employer_name p,
        #temp .top_stub_right .top_stub_right_first_table table tr td.top_stub_right_work_location p,
        #temp .top_stub_right .top_stub_right_first_table table tr td.top_stub_right_stubNumber p,
        #temp .top_stub_right .top_stub_right_first_table table tr td.top_stub_right_employer_name input,
        #temp .top_stub_right .top_stub_right_first_table table tr td.top_stub_right_work_location input,
        #temp .top_stub_right .top_stub_right_first_table table tr td.top_stub_right_stubNumber input{
            font-family: 'VT323', monospace;        text-align: center;
            font-size: 16px;
            line-height: 16px;    }
        #temp .top_stub_right .top_stub_right_second_table{
            height: 38px;
        }
        #temp .top_stub_right .top_stub_right_second_table table tr th.top_stub_right_text{
            font-weight: normal;
            font-family: "OCRAStd";        font-size: 11px;
            text-align: center;
            vertical-align: top;
            height: 19px;
            padding-top: 3px;
            color: #006699;
        }
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_statename,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_stateresstatus,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_employee_id,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_tax_id,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_federal,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_paymentDate{
            padding-left: 7px;    }
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_statename p,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_stateresstatus p,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_employee_id p,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_tax_id p,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_federal p,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_paymentDate p,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_employee_id input,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_tax_id input,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_federal input,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_federal select,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_paymentDate input{
            font-family: 'VT323', monospace;        font-size: 16px;
            text-align: center;
            line-height: 16px;    }
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_statename select,
        #temp .top_stub_right .top_stub_right_second_table table tr td.top_stub_right_table_center_stateresstatus select{
            width: 94%;
            font-family: 'VT323', monospace;        font-size: 16px;
            text-align: center;
            line-height: 16px;    }
        #temp .top_stub_right .top_stub_right_third_table{
            height: 38px;
        }
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_text{
            font-weight: normal;
            font-family: "OCRAStd";        font-size: 9px;
            text-align: center;
            vertical-align: top;
            color: #006699;
        }
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_period_date_begin ,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_period_date_end,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_total_earnings,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_total_taxes,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_total_deductions,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_net_amount{

        }
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_period_date_begin p,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_period_date_end p,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_total_earnings p,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_total_taxes p,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_total_deductions p,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_net_amount p,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_period_date_begin input,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_period_date_end input,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_total_earnings input,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_total_taxes input,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_total_deductions input,
        #temp .top_stub_right .top_stub_right_third_table table tr td.top_stub_right_table_bottom_net_amount input{
            font-family: 'VT323', monospace;        font-size: 16px;
            text-align: center;
            line-height: 16px;
            padding-top: 2px;    }
        #temp .top_stub_table_fourth{
            height: 40px;
        }
        #temp .top_stub .top_stub_table_fourth table tr th.top_stub_right_text{
            font-family: "OCRAStd";        text-align: center;
            color: #006699;
            font-weight: normal;
            font-size: 14px;
            line-height: 14px;
            height: 20px;    }
        #extendform{
            /*height: 80px;*/
            height: 72px;
            margin: 0 1.5%;
            padding-top: 12px;
        }
        .extendform_text_top{
            font-family: "OCRAStd";        color: #006699;
            font-size: 9px;
            text-align: center;
            height: 10px;
            /*margin-bottom: 11px;*/
        }
        #extendform .extendform_left{
            float: left;
            width: 68%;
            margin: 0px 0 0 0.7%;
            height: 48px;
            padding-top: 10px;
        }
        #extendform .extendform_right{
            float: right;
            width: 21%;
            margin-right: 0.6%;
            height: 57px;
        }
        #extendform .extendform_left .pay_inform,#extendform .extendform_left .pay_inform table{
            height: 23px;
        }

        #extendform .extendform_left .pay_inform .pay_text{
            font-family: "OCRAStd";        color: #fff;
            padding-left: 6px;
            font-size: 14px;
            /*vertical-align: top;*/
        }
        #extendform .extendform_left .pay_inform .dollars_text{
            font-family: 'VT323', monospace;        color: black;
            font-size: 17px;
            padding-left: 15px;
            /*vertical-align: top;*/
        }
        #extendform .extendform_left .employer_info{
            height: 26px;
        }
        #extendform .extendform_left .employer_info .employer_info_text{
            font-family: "OCRAStd";        font-size: 14px;
        }
        #extendform .extendform_left .employer_info .employer_info_text{
            font-family: "OCRAStd";        font-size: 14px;
            vertical-align: top;
            color: #006699;
            padding-top: 4px;        padding-left: 5px;    }
        #extendform .extendform_left .employer_info .employer_inform{
            font-family: 'VT323', monospace;        font-size: 12px;
            vertical-align: top;
            line-height: 11px;
        }
        #extendform .extendform_right .extendform_right_inform_top{
            height: 24px;
        }
        #extendform .extendform_right .extendform_right_inform_top table:nth-child(1){
            height: 11px;
        }
        #extendform .extendform_right .extendform_right_inform_top table:nth-child(2){
            height: 11px;
        }
        #extendform .extendform_right .extendform_right_inform_top .text_top{
            font-family: "OCRAStd";        font-size: 9px;
            color: #006699;
            text-align: center;
            vertical-align: top;
            height: 11px;
            line-height: 9px;
            padding-top: 3px;    }
        #extendform .extendform_right .extendform_right_inform_top #extpaymentDate,#extendform .extendform_right .extendform_right_inform_top #extstubNumber{
            font-family: 'VT323', monospace;        font-size: 11px;
            text-align: center;
            line-height: 11px;
            vertical-align: top;
            height: 11px;
        }
        #extendform .extendform_right .direct div:nth-child(1){
            font-family: "OCRAStd";        font-size: 6px;
            line-height: 6px;
            text-align: center;
            color:#006699
        }
        #extendform .extendform_right .direct div.text_non{
            color:#999999;
            font-family: "OCRAStd";        text-transform: uppercase;
            font-size: 9px;
            line-height: 9px;
            text-align: center;
            padding-top: 3px;    }
        #extendform .extendform_right .text_void{
            font-family: "OCRAStd";        color: #006699;
            font-size: 12px;
            line-height:12px;
            text-align: center;
            padding-top: 2px;    }
        #temp .bottom_stub .bottom_stub_left{
            float: left;
            width: 50%;
            height: 162px;
            font-family: 'VT323', monospace;        font-size: 16px;
            line-height: 16px;
            padding-left: 12px;
        }
        #temp .readonly{
            border: none;
            background: none;
        }
        #temp .bottom_stub .bottom_stub_left table tr td:nth-child(5) input{
            text-align: center;
            border: none;
            background: none;
        }
        #temp .bottom_stub .bottom_stub_left table tr td:nth-child(5) input#total,#temp .bottom_stub .bottom_stub_left table tr td:nth-child(5) input#ytdtotal{
            border: none;
            background: none;
        }
        #temp .bottom_stub .bottom_stub_right{
            float: right;
            width: 43%;
            height: 162px;
            font-family: 'VT323', monospace;        font-size: 16px;
            line-height: 16px;
        }
        .state_tr_hide,
        .casdi_tr_hide {
            display: none;
        }
        #temp .bottom_stub .bottom_stub_right .botton_ls input{
            border: none;
            background: none;
        }
        #temp .bottom_stub_right td:nth-child(1) input.optionalfieldtaxe,#temp .bottom_stub_right td:nth-child(2) input#optionalrate{
            border: 1px dashed #333;
            background: rgba(255, 200, 79, 0.38);
            text-transform: uppercase;
        }
        #temp .deduction_tabel input{
            text-transform: uppercase;
        }
        #temp .bottom_stub_right .botton_ls table tr td:nth-child(1){
            text-transform: uppercase;
        }
        #temp .bottom_stub_right .deduction_tabel table tr td:nth-child(3) input{
            background: none;
            border: none;
        }
        #temp .bottom_stub_right .deduction_tabel table tr td:nth-child(1){
            text-transform: uppercase;
        }
        #temp .custom_field{
            padding: 5px 0;
        }
        #temp .custom_field .add_field,#temp .deduction_tabel .add_field_deduction{
            cursor: pointer;
            font-size: 14px;
            width: 22px;
            height: 22px;
            border: 2px solid #fff;
            -webkit-box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            -moz-box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            transition: background-color .3s linear;
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            border-radius: 25px;
            background-color: #7FC90A;
            margin-bottom: 5px;
        }
        #temp .add_field .add_field_body , #temp .deduction_tabel .add_field_deduction .add_field_body{
            text-align: center;
            padding: 3px 0 0 0;
            color: #fff;
        }

        #temp #customFieldsTable input{
            width: 95%;
            text-align: center;
            text-transform: uppercase;
        }
        #temp #customFieldsTable tr td:nth-child(1){
            width: 27%;
        }
        #temp #customFieldsTable tr td:nth-child(2){
            width: 14.5%;
            text-align: center;
        }
        #temp #customFieldsTable tr td:nth-child(3){
            width: 17.5%;
            text-align: center;
        }
        #temp #customFieldsTable tr td:nth-child(4){
            width: 17%;
            text-align: center;
        }
        #temp #customFieldsTable tr td:nth-child(5){
            text-align: center;
        }
        #temp #totalhourswork,#temp #ytdtotalhourswork{
            text-align: center;
        }
        #temp .delete_field,#temp .delete_field_deduction{
            left: 3px;
            cursor: pointer;
            font-size: 14px;
            width: 20px;
            height: 20px;
            border: 2px solid #fff;
            -webkit-box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            -moz-box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            transition: background-color .3s linear;
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            border-radius: 25px;
            background-color: #ee5f5b;
        }
        #temp .delete_field_deduction{
            left: 542px;
        }
        #temp .delete_field .delete_field_body,
        #temp .delete_field_deduction .delete_field_body{
            text-align: center;
            padding: 2px 0 0 0;
            color: #fff;
        }
        #customField1name,#customField2name,#customField3name,#customField4name{
            text-transform: uppercase;
        }
        #carusel_preview .add_field,
        #carusel_preview .delete_field,
        #carusel_preview .delete_field_deduction,
        #carusel_preview .add_field_deduction{
            display: none;
        }
        @media (max-width: 980px) {
            #temp .top_stub .top_stub_table_fourth table tr th.top_stub_right_text{
                font-size: 13px;
                line-height: 13px;
            }
        }
    </style>
        <div class="all_preset" id="all_preset1">
                    <div id="temp" class="temp_easy">

                <div class="top_stub">
                    <div class="top_stub_left">
                                                <div class="require">
                                <textarea id="companyName" class="addtext addtext2" name="stubs[header][companyName]" placeholder="Type Company Name Here" data-val="Type Company Name Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title="">Type Company Name Here</textarea><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                            </div>
                            <div class="require">
                                <textarea id="companyAddress1" class="addtext addtext2" name="stubs[header][companyAddress1]" placeholder="Type Company Street Address Here" data-val="Type Company Street Address Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title="">Type Company Street Address Here</textarea><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                            </div>
                                        </div>
                    <div class="top_stub_right">
                        <div class="top_stub_right_first_table">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody><tr>
                                    <th class="top_stub_right_text" width="41.6%">EMPLOYEE NAME</th>
                                    <th class="top_stub_right_text" width="41.7%">EMPLOYEE ADDRESS</th>
                                    <th class="top_stub_right_text" width="16.7%">ADVICE NO.</th>
                                </tr>
                                <tr>
                                    <td class="top_stub_right_employer_name">
                                                                                <div class="require" style="width:94%;">
                                                <input type="text" class="addtext addtext2" name="stubs[header][employeeName]" id="employeeName" placeholder="Type Employee Name Here" value="Type Employee Name Here" data-val="Type Employee Name Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                            </div>
                                                                        </td>
                                    <td class="top_stub_right_work_location">
                                                                                <div class="require" style="width:94%;">
                                                <input type="text" class="addtext addtext2" name="stubs[header][employeeAddress1]" id="employeeAddress1" placeholder="Type Employee Street Address Here" value="Type Employee Street Address Here" data-val="Type Employee Street Address Here" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                            </div>
                                                                        </td>
                                    <td class="top_stub_right_stubNumber">
                                                                                <input type="text" id="stubNumber" class="addtext addtext2" name="stubs[stub][1][stubNumber]" style="width:100%;">
                                                                        </td>
                                </tr>
                            </tbody></table>
                        </div>
                        <div class="top_stub_right_second_table">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody><tr>
                                    <th class="top_stub_right_text" width="16.8%">EMPLOYEE ID</th>
                                    <th class="top_stub_right_text" width="16.5%">TAX ID</th>
                                    <th class="top_stub_right_text" width="16.6%">FEDERAL STATUS</th>
                                    <th class="top_stub_right_text" width="16.7%">STATE WORK</th>
                                    <th class="top_stub_right_text" width="16.7%">STATE RES STATUS</th>
                                    <th class="top_stub_right_text">ADVICE DATE</th>
                                </tr>
                                <tr>
                                    <td class="top_stub_right_table_center_employee_id">
                                                                                <div class="require" style="width:94%;">
                                                <input type="text" id="employeeId" class="addtext addtext2" name="stubs[header][employeeId]" placeholder="123" value="123" maxlength="10" size="10" data-val="123" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                            </div>
                                                                        </td>
                                    <td class="top_stub_right_table_center_tax_id">
                                                                                <div class="require" style="width:94%;">
                                                <input type="text" name="stubs[header][taxid]" id="taxid" placeholder="XX-XXXXXXX" value="00-0000001" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in green" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                            </div>
                                                                        </td>
                                    <td class="top_stub_right_table_center_federal">
                                                                                <select name="stubs[header][maritalStatus]" id="maritalStatus" style="width:95%;"><option value="Single">Single</option><option value="Married">Married</option></select>
                                        <!--                                    --><!--                                        <p id="federal">--><!--</p>-->
    <!--                                    --><!--                                        <div class="require" style="width:94%;">-->
    <!--                                            <input type="text" name="stubs[header][federal]" maxlength="18" id="federal">-->
    <!--                                        </div>-->
    <!--                                    -->                                </td>
                                    <td class="top_stub_right_table_center_statename">
                                                                                <input type="hidden" name="stubs[header][statename]" id="statename" value="">
                                            <select name="stubs[header][state]" id="state"><option value="0">Select a State</option><option value="al">Alabama</option><option value="ak">Alaska</option><option value="az">Arizona</option><option value="ar">Arkansas</option><option value="ca">California</option><option value="co">Colorado</option><option value="ct">Connecticut</option><option value="de">Delaware</option><option value="dc">District Of Columbia</option><option value="fl">Florida</option><option value="ga">Georgia</option><option value="hi">Hawaii</option><option value="id">Idaho</option><option value="il">Illinois</option><option value="in">Indiana</option><option value="ia">Iowa</option><option value="ks">Kansas</option><option value="ky">Kentucky</option><option value="la">Louisiana</option><option value="me">Maine</option><option value="md">Maryland</option><option value="ma">Massachusetts</option><option value="mi">Michigan</option><option value="mn">Minnesota</option><option value="ms">Mississippi</option><option value="mo">Missouri</option><option value="mt">Montana</option><option value="ne">Nebraska</option><option value="nv">Nevada</option><option value="nh">New Hampshire</option><option value="nj">New Jersey</option><option value="nm">New Mexico</option><option value="ny">New York</option><option value="nc">North Carolina</option><option value="nd">North Dakota</option><option value="oh">Ohio</option><option value="ok">Oklahoma</option><option value="or">Oregon</option><option value="pa">Pennsylvania</option><option value="ri">Rhode Island</option><option value="sc">South Carolina</option><option value="sd">South Dakota</option><option value="tn">Tennessee</option><option value="tx">Texas</option><option value="ut">Utah</option><option value="vt">Vermont</option><option value="va">Virginia</option><option value="wa">Washington</option><option value="wv">West Virginia</option><option value="wi">Wisconsin</option><option value="wy">Wyoming</option></select>
                                                                        </td>
                                    <td class="top_stub_right_table_center_stateresstatus">
                                                                                <select name="stubs[header][stateResStatus]" id="stateResStatus">
                                                <option value="">Select a State Res Status</option>
                                                <option value="Resident">Resident</option>
                                                <option value="Non-Resident">Non-Resident</option>
                                            </select>
                                                                        </td>
                                    <td class="top_stub_right_table_center_paymentDate">
                                                                                <div class="require" style="width:94%;">
                                                <input type="text" name="stubs[stub][1][paymentDate]" id="paymentDate" data-template-pdf="advanced4" placeholder="11/12/2018" value="11/12/2018" class="hasDatepicker" data-toggle="popover" data-placement="right" data-trigger="manual" data-content="<i class=&quot;fa fa-check&quot; aria-hidden=&quot;true&quot;></i>" data-html="true" data-original-title="" title=""><div class="popover fade right in" style="top: 1px; left: 98px; display: block;"><div class="arrow"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><i class="fa fa-check" aria-hidden="true"></i></div></div>
                                            </div>
                                                                        </td>
                                </tr>
                            </tbody></table>
                        </div>
                        <div class="top_stub_right_third_table">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody><tr>
                                    <td rowspan="2" class="top_stub_right_text" width="14%" style="vertical-align: middle;">
                                        EARNINGS<br>STATEMENT
                                    </td>
                                    <td class="top_stub_right_text" width="13.8%" style="height: 18px;padding-top: 5px;">PERIOD BEGIN</td>
                                    <td class="top_stub_right_text" width="13.8%" style="height: 18px;padding-top: 5px;">PERIOD END</td>
                                    <td class="top_stub_right_text" width="13.9%" style="height: 18px;padding-top: 5px;">TOTAL EARNINGS</td>
                                    <td class="top_stub_right_text" width="13.9%" style="height: 18px;padding-top: 5px;">TOTAL TAXES</td>
                                    <td class="top_stub_right_text" width="13.9%" style="height: 18px;padding-top: 5px;">TOTAL DEDUCTIONS</td>
                                    <td class="top_stub_right_text" width="16.7%" style="height: 18px;padding-top: 5px;">NET AMOUNT</td>
                                </tr>
                                                            <tr>
                                    <td class="top_stub_right_table_bottom_period_date_begin">
                                                                                <input type="text" name="stubs[stub][1][paymentPeriodDateBegin]" style="width:94%;" id="paymentPeriodDateBegin">
                                                                        </td>
                                    <td class="top_stub_right_table_bottom_period_date_end">
                                                                                <input type="text" name="stubs[stub][1][paymentPeriodDateEnd]" style="width:94%;" id="paymentPeriodDateEnd">
                                                                        </td>
                                    <td class="top_stub_right_table_bottom_total_earnings">
                                                                                <input type="text" class="readonly" id="this_total" name="stubs[stub][1][total]" style="width:95%;text-align:center;background: none;border: none;" readonly="readonly">
                                                                        </td>
                                    <td class="top_stub_right_table_bottom_total_taxes">
                                                                                <input type="text" class="readonly" id="this_deductions" style="width:95%;text-align: center;background: none;border: none;" readonly="readonly">
                                                                        </td>
                                    <td class="top_stub_right_table_bottom_total_deductions">
                                                                                <input type="text" class="readonly" id="this_deductiontotal" style="width:95%;text-align: center;background: none;border: none;" readonly="readonly">
                                                                        </td>
                                    <td class="top_stub_right_table_bottom_net_amount">
                                                                                <input type="text" class="readonly" id="this_netpay" name="stubs[stub][1][netpay]" style="width:95%;text-align:center;background: none;border: none;" readonly="readonly">
                                                                        </td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="top_stub_table_fourth">
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tbody><tr>
                                <th width="50%" class="top_stub_right_text">EARNINGS</th>
                                <th width="50%" class="top_stub_right_text">TAXES - DEDUCTIONS - MISC</th>
                            </tr>
                            <tr>
                                <th class="top_stub_right_text">DESCRIPTION - RATE - MILES - HOURS - GROSS PAY</th>
                                <th class="top_stub_right_text">DESCRIPTION - CURRENT - YEAR-TO-DATE</th>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
                <div class="bottom_stub">
                    <div class="bottom_stub_left">
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                            <tbody><tr>
                                <td width="27%">CURRENT PAY RATE</td>
                                <td width="14.5%" align="center">
                                                                        <input type="text" name="stubs[header][currentpayrate]" class="readonly" id="currentpayrate" style="width:90%;text-align:center;" value="20.00" readonly="readonly">
                                                                </td>
                                <td width="17.5%" align="center"></td>
                                <td width="17%" align="center"></td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td>REGULAR</td>
                                <td align="center">
                                                                        <input type="text" name="stubs[header][payrate]" class="refreshable rate" id="payrate" style="width:90%;text-align:center;" value="20.00">
                                                                </td>
                                <td align="center"></td>
                                <td align="center">
                                                                        <input type="text" name="stubs[stub][1][payhours]" class="payhours" id="payhours" style="width:90%;text-align: center; ">
                                                                </td>
                                <td align="center">
                                                                        <input type="text" name="stubs[stub][1][paythis]" class="readonly center-line-up refreshable" id="paythis" style="width: 90%;" readonly="readonly">
                                                                </td>
                            </tr>
                            <tr>
                                <td>OVERTIME</td>
                                <td align="center">
                                                                        <input type="text" name="stubs[header][overtimerate]" class="refreshrate rate" id="overtimerate" style="width:90%;text-align: center;">
                                                                </td>
                                <td align="center"></td>
                                <td align="center">
                                                                        <input type="text" name="stubs[header][overtimehours]" class="advhours" id="overtimehours" style="width:90%;text-align: center;">
                                                                </td>
                                <td align="center">
                                                                        <input type="text" name="stubs[header][overtimethis]" class="readonly center-line-up refreshthis" style="width: 90%;" id="overtimethis" readonly="readonly">
                                                                </td>
                            </tr>
                                                                                                                        </tbody></table>

                        <div class="custom_field">
                                                    <div class="add_field">
                                <div class="add_field_body">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                                                    <table id="customFieldsTable" cellpadding="0" cellspacing="0" border="0" width="100%">
                                                                                                                                            </table>
                        </div>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                            <tbody><tr>
                                <td width="27%">TOTAL HOURS WORKED</td>
                                <td width="14.5%" align="center"></td>
                                <td width="17.5%" align="center"></td>
                                <td width="17%" align="center">
                                                                        <input type="text" name="stubs[stub][1][totalhourswork]" id="totalhourswork" class="readonly" style="border:none;background:none;width:90%;" readonly="readonly">
                                                                </td>
                                <td align="center"></td>
                            </tr>
                            <tr>
                                <td>CURRENT TOTALS</td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center">
                                                                        <input type="text" name="stubs[stub][1][total]" class="readonly center-line-up refreshable" style="width: 90%;" id="total" readonly="readonly">
                                                                </td>
                            </tr>
                            <tr>
                                <td>Y-T-D TOTALS</td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center">
                                                                        <input type="text" name="stubs[stub][1][ytdtotalhourswork]" id="ytdtotalhourswork" class="readonly" style="border:none;background:none;width:90%;" value="" readonly="readonly">
                                                                </td>
                                <td align="center">
                                                                        <input type="text" name="stubs[stub][1][ytdtotal]" class="readonly refreshable" style="width: 90%;" id="ytdtotal" readonly="readonly">
                                                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="bottom_stub_right">
                        <div style="text-align: center">TAXES</div>
                        <div class="botton_ls">
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <td width="36%">Fica - Medicare</td>
                                    <td align="left">
                                                                                <input type="text" name="stubs[stub][1][ficamedtax]" class="readonly center-line-up refreshable" id="ficamedtax" readonly="readonly">
                                                                        </td>
                                    <td align="left">
                                                                                <input type="text" name="stubs[stub][1][ytdficamedtax]" class="readonly refreshable" id="ytdficamedtax" readonly="readonly">
                                                                        </td>
                                </tr>
                                <tr>
                                    <td>Fica - Social Security</td>
                                    <td align="left">
                                                                                <input type="text" name="stubs[stub][1][ficasstax]" class="readonly center-line-up refreshable" id="ficasstax" readonly="readonly">
                                                                        </td>
                                    <td align="left">
                                                                                <input type="text" name="stubs[stub][1][ytdficasstax]" class="readonly refreshable" id="ytdficasstax" readonly="readonly">
                                                                        </td>
                                </tr>
                                <tr>
                                    <td>Federal TAX</td>
                                    <td align="left">
                                                                                <input type="text" name="stubs[stub][1][ficafedtax]" class="readonly center-line-up refreshable" id="ficafedtax" readonly="readonly">
                                                                        </td>
                                    <td align="left">
                                                                                <input type="text" name="stubs[stub][1][ytdficafedtax]" class="readonly refreshable" id="ytdficafedtax" readonly="readonly">
                                                                        </td>
                                </tr>
                                <tr>
                                                                        <td class="state_tr state_tr_hide" id="stateAbbrId">State Tax</td>
                                        <td align="left" class="state_tr state_tr_hide">
                                            <input type="text" name="stubs[stub][1][sttax]" class="readonly center-line-up refreshable" id="sttax" readonly="readonly">
                                        </td>
                                        <td align="left" class="state_tr state_tr_hide">
                                            <input type="text" name="stubs[stub][1][ytdsttax]" class="readonly refreshable" id="ytdsttax" readonly="readonly">
                                            <input type="hidden" name="stubs[header][stateTax]" id="abbrState">
                                        </td>
                                                                </tr>
                                <tr>
                                                                        <td class="casdi_tr casdi_tr_hide">California SDI Tax</td>
                                        <td align="left" class="casdi_tr casdi_tr_hide">
                                            <input type="text" name="stubs[stub][1][casditax]" class="readonly center-line-up refreshable" id="casditax" readonly="readonly">
                                        </td>
                                        <td align="left" class="casdi_tr casdi_tr_hide">
                                            <input type="text" name="stubs[stub][1][ytdcasditax]" class="readonly refreshable" id="ytdcasditax" readonly="readonly">
                                        </td>
                                                                </tr>
                                                            <tr class="optionalfield">
                                    <td><input type="text" name="stubs[header][optionalfieldtaxe]" maxlength="22" class="optionalfieldtaxe" id="optionalfieldtaxe" style="width:90%;"></td>
                                    <td><input type="text" name="stubs[header][optionalratetaxe]" class="refreshrate center-line-up" id="optionalrate"></td>
                                    <td><input type="text" name="stubs[header][optionalytdtaxe]" class="readonly refreshable" id="optionalytd" readonly="readonly"></td>
                                </tr>
                                                            <tr>
                                    <td>TOTALS</td>
                                    <td>
                                                                                <input type="text" name="stubs[stub][1][deductions]" class="readonly center-line-up refreshable" id="deductions" readonly="readonly">
                                                                        </td>
                                    <td></td>
                                </tr>


                            </tbody></table>
                        </div>

                        <div class="deduction_tabel">
                            <div style="text-align:center;padding-top: 5px;">ADDITIONAL DEDUCTIONS</div>
                                                    <div class="add_field_deduction">
                                <div class="add_field_body">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                                                    <table cellpadding="0" cellspacing="0" width="100%" id="additional_deductions_table">
                                                                                    </table>
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <td width="36%">TOTALS</td>
                                    <td colspan="2">
                                                                                <input type="text" name="stubs[stub][1][deductiontotal]" class="readonly center-line-up" id="deductiontotal" style="border:none;background:none;" readonly="readonly">
                                                                        </td>
                                </tr>
                            </tbody></table>
                        </div>

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="extendform_text_top">STATEMENT OF EARNINGS AND DEDUCTIONS • DETACH AND KEEP FOR YOUR RECORDS</div>
                <div id="extendform" style="display:none;">

                    <div class="extendform_left">
                        <div class="pay_inform">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody><tr>
                                    <td class="pay_text" width="18%">PAY</td>
                                    <td class="dollars_text">
                                                                                **<span id="extdollars">1091</span>** DOLLARS AND **<span id="extcents">24</span>** CENTS
                                                                        </td>
                                </tr>
                            </tbody></table>
                        </div>
                        <div class="employer_info">
                            <table>
                                <tbody><tr>
                                    <td class="employer_info_text">TO THE ORDER OF:</td>
                                    <td class="employer_inform">
                                        <div id="extemployeeName" class="ext_div" data-old="
                                            Type Employee Name Here                                    ">Type Employee Name Here</div>
                                        <div id="extemployeeAddress1" class="ext_div" data-old="
                                            Type Employee Street Address Here                                    ">Type Employee Street Address Here</div>
                                    </td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
                    <div class="extendform_right">
                        <div class="extendform_right_inform_top">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody><tr>
                                    <td width="50%" class="text_top">CHECK DATE</td>
                                    <td width="50%" class="text_top">CHECK NUMBER</td>
                                </tr>

                            </tbody></table>
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tbody><tr>
                                    <td width="50%" class="ext_div" id="extpaymentDate" data-old="
                                        11/12/2018                                ">
                                        11/12/2018                                </td>
                                    <td width="50%" class="ext_div" id="extstubNumber" data-old="
                                        10015                                ">10015</td>
                                </tr>
                            </tbody></table>
                        </div>
                        <div class="direct">
                            <div>THIS IS NOT A CHECK</div>
                            <div class="text_non">Non Negotiable</div>
                        </div>
                        <div class="text_void">VOID</div>
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
                                                        <!-- new hiddens input -->
                                <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][payytd]" id="payytd2" value="">
                                <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][overtimeytd]" id="overtimeytd2" value="">
                                <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][holidayytd]" id="holidayytd2" value="">
                                <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][vacationytd]" id="vacationytd2" value="">
                                <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][bonusytd]" id="bonusytd2" value="">
                                <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][floatytd]" id="floatytd2" value="">
                                                                                                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][deductioncustom1ytd]" id="deductioncustom1ytd2">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][deductioncustom2ytd]" id="deductioncustom2ytd2">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][deductiontotal]" id="deductiontotal2" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][ytdtotalhourswork]" id="ytdtotalhourswork2" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][2][totalhourswork]" id="totalhourswork2" value="">
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
                                                                                                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][deductioncustom1ytd]" id="deductioncustom1ytd3">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][deductioncustom2ytd]" id="deductioncustom2ytd3">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][deductiontotal]" id="deductiontotal3" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][ytdtotalhourswork]" id="ytdtotalhourswork3" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][3][totalhourswork]" id="totalhourswork3" value="">
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
                                                                                                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][deductioncustom1ytd]" id="deductioncustom1ytd4">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][deductioncustom2ytd]" id="deductioncustom2ytd4">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][deductiontotal]" id="deductiontotal4" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][ytdtotalhourswork]" id="ytdtotalhourswork4" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][4][totalhourswork]" id="totalhourswork4" value="">
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
                                                                                                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][deductioncustom1ytd]" id="deductioncustom1ytd5">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][deductioncustom2ytd]" id="deductioncustom2ytd5">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][deductiontotal]" id="deductiontotal5" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][ytdtotalhourswork]" id="ytdtotalhourswork5" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][5][totalhourswork]" id="totalhourswork5" value="">
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
                                                                                                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][deductioncustom1ytd]" id="deductioncustom1ytd6">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][deductioncustom2ytd]" id="deductioncustom2ytd6">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][deductiontotal]" id="deductiontotal6" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][ytdtotalhourswork]" id="ytdtotalhourswork6" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][6][totalhourswork]" id="totalhourswork6" value="">
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
                                                                                                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][deductioncustom1ytd]" id="deductioncustom1ytd7">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][deductioncustom2ytd]" id="deductioncustom2ytd7">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][deductiontotal]" id="deductiontotal7" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][ytdtotalhourswork]" id="ytdtotalhourswork7" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][7][totalhourswork]" id="totalhourswork7" value="">
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
                                                                                                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][deductioncustom1ytd]" id="deductioncustom1ytd8">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][deductioncustom2ytd]" id="deductioncustom2ytd8">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][deductiontotal]" id="deductiontotal8" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][ytdtotalhourswork]" id="ytdtotalhourswork8" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][8][totalhourswork]" id="totalhourswork8" value="">
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
                                                                                                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][deductioncustom1ytd]" id="deductioncustom1ytd9">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][deductioncustom2ytd]" id="deductioncustom2ytd9">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][deductiontotal]" id="deductiontotal9" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][ytdtotalhourswork]" id="ytdtotalhourswork9" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][9][totalhourswork]" id="totalhourswork9" value="">
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
                                                                                                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][deductioncustom1ytd]" id="deductioncustom1ytd10">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][deductioncustom2ytd]" id="deductioncustom2ytd10">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][deductiontotal]" id="deductiontotal10" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][ytdtotalhourswork]" id="ytdtotalhourswork10" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][10][totalhourswork]" id="totalhourswork10" value="">
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
                                                                                                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][deductioncustom1ytd]" id="deductioncustom1ytd11">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][deductioncustom2ytd]" id="deductioncustom2ytd11">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][deductiontotal]" id="deductiontotal11" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][ytdtotalhourswork]" id="ytdtotalhourswork11" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][11][totalhourswork]" id="totalhourswork11" value="">
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
                                                                                                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][deductioncustom1ytd]" id="deductioncustom1ytd12">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][deductioncustom2ytd]" id="deductioncustom2ytd12">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][deductiontotal]" id="deductiontotal12" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][ytdtotalhourswork]" id="ytdtotalhourswork12" value="">
                                    <input class="hidden-fileds" type="hidden" disabled="true" name="stubs[stub][12][totalhourswork]" id="totalhourswork12" value="">
                                                                            <!-- /new hiddens input -->
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
        <input type="hidden" value="advanced4" name="stubs[template]">
        <input type="hidden" value="1" name="is_wizard">

    <script type="text/javascript" src="/js/highlightsFields.js"></script>
    <script type="text/javascript">
    /*<![CDATA[*/

                    moment.locale('en');
                    $('#stub_zone').trigger('put:popover');
                    $(document).ready(function () {
                        $('#preview_tmpl').myStubPlugin({
                            modal: false,
                            w:1020,
                            advanced:true,
                            loader:true,
                            extend:true,
                            textarea:true,
                        });
                    })

    /*]]>*/
    </script>
    </div></form></div>
    </div>
