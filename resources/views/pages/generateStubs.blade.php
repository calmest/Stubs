@extends('layouts.app')

@section('content')
<div class="header well">
    <div class="container">
        <h1>Generate Your Stubs</h1>
    </div>
</div>
<style>
    h1{
        color: #428bca;
    }
</style>


<div id="content">

<style>.space{padding: 10px;border-radius: none;margin:25px;}</style>

<div class="row">
    <div class="col-sm-3 pull-right space">
        {{-- <a href="/modern" class="btn btn-primary btn-xs pull-right space"><p>Back to old generator</p></a> --}}
    </div>
</div>
<h3 class="text-center">Create My Stubs are delivered to your email for immediate download and printing. Watermarks are removed from purchased copies.</h3>
<br>
<div class="row">
    <div class="col-md-12">
        <div id="stub_wizard"><ul id="yw0" class="nav nav-pills">
<li class="active" style="width: 25%;">
<a data-toggle="tab" href="#stub_wizard_tab_1">Select template</a></li>
<li style="width: 25%;" class="">
<a data-toggle="tab" href="#stub_wizard_tab_2">Enter Info</a></li>
<li style="width: 25%;">
<a data-toggle="tab" href="#stub_wizard_tab_3">Preview stubs</a></li>
<li style="width: 25%;">
<a data-toggle="tab" href="#stub_wizard_tab_4">Download</a></li>
</ul>
<div id="wizard-nav-progress">
                <div id="wizard-bar" class="progress active">
                    <div class="progress-bar" style="width: 12.5%; position: relative;">
                        <div class="progress-point"></div>
                    </div>
                </div>
            </div><div class="tab-content"><div id="stub_wizard_tab_1" class="tab-pane fade active in"><div class="row" style="display: none;">
    <div class="col-md-6">
        <button class="button-next btn" name="next" type="button">Next</button> </div>
</div>
<br>

<div id="carusel_tmpl" class="carousel slide"><div class="carousel-inner"><div class="item active"><img src="/images/modern_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Modern Template Selected <span>1 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="modern" name="yt0" type="button">Select This Template</button></p></div></div><div class="item "><img src="/images/modern2_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Modern 2 Template Selected <span>2 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="modern2" name="yt1" type="button">Select This Template</button></p></div></div><div class="item"><img src="/images/modern3_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Modern 3 Template Selected <span>3 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="modern3" name="yt2" type="button">Select This Template</button></p></div></div><div class="item"><img src="/images/classic_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Classic Template Selected <span>4 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic" name="yt3" type="button">Select This Template</button></p></div></div><div class="item"><img src="/images/classic2_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Classic 2 Template Selected <span>5 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic2" name="yt4" type="button">Select This Template</button></p></div></div><div class="item"><img src="/images/classic3_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Classic 3 Template Selected <span>6 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic3" name="yt5" type="button">Select This Template</button></p></div></div><div class="item"><img src="/images/classic4_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Classic 4 Template Selected <span>7 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic4" name="yt6" type="button">Select This Template</button></p></div></div><div class="item"><img src="/images/classic5_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Classic 5 Template Selected <span>8 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic5" name="yt7" type="button">Select This Template</button></p></div></div><div class="item"><img src="/images/classic6_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Classic 6 Template Selected <span>9 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="classic6" name="yt8" type="button">Select This Template</button></p></div></div><div class="item"><img src="/images/advanced_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Advanced Template Selected <span>10 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="advanced" name="yt9" type="button">Select This Template</button></p></div></div><div class="item"><img src="/images/advanced2_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Advanced 2 Template Selected <span>11 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="advanced2" name="yt10" type="button">Select This Template</button></p></div></div><div class="item"><img src="/images/advanced3_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Advanced 3 Template Selected <span>12 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="advanced3" name="yt11" type="button">Select This Template</button></p></div></div><div class="item"><img src="/images/advanced4_tmp.jpeg" alt=""><div class="carousel-caption"><h3>Advanced 4 Template Selected <span>13 of 13</span></h3><p><button class="select-tmpl btn btn-success btn-lg" data-tmpl="advanced4" name="yt12" type="button">Select This Template</button></p></div></div></div><a class="carousel-control left" href="#carusel_tmpl" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a><a class="carousel-control right" href="#carusel_tmpl" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></div><input type="hidden" name="template" id="selected_template" >
</div><div id="stub_wizard_tab_2" class="tab-pane fade"><div class="row" style="display: none;">
    <div class="col-xs-6">
        <button class="button-previous btn disabled" name="previous" type="button">Back</button>    </div>
