@extends('layouts.app')

@section('content')
<div class="header well">
    <div class="container">
      <h1>Order Details</h1>
    </div>
  </div>

<div class="container content-zone">
  <div id="yw3">
      </div>
      <div id="content">
<div class="row">
<div class="col-sm-4 col-sm-push-8">
<h2>Order Detail</h2>
<hr>
<table cellspacing="0" cellpadding="0" border="0" class="order_detail" width="100%">
<tbody>
    <tr style="border-bottom: 1px solid #ccc;">
        <td width="80%">
            <b>Description</b>
        </td>
        <td width="20%" align="right">
            <b>Amount</b>
        </td>
    </tr>
    <tr>
        <td class="grey">
            Classic6 Stub-EDownload<br>
            Item price: $8.99<br>
            Quantity: 2
        </td>
        <td valign="top" align="right">
            $17.98
        </td>
    </tr>
<tr style="border-bottom: 1px solid #ccc;border-top: 1px solid #ccc;">
<td>
    <b>Item Total</b>
</td>
<td align="right">
    <b>$17.98</b>
</td>
</tr>
<tr>
<td colspan="2" align="right">
    <b style="font-size: 16px;">Total $17.98 USD</b>
</td>
</tr>
</tbody>
</table>
</div>
<div class="col-sm-8 col-sm-pull-4">
<h2>Congratulations! Your paystubs have been created!</h2>
<hr>
<br>
<p style="text-align: justify;">
We have created a simple order option below for you to purchase your own copy without the watermarks.<br>
Enter the email address you would like your stubs sent to and place order to download your check stub(s) instantly!<br>
Paycheck stubs are delivered instantly after purchase and an email containing your stubs will be sent to the email address you provide.<br>
</p>
<br>
<div class="row">
<div class="col-md-8">
<form data-paypalpro="" class="form-horizontal" id="agree_order_form" action="/order/details" method="post">
    <div class="form-group has-error">
        <label class="col-sm-3 control-label required" for="BillingForm_email">Email 
            <span class="required">*</span>
        </label>
        <div class="col-sm-9">
            <input style="width:230px;" class="form-control" placeholder="Email" name="BillingForm[email]" id="BillingForm_email" type="email" maxlength="128" value="">
            <div class="help-block error" id="BillingForm_email_em_" style="">Email cannot be blank.</div>
            <span class="help-block">Your check stubs will be sent to this address.</span>
        </div>
    </div>
    <div class="form-group">
        <span class="col-sm-3"></span>
        <div class="col-sm-9">
            <div class="checkbox">
                <input id="ytBillingForm_agree" type="hidden" value="0" name="BillingForm[agree]">
                <label>
                    <input name="BillingForm[agree]" id="BillingForm_agree" value="1" type="checkbox">I agree with <a href="/legal" title="Terms" target="_blank">the terms of service</a>
                    <span class="required">*</span>
                </label>
            </div>
            <div class="help-block error" id="BillingForm_agree_em_" style="display:none"></div>
        </div>
    </div>
    <button id="save_order_form" data-stripe="true" class="btn btn-success" name="yt0" type="button">Place Order</button>
</form>
<button id="stripe_button" style="display:none;" class="btn btn-success" name="yt1" type="button">Complete Payment</button>
<script>
var handler = StripeCheckout.configure({
key: 'pk_live_vwp3zDvYiC5LV3UPNziSA4uC',
image: '/images/tile-150x150.png',
locale: 'auto',
token: function(token) {
var domain = window.location.protocol + '//' + window.location.hostname;
$.ajax({
data: token,
url: '/payment/stripeCharge',
type: 'POST'
}).done(function(order_id) {
// console.log(order_id);
if (order_id == 'reject') {
  window.location.replace(domain + '/payment/rejected');
} else if (order_id == 'pending') {
  window.location.replace(domain + '/payment/pendingChecking');
} else if (order_id == 'error') {
  window.location.replace(domain + '/payment/error');
} else {
  window.location.replace(domain + '/payment/success?order_id='+order_id);
}
}).fail(function(response) {
//console.log('FAIL', response);
window.location.replace(domain + '/payment/error');
});
// You can access the token ID with `token.id`.
// Get the token ID to your server-side code for use.
}
});

document.getElementById('stripe_button').addEventListener('click', function(e) {
e.preventDefault();
var agreeEmail = $(this).attr('data-email').toLowerCase();
try {
handler.open({
name: 'Real Paycheck Stubs',
amount: '1798',
billingAddress: true,
email: agreeEmail
});
} catch (e) {
alert(e);
}
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
handler.close();
});
</script>
<script type="text/javascript">
$(document).on('click', '#save_order_form', function () {
var $agreeForm = $('#agree_order_form');
var $orderDetailDiv = $('#order_detail');
var isStripeButton = $(this).attr('data-stripe') === 'true';
var isPayPalPro = $agreeForm.data('paypalpro');
var data1 = $('#stubsForm').serialize();
var data2 = $agreeForm.serialize();
var email = $agreeForm.find('[name="BillingForm[email]"]').val().toLowerCase();

$orderDetailDiv.find('.form-group').removeClass('has-error');
$orderDetailDiv.find('.error').html('');
$.ajax({
    data: data1+'&'+data2,
    url: '/generateStubs/createOrder',
    type: 'POST'
}).done(function(response) {
    var mes = 'Sorry, something broke. Try reload page.';
    if (response.indexOf('{') === 0) {
        try {
            var json = $.parseJSON(response);
            $.each(json, function(key, value) {
                if (key == 'email') {
                    mes = value;
                }
                $('#BillingForm_'+key+'_em_').parents('.form-group').addClass('has-error');
                $('#BillingForm_'+key+'_em_').show().html(mes);
            });
        } catch (e) {
            $('#BillingForm_email_em_').parents('.form-group').addClass('has-error');
            $('#BillingForm_email_em_').show().html('');
        }
    } else if ($.isNumeric(response)) {
        $('#loader_element').addClass('active');
        if (isStripeButton) {
            $agreeForm.hide();
            $('#stripe_button').attr('data-email', email).show();
        } else if (isPayPalPro) {
            window.location.replace(window.location.protocol + '//' + window.location.hostname + '/order/choosepayment');
        } else {
            $('#buyerId').val(response);
            $('#paypalform').submit();
        }
    }
}).fail(function(response) {
    alert('error');
});
return false;
});
</script>
<div class="clear"></div>
</div>
</div>
</div>
</div></div><!-- content -->
</div>

      </div>
@endsection
