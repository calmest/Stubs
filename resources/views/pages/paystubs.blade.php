@extends('layouts.app')

@section('content')

<h3 class="text-center">Real Check Stubs are delivered to your email for immediate download and printing. Watermarks are removed from purchased copies.</h3>
<br>

<div class="row">
    <div class="col-md-12">
        <div id="stub_wizard">
            <ul id="yw0" class="nav nav-pills">
                <li class="nav-item active" style="width: 25%;">
                <a class="nav-link" data-toggle="tab" href="#stub_wizard_tab_1">Select template</a>
                </li>
                <li class="nav-item" style="width: 25%;">
                <a class="nav-link" data-toggle="tab" href="#stub_wizard_tab_2">Enter Info</a>
                </li>
                <li class="nav-item" style="width: 25%;">
                <a class="nav-link" data-toggle="tab" href="#stub_wizard_tab_3">Preview stubs</a>
                </li>
                <li class="nav-item" style="width: 25%;">
                <a class="nav-link" data-toggle="tab" href="#stub_wizard_tab_4">Download</a>
                </li>
            </ul>
            <div id="wizard-nav-progress">
                <div id="wizard-bar" class="progress active">
                    <div class="progress-bar" style="width: 12.5%; position: relative;">
                        <div class="progress-point">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="stub_wizard_tab_1" class="tab-pane fade in active">
                    <div class="row" style="display: none;">
                        <div class="col-md-6">
                            <button class="button-next btn" name="next" type="button">Next
                            </button>
                        </div>
                    </div>
                    <br>
                    <div id="carusel_tmpl" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="carousel-img" src="/images/modern_tmp.jpeg" alt="Modern template 1">
                                <div class="carousel-caption text-center">
                                    <h3>Modern Template Selected <span>1 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg center" data-tmpl="modern" name="yt0" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" src="/images/modern2_tmp.jpeg" alt="Modern template 2">
                                <div class="carousel-caption">
                                    <h3>Modern 2 Template Selected <span>2 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="modern2" name="yt1" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" src="/images/modern3_tmp.jpeg" alt="Modern template 3">
                                <div class="carousel-caption">
                                    <h3>Modern 3 Template Selected <span>3 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="modern3" name="yt2" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" src="/images/classic_tmp.jpeg" alt="Classic template 1">
                                <div class="carousel-caption">
                                    <h3>Classic Template Selected <span>4 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic" name="yt3" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" src="/images/classic2_tmp.jpeg" alt="Classic template 2">
                                <div class="carousel-caption">
                                    <h3>Classic 2 Template Selected <span>5 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic2" name="yt4" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" src="/images/classic3_tmp.jpeg" alt="Classic template 3">
                                <div class="carousel-caption">
                                    <h3>Classic 3 Template Selected <span>6 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic3" name="yt5" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" src="/images/classic4_tmp.jpeg" alt="Classic template 4">
                                <div class="carousel-caption">
                                    <h3>Classic 4 Template Selected <span>7 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic4" name="yt6" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" src="/images/classic5_tmp.jpeg" alt="Classic template 5">
                                <div class="carousel-caption">
                                    <h3>Classic 5 Template Selected <span>8 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic5" name="yt7" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" src="/images/classic6_tmp.jpeg" alt="Classic template 6">
                                <div class="carousel-caption">
                                    <h3>Classic 6 Template Selected <span>9 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic6" name="yt8" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" src="/images/advanced_tmp.jpeg" alt="Advanced template 1">
                                <div class="carousel-caption">
                                    <h3>Advanced Template Selected <span>10 of 13</span></h3>
                                    <p><input hidden="" value="10">button class="select-tmpl btn btn-success btn-lg" data-tmpl="advanced" name="yt9" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" src="/images/advanced2_tmp.jpeg" alt="Advanced template 2">
                                <div class="carousel-caption">
                                    <h3>Advanced 2 Template Selected <span>11 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="advanced2" name="yt10" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" src="/images/advanced3_tmp.jpeg" alt="Advanced template 3">
                                <div class="carousel-caption">
                                    <h3>Advanced 3 Template Selected <span>12 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="advanced3" name="yt11" type="button">Select This Template</button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="carousel-img" class="carousel-img" src="/images/advanced4_tmp.jpeg" alt="Advanced template 4">
                                <div class="carousel-caption">
                                    <h3>Advanced 4 Template Selected <span>13 of 13</span></h3>
                                    <p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="advanced4" name="yt12" type="button">Select This Template</button></p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control left" href="#carusel_tmpl" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left fa-7x"></span>
                        </a>
                        <a class="carousel-control right" href="#carusel_tmpl" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right fa-7x"></span>
                        </a>
                    </div>
                    <input type="hidden" name="template" id="selected_template">
                </div>
                <script>
                    $(document).ready(function () {
                        $('.select-tmpl-btn').on("click", function () {
                            $('.loader').show();
                            templateType = $(this).attr('data-tmpl');
                            console.log(templateType);
                            $('.load-template').load('/templates/'+templateType+'.html');
                            $("#stub_wizard_tab_1").removeClass("in active").hide();
                            $("#stub_wizard_tab_2").addClass("in active").show();

                            $('ul.nav-pills li')[0].removeClass("active");
                            $('ul.nav-pills li')[1].addClass("active");
                        });
                    });

                </script>

            <!-- Second Step -->

            <div id="stub_wizard_tab_2" class="tab-pane fade">
                <div class="row" style="display: none;">
                    <div class="col-xs-6">
                        <button class="button-previous btn disabled" name="previous" type="button">Back</button>
                    </div>
                </div>
                <div class="loader-rotate" id="loader_element">
                    <div class="loader-img">
                        <img src="/images/loader.gif">
                    </div>
                    <p>Please wait</p>
                </div>
                <div id="tmpl" class="tmpl-show">

                </div>

            <!-- Third Step -->

            <div id="stub_wizard_tab_3" class="tab-pane fade">
                <div class="row centered-arrow">
                    <div class="col-xs-6">
                        <button class="button-previous btn btn-success" name="previous" type="button"><i class="fa fa-chevron-left"></i>&nbsp;Edit Info</button>    </div>
                    <div class="col-xs-6">
                        <button id="show_order_detail" class="pull-right btn btn-success" name="next" type="button"><i class="fa fa-chevron-right"></i>&nbsp;Download</button>    </div>
                </div>

                <h2 class="wizard_third_step">This is a preview. Please review your stub for accuracy</h2>
                    <hr>
                    <br>
                        <div id="carusel_preview" class="carousel slide" data-tmpl="modern" style="display: block;"><div class="carousel-inner"><div class="item active"><div class="all_preset" id="clonStub1" style="height: 368px; overflow: hidden;">
                    <div class="temp_easy" id="temp" style="width: 1000px; transform: scale(0.64); transform-origin: left top 0px;">

                        <div class="head_stub">
                            <div class="left_head_stub">
                                                    <p id="companyName">Type Company Name Here</p>
                                    <p id="companyAddress1">Type Company Street Address Here</p>
                                            </div>
                            <div class="right_head_stub">
                                # <p id="stubNumber">10015</p>
                                <span class="earn_statement">Earnings Statement</span>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="stub_top">
                            <div>
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tbody><tr>
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
                                                <p id="employeeName">Type Employee Name Here</p>
                                                <p id="employeeAddress1">Type Employee Street Address Here</p>
                                            </td>
                                            <td valign="top" align="center">
                                                <p id="ssn">XXX-XX-1234</p>
                                            </td>
                                            <td valign="top" align="center">
                                                <p id="paymentPeriodDate">10/19/2018 - 10/25/2018</p>
                                            </td>
                                            <td valign="top" align="center">
                                                <span class="require" style="width:70%;">
                                                    <p id="paymentDate">10/27/2018</p>
                                                </span>
                                            </td>
                                            <td valign="top" align="center">
                                                <p id="employeeId">123</p>
                                            </td>
                                                            </tr>
                                </tbody></table>
                            </div>
                        </div>

                        <div class="stub_body">
                            <div>
                                <table cellspacing="0" cellpadding="0" border="0">
                                        <tbody><tr>
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
                                                    <p id="payrate" style="text-align: center;">11.47</p>
                                                </td>
                                                <td align="center">
                                                    <p class="line-up" id="payhours" style="text-align: center;">40</p>
                                                </td>
                                                <td align="center">
                                                    <p class="readonly" id="paythis" style="text-align: center;">458.80</p>
                                                </td>
                                                                        <td style="font-size: 17px;font-weight: bold;    text-transform: uppercase;">Statutory Deductions</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td class="td_label">Fica - Medicare</td>
                                                                            <td style="padding-left:10px;">
                                                    <p class="line-up" id="ficamedtax">6.65</p>
                                                </td>
                                                <td style="padding-left:10px;">
                                                    <p class="line-up" id="ytdficamedtax">285.95</p>
                                                </td>
                                                                    </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td class="td_label">Fica - Social Security</td>
                                                                            <td style="padding-left:10px;">
                                                    <p class="line-up" id="ficasstax">28.45</p>
                                                </td>
                                                <td style="padding-left:10px;">
                                                    <p class="line-up" id="ytdficasstax">1223.35</p>
                                                </td>
                                                                    </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td class="td_label" "="">Federal Tax</td>
                                                                            <td style="padding-left:10px;">
                                                    <p class="line-up" id="ficafedtax">53.92</p>
                                                </td>
                                                <td style="padding-left:10px;">
                                                    <p class="line-up" id="ytdficafedtax">2318.56</p>
                                                </td>
                                                                    </tr>
                                                            <tr class="state_tr state_tr_hide">
                                            <td colspan="4"><input type="hidden" name="stubs[header][stateTax]" id="abbrState"></td>
                                            <td class="td_label">State Tax W/H</td>
                                            <td style="padding-left:10px;">
                                                <p class="line-up" id="sttax">0.00</p>
                                            </td>
                                            <td style="padding-left:10px;">
                                                <p class="line-up" id="ytdsttax">0.00</p>
                                            </td>
                                        </tr>
                                        <tr class="casdi_tr casdi_tr_hide">
                                            <td colspan="4"></td>
                                            <td class="td_label">California SDI Tax</td>
                                            <td style="padding-left:10px;">
                                                <p class="line-up" id="casditax">0.00</p>
                                            </td>
                                            <td style="padding-left:10px;">
                                                <p class="line-up" id="ytdcasditax">0.00</p>
                                            </td>
                                        </tr>
                                                    </tbody></table>
                            </div>
                        </div>

                        <div class="stub_total">
                            <div>
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tbody><tr>
                                        <th width="16%">YTD GROSS</th>
                                        <th width="18%">YTD DEDUCTIONS</th>
                                        <th width="16%">YTD NET PAY</th>
                                        <th width="16%">TOTAL</th>
                                        <th width="18%">DEDUCTIONS</th>
                                        <th width="16%">NET PAY</th>
                                    </tr>
                                    <tr>
                                                                    <td><p class="readonly" id="ytdtotal">19728.40</p></td>
                                            <td><p class="readonly" id="ytddeductions">3827.86</p></td>
                                            <td><p class="readonly" id="ytdnetpay">15900.54</p></td>
                                            <td><p class="readonly" id="total">458.80</p></td>
                                            <td><p class="readonly" id="deductions">89.02</p></td>
                                            <td><p class="readonly" id="netpay">369.78</p></td>
                                                            </tr>
                                </tbody></table>
                            </div>
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
                                                Type Employee Street Address Here							">Type Employee Street Address Here</span>
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
                                            10/27/2018						">
                                            10/27/2018						</td>
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
                </div></div></div><a class="carousel-control left" href="#carusel_preview" data-slide="prev" style="display: none;"><span class="glyphicon glyphicon-chevron-left"></span></a><a class="carousel-control right" href="#carusel_preview" data-slide="next" style="display: none;"><span class="glyphicon glyphicon-chevron-right"></span></a></div></div>

            <!-- Fourth Step -->

                <div id="stub_wizard_tab_4" class="tab-pane fade">
                    <div class="row step-arrow">
                        <div class="col-md-6">
                            <button class="button-previous btn btn-primary disabled" name="previous" type="button"><i class="fa fa-chevron-left"></i>&nbsp;Preview Stubs</button>
                        </div>
                    </div>
                    <div class="loader-rotate" id="loader-4step">
                        <div class="loader-img">
                            <img src="images/loader.gif">
                        </div>
                        <p>Please wait</p>
                    </div>
                    <div class="form-horizontal" id="order_detail">
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


@endsection