</div>
<div class="loader-rotate" id="loader_element">
    <div class="loader-img"><img src="/images/loader.gif"></div>
    <p>Please wait</p>
</div>
<div  class="tmpl-show" style="display: block;">


</div>
</div><div id="stub_wizard_tab_3" class="tab-pane fade"><div class="row centered-arrow">
    <div class="col-xs-6">
        <button class="button-previous btn btn-success disabled" name="previous" type="button"><i class="fa fa-chevron-left"></i>&nbsp;Edit Info</button>    </div>
    <div class="col-xs-6">
        <button id="show_order_detail" class="pull-right btn btn-success" name="next" type="button"><i class="fa fa-chevron-right"></i>&nbsp;Download</button>    </div>
</div>

<h2 class="wizard_third_step">This is a preview. Please review your stub for accuracy</h2>
    <hr>
    <br>
        <div id="carusel_preview" class="carousel slide"><div class="carousel-inner"></div><a class="carousel-control left" href="#carusel_preview" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a><a class="carousel-control right" href="#carusel_preview" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a></div></div><div id="stub_wizard_tab_4" class="tab-pane fade"><div class="row step-arrow">
    <div class="col-md-6">
        <button class="button-previous btn btn-primary disabled" name="previous" type="button"><i class="fa fa-chevron-left"></i>&nbsp;Preview Stubs</button>    </div>
</div>
<div class="loader-rotate" id="loader-4step">
    <div class="loader-img"><img src="/images/loader.gif"></div>
    <p>Please wait</p>
</div>
<div class="form-horizontal" id="order_detail"></div>
</div></div></div>        </div>
    </div>

<div class="clearfix"></div>
</div>


    <script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
jQuery('[data-toggle=popover]').popover();
jQuery('[data-toggle=tooltip]').tooltip();
jQuery('#carusel_tmpl').carousel({'interval':0,'wrap':true});
jQuery('#carusel_preview').carousel({'interval':0,'wrap':false});
jQuery('#stub_wizard').bootstrapWizard({'nextSelector':'.button-next','previousSelector':'.button-previous','onInit':function(tab, navigation, index) {
                            var $total = navigation.find("li").length;
                            var $ul = navigation.find("ul");
                            var itemwidthpercent = 100/$total;
                            navigation.find("li").css({width:itemwidthpercent+"%"});
                        },'onNext':function(tab, navigation, index) {
                            if ((index+1) != 1) {
                                $("#stub_wizard ul li").eq(index - 1).addClass("complete");
                            }
                            return true;
                        },'onPrevious':function(tab, navigation, index) {
                            if ($("#stub_wizard ul li").eq(index).hasClass("complete")) {
                                $("#stub_wizard ul li").eq(index).removeClass("complete");
                            }
                            return true;
                        },'onTabShow':function(tab, navigation, index) {
                            var $total = navigation.find("li").length;
                            var $current = index+1;
                            $("#stub_wizard ul li:lt("+index+")").addClass("complete");
                            var $percent = ($current/$total) * 100;
                            var half = (100/$total)/2;
                            $percent = $percent - half;
                            $("#wizard-bar > .progress-bar").css({width:$percent+"%"});
                        },'onTabClick':function(tab, navigation, index) {return false;},'class':'pills'});
