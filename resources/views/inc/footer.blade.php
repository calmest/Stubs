
<hr>
<div class="container">
    <div class="row">
        @foreach(\App\Review::latest()->take(3)->get() as $reviews)
            <div class="col-md-4 push" style="padding: 0% 5% 0% 2%;">
                <div class="row" style="color: #157EE9; font-size: 16px;">
                    <strong><u>{{ $reviews->name }}</u></strong>
                </div>
                <div class="row" style="text-align: justify;">
                    {{ $reviews->body }}
                </div>
                <input type="text" value="{{$reviews->ratings}}" id="userRatings{{$reviews->ratings}}" name="ratingme" disabled="on" /><br>
                <script>
                    $(function(){
                            $('[id^=userRatings]').each(function() {

                                $(this).rating();
                            });
                    });
                </script>
            </div>
    @endforeach
    </div>
    <hr>
    <div class="container">
        <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5">
            <ul style="list-style: none; display:flex; color: #000;">
                <li><a style="color:#000; font-weight:bold;" href="/">Home</a>  | &nbsp;</li>
                <li><a style="color:#000; font-weight:bold;" href="/posts">News</a>  |&nbsp;</li>
                <li><a style="color:#000; font-weight:bold;" href="/privacy">Privacy Policy</a>  |&nbsp;</li>
                <li><a style="color:#000; font-weight:bold;" href="/legal">Terms & Conditions</a> </li>
            </ul>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12 col-lg-7" style="height:10px;">
            <div class="pull-right">
                <img src="/images/verasafe.png" height="30px" width="80px"/>
                <img src="/images/paypal_secured.png" height="30px" width="100px"/>
                <img src="/images/paypal.jpeg" height="30px" width="150px"/>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <center><small>© Create My Stubs 2018</small></center>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/highlightsFields.js') }}" ></script>
<script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
jQuery('[data-toggle=popover]').popover();
jQuery('[data-toggle=tooltip]').tooltip();
jQuery('#modal-watch-demo').modal({'show':false});

                moment.locale('en');
                $(document).ready(function () {
                    $('#lbhtml').myStubPlugin({
                        w:1020,

                        loader:true,
                        extend:true,

                    });
                });

jQuery('#carusel_preview').carousel({'interval':0,'wrap':false});
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
jQuery('#yw8_0 .alert').alert();
jQuery('#1155 > input').rating({'readOnly':true});
jQuery('#1154 > input').rating({'readOnly':true});
jQuery('#1152 > input').rating({'readOnly':true});
});
/*]]>*/
</script>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="position: absolute; top: 996px; left: 910.094px; z-index: 1; display: none;">
    <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all">
        <a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev">
            <span class="ui-icon ui-icon-circle-triangle-w">Prev</span>
        </a>
        <a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span>
        </a>
        <div class="ui-datepicker-title">
            <span class="ui-datepicker-month">November</span>&nbsp;
            <span class="ui-datepicker-year">2018</span>
        </div>
    </div>
    <table class="ui-datepicker-calendar">
        <thead>
            <tr>
                <th class="ui-datepicker-week-end">
                    <span title="Sunday">Su</span>
                </th>
                <th>
                    <span title="Monday">Mo</span>
                </th>
                <th>
                    <span title="Tuesday">Tu</span>
                </th>
                <th>
                    <span title="Wednesday">We</span>
                </th>
                <th>
                    <span title="Thursday">Th</span>
                </th>
                <th>
                    <span title="Friday">Fr</span>
                </th>
                <th class="ui-datepicker-week-end">
                    <span title="Saturday">Sa</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class=" ui-datepicker-week-end ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="9" data-year="2018">
                    <a class="ui-state-default ui-priority-secondary" href="#">28</a>
                </td>
                <td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="9" data-year="2018">
                    <a class="ui-state-default ui-priority-secondary" href="#">29</a>
                </td>
                <td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="9" data-year="2018">
                    <a class="ui-state-default ui-priority-secondary" href="#">30</a>
                </td>
                <td class=" ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="9" data-year="2018"><a class="ui-state-default ui-priority-secondary" href="#">31</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">2</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">3</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">9</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">10</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">12</a></td><td class="  ui-datepicker-current-day" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default ui-state-active" href="#">13</a></td><td class="  ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default ui-state-highlight" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">16</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">17</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">23</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">24</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2018"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month " data-handler="selectDay" data-event="click" data-month="11" data-year="2018"><a class="ui-state-default ui-priority-secondary" href="#">1</a></td></tr></tbody></table></div>
