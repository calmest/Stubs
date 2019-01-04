var warningAlert = '<div class="alert alert-danger alert-dismissible fade in" role="alert" id="char-limit-alert">' +
    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
    '<span aria-hidden="true">Ã—</span>' +
    '</button>' +
    '<strong>Carefully check your preview!</strong> It appears that you have exceeded the character limit. Reduce the information or choose a different template with enough space to enter your data.' +
    '</div>';


var charLimit2 = function() {
    var tmpl = $('input[name="stubs[template]"]').val();
    $('#char-limit-alert').remove();
    if (tmpl == 'advanced' || tmpl == 'advanced2' || tmpl == 'advanced3') {
        var normal_head_height1 = $('#clonStub1 #temp .head_stub_l').height();
        var test_height1 = $('#clonStub1 #temp .left_head_stub').height();

        var normal_head_height2 = $('#clonStub1 #temp .head_stub_r').height();
        var test_height2 = $('#clonStub1 #temp .right_head_stub').height();

        if (test_height1 > normal_head_height1 || test_height2 > normal_head_height2) {
            $('#carusel_preview').before(warningAlert);
        }
    } else if (tmpl == 'classic4') {
        var normal_head_height1 = $('#clonStub1 #temp .top1').height();
        var test_height_left1 = $('#clonStub1 #temp .top1_l').height();
        var test_height_right1 = $('#clonStub1 #temp .top1_r').height();

        var normal_head_height2 = $('#clonStub1 #temp .top2').height();
        var test_height_left2 = $('#clonStub1 #temp .top2_l').height();
        var test_height_right2 = $('#clonStub1 #temp .top2_r').height();

        if (test_height_left1 > normal_head_height1 || test_height_right1 > normal_head_height1 || test_height_left2 > normal_head_height2 || test_height_right2 > normal_head_height2) {
            $('#carusel_preview').before(warningAlert);
        }
    } else if (tmpl == 'modern4') {


    } else {
        var normal_head_height1 = $('#clonStub1 #temp .head_stub').height();
        var test_height1 = $('#clonStub1 #temp .left_head_stub').height();

        var normal_head_height2 = $('#clonStub1 #temp .stub_top').height();
        var test_height2 = $('#clonStub1 #temp .stub_top table').height();

        if (test_height1 > normal_head_height1 || test_height2 > normal_head_height2) {
            $('#carusel_preview').before(warningAlert);
        }
    }
};