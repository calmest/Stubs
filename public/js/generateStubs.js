$(document).ready(function() {

    window.stubs = new Stubs();



    function clickDepositSlip() {
        var template = $('input[name="stubs[template]"]').val();
        if (template == 'advanced6') {
            $('#extendedBtn').click();
        }
    }
    setTimeout(clickDepositSlip, 500);


    $('#PreviewStubs').on('hide.bs.modal', function() {
        setTimeout(test, 500);
    });

    function test() {
        $('#PreviewStubs .modal-body .carousel-inner').html('');
    }

    $('input#paymentDate').datepicker({
        onSelect: function(selected, event) {
            $(this).val(selected).trigger('change');
            stubs.updatePaymentDate(selected);
            stubs.calculate();
            stubs.updateExtendedInfo('paymentDate');
        },
        showOtherMonths: true,
        selectOtherMonths: true
    });
    $('input.paymentDate').datepicker({
        onSelect: function(selected, event) {
            $(this).val(selected).trigger('change');
        },
        showOtherMonths: true,
        selectOtherMonths: true
    });
    $('input.paymentDate, input#paymentDate').on('change', function() {
        var selected = $(this).val();
        var refreshElementId = $(this).attr('id');
        var pattern = /(paymentDate)([0-9]{1,2})/;
        var regArray = pattern.exec(refreshElementId);
        if (regArray) {
            var t = regArray[2];
            var count = regArray[2];
        } else {
            var t = '';
            var count = 1;
        }
        stubs.additionStubs.paymentDate[count] = selected;
        stubs.additionStubs.paymentPeriodDate[count] = stubs.getPaymentDatePeriod(stubs.additionStubs.paymentDate[count]);
        if (count === 1 && typeof $(this).data('template-pdf') !== 'undefined' && $(this).data('template-pdf') === 'advanced4') {
            var array = stubs.additionStubs.paymentPeriodDate[count].split(' - ');
            $('#paymentPeriodDateBegin').val(array[0]);
            $('#paymentPeriodDateEnd').val(array[1]);
        } else {
            $('#paymentPeriodDate' + t).val(stubs.additionStubs.paymentPeriodDate[count]);
        }

    });

    $('.readonly').each(function() {
        $(this).attr('readonly', true);
    });

    $('select#switchCalcul').on('change', function() {
        stubs.switchCalculator($(this).val());
    });

    $('.addtext')
        .on('focus', function() {
            if ($(this).val() === $(this).attr('data-val')) {
                $(this).val('');
            }
        })
        .on('blur', function() {
            if ($(this).val() === '') {
                $(this).val($(this).attr('data-val'));
            }
        });
    $('#stubNumber').on('change', function() {
        var value = Number($(this).val());
        if (value) {
            stubs.updateStubNumbers(value);
        } else {
            $('#stubNumber').val('');
        }
    });

    $('select#paymentPeriod').on('change', function() {
        stubs.updatePaymentPeriod($(this).val());
        stubs.calculate();
    });
    $('select#state').on('change', function() {
        stubs.updateState($(this).val());
        stubs.calculate();
    });
    $('select#maritalStatus').on('change', function() {
        stubs.updateMaritalStatus($(this).val());
        stubs.calculate();
    });
    $('select#exemptions').on('change', function() {
        stubs.updateExemptions($(this).val());
        stubs.calculate();
    });
    $('select#paymentPeriodAmounts').on('change', function() {
        stubs.updatePaymentPeriodAmount($(this).val());
        stubs.calculate('', $(this).attr('id'));
    });
    $('input.paymentPeriodDate').on('change', function() {
        var refreshElementId = $(this).attr('id');
        var pattern = /(paymentPeriodDate)([0-9]{1,2})/;
        var regArray = pattern.exec(refreshElementId);
        if (regArray) {
            var count = regArray[2];
        } else {
            var count = 1;
        }
        stubs.additionStubs.paymentPeriodDate[count] = $(this).val();
    });
    $('input[name="stubs[header][contractorStatus]"]').on('change', function() {
        $('input[name="stubs[header][contractorStatus]"]').parent().toggleClass('active');
        stubs.updateContractorStatus();
        stubs.calculate('updateContractor');
    });
    $('input[name="stubs[header][paymentTypes]"]').on('change', function() {
        $('input[name="stubs[header][paymentTypes]"]').parent().toggleClass('active');
        stubs.updatePaymentTypes($('input[name="stubs[header][paymentTypes]"]:checked').val());
        stubs.calculate();
    });
    $('#otherfield').on('click', function() {
        if ($('#otherfield').is(":checked")) {
            $('.optionalfield').show();
            stubs.otherfield = 1;
        } else {
            stubs.otherfield = 0;
            $('#optionalfield').val('');
            $('.optionalfield').hide();
            stubs.currentTaxAdvance.optional.rate = stubs.round(0);
            stubs.currentTaxAdvance.optional.period = 0;
        }
        stubs.calculate();
    });

    $('.add_field').on('click', function() {

        var maxFields = 4;
        var countFields = $('#stub_wizard_tab_2 .custom_field table tr').length;
        var allFields = $('#stub_wizard_tab_2 .custom_field table tr');
        var table = document.getElementById("customFieldsTable");
        var errorAdded = false;
        var element_created = {
            'customField1': 'FALSE',
            'customField2': 'FALSE',
            'customField3': 'FALSE',
            'customField4': 'FALSE'
        };

        var i = 0;
        if (countFields < maxFields) {

            $.each(allFields, function(index, element) {
                var numberElement = element.getAttribute('data-element');
                var item = '#customField' + numberElement + 'name';
                element_created['customField' + numberElement] = 'TRUE';
                if (!$(item).val().length) {
                    errorAdded = true;
                    $(item).css('border-color', 'red');
                    return false;
                } else {
                    $(item).css('border-color', 'black');
                }
                i++;
            });

            if (!errorAdded) {
                i++;
                var number;
                $.each(element_created, function(index, element) {
                    if (element === "FALSE") {
                        number = index;
                    }
                });

                var div = document.createElement('div');
                div.className = "delete_field";
                div.setAttribute("data-iditem", number);
                div.setAttribute('style', 'position: absolute;')
                div.innerHTML = '<div class="delete_field_body"><i class="fa fa-minus" aria-hidden="true"></i></div>';

                var nameField = document.createElement("INPUT");
                nameField.setAttribute("type", "text");
                nameField.setAttribute("name", "stubs[header][" + number + "name]");
                nameField.setAttribute("id", number + "name");
                nameField.setAttribute("placeholder", "New field");

                var payrate = document.createElement("INPUT");
                payrate.setAttribute("type", "text");
                payrate.setAttribute("name", "stubs[header][" + number + "rate]");
                payrate.setAttribute("id", number + "rate");
                payrate.setAttribute("class", "refreshrate rate");
                payrate.setAttribute("value", "0.00");

                var payhours = document.createElement("INPUT")
                payhours.setAttribute("type", "text");
                payhours.setAttribute("name", "stubs[header][" + number + "hours]");
                payhours.setAttribute("id", number + "hours");
                payhours.setAttribute("class", "advhours");
                payhours.setAttribute("value", "0.00");

                var payytd = document.createElement("INPUT");
                payytd.setAttribute("type", "text");
                payytd.setAttribute("name", "stubs[header][" + number + "this]");
                payytd.setAttribute("id", number + "this");
                payytd.setAttribute("class", "readonly center-line-up refreshthis");
                payytd.setAttribute("value", "0.00");
                payytd.setAttribute("style", "width: 100%;");


                var row = table.insertRow(countFields);
                row.setAttribute('data-element', number.replace(/\D+/g, ""));
                row.setAttribute('style', 'position: relative;')
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);

                cell1.appendChild(div);
                cell1.appendChild(nameField);
                cell2.appendChild(payrate);
                cell3.innerHTML = '';
                cell4.appendChild(payhours);
                cell5.appendChild(payytd);

                if (i == maxFields) {
                    $(this).hide();
                }
            }

        } else {
            $(this).hide();
        }
    });

    $('.add_field_deduction').on('click', function() {
        var maxFields = 2;
        var countFields = $('#stub_wizard_tab_2 .deduction_tabel table#additional_deductions_table tr').length;
        var allFields = $('#stub_wizard_tab_2 #additional_deductions_table tr');
        var table = document.getElementById("additional_deductions_table");
        var errorAdded = false;
        var element_created = {
            'deductioncustom1': 'FALSE',
            'deductioncustom2': 'FALSE'
        };

        var i = 0;

        if (countFields < maxFields) {

            $.each(allFields, function(index, element) {
                var numberElement = element.getAttribute('data-element');
                var item = '#deductioncustom' + numberElement + 'field';
                element_created['deductioncustom' + numberElement] = 'TRUE';
                if (!$(item).val().length) {
                    errorAdded = true;
                    $(item).css('border-color', 'red');
                    return false;
                } else {
                    $(item).css('border-color', 'black');
                }
                i++;
            });

            if (!errorAdded) {
                i++;
                var number;
                $.each(element_created, function(index, element) {
                    if (element === "FALSE") {
                        number = index;
                    }
                });

                var div = document.createElement('div');
                div.className = "delete_field_deduction";
                div.setAttribute("data-iditem", number);
                div.setAttribute('style', 'position: absolute;')
                div.innerHTML = '<div class="delete_field_body"><i class="fa fa-minus" aria-hidden="true"></i></div>';

                var nameField = document.createElement("INPUT");
                nameField.setAttribute("type", "text");
                nameField.setAttribute("name", "stubs[header][" + number + "field]");
                nameField.setAttribute("id", number + "field");
                nameField.setAttribute("maxlength", "22");
                nameField.setAttribute("class", "deductioncustom" + number + "field");
                nameField.setAttribute("placeholder", "New field");
                nameField.setAttribute("style", "width:90%;");

                var payrate = document.createElement("INPUT");
                payrate.setAttribute("type", "text");
                payrate.setAttribute("name", "stubs[header][" + number + "rate]");
                payrate.setAttribute("id", number + "rate");
                payrate.setAttribute("class", "refreshrate center-line-up");
                payrate.setAttribute("value", "0.00");

                var payytd = document.createElement("INPUT")
                payytd.setAttribute("type", "text");
                payytd.setAttribute("name", "stubs[stub][1][" + number + "ytd]");
                payytd.setAttribute("id", number + "ytd");
                payytd.setAttribute("class", "readonly refreshable");
                payytd.setAttribute("value", "0.00");

                var row = table.insertRow(countFields);
                row.setAttribute('data-element', number.replace(/\D+/g, ""));
                row.setAttribute('style', 'position: relative;')
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);

                cell1.appendChild(div);
                cell1.appendChild(nameField);
                cell1.setAttribute('width', '36%');
                cell2.appendChild(payrate);
                cell3.appendChild(payytd);

                if (i == maxFields) {
                    $(this).hide();
                }
            }

        } else {
            $(this).hide();
        }
    });
    $(document).on('click', '.delete_field_deduction', function() {
        var iditem = $(this).data('iditem');
        stubs.currentTaxAdvance[iditem].rate = '0.00';
        stubs.calculate();
        $(this).parents()[1].remove();
        $('.add_field_deduction').show();
    });
    $(document).on('click', '.delete_field', function() {
        var iditem = $(this).data('iditem');
        stubs.currentAdvance[iditem].rate = '0.00';
        stubs.calculate();
        $(this).parents()[1].remove();
        $('.add_field').show();
    });

    $('select#stubsAmount').on('change', function() {
        stubs.updateStubsAmount($(this).val());
        stubs.calculate('changeStubsAmount');
    });

    $('select.period, select.period2').on('change', function() {
        var refreshElementId = $(this).attr('id');
        var pattern = /(\w*)(period)/;
        var regArray = pattern.exec(refreshElementId);
        if (regArray && regArray[1]) {
            regArray = regArray[1];
        }
        if (regArray && typeof stubs.currentAdvance[regArray] !== 'undefined') {
            stubs.currentAdvance[regArray].period = $(this).val();
        } else if (regArray && typeof stubs.currentTaxAdvance[regArray] !== 'undefined') {
            stubs.currentTaxAdvance[regArray].period = $(this).val();
        }
        stubs.calculate();
    });

    $('#extendedBtn').on('click', function() {
        $(this).toggleClass('active');
        stubs.updateExtendedStatus();
    });

    $('#backgroundBtn').on('click', function() {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            // $('#background').val(1);
            $('#change_template select').prop("disabled", false);
        } else {
            $('#background').val(0);
            $("#change_template select").prop('selectedIndex', 0).change();
            $('#change_template select').prop("disabled", true);
        }
    });

    $('#change_template select').on('change', function(e) {
        var text = $("#change_template select option:selected").text();
        if (text === 'Default') {
            $('#background').val(0);
        } else {
            $('#background').val(1);
        }
        $("#temp").css("background", "url(/images/quality/" + $(this).val() + ") no-repeat");
    });

    $('.extended').on('change', function() {
        var refreshElementId = $(this).attr('id');
        var pattern = /(extended)([0-9]{1,2})/;
        var regArray = pattern.exec(refreshElementId);
        if (regArray && regArray[2]) {
            stubs.updateExtendedStatus(regArray[2]);
        }
    });
    $('.addtext2')
        .each(function() {
            stubs.updateExtendedInfo($(this).attr('id'));
        })
        .on('change input', function() {
            stubs.updateExtendedInfo($(this).attr('id'));
        });

    $('#ssn-format, #pre-ssn-format').on('change', function() {
        var is_entireFormat = $(this).is(':checked');
        if (is_entireFormat) {
            $('input#ssn, input#pre-ssn').attr('data-val', '123-45-6789').formatter().resetPattern('{{***}}-{{**}}-{{9999}}');
        } else {
            $('input#ssn, input#pre-ssn').attr('data-val', 'XXX-XX-1234').formatter().resetPattern('XXX-XX-{{9999}}');
        }
    });

    if ($('#ssn-format').is(':checked')) {
        $('input#ssn, input#pre-ssn').formatter({
            'pattern': '{{***}}-{{**}}-{{9999}}'
        });
    } else {
        $('input#ssn, input#pre-ssn').formatter({
            'pattern': 'XXX-XX-{{9999}}'
        });
    }
    $('input#taxid').formatter({
        'pattern': '{{99}}-{{9999999}}'
    });

    $('input#ssn, input#pre-ssn')
        .on('blur', function() {
            var $field = $(this);
            var is_entireFormat = $('#' + $field.attr('id') + '-format').is(':checked');
            if (is_entireFormat) {
                if ($field.val() === '') {
                    $field.val('XXX-XX-1234');
                }
            } else {
                if ($field.val() === 'XXX-XX-') {
                    $field.val('XXX-XX-1234');
                }
            }
        })

    $(document).on('change input', '.deductionotherfield', function() {
        var text_fild = $(this).val();
        $('.repidedeductionotherfield').html(text_fild);
    });


    $(document).on('change input', 'input.refreshrate[type="text"]', function(event) {
        var refreshElementId = $(this).attr('id');
        var refreshElementVal = $(this).val();
        refreshElementVal = stubs.inputTextPattern(refreshElementId, refreshElementVal);
        if (event.type === 'change') {
            refreshElementVal = stubs.round(refreshElementVal);
        }
        var pattern = /(\w*)(rate)/;
        var regArray = pattern.exec(refreshElementId);
        if (regArray && regArray[1]) {
            regArray = regArray[1];
        }
        if (regArray && typeof stubs.currentAdvance[regArray] !== 'undefined') {
            stubs.currentAdvance[regArray].rate = refreshElementVal;
        } else if (regArray && typeof stubs.currentTaxAdvance[regArray] !== 'undefined') {
            stubs.currentTaxAdvance[regArray].rate = refreshElementVal;
        } else if (regArray && typeof stubs.currentTax[regArray] !== 'undefined') {
            stubs.currentTax[regArray].rate = refreshElementVal;
        }
        stubs.calculate(event.type, refreshElementId);
    });

    $('input.refreshthis[type="text"]').on('change input', function(event) {
        if ($(this).attr('readonly') != 'readonly') {
            var refreshElementId = $(this).attr('id');
            var refreshElementVal = $(this).val();
            refreshElementVal = stubs.inputTextPattern(refreshElementId, refreshElementVal);
            if (event.type === 'change') {
                refreshElementVal = stubs.round(refreshElementVal);
            }
            var pattern = /(\w*)(this)/;
            var regArray = pattern.exec(refreshElementId);
            if (regArray && regArray[1]) {
                regArray = regArray[1];
            }
            if (regArray && typeof stubs.currentAdvance[regArray] !== 'undefined') {
                stubs.currentAdvance[regArray].this = refreshElementVal;
            }
        }
        stubs.calculate(event.type, refreshElementId);
    });

    $('input.refreshable[type="text"]').on('change input', function(event) {
        var template = $('input[name="stubs[template]"]').val();
        if ($(this).attr('readonly') != 'readonly') {
            var refreshElementId = $(this).attr('id');
            var refreshElementVal = $(this).val();

            if (template === 'advanced4') {
                $('#currentpayrate').val(stubs.round(refreshElementVal));
            }

            refreshElementVal = stubs.inputTextPattern(refreshElementId, refreshElementVal);
            if (event.type === 'change') {
                refreshElementVal = stubs.round(refreshElementVal);
            }
            if (typeof stubs.current[refreshElementId] !== 'undefined') {
                stubs.current[refreshElementId] = refreshElementVal;
            } else if (typeof stubs.additionStubs[refreshElementId] !== 'undefined' && typeof stubs.additionStubs[refreshElementId][1] !== 'undefined') {
                stubs.additionStubs[refreshElementId][1] = refreshElementVal;
            }

            if (stubs.advanced) {
                if (typeof stubs.additionStubsAdvance[refreshElementId] !== 'undefined' && typeof stubs.additionStubsAdvance[refreshElementId][1] !== 'undefined') {
                    stubs.additionStubsAdvance[refreshElementId][1] = refreshElementVal;
                }
                var pattern = /(\w*)(ytd)/;
                var regArray = pattern.exec(refreshElementId);
                if (regArray && regArray[1]) {
                    regArray = regArray[1];
                }
                if (regArray && typeof stubs.currentTaxAdvance[regArray] !== 'undefined') {
                    stubs.currentTaxAdvance[regArray].ytd[1] = refreshElementVal;
                }


                if (refreshElementId === 'payrate') {
                    stubs.currentAdvance.overtime.rate = stubs.round(Number(stubs.current[refreshElementId]) * 1.5);
                }
            }
            stubs.calculate(event.type, refreshElementId);
        }
    });

    $(document).on('change input', 'input.payhours[type="text"], input.advhours[type="text"]', function(event) {
        var refreshElementId = $(this).attr('id');
        var refreshElementVal = $(this).val();
        refreshElementVal = stubs.inputTextPattern(refreshElementId, refreshElementVal);
        if ($(this).hasClass('payhours')) {
            var pattern = /payhours(([0-9]{1,2})|((def){1}))/;
        } else {
            var pattern = /(\w*)(hours)/;
        }
        if (stubs.advanced && event.type === 'change') {
            refreshElementVal = stubs.round(refreshElementVal);
        }
        var regArray = pattern.exec(refreshElementId);
        if (regArray && regArray[1]) {
            regArray = regArray[1];
        } else {
            regArray = 1;
        }

        if (regArray && typeof stubs.additionStubs.payhours[regArray] !== 'undefined') {
            stubs.additionStubs.payhours[regArray] = refreshElementVal;
        } else if (regArray && typeof stubs.currentAdvance[regArray] !== 'undefined') {
            stubs.currentAdvance[regArray].hours = refreshElementVal;
        }
        stubs.calculate(event.type, 'payhours');
    });
});