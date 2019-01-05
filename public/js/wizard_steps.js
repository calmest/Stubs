<<<<<<< HEAD
$(document).ready(function() {

    //selected template on 1st step
    $(document).on('click', '#carusel_tmpl .select-tmpl', function() {

        //switch on next step
        $('.button-next').click();

        //activate loader rotate
        $('#loader_element').addClass('active');
        var tmpl = $(this).attr('data-tmpl');

        // get tpl name from button.select-tmpl
        var prewTmpl = $('input#selected_template').val();
        if (prewTmpl.length === 0 || prewTmpl != tmpl) {

            //check if it's a fresh tmpl
            var divStep2 = $('.tmpl-show');
            $('#carusel_preview').attr('data-tmpl', tmpl);
=======
$(document).ready(function(){
    //selected template on 1st stepa
    $(document).on('click', '#carusel_tmpl .select-tmpl', function () {
        //switch on next step
        $('.button-next').click();
        //activate loader rotate
        $('#loader_element').addClass('active');
        var tmpl = $(this).attr('data-tmpl'); // get tpl name from button.select-tmpl
        //console.log(tmpl);
        var prewTmpl = $('input#selected_template').val();
            //console.log(prewTmpl);
        if (prewTmpl.length === 0 || prewTmpl != tmpl) { //check if it's a fresh tmpl
            var divStep2 = $('.tmpl-show');
            //console.log(divStep2);
            $('#carusel_preview').attr('data-tmpl', tmpl);
            //console.log($('#carusel_preview').attr('data-tmpl', tmpl));
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
            divStep2.hide().html('').attr('id', 'tmpl-' + tmpl);
            $('input#selected_template').val(tmpl);
            var srcimg = 'checkstubinstant';
            if (tmpl == 'advanced' || tmpl == 'advanced2') {
                srcimg = 'advanced' + srcimg;
            } else if (tmpl == 'advanced3') {
                srcimg = 'advanced3' + srcimg;
            }
            $('.stub-price').attr('src', window.location.protocol + '//' + window.location.hostname + '/images/' + srcimg + '.png');
            $.ajax({
<<<<<<< HEAD
                data: { template: tmpl },
                url: '/selecttpl',
                type: 'GET'
            }).done(function(response) {
                console.log(response);
                divStep2.html(response).show();
=======
                data: {template: tmpl},
                url: '/generateStubs/selecttpl',
                type: 'GET'
            }).done(function(response){
               // console.log(response);
                $('.tmpl-show').html(response).show();
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
                //deactivate loader rotate
                $('#loader_element').removeClass('active');
            }).fail(function() {
                divStep2.html('<p>Something going wrong.</p>').show();
                //deactivate loader rotate
                $('#loader_element').removeClass('active');
            });
        } else {
            //deactivate loader rotate
            $('#loader_element').removeClass('active');
        }
    });

<<<<<<< HEAD
    $(document).on('click', '#back_to_select_tmpl', function() {
=======
    $(document).on('click', '#back_to_select_tmpl', function () {
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
        $('.button-previous').click();
    });

    //go on 4 step
<<<<<<< HEAD
    $(document).on('click', '#show_order_detail', function() {
=======
    $(document).on('click', '#show_order_detail', function () {
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
        $('#order_detail').hide().html(''); //refresh all detail block
        $('#loader-4step').addClass('active'); //activate loader rotate
        $('.button-next').click(); //switch on next step
        var data1 = $('#stubsForm').serialize(); //get stubs data
<<<<<<< HEAD
        var data2 = $('#agree_order_form').serialize(); // get email data
        $.ajax({
            data: data1 + '&' + data2,
            //url: '/generateStubs/downloadStubs',
            url: '/order/details',
            type: 'POST'
        }).done(function(response) {
=======
       // var data2 = $('#agree_order_form').serialize(); // get email data
       //console.log($('.tmpl-show').html());
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

        $.ajax({
            data: data1,

            //url: '/generateStubs/downloadStubs',
            url: '/order/details',
            type: 'POST'


        }).done(function(response) {
            //console.log(response);
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
            $('#order_detail').html(response).show();
            $('#loader-4step').removeClass('active'); //deactivate loader rotate
        }).fail(function() {
            alert('error');
            $('#loader-4step').removeClass('active'); //deactivate loader rotate
        });
    });

});