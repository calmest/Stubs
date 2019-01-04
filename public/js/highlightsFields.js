$(document).ready(function(){
    var check = '<i class="fa fa-check" aria-hidden="true"></i>';
    $('.require input[type="text"], .require textarea').each(function () {
        var $elem = $(this);
        var fresh_val = $elem.val();
        var def_val = $elem.attr('placeholder');
        $elem.attr({
            'data-toggle':'popover',
            'data-placement':'right',
            'data-trigger':'manual',
            'data-content':check,
            'data-html':'true'}).popover('show');
        if (fresh_val === def_val || fresh_val.length === 0) {
            $(this).next('div.popover').removeClass('green');
        } else {
            $(this).next('div.popover').addClass('green');
        }
    });
    $(document).on('blur change input','.require input[type="text"], .require textarea',function() {
        var fresh_val = $(this).val();
        var def_val = $(this).attr('placeholder');
        if (fresh_val === def_val || fresh_val.length === 0) {
            $(this).next('div.popover').removeClass('green');
        } else {
            $(this).next('div.popover').addClass('green');
        }
    });

});