jQuery('#login_form').yiiactiveform({'validateOnSubmit':true,'errorCssClass':'has-error','successCssClass':'has-success','inputContainer':'div.form-group','attributes':[{'id':'LoginForm_username','inputID':'LoginForm_username','errorID':'LoginForm_username_em_','model':'LoginForm','name':'username','enableAjaxValidation':true,'clientValidation':function(value, messages, attribute) {


if(jQuery.trim(value)!='' && !value.match(/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/)) {
    messages.push("Email is not a valid email address.");
}


if(jQuery.trim(value)=='') {
    messages.push("Email cannot be blank.");
}

}},{'id':'LoginForm_password','inputID':'LoginForm_password','errorID':'LoginForm_password_em_','model':'LoginForm','name':'password','enableAjaxValidation':true,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
    messages.push("Password cannot be blank.");
}

}}],'errorCss':'error'});
jQuery('#login_win').modal({'show':false});
jQuery('#reset_pass_form').yiiactiveform({'validateOnSubmit':true,'errorCssClass':'has-error','successCssClass':'has-success','inputContainer':'div.form-group','attributes':[{'id':'LoginForm_username','inputID':'LoginForm_username','errorID':'LoginForm_username_em_','model':'LoginForm','name':'username','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {


if(jQuery.trim(value)!='' && !value.match(/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/)) {
    messages.push("Email is not a valid email address.");
}


if(jQuery.trim(value)=='') {
    messages.push("Email cannot be blank.");
}

}}],'errorCss':'error'});
jQuery('#reset_pass_win').modal({'show':false});
jQuery('#register_form').yiiactiveform({'validateOnSubmit':true,'errorCssClass':'has-error','successCssClass':'has-success','inputContainer':'div.form-group','attributes':[{'id':'User_firstname','inputID':'User_firstname','errorID':'User_firstname_em_','model':'User','name':'firstname','enableAjaxValidation':true,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)!='') {

if(value.length>50) {
    messages.push("First Name is too long (maximum is 50 characters).");
}

}

}},{'id':'User_lastname','inputID':'User_lastname','errorID':'User_lastname_em_','model':'User','name':'lastname','enableAjaxValidation':true,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)!='') {

if(value.length>50) {
    messages.push("Last Name is too long (maximum is 50 characters).");
}

}

}},{'id':'User_email','inputID':'User_email','errorID':'User_email_em_','model':'User','name':'email','enableAjaxValidation':true,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
    messages.push("Email cannot be blank.");
}


if(jQuery.trim(value)!='') {

if(value.length>128) {
    messages.push("Email is too long (maximum is 128 characters).");
}

}



if(jQuery.trim(value)!='' && !value.match(/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/)) {
    messages.push("Email is not a valid email address.");
}

}},{'id':'User_password','inputID':'User_password','errorID':'User_password_em_','model':'User','name':'password','enableAjaxValidation':true,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
    messages.push("Password cannot be blank.");
}


if(jQuery.trim(value)!='') {

if(value.length<4) {
    messages.push("Password is too short (minimum is 4 characters).");
}

}


if(jQuery.trim(value)!='') {

if(value.length>255) {
    messages.push("Password is too long (maximum is 255 characters).");
}

}

}},{'id':'User_repeatPassword','inputID':'User_repeatPassword','errorID':'User_repeatPassword_em_','model':'User','name':'repeatPassword','enableAjaxValidation':true,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
    messages.push("Repeat password cannot be blank.");
}


if(value!=jQuery('#User_password').val()) {
    messages.push("Passwords do not match".replace('{compareValue}', jQuery('#User_password').val()));
}

}}],'errorCss':'error'});
jQuery('#register_win').modal({'show':false});
jQuery('#yw4_0 .alert').alert();
jQuery('#1219 > input').rating({'readOnly':true});
jQuery('#1214 > input').rating({'readOnly':true});
jQuery('#1213 > input').rating({'readOnly':true});
});
/*]]>*/
</script>


<div class="form-horizontal" id="order_detail" style="display: block;">

    </div>

@endsection
