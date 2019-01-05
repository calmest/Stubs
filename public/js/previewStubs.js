$(function() {
    var defaults = {
        w: 995,
        extend: false,
        textarea: false,
        advanced: false,
        modal: true,
        loader: false
    };
    var fields = ['stubNumber', 'paymentDate', 'paymentPeriodDate',
        'payhours', 'paythis',
        'ytdtotal', 'ytddeductions', 'ytdnetpay',
        'total', 'deductions', 'netpay',
        'ytdficamedtax', 'ytdficasstax', 'ytdficafedtax', 'ytdsttax', 'ytdcasditax',
        'ficamedtax', 'ficasstax', 'ficafedtax', 'sttax', 'casditax', 'ytdtotalhourswork',
        'totalhourswork'
    ];

    var divlId = 'carusel_preview';
    var itemElement = '<div class="item"></div>';

    var options;
    var total = ['ytdtotal', 'ytddeductions', 'ytdnetpay'];



    $.fn.myStubPlugin = function(params) {
        options = $.extend({}, defaults, params);
        if (options.advanced) {
            fields.push('payytd', 'overtimeytd', 'holidayytd', 'vacationytd', 'bonusytd', 'floatytd', 'customField1ytd', 'customField2ytd', 'customField3ytd');
        }
        if ($('#customField1ytd').length) {
            fields.push('customField1ytd', 'customField2ytd', 'customField3ytd');
        }
        if ($('#medicalrate').length) {
            fields.push("medicalytd", "retireytd");
        }
        if ($('#childsuprate').length) {
            fields.push("childsupytd", "optionalytd");
        }

        $(this).click(function() {
            var template = $('input[name="stubs[template]"]').val();

            if (template === 'advanced4') {
                var text = 'Other';
                var optionalrate = $('#optionalrate');
                var optionalfieldtaxe = $('#optionalfieldtaxe');

                var deductioncustom1field = $('.deductioncustom1field');
                var deductioncustom1rate = $('#deductioncustom1rate');

                var deductioncustom2field = $('.deductioncustom2field');
                var deductioncustom2rate = $('#deductioncustom2rate');

                if (optionalrate.val() !== "0.00" && !optionalfieldtaxe.val()) {
                    optionalfieldtaxe.val(text);
                }
                if (deductioncustom1rate.val() !== "0.00" && !deductioncustom1field.val()) {
                    deductioncustom1field.val(text);
                }
                if (deductioncustom2rate.val() !== "0.00" && !deductioncustom2field.val()) {
                    deductioncustom2field.val(text);
                }

            } else if (template === 'modern4') {
                var text = 'Other';
                var deductionotherrate = $('#deductionotherrate');
                var deductionotherfield = $('.deductionotherfield');

                if (deductionotherrate.val() !== "0.00" && !deductionotherfield.val()) {
                    deductionotherfield.val(text);
                    $('.repidedeductionotherfield').html(text);
                }
            }

            if (!options.modal) {
                $('#' + divlId).hide();
                $('.button-next').click();
            } else {
                var $modalW = $('#PreviewStubs');
                $modalW.modal('show');
                $modalW.find('.modal-dialog').css({
                    'width': 'auto',
                    'max-width': '960px',
                });
                $modalW.css('overflow-x', 'auto');
            }

            if (options.loader) {
                $('.loader-line').addClass('active');
            }

            if (options.textarea) {
                var t1 = $('#companyAddress2').val();
                var t2 = $('#employeeAddress2').val();
                var t3 = $('#notes').val();
            }
            //if (options.advanced) {
            var text_select1 = $('#maritalStatus').val();
            var text_select2 = $('#exemptions').val();
            var text_select3 = $('#state').val();
            var text_select4 = $('#stateResStatus').val();
            //}

            var count = Number($('#stubsAmount').val()) + 1;
            var content = '';
            for (var i = 1; i <= count; i++) {
                content = content + itemElement;
            }

            var $divContent = $('#' + divlId).find('.carousel-inner');
            if (count == 1) {
                $divContent.parent().find('.carousel-control').hide();
            } else {
                $divContent.parent().find('.carousel-control').show();
            }
            $divContent.html(content);
            //console.log(content);

            //console.log(itemElement);

            // console.log(carusel_preview);
            /*
            //convert carusel_preview to image using htmlcanvas
            console.log("Converting to image ...");
            html2canvas(document.querySelector("#carusel_preview"), { scale: 1 }).then(canvas => {
                $("#rendered").html(canvas);
                var data = canvas.toDataURL("image/jpeg");
                //window.open(data);


            });
            */
            /*
            console.log("Converting to pdf ...");
            var element = document.getElementById('#carusel_preview');
            html2pdf(element);
            */

            var $div = $('div#all_preset1');
            var clon = $div.clone();
            clon.find('#otherlabel').hide();
            $divContent.find('div.item:eq(0)').addClass('active').append(clon.attr('id', 'clonStub1'));

            var $stub,
                netpay;

            for (var i = 2; i <= count; i++) {
                $stub = $('#stub' + i);
                clon = $div.clone();
                clon.find('#otherlabel').remove();
                for (var f = 0; f < fields.length; f++) {
                    clon.find('#' + fields[f]).val($stub.find('#' + fields[f] + i).val());
                }
                if (options.extend) {
                    if ($stub.find('#extended' + i).prop('checked')) {
                        netpay = ($('#netpay' + i).val()).split('.');
                        clon.find('#extdollars').html(netpay[0]);
                        clon.find('#extcents').html(netpay[1]);
                        clon.find('#temp').removeClass('temp_easy').addClass('temp_ext');
                        clon.find('#extendform').show().find('#extpaymentDate').text($stub.find('#paymentDate' + i).val());
                        clon.find('#extstubNumber').text($stub.find('#stubNumber' + i).val());
                    } else {
                        clon.find('#temp').removeClass('temp_ext').addClass('temp_easy');
                        clon.find('#extendform').hide();
                    }
                    if ($('#this_total').length) {
                        for (var f = 0; f < total.length; f++) {
                            clon.find('#this_' + total[f]).val($stub.find('#' + total[f] + i).val());
                        }
                    }
                }
                $divContent.find('div.item:eq(' + (i - 1) + ')').append(clon.attr('id', 'clonStub' + (i)));
            }


            if (options.textarea) {
                $divContent.find('#companyAddress2').text(t1).val(t1);
                $divContent.find('#employeeAddress2').text(t2).val(t2);
                $divContent.find('#notes').text(t3).val(t3);
            }

            var v, idd;
            $('#temp select').each(function() {
                v = $(this).val();
                idd = $(this).attr('id');
                if ($(this).hasClass('period')) {
                    if (v === 0) {
                        v = '';
                    }
                } else if (idd === 'maritalStatus') {
                    v = text_select1;
                } else if (idd === 'exemptions') {
                    v = text_select2;
                } else if (idd === "state") {
                    v = '';
                    if (text_select3 != 0) {
                        v = $(this).find('option[value="' + text_select3 + '"]').text();
                    }
                } else if (idd === 'stateResStatus') {
                    v = text_select4;
                }


                if (idd == 'maritalStatus' || idd == 'exemptions' || idd == 'state' || idd == 'stateResStatus') {
                    $divContent.find('select#' + idd).after('<p id="' + idd + '" class="no_select">' + v + '</p>').remove();
                } else {
                    $divContent.find('select#' + idd).remove();
                }
            });

            $divContent.find('.popover').remove();
            $divContent.find('input[type="text"], .after-stub input[type="hidden"]').each(function() {
                if ($(this).css("display") == "none") {
                    return;
                }
                var val = $(this).val();
                var id = $(this).attr('id');
                if ($(this).parent('div.require').length != 0) {
                    var $this = $(this).parent('div.require');
                } else {
                    var $this = $(this);
                }
                var className = '';


                if ($this.hasClass('line-up') || $this.hasClass('rate') || $this.hasClass('advhours') || $this.hasClass('payhours')) {
                    className = ' class="line-up"';
                } else if ($this.hasClass('center-line-up')) {
                    className = ' class="center-line-up"';
                } else if ($this.hasClass('readonly')) {
                    className = ' class="readonly"';
                }
                if (template === 'advanced5') {
                    var array = {
                        ficamedtax: 'ficamedtax',
                        ficasstax: 'ficasstax',
                        ficafedtax: 'ficafedtax',
                        sttax: 'sttax',
                        casditax: 'casditax',
                        medicalrate: 'medicalrate',
                        childsuprate: 'childsuprate',
                        retirerate: 'retirerate',
                        optionalrate: 'optionalrate'
                    };
                    if (array[id]) {
                        if (Number(val) != 0) {
                            $this.before('<p' + className + ' id="' + id + '">-' + val + '</p>');
                        } else {
                            $this.before('<p' + className + ' id="' + id + '">' + val + '</p>');
                        }
                    } else {
                        $this.before('<p' + className + ' id="' + id + '">' + val + '</p>');
                    }
                } else {
                    $this.before('<p' + className + ' id="' + id + '">' + val + '</p>');
                }
                $this.remove();
            });
            $divContent.find('textarea').each(function() {
                if ($(this).css("display") == "none") {
                    return;
                }
                /*var val = $(this).val();
                var id = $(this).attr('id');*/
                /*if ($(this).parent('div.require').length != 0) {
                    var $this = $(this).parent('div.require');
                } else {
                    var $this = $(this);
                }*/
                $(this).attr('readonly', 'readonly')
                    .css('border', '0')
                    .css('background', 'none');
                //$this.before('<div id="'+id+'">'+val+'</div>');
                //$this.remove();
            });
            /*$divContent.find('.company_name_zone input').each(function () {
                    var val = $(this).val();
                    var id = $(this).attr('id');
                    $(this).before('<p id="companyName">'+val+'</p>');
                    $(this).remove();
            });
            $divContent.find('.header_of_stub input').each(function () {
                if ($(this).attr('type') !== 'hidden') {
                    var fsize = parseInt($(this).css('font-size'));
                    var lHeight = parseInt($(this).css('line-height'));
                    var val = $(this).val();
                    var id = $(this).attr('id');
                    $(this).before('<span style="font-size:'+fsize+'px;line-height:'+lHeight+'px;">'+val+'</span>');
                    $(this).remove();
                }
            });
            $divContent.find('.top1 input, .top2 textarea, .head_stub input, .options_box input, .info_box input, .center_rs textarea, .top_rs input, .stub_top input, .top_left_head input, .top_right_head input').each(function () {
                if ($(this).attr('type') !== 'hidden') {
                    var fsize = parseInt($(this).css('font-size'));
                    var lHeight = parseInt($(this).css('line-height'));
                    var val = $(this).val();
                    var id = $(this).attr('id');
                    var alignText = '';
                    if (id == 'paymentDate' || id == 'ssn' || id == 'employeeId') {
                        $(this).parent().css({'width':'auto', 'margin': '0'});
                    }
                    $(this).before('<span style="'+alignText+' font-size:'+fsize+'px;line-height:'+lHeight+'px;margin:1px 0 ;display: inline-block;">'+val+'</span>');
                    $(this).remove();
                }
            });*/
            $divContent.find('#payrate, #payhours, #paythis').each(function() {
                if (!options.advanced) {
                    $(this).css('text-align', 'center');
                } else {
                    $(this).css('margin', '0');
                }
            });
            /*$divContent.find('.grey_box input').each(function () {
                var fsize = parseInt($(this).css('font-size'));
                $(this).css({'border':'0', 'background':'none', 'font-size': fsize+'px'});
                $(this).parent().css('margin-right','5px');
            });
            $divContent.find('.stub_body input, .stub_center input, .dumb input, .dumb2 input, .center_ls input, .botton_ls input, .center_of_stub input').each(function (){
                $(this).attr('readonly', 'readonly').css({'border': '0'}).focus(function() {
                    $(this).attr('readonly', 'readonly').val($(this).val());
                });
                if (options.advanced && $(this).attr('id') !== 'optionalfield') {
                    $(this).css('text-align', 'right');
                }
            });*/


            if (options.loader) {
                $('.loader-line').removeClass('active');
            }
            if (!options.modal) {
                $('#' + divlId).show();
            }
            $('#carusel_preview').trigger('shown:preview');


            if (template === 'advanced4') {
                if (optionalrate.val() == "0.00" && !optionalfieldtaxe.val()) {
                    $('#carusel_preview tr.optionalfield').hide();
                }
                if (deductioncustom1rate.val() == "0.00" && !deductioncustom1field.val()) {
                    $('#carusel_preview tr.deductioncustom1').hide();
                }
                if (deductioncustom2rate.val() == "0.00" && !deductioncustom2field.val()) {
                    $('#carusel_preview tr.deductioncustom2').hide();
                }

                var deductiontotal = $('#deductiontotal');
                if (deductiontotal.val() == '0.00') {
                    $('#carusel_preview .deduction_tabel').hide();
                }
            } else if (template === 'modern4') {
                if (deductionotherrate.val() == "0.00" && !deductionotherfield.val()) {
                    $('#carusel_preview tr.deductionothertr').hide();
                }
            }

            return false;
        });
    };

    $('#PreviewStubs').on('shown.bs.modal', function() {
        $('#carusel_preview').trigger('shown:preview');
        charLimit2();
    });

    $('a[data-toggle="tab"][href="#stub_wizard_tab_3"]').on('shown.bs.tab', function() {
        charLimit2();
    });


});