<script src="https://cdn.siftscience.com/s.js"></script><iframe src="https://bid.g.doubleclick.net/xbbe/pixel?d=KAE" style="display: none;"></iframe></body><div id="sideDragRight" style="display: none;"><div class="side_search_box" id="side_google_search" data-allowed-type="text" style="height: 20%; background-image: url(&quot;chrome-extension://aneodkojaglhnkkdbbdnmmmgimlcaogo/images/webSearch.png&quot;); background-color: rgb(255, 255, 255); background-size: cover; background-position: 50% 50%;"></div><div class="side_search_box" id="side_wikipedia_search" data-allowed-type="text" style="height: 20%; background-image: url(&quot;chrome-extension://aneodkojaglhnkkdbbdnmmmgimlcaogo/images/wikipedia.png&quot;); background-color: rgb(255, 255, 255); background-size: cover; background-position: 50% 50%;"></div><div class="side_search_box" id="side_youtube_search" data-allowed-type="text" style="height: 20%; background-image: url(&quot;chrome-extension://aneodkojaglhnkkdbbdnmmmgimlcaogo/images/youtube.png&quot;); background-color: rgb(255, 255, 255); background-size: cover; background-position: 50% 50%;"></div><div class="side_search_box" id="side_translate_search" data-allowed-type="text" style="height: 20%; background-image: url(&quot;chrome-extension://aneodkojaglhnkkdbbdnmmmgimlcaogo/images/translate.png&quot;); background-color: rgb(255, 255, 255); background-size: cover; background-position: 50% 50%;"></div><div class="side_search_box" id="side_image_search" data-allowed-type="all" style="height: 20%; background-image: url(&quot;chrome-extension://aneodkojaglhnkkdbbdnmmmgimlcaogo/images/imageSearch.png&quot;); background-color: rgb(255, 255, 255); background-size: cover; background-position: 50% 50%;"></div></div><div id="sideDragLeft" style="display: none;"><div class="side_search_box" id="side_facebook" data-allowed-type="images" style="height: 20%; background-image: url(&quot;chrome-extension://aneodkojaglhnkkdbbdnmmmgimlcaogo/images/facebook.png&quot;); background-color: rgb(255, 255, 255); background-size: cover; background-position: 50% 50%;"></div><div class="side_search_box" id="side_twitter" data-allowed-type="images" style="height: 20%; background-image: url(&quot;chrome-extension://aneodkojaglhnkkdbbdnmmmgimlcaogo/images/twitter.png&quot;); background-color: rgb(255, 255, 255); background-size: cover; background-position: 50% 50%;"></div><div class="side_search_box" id="side_googleplus" data-allowed-type="images" style="height: 20%; background-image: url(&quot;chrome-extension://aneodkojaglhnkkdbbdnmmmgimlcaogo/images/google+.png&quot;); background-color: rgb(255, 255, 255); background-size: cover; background-position: 50% 50%;"></div><div class="side_search_box" id="side_pinterest" data-allowed-type="images" style="height: 20%; background-image: url(&quot;chrome-extension://aneodkojaglhnkkdbbdnmmmgimlcaogo/images/pinterest.png&quot;); background-color: rgb(255, 255, 255); background-size: cover; background-position: 50% 50%;"></div><div class="side_search_box" id="side_linkedin" data-allowed-type="images" style="height: 20%; background-image: url(&quot;chrome-extension://aneodkojaglhnkkdbbdnmmmgimlcaogo/images/linkedin.png&quot;); background-color: rgb(255, 255, 255); background-size: cover; background-position: 50% 50%;">
</div></div>
