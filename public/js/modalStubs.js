$(document).ready(function() {
    /*switch calculator*/
    var switchCalc = function(isSaveFromModal) {
        if (isSaveFromModal) {
            $('#switchCalcul').val($('#pre-switchCalcul').val()).trigger('change');
        } else {
            $('#pre-switchCalcul').val($('#switchCalcul').val());
        }
    };
    /*switch contractor*/
    $('input[name="pre-stubs[header][contractorStatus]"]').on('change', function() {
        $('input[name="pre-stubs[header][contractorStatus]"]').parent().toggleClass('active');
    });
    var changeContractorStatus = function(isSaveFromModal) {
        var modalValue = $('input[name="pre-stubs[header][contractorStatus]"]:checked').val();
        var originalValue = $('input[name="stubs[header][contractorStatus]"]:checked').val();

        if (modalValue !== originalValue) {
            if (isSaveFromModal) {
                if (modalValue === '1') {
                    $('#contractor').trigger('click');
                } else {
                    $('#employee').trigger('click');
                }
            } else {
                if (originalValue === '1') {
                    $('#pre-contractor').click();
                } else {
                    $('#pre-employee').click();
                }
            }
        }
    };
    /*switch paymentDay*/
    $('#pre-paymentDate').datepicker({
        onSelect: function(selected, event) {
            $(this).val(selected).trigger('change');
        },
        showOtherMonths: true,
        selectOtherMonths: true
    });
    var changePaymentDay = function(isSaveFromModal) {
        if (isSaveFromModal) {
            $('#paymentDate').val($('#pre-paymentDate').val()).trigger('change');
        } else {
            $('#pre-paymentDate').val($('#paymentDate').val());
        }
    };
    /*switch extendedStatus*/
    $('#pre-extendedBtn').on('click', function() {
        $(this).toggleClass('active');
    });
    var changeExtendedStatus = function(isSaveFromModal) {
        var isActiveModal = $('#pre-extendedBtn').hasClass('active');
        var isActiveOriginal = $('#extendedBtn').hasClass('active');
        if (isActiveModal != isActiveOriginal) {
            if (isSaveFromModal) {
                $('#extendedBtn').trigger('click');
            } else {
                $('#pre-extendedBtn').toggleClass('active');
            }
        }
    };
    /*annualy and payrate*/
    $('input.pre-refreshable[type="text"]').on('change input', function(event) {
        var refreshElementId = $(this).attr('id');
        var refreshElementVal = $(this).val();
        refreshElementVal = stubs.inputTextPattern(refreshElementId, refreshElementVal);
        if (event.type === 'change') {
            refreshElementVal = stubs.round(refreshElementVal);
            $(this).val(refreshElementVal);
        }
    });
    var changeRateOrAnnual = function(isSaveFromModal, type) {
        if (isSaveFromModal) {
            $('#payrate').val(stubs.round(Number($('#pre-payrate').val()))).trigger('change');
            $('#payhours').val(Number($('#pre-payhours').val())).trigger('change');
            if (type === 'salary') {
                $('#annual').val(stubs.round(Number($('#pre-annual').val()))).trigger('change');
            }
        } else {
            $('#pre-payrate').val($('#payrate').val());
            $('#pre-payhours').val($('#payhours').val());
            $('#pre-annual').val($('#annual').val());
        }
    };
    /*paymentPeriod*/
    $('select#pre-paymentPeriod').on('change', function() {
        stubs.updatePaymentPeriod($(this).val());
        stubs.generateSelect('pre-paymentPeriodAmounts');
        $('#pre-payhours').val(stubs.additionStubs.payhours[1]);
    });

    /*PaymentType*/
    $('input[name="pre-stubs[header][type]"]').on('change', function() {
        $('input[name="pre-stubs[header][type]"]').parent().toggleClass('active');
        if ($('input[name="pre-stubs[header][type]"]:checked').val() === 'hourly') {
            $('#pre-annualPayment').hide().find('input').attr('disabled', 'disabled');
            $('#pre-rate').show().find('input').attr('disabled', false);
            var rate = $('#pre-payrate').val();
            if (rate === 'Salary') {
                $('#pre-payrate').val('11.47');
            }
        } else {
            $('#pre-rate').hide().find('input').removeAttr('disabled', 'disabled');
            $('#pre-annualPayment').show().find('input').attr('disabled', false);
        }
    });
    var changePaymentType = function(isSaveFromModal) {
        var modalValue = $('input[name="pre-stubs[header][type]"]:checked').val();
        var originalValue = $('input[name="stubs[header][paymentTypes]"]:checked').val();
        var type = modalValue;
        if (modalValue !== originalValue) {
            if (isSaveFromModal) {
                if (modalValue === 'salary') {
                    $('#salary').trigger('click');
                } else {
                    $('#hourly').trigger('click');
                }
            } else {
                type = originalValue;
                if (originalValue === 'hourly') {
                    $('#pre-hourly').click();
                    $('#pre-annualPayment').hide().find('input').attr('disabled', 'disabled');
                    $('#pre-rate').show().find('input').attr('disabled', false);
                } else {
                    $('#pre-salary').click();
                    $('#pre-rate').hide().find('input').removeAttr('disabled', 'disabled');
                    $('#pre-annualPayment').show().find('input').attr('disabled', false);
                }
            }
        }
        changeRateOrAnnual(isSaveFromModal, type);
    };

    /*company name, address etc.*/
    var changeTextInput = function(isSaveFromModal) {
        $('.pre-input').each(function() {
            var $element = $(this);
            var field = $element.attr('data-field');
            if (isSaveFromModal) {
                $('#' + field).val($element.val()).trigger('change');
            } else {
                $element.val($('#' + field).val());
            }
        });
    };

    var chengeSsnFormat = function(isSaveFromModal) {
        if (isSaveFromModal) {
            $('#ssn-format').attr('checked', $('#pre-ssn-format').is(':checked'));
        } else {
            $('#pre-ssn-format').attr('checked', $('#ssn-format').is(':checked'));
        }
    };


    /*change selects*/
    var changeSelect = function(isSaveFromModal) {
        if (!isSaveFromModal) {
            stubs.generateSelect('pre-paymentPeriodAmounts');
        }
        $('.pre-select').each(function() {
            var $element = $(this);
            var field = $element.attr('data-field');
            if (field !== 'paymentPeriodAmounts') {
                if (isSaveFromModal) {
                    $('#' + field).val($element.val()).trigger('change');
                } else {
                    $element.val($('#' + field).val());
                }
            }
        });
        if (isSaveFromModal) {
            $('#paymentPeriodAmounts').val($('#pre-paymentPeriodAmounts').val()).trigger('change');
        } else {
            $('#pre-paymentPeriodAmounts').val($('#paymentPeriodAmounts').val());
        }

    };

    var changeFunc = function(isSaveFromModal) {
        switchCalc(isSaveFromModal);
        changeContractorStatus(isSaveFromModal);
        changePaymentDay(isSaveFromModal);
        changeExtendedStatus(isSaveFromModal);
        changeSelect(isSaveFromModal);
        changePaymentType(isSaveFromModal);
        chengeSsnFormat(isSaveFromModal);
        changeTextInput(isSaveFromModal);
    };

    var saveModalForm = function() {
        changeFunc(true);
        //$('#mobile-modal-for-stubs').attr('data-isrun',1).modal('hide');
        $('#mobile-modal-for-stubs').modal('hide');
    };

    var reOpenModalForm = function() {
        changeFunc(false);
        $('#mobile-modal-for-stubs').modal('show');
    };

    $('#save-pre-form').on('click', function() {
        saveModalForm();
    });

    $(document).on('click', '#call-mobile-modal', function() {
        reOpenModalForm();
    });


    var stubSize = {
        'modern': { 'w': 1000, 'h': 575 },
        'modern2': { 'w': 1000, 'h': 550 },
        'modern3': { 'w': 1000, 'h': 568 },
        'modern4': { 'w': 1000, 'h': 618 },
        'classic': { 'w': 1000, 'h': 520 },
        'classic2': { 'w': 1000, 'h': 991 },
        'classic3': { 'w': 1000, 'h': 1040 },
        'classic4': { 'w': 1000, 'h': 1052 },
        'classic5': { 'w': 1000, 'h': 773 },
        'classic6': { 'w': 1000, 'h': 925 },
        'advanced': { 'w': 1000, 'h': 692 },
        'advanced2': { 'w': 1000, 'h': 1161 },
        'advanced3': { 'w': 1000, 'h': 1335 },
        'advanced4': { 'w': 1000, 'h': 468 },
        'advanced5': { 'w': 1000, 'h': 1295 },
        'advanced6': { 'w': 1000, 'h': 812 },
    };
    //900 600

    var resizePreview = function() {
        var $stub = $('#carusel_preview #temp');
        var tmpl = $('#carusel_preview').attr('data-tmpl');

        if ($('#stub_wizard').length > 0) {
            var $container = $('#stub_wizard');
            var containerWidth = $container.width() - 80;
        } else {
            var windowWidth = $('#PreviewStubs .modal-body').width(); //$(document).width();
            if (windowWidth > 890) {
                var containerWidth = 890;
            } else {
                var containerWidth = windowWidth - 80;
            }
        }
        var stubWidth = stubSize[tmpl].w;
        var result = containerWidth / stubWidth;

        result = result <= 0.77 ? result : 0.77;

        if (result > 0 && result <= 0.77) {
            $stub.css({
                'width': '1000px',
                'transform': 'scale(' + result + ')',
                'transform-origin': 'left top'
            });
            $stub.parent().css({
                'height': stubSize[tmpl].h * result,
                'overflow': 'hidden',
            });
        }
    }

    $(document)
        .off('shown:preview')
        .on('shown:preview', function() {
            resizePreview();
        });

    $(window).resize(function() {
        resizePreview();
    });

});