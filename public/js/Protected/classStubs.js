/*
 * @returns {Stubs}
 */
function Stubs () {
    this.switchCal = true;

    this.dateFormat = 'MM-DD-YYYY';
    this.exemptionsAmount = 9;
    this.maxStubsAmount = 12;
    this.paymentPeriodAmount = 0;
    this.advanced = false;
    this.otherfield = 0;

    this.paymentTypes = {
        'hourly': 'Hourly',
        'salary': 'Salary'
    };

    this.maritalStatus = {
        'Single': 'Single',
        'Married': 'Married'
    };

    this.templateBackgroundModern3 = {
        'modern3_w.jpg' : 'Default',
        'modern3_bg1_w.jpg' : 'Template 1(+2.00)',
        'modern3_bg2_w.jpg' : 'Template 2(+2.00)',
        'modern3_bg3_w.jpg' : 'Template 3(+2.00)',
        'modern3_bg4_w.jpg' : 'Template 4(+2.00)'
    };

    this.templateBackgroundModern2 = {
        'modern2_w.jpg' : 'Default',
        'modern2_bg1_w.jpg' : 'Template 1(+2.00)',
        'modern2_bg2_w.jpg' : 'Template 2(+2.00)',
        'modern2_bg3_w.jpg' : 'Template 3(+2.00)',
        'modern2_bg4_w.jpg' : 'Template 3(+2.00)',
    };

    this.templateBackgroundAdvanced4 = {
        'advanced4_w.jpg' : 'Default',
        'advanced4_bg1_w.jpg' : 'Template 1(+2.00)',
        'advanced4_bg2_w.jpg' : 'Template 2(+2.00)',
        'advanced4_bg3_w.jpg' : 'Template 3(+2.00)',
        'advanced4_bg4_w.jpg' : 'Template 4(+2.00)'
    };

    this.templateBackgroundAdvanced5 = {
        'advanced5_w.jpg' : 'Default',
        'advanced5_bg1_w.jpg' : 'Template 1(+2.00)',
        'advanced5_bg2_w.jpg' : 'Template 2(+2.00)',
        'advanced5_bg3_w.jpg' : 'Template 3(+2.00)',
        'advanced5_bg4_w.jpg' : 'Template 4(+2.00)'
    };
    

    this.periodList = {
        'weekly': {
            'key': 'weekly',
            'name': 'Weekly',
            'amount': 52,
            'hourMultiplier': 1,
            'string': 'days',
            'number': 7
        },
        'biweekly': {
            'key': 'biweekly',
            'name': 'Biweekly',
            'amount': 26,
            'hourMultiplier': 2,
            'string': 'days',
            'number': 14
        },
        'semimonthly': {
            'key': 'semimonthly',
            'name': 'Semimonthly',
            'amount': 24,
            'hourMultiplier': 2,
            'string': 'days',
            'number': 15.5
        },
        'monthly': {
            'key': 'monthly',
            'name': 'Monthly',
            'amount': 12,
            'hourMultiplier': 4,
            'string': 'month',
            'number': 1
        },
        'annually': {
            'key': 'annually',
            'name': 'Annually',
            'amount': 1,
            'hourMultiplier': 1,
            'string': 'year',
            'number': 1
        }
    };

    this.current = {
        'stubsAmount': 1,
        'type': 'hourly',
        'period': this.periodList.weekly,
        'periodAmount': 0,
        'state': {
            'state': 'Select a State',
            'abbr': '',
            'tax': 0.00
        },
        'federalTaxOptions': {'subtract': '160.00', 'rate': '0.1'},
        'marital': 'Single',
        'exemptions': 0,
        'contractor': 0,
        'payrate': 11.47,
        'annual': '0.00'
    };

    this.currentAdvance = {
        'overtime': {
            'rate': '17.21',
            'hours': '40.00',
            'period': 0,
            'this': '0.00'
        },
        'holiday': {
            'rate': '0.00',
            'hours': '40.00',
            'period': 0,
            'this': '0.00'
        },
        'vacation': {
            'rate': '11.47',
            'hours': '40.00',
            'period': 0,
            'this': '0.00'
        },
        'bonus': {
            'rate': '0.00',
            'hours': '40.00',
            'period': 0,
            'this': '0.00'
        },
        'float': {
            'rate': '0.00',
            'hours': '40.00',
            'period': 0,
            'this': '0.00'
        },
        'customField1': {
            'rate': '0.00',
            'hours': '40.00',
            'period': 0,
            'this': '0.00'
        },
        'customField2': {
            'rate': '0.00',
            'hours': '40.00',
            'period': 0,
            'this': '0.00'
        },
        'customField3': {
            'rate': '0.00',
            'hours': '40.00',
            'period': 0,
            'this': '0.00'
        }
        ,
        'customField4': {
            'rate': '0.00',
            'hours': '40.00',
            'period': 0,
            'this': '0.00'
        }
    };

    this.additionStubs = {
        'extended': {
            '1': 0,
            '2': 0,
            '3': 0,
            '4': 0,
            '5': 0,
            '6': 0,
            '7': 0,
            '8': 0,
            '9': 0,
            '10': 0,
            '11': 0,
            '12': 0,
        },
        'stubNumber': {
            '1': 10015,
            '2': '',
            '3': '',
            '4': '',
            '5': '',
            '6': '',
            '7': '',
            '8': '',
            '9': '',
            '10': '',
            '11': '',
            '12': '',
        },
        'paymentDate': {
            '1': moment().format('L'),
            '2': '',
            '3': '',
            '4': '',
            '5': '',
            '6': '',
            '7': '',
            '8': '',
            '9': '',
            '10': '',
            '11': '',
            '12': '',
            'def': '',
        },
        'paymentPeriodDate': {
            '1': '',
            '2': '',
            '3': '',
            '4': '',
            '5': '',
            '6': '',
            '7': '',
            '8': '',
            '9': '',
            '10': '',
            '11': '',
            '12': '',
            'def': '',
        },
        'payhours': {
            '1': 40,
            '2': 40,
            '3': 40,
            '4': 40,
            '5': 40,
            '6': 40,
            '7': 40,
            '8': 40,
            '9': 40,
            '10': 40,
            '11': 40,
            '12': 40,
            'def': 40,
        },
        'paythis': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ficamedtax': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ficasstax': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ficafedtax': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'sttax': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'casditax': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'total': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'deductions': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'netpay': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ytdficamedtax': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ytdficasstax': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ytdficafedtax': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ytdsttax': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ytdcasditax': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ytdtotal': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ytddeductions': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ytdnetpay': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'periodAmount': {
            'def': 0
        }
    };

    this.additionStubsAdvance = {
        'payytd':{
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'overtimeytd': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'holidayytd': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'vacationytd': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'bonusytd': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'floatytd': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'customField1ytd': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'customField2ytd': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'customField3ytd': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'customField4ytd': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'deductiontotal': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'totalhourswork': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        },
        'ytdtotalhourswork': {
            '1': '0.00',
            '2': '0.00',
            '3': '0.00',
            '4': '0.00',
            '5': '0.00',
            '6': '0.00',
            '7': '0.00',
            '8': '0.00',
            '9': '0.00',
            '10': '0.00',
            '11': '0.00',
            '12': '0.00',
            'def': '0.00',
        }
    };

    this.currentTax ={
        'deductionother': {
            'rate': '0.00',
            'period': 0,
            'ytd': {
                '1': '0.00',
                '2': '0.00',
                '3': '0.00',
                '4': '0.00',
                '5': '0.00',
                '6': '0.00',
                '7': '0.00',
                '8': '0.00',
                '9': '0.00',
                '10': '0.00',
                '11': '0.00',
                '12': '0.00',
                'def': '0.00',
            }
        }
    }

    this.currentTaxAdvance = {
        'optional': {
            'rate': '0.00',
            'period': 0,
            'ytd': {
                '1': '0.00',
                '2': '0.00',
                '3': '0.00',
                '4': '0.00',
                '5': '0.00',
                '6': '0.00',
                '7': '0.00',
                '8': '0.00',
                '9': '0.00',
                '10': '0.00',
                '11': '0.00',
                '12': '0.00',
                'def': '0.00',
            }
        },
        'childsup': {
            'rate': '0.00',
            'period': 0,
            'ytd': {
                '1': '0.00',
                '2': '0.00',
                '3': '0.00',
                '4': '0.00',
                '5': '0.00',
                '6': '0.00',
                '7': '0.00',
                '8': '0.00',
                '9': '0.00',
                '10': '0.00',
                '11': '0.00',
                '12': '0.00',
                'def': '0.00',
            }
        },
        'medical': {
            'rate': '0.00',
            'period': 0,
            'ytd': {
                '1': '0.00',
                '2': '0.00',
                '3': '0.00',
                '4': '0.00',
                '5': '0.00',
                '6': '0.00',
                '7': '0.00',
                '8': '0.00',
                '9': '0.00',
                '10': '0.00',
                '11': '0.00',
                '12': '0.00',
                'def': '0.00',
            }
        },
        'retire': {
            'rate': '0.00',
            'period': 0,
            'ytd': {
                '1': '0.00',
                '2': '0.00',
                '3': '0.00',
                '4': '0.00',
                '5': '0.00',
                '6': '0.00',
                '7': '0.00',
                '8': '0.00',
                '9': '0.00',
                '10': '0.00',
                '11': '0.00',
                '12': '0.00',
                'def': '0.00',
            }
        },
        'deductioncustom1': {
            'rate': '0.00',
            'period': 0,
            'ytd': {
                '1': '0.00',
                '2': '0.00',
                '3': '0.00',
                '4': '0.00',
                '5': '0.00',
                '6': '0.00',
                '7': '0.00',
                '8': '0.00',
                '9': '0.00',
                '10': '0.00',
                '11': '0.00',
                '12': '0.00',
                'def': '0.00',
            }
        },
        'deductioncustom2': {
            'rate': '0.00',
            'period': 0,
            'ytd': {
                '1': '0.00',
                '2': '0.00',
                '3': '0.00',
                '4': '0.00',
                '5': '0.00',
                '6': '0.00',
                '7': '0.00',
                '8': '0.00',
                '9': '0.00',
                '10': '0.00',
                '11': '0.00',
                '12': '0.00',
                'def': '0.00',
            }
        },
    };

    this.getFederalTaxOptions = function () {
        var resultOptions = {'subtract': '160.00', 'rate': '0.1'};
        var taxesObj = new Taxes();
        var taxOptions = taxesObj.taxesList[this.current.period.key][this.current.marital][this.current.exemptions];
        for (var index in taxOptions) {
            if (this.additionStubs.total[1] > parseFloat(index)) {
                resultOptions = taxOptions[index];
            } else {
                break;
            }
        }
        this.current.federalTaxOptions = resultOptions;
    };

    this.getPrewPaymentDate = function (inputDateF) {
        var inputDate = new Date(inputDateF);
        var prewPaymentDate = false;
        if (this.current.period && typeof this.current.period === 'object') {
            prewPaymentDate = moment(inputDate).subtract(this.current.period.number,this.current.period.string).format('L');
        }
        return prewPaymentDate;
    };

    this.getPaymentDatePeriod = function (inputDateF) {
        var inputDate = new Date(inputDateF);
        var PaymentDatePeriod = false;
        if (this.current.period && typeof this.current.period === 'object') {
            if (this.current.period.key === 'weekly') {
                PaymentDatePeriod = moment(inputDate).subtract(6+2, 'days').format('L') + ' - ' + moment(inputDate).subtract(2, 'days').format('L');
            } else if (this.current.period.key === 'biweekly') {
                PaymentDatePeriod = moment(inputDate).subtract(14+2, 'days').format('L') + ' - ' + moment(inputDate).subtract(3, 'days').format('L');
            } else if (this.current.period.key === 'monthly') {
                PaymentDatePeriod = moment(inputDate).subtract(1, 'month').subtract(2, 'days').format('L') + ' - ' + moment(inputDate).subtract(3, 'days').format('L');
            } else if (this.current.period.key === 'semimonthly') {
                PaymentDatePeriod = moment(inputDate).subtract(15.5+2, 'days').format('L') + ' - ' + moment(inputDate).subtract(3, 'days').format('L');
            } else if (this.current.period.key === 'annually') {
                PaymentDatePeriod = moment(inputDate).subtract(1, 'year').format('L') + ' - ' + moment(inputDate).subtract(3, 'days').format('L');
            }
        }
        return PaymentDatePeriod;
    };

    this.advanceInit();
    this.generateSelect();
    this.addDefaultInfoText();
    this.additionStubs.paymentPeriodDate[1] = this.getPaymentDatePeriod(this.additionStubs.paymentDate[1]);
    this.generateAmountInputSet();

    this.calculate();
}

Stubs.prototype.advanceInit = function () {
    if ($('#overtimerate').length > 0) {
        this.advanced = true;
        for (var i = 1; i <= this.maxStubsAmount; i++) {
            this.additionStubs.payhours[i]  = this.round(this.additionStubs.payhours[i]);
        }
    }
};

Stubs.prototype.inputTextPattern = function (idElement, valElement) {
    var pattern = /^[0-9][0-9]*\.{0,1}[0-9]{0,2}/g;
    valElement = pattern.exec(valElement);
    if ( valElement === null) {
        valElement = 0;
    } else {
        valElement = valElement[0] || 0;
    }
    if(valElement !== 0) {
        $('#' + idElement).val(valElement);
    }
    return valElement;
};

Stubs.prototype.round = function (value) {
    return (Math.round((Number(value))*100)/100).toFixed(2);
};

Stubs.prototype.addDefaultInfoText = function () {
    $('#stubNumber').val(this.additionStubs.stubNumber[1]);
    if ($('#payrate').val().length != 0) {
        if (this.round($('#payrate').val())) {
            this.current.payrate = this.round($('#payrate').val());
        }
    }
    if ($('#paymentPeriod').val() !== 'weekly') {
        this.updatePaymentPeriod($('#paymentPeriod').val());
    }
    $('.addtext').each(function () {
        var placeholder = $(this).attr('placeholder');
        $(this).attr('data-val', placeholder);
    });
    $('.ext_div').each(function () {
        $(this).attr('data-old', $(this).text());
    });
};

//Select
Stubs.prototype.state = function () {
    var resultStates = {};
    var stateObj = new States();
    for (var i in stateObj.stateList) {
        resultStates[i] = stateObj.stateList[i].state;
    };
    return resultStates;
};

Stubs.prototype.paymentPeriod = function () {
    var resultPeriod = {};
    for (var i in this.periodList) {
        resultPeriod[i] = this.periodList[i].name;
    };
    return resultPeriod;
};

Stubs.prototype.stubsAmount = function () {
    var resultStubsAmount = [];
    for (var i = 1; i <= this.maxStubsAmount; i++) {
        resultStubsAmount.push(i);
    }
    return resultStubsAmount;
};

Stubs.prototype.exemptions = function () {
    var resultExemptions = [];
    for (var i = 0; i <= this.exemptionsAmount; i++) {
        resultExemptions.push(i);
    }
    return resultExemptions;
};

Stubs.prototype.switchCalcul = function () {
    return {
        'on' : 'Auto-Calculator ON',
        'off' : 'Turn OFF Auto-Calculator'
    };
};

Stubs.prototype.paymentPeriodAmounts = function () {
    var resultPeriodAmounts = [];
    resultPeriodAmounts.push('');
    for (var i = 1, len = this.current.period.amount; i <= len; i++) {
        resultPeriodAmounts.push(i);
    };
    return resultPeriodAmounts;
};

Stubs.prototype.generateSelect = function (id) {
    var _this = this;
    var id = id ? '#' + id : '';

    $('select' + id).each(function () {
        var $select = $(this);
        var id = $select.attr('id');

        var selected = $select.data('selected') || null;
        var options;
        if ($select.hasClass('pre-select')) {
            var pattern = /(pre-)([A-z]*)/;
            var regArray = pattern.exec(id);
            if (regArray) {
                id = regArray[2];
            }
        }
        if (_this[id] && typeof _this[id] === 'object') {
            options = _this[id];
        } else if (_this[id] && typeof _this[id] === 'function') {
            options = _this[id]();
        } else if ($select.hasClass('period') || $select.hasClass('period2')) {
            options = _this.paymentPeriodAmounts();
        } else {
            return false;
        }

        $select.html('');

        var template = $('input[name="stubs[template]"]').val();

        for (var i in options) {
            var option = $("<option>", { value: i, html: options[i]});
            if (i === selected) {
                option.attr('selected', true);
            }
            $select.append(option);
        };

    });
};

Stubs.prototype.generatePeriodSelect = function () {
    var options = this.paymentPeriodAmounts();
    $('select.period, select.period2').each(function () {
        var $selectCopy = $(this);
        $selectCopy.html('');
        for (var i in options) {
            $selectCopy.append($("<option>", { value: i, html: options[i] }));
        };
    });
};
//Select

Stubs.prototype.toggleStateTaxes = function () {
    var _this = this;
    var labelState = _this.current.state.abbr + ' State Tax';
    $('#stateAbbrId').text(labelState);
    $('#abbrState').val(labelState);
    if (_this.current.state.tax === 0) {
        $('.state_tr').addClass('state_tr_hide');
        $('.state_tr_hide input').each(function (){
            $(this).attr('disabled','disabled');
        });
    } else {
        $('.state_tr').removeClass('state_tr_hide');
        $('.state_tr input').each(function (){
            $(this).removeAttr('disabled');
        });
    }
    if(_this.current.state.abbr === 'CA') {
        $('.casdi_tr').removeClass('casdi_tr_hide');
        $('.casdi_tr_hide input').each(function (){
            $(this).attr('disabled','disabled');
        });
    } else {
        $('.casdi_tr').addClass('casdi_tr_hide');
        $('.casdi_tr input').each(function (){
            $(this).removeAttr('disabled');
        });
    }
};

Stubs.prototype.toggleExtendForm = function (toggle) {
    $('#extended').val(this.additionStubs.extended[1]);
    if (toggle) {
        $('#temp').removeClass('temp_easy').addClass('temp_ext');
        $('#extendform').show();

    } else {
        $('#temp').removeClass('temp_ext').addClass('temp_easy');
        $('#extendform').hide();
    }
};

/* Method is called when updated paymentPeriod
 * @param string period
 * - update this.current.period
 * - generate select 'paymentPeriodAmounts'
 * - generate all select.period on advanced template
 * - update PaymentPeriodAmount with value = 0
 * - update all PaymentDate (expect [1]) and all PaymentPeriod
 * - update all PayHours
 * - if paymentType Salary - update Annual and Paythis
  */
Stubs.prototype.updatePaymentPeriod = function (period) {
    var oldPeriod = this.current.period;
    this.current.period = this.periodList[period];
    this.generateSelect('paymentPeriodAmounts');
    this.generatePeriodSelect();
    this.updatePaymentPeriodAmount(0);
    for (var i = 1; i <= this.maxStubsAmount; i++) {
        this.setPaymentDate(i);
        this.setPayHours(i, oldPeriod);
    }
    this.setPayHoursAdvance(oldPeriod);
    this.setPaymentDate('def');
    this.setPayHours('def', oldPeriod);
    /*if (this.current.type === 'salary') {
        this.calculateAnnualPayment(oldPeriod);
    }*/
};

/*
 * Method is called when updated State
 * @param string state
 * - update this.current.state
 * - toggle State field if tax == 0 or state = california
 */
Stubs.prototype.updateState = function (state) {
    var stateObj = new States();
    this.current.state = stateObj.stateList[state];
    this.toggleStateTaxes();
};

/*
 * Method is called when updated MaritalStatus
 * @param string status
 * - update this.current.marital
 */
Stubs.prototype.updateMaritalStatus = function (status) {
    this.current.marital = this.maritalStatus[status];
};

/*
 * Method is called when updated Exemptions
 * @param string val
 * - update this.current.exemptions
 */
Stubs.prototype.updateExemptions = function (val) {
    this.current.exemptions = val;
};

/*
 * Method is called when updated PaymentPeriodAmount
 * @param integer val
 * - update this.current.paymentPeriodAmount
 * - generate periodAmount in main stub if(val > 0) periodAmount = defperiodAmount
 * - generate periodAmount in default stub
 */
Stubs.prototype.updatePaymentPeriodAmount = function (val) {
    if (val || val === 0) {
        this.paymentPeriodAmount = val;
    }
    if (Number(this.paymentPeriodAmount) === 0) {
        this.current.periodAmount = this.generatePaymentPeriodAmount();
    } else {
        this.current.periodAmount = this.paymentPeriodAmount;
    }
    if (this.current.stubsAmount > 1) {
        this.additionStubs.periodAmount.def = this.generateDefPaymentPeriodAmount();
    } else {
        this.additionStubs.periodAmount.def = 0;
    }
    if (val === 0) {
        for (var aField in this.currentAdvance) {
            this.currentAdvance[aField].period = 0;
        }
        for (var aField in this.currentTaxAdvance) {
            this.currentTaxAdvance[aField].period = 0;
        }
        for (var aField in this.currentTax) {
            this.currentTax[aField].period = 0;
        }
    }
};

/*
 * Method is called when updated Contractor
 * - update this.current.contractor
 * - change Employee <-> Contractor
 */
Stubs.prototype.updateContractorStatus = function () {
    if (this.current.contractor === 0) {
        this.current.contractor = 1;
        $('.employee_word').text('Contractor');
    } else {
        this.current.contractor = 0;
        $('.employee_word').text('Employee');
    }
};

/*
 * Method is called when choose extended stub format
 * @param int stubNumb
 * - update this.additionStubs.extended[stubNumb]
 * - show or hide extend form toggleExtendForm()
 * - update information in extend form
 */
Stubs.prototype.updateExtendedStatus = function (stubNumb) {
    stubNumb = stubNumb || 1;
    var showExtendForm = false;
    if (this.additionStubs.extended[stubNumb] === 0) {
        this.additionStubs.extended[stubNumb] = 1;
        showExtendForm = true;
    } else {
        this.additionStubs.extended[stubNumb] = 0;
    }
    if (stubNumb === 1) {
        this.toggleExtendForm(showExtendForm);
    }
    $('#extended' + stubNumb).val(this.additionStubs.extended[stubNumb]);
    this.updateExtendedInfo();
};

Stubs.prototype.updateExtendedInfo = function (elementId) {
    elementId = elementId || false;
    if (elementId) {
        var $el = $('#'+elementId);
        var $ext_el = $('#ext'+elementId);
        var $ext_el2 = $('#ext2'+elementId);
        var $ext_el3 = $('#ext3'+elementId);
        var $ext_el4 = $('#ext4'+elementId);
        if ($el.val()) {
            $ext_el.text($el.val());
            $ext_el2.text($el.val());
            $ext_el3.text($el.val());
            $ext_el4.text($el.val());
        } else {
            $ext_el.text($ext_el.data('old'));
            $ext_el2.text('');
            $ext_el3.text('');
            $ext_el4.text('');
        }
    }
    var netpay = (this.round(this.additionStubs.netpay[1])).split('.');
    $('#extdollars').html(netpay[0]);
    $('#extcents').html(netpay[1]);
    if($('#extdollars2')){
        $('#extdollars2').html(netpay[0]);
        $('#extcents2').html(netpay[1]);
    }
};

/*
 * Method is called when choose payment types (hourly/salary)
 * @param int type
 * - update this.current.type
 * - call method generateAmountInputSet
 */
Stubs.prototype.updatePaymentTypes = function (type) {
    this.current.type = type;
    var event = 'change';
    this.generateAmountInputSet(event);
};

/*
 * Method called when select stub Amount
 * @param int amount
 * - update this.current.stubsAmount
 * - hide/show #stub+i
 * - update stub Number
 * - update payment date
 */
Stubs.prototype.updateStubsAmount = function (amount) {
    this.current.stubsAmount = Number(amount) + 1;
    for (var i = 2; i <= this.maxStubsAmount; i++) {
        if (i <= this.current.stubsAmount) {
            $('#stub' + i).show().find('input').removeAttr('disabled');
        } else {
            $('#stub' + i).hide().find('input').attr('disabled','disabled');
            this.additionStubs.payhours[i] = 40;
            if (this.advanced) {
                this.additionStubs.payhours[i] = this.round(this.additionStubs.payhours[i]);
            }
            $('#payhours' + i).val(this.additionStubs.payhours[i]);
        }
        this.setAllStubNumber(i);
        if (this.additionStubs.paymentDate[i].length == 0) {
            this.setPaymentDate(i);
        }
    }
    this.setPaymentDate('def');
};

/*
 * Method update Stub Number (when change stubNumber or stubAmount)
 * @param integer number
 * - update this.additionStubs.stubNumber[1]
 * - update all stubs Number
 */
Stubs.prototype.updateStubNumbers = function (number) {
    if (number) {
        this.additionStubs.stubNumber[1] = number;
        $('#stubNumber').val(this.additionStubs.stubNumber[1]);
    }
    for (var i = 2; i <= this.maxStubsAmount; i++) {
        this.setAllStubNumber(i);
    }
};

/*
 * Method update peyment Date (when change payment Date)
 * @param string date
 * - check param date
 * - update this.additionStubs.paymentDate[1]
 * - update all payment Date
 */
Stubs.prototype.updatePaymentDate = function (date) {
    if (date) {
        var pattern = /^\d{2}\/\d{2}\/\d{4}/;
        var dateArray = pattern.exec(date);
        if (dateArray && dateArray[0]) {
            date = dateArray[0];
        } else {
            date = this.additionStubs.paymentDate[1];
        }
        this.additionStubs.paymentDate[1] = date;
        $('#paymentDate').val(this.additionStubs.paymentDate[1]);
    }
    for (var i = 1; i <= this.current.stubsAmount; i++) {
        this.setPaymentDate(i);
    }
    this.setPaymentDate('def');
};

/*
 * Method found periodAmount for main stubs (use payment date)
 * return integer (ex: if (weekly) 1...52)
 */
Stubs.prototype.generatePaymentPeriodAmount = function () {
    var paymentDate = new Date(this.additionStubs.paymentDate[1]);
    var resultPeriodAmount = 0;
    var firstDayInWeek = moment(paymentDate).dayOfYear(1).weekday();
    if (this.current.period.key == 'annually') {
        resultPeriodAmount = 1;
    } else if (this.current.period.key == 'weekly') {
        resultPeriodAmount = moment(paymentDate).subtract(firstDayInWeek, 'day').week();
    } else if (this.current.period.key == 'biweekly') {
        resultPeriodAmount = Math.ceil((moment(paymentDate).subtract(firstDayInWeek, 'day').week())/2);
    } else if (this.current.period.key == 'monthly') {
        resultPeriodAmount = moment(paymentDate).month() + 1;
    } else if (this.current.period.key == 'semimonthly') {
        resultPeriodAmount = (moment(paymentDate).month() + 1) * 2;
        if (moment(paymentDate).date() < 15) {
            resultPeriodAmount -= 1;
        }
    }
    return resultPeriodAmount;
};

/*
 * Method found periodAmount for all stubs (use this.current.periodAmount for main stub)
 * @param string index - number stub
 * return integer (ex: if (weekly) 1...52)
 */
Stubs.prototype.generateDefPaymentPeriodAmount = function (index) {
    index = index || false;
    var resultPeriodAmount;
    if (this.current.period.key == 'annually') {
        resultPeriodAmount = 1;
    } else {
        if (index) {
            resultPeriodAmount = Number(this.current.periodAmount) - (Number(index) - 1);
        } else {
            resultPeriodAmount = Number(this.current.periodAmount) - Number(this.current.stubsAmount);
        }
        if (resultPeriodAmount < 1) {
            resultPeriodAmount = (Number(this.current.period.amount) + resultPeriodAmount);
        }
    }
    return resultPeriodAmount;
};

/*
 * Method show/hide #payhours and hide/show #annualPayment
 * and calculate #payrate if was changed payment type
 * @param string event
 */
Stubs.prototype.generateAmountInputSet = function (event) {
    event = event || false;
    var $annualPayment = $('#annualPayment');
    var type = this.current.type || false;

    if (type === 'hourly') {
        if(window.location.pathname != '/requests/editstub') {
            $('.payhours').show();
        }else{
            $('.payhours').show().attr('readonly', true);
        }
        $annualPayment.hide().find('input').attr('disabled', 'disabled');
        if (event === 'change') {
            this.calculatePayRate();
        }
        if(window.location.pathname != '/requests/editstub') {
            $('#payrate').attr('readonly', false);
        }
    } else {
        $('.payhours').hide();
        $('#payrate').attr('readonly', true);
        this.current.payrate = 'Salary';
        if(window.location.pathname != '/requests/editstub') {
            $annualPayment.show().find('input').removeAttr('disabled');
        }else{
            $annualPayment.show().find('input').removeAttr('disabled').attr('readonly','readonly');
        }
    }
};

/*********************** calculation begin ************************/
/*
 * Method calculate annual(when salary and change payment period)
 * @param object oldPeriod - prew payment period obj
 * - update this.current.annual
 */
Stubs.prototype.calculateAnnualPayment = function (oldPeriod) {
    if (oldPeriod) { /*when update payment period at the selected Salary*/
        //this.current.annual = this.round((Number(this.current.annual)/oldPeriod.hourMultiplier) * Number(this.current.period.hourMultiplier));
    } else { /*when change paythis at the selected Salary or select Salary*/
        this.current.annual = this.round(Number(this.additionStubs.paythis[1]) * this.current.period.amount);
    }
};

/*
 * Method calculate paythis
 * @param string idRefreshField
 * if change paythis - not update his
 * - update paythis[i] in all stubs paythis
 */
Stubs.prototype.calculatePayThis = function (idRefreshField) {
    idRefreshField = idRefreshField || '';
    var i = 1;
    if (idRefreshField === 'paythis') {
        i = 2;
    }
    for (; i <= this.current.stubsAmount; i++) {
        if (this.current.type === 'hourly') {
            if (i === 1 && this.switchCal) {
                $('input#paythis').attr('readonly', true).addClass('readonly');
            }
            this.additionStubs.paythis[i] = this.round(this.current.payrate * this.additionStubs.payhours[i]);
        } else {
            if (i === 1) {
                if (this.switchCal) {
                    if(window.location.pathname != '/requests/editstub') {
                        $('input#paythis').attr('readonly', false).removeClass('readonly');
                    }else{
                        $('input#paythis').attr('readonly', false).attr('readonly','readonly');
                    }
                }
                this.additionStubs.paythis[i] = this.round(Number(this.current.annual) / this.current.period.amount);
            } else {
                this.additionStubs.paythis[i] = this.additionStubs.paythis[1];
            }
        }
    }
    if (this.current.stubsAmount > 1) {
        if (this.current.type === 'hourly') {
            this.additionStubs.paythis.def = this.round(this.current.payrate * this.additionStubs.payhours.def);
        } else {
            this.additionStubs.paythis.def = this.additionStubs.paythis[1];
        }
    }

};

/*
 * Method calculate payrate
 * if change paythis - not update his
 * - update paythis[i] in all stubs paythis
 */
Stubs.prototype.calculatePayRate = function () {
    if (this.additionStubs.payhours[1]) {
        this.current.payrate = this.round(Number(this.additionStubs.paythis[1]) / this.additionStubs.payhours[1]);
    } else {
        this.current.payrate = this.additionStubs.paythis[1] = this.round(0);
    }
};

Stubs.prototype.offCalculate = function (event, idRefreshField) {
    idRefreshField = idRefreshField || '';
    if (idRefreshField !== 'annual') {
        if ((event === 'change' || event === 'input')) {
            if (idRefreshField != 'payhours' /*&& idRefreshField != 'paythis'*/) {
                if (typeof this.additionStubs[idRefreshField] !== 'undefined') {
                    this.additionStubs[idRefreshField]['def'] = this.additionStubs[idRefreshField][1];
                    for (var i = 2; i <= this.current.stubsAmount; i++) {
                        this.additionStubs[idRefreshField][i] = this.additionStubs[idRefreshField][1];
                    }
                }
            }
        } else {
            for (var field in this.additionStubs) {
                if (field == 'paythis' || field == 'ficafedtax' || field == 'ficamedtax' || field == 'ficasstax' || field == 'sttax' || field == 'casditax' || field == 'deductions' || field == 'total' || field == 'netpay') {
                    this.additionStubs[field]['def'] = this.additionStubs[field][1];
                }
                if (field != 'extended' && field != 'stubNumber' && field != 'paymentDate' && field != 'paymentPeriodDate' && field != 'payhours' && field != 'periodAmount') {
                    for (var i = 2; i <= this.current.stubsAmount; i++) {
                        this.additionStubs[field][i] = this.additionStubs[field][1];
                    }
                }
            }
        }
    }

    if (this.current.stubsAmount > 1) {
        this.calculateYTDTotal('def');
        for (var i = this.current.stubsAmount; i > 1; i--) {
            this.calculateYTDTotal(i);
        }
    }

    if ((event === 'updateContractor' || event == 'changeStubsAmount') && this.current.contractor !== 0) {
        var i = 1
        if (event === 'changeStubsAmount') {
            var i = 2;
        }
        for (; i <= this.current.stubsAmount; i++) {
            this.additionStubs.deductions[i] = this.round(0);
            this.additionStubs.netpay[i] = this.round(0);
            this.additionStubs.ficafedtax[i] = this.round(0);
            this.additionStubs.ficamedtax[i] = this.round(0);
            this.additionStubs.ficasstax[i] = this.round(0);
            this.additionStubs.sttax[i] = this.round(0);
            this.additionStubs.casditax[i] = this.round(0);
            this.additionStubs.ytdficafedtax[i] = this.round(0);
            this.additionStubs.ytdficamedtax[i] = this.round(0);
            this.additionStubs.ytdficasstax[i] = this.round(0);
            this.additionStubs.ytdsttax[i] = this.round(0);
            this.additionStubs.ytdcasditax[i] = this.round(0);
            this.additionStubs.ytddeductions[i] = this.round(0);
            this.additionStubs.ytdnetpay[i] = this.round(0);
            this.currentTaxAdvance.medical.ytd[i] = this.round(0);
            this.currentTaxAdvance.retire.ytd[i] = this.round(0);
            this.currentTaxAdvance.childsup.ytd[i] = this.round(0);
            this.currentTaxAdvance.optional.ytd[i] = this.round(0);
            this.currentTax.deductionother.ytd[i] = this.round(0);
        }
    }

    if (this.current.contractor === 0) {
        if (this.current.stubsAmount > 1) {
            this.calculateDeductionYTD('def');
            this.calculateNetpayYTD('def');
            for (var i = this.current.stubsAmount; i > 1; i--) {
                this.calculateDeductionYTD(i);
                this.calculateNetpayYTD(i);
            }
        }
    }

    this.refreshFields();
};

Stubs.prototype.onCalculate = function (event, idRefreshField) {
    idRefreshField = idRefreshField || '';
    this.calculateTotal();
    this.calculateTotalHoursWorked();
    if (this.current.stubsAmount > 1) {
        this.calculateDeductions('def');
        this.calculateTotalDeduction2('def');
        this.calculateNetpay('def');
    }

    for (var i = 1; i <= this.current.stubsAmount; i++) {
        this.calculateDeductions(i);
        this.calculateTotalDeduction2(i);
        this.calculateNetpay(i);
    }
    this.calculateYTD();

    if (event === 'change') {
        this.refreshFields();
    } else {
        this.refreshFields(idRefreshField);
    }
};

Stubs.prototype.calculate = function (event, idRefreshField) {
    idRefreshField = idRefreshField || '';
    if (this.current.stubsAmount > 1) {
        this.additionStubs.payhours.def = this.additionStubs.payhours[this.current.stubsAmount];
    }
    if (this.switchCal) {
        this.calculatePayThis(idRefreshField);
    }
    if (this.current.type === 'hourly' || idRefreshField !== 'annual') {
        this.calculateAnnualPayment();
    }

    if (idRefreshField !== 'paymentPeriodAmounts') {
        this.updatePaymentPeriodAmount();
    }

    if (this.switchCal) {
        this.onCalculate(event, idRefreshField);
    } else {
        this.offCalculate(event, idRefreshField);
    }
};

Stubs.prototype.calculateTotalHoursWorked = function () {
    var template = $('input[name="stubs[template]"]').val();
    var totalHours = 0;
    if(template == 'advanced4') {

        for (var aField in this.currentAdvance) {
            if (aField !== 'vacation') {
                if (this.currentAdvance[aField].rate !== '0.00') {
                    totalHours = Number(totalHours) + Number(this.currentAdvance[aField].hours);
                }
            }
        }

        if (this.current.stubsAmount > 1) {
            this.additionStubsAdvance.totalhourswork.def = this.round(Number(totalHours) + Number(this.additionStubs.payhours.def));
            this.additionStubsAdvance.ytdtotalhourswork.def = this.round((Number(totalHours) + Number(this.additionStubs.payhours.def)) * Number(this.current.periodAmount));
        }
        for (var i = 1; i <= this.current.stubsAmount; i++) {
            this.additionStubsAdvance.totalhourswork[i] = this.round(Number(totalHours) + Number(this.additionStubs.payhours[i]));
            this.additionStubsAdvance.ytdtotalhourswork[i] = this.round((Number(totalHours) + Number(this.additionStubs.payhours[i])) * Number(this.current.periodAmount));
        }
    }
};


Stubs.prototype.calculateTotalDeduction2 = function (index) {
    var template = $('input[name="stubs[template]"]').val();
    var total = '0.00';
    if(template == 'advanced4' || template == 'advanced5') {
        var total = this.round(Number(this.currentTaxAdvance.deductioncustom1.rate) + Number(this.currentTaxAdvance.deductioncustom2.rate));
        this.additionStubsAdvance.deductiontotal[index] = total;
        if(template == 'advanced4'){
            document.getElementById('this_deductiontotal').value = total;
        }
    }
};

Stubs.prototype.calculateTotal = function () {
    var total = 0;
    var template = $('input[name="stubs[template]"]').val();
    if (this.advanced) {
        for (var aField in this.currentAdvance) {
             if (
                 template !== 'advanced4' && template !== 'advanced5' && template !== 'advanced6'
                 ||
                 template === 'advanced4'  && aField !== 'vacation'
                 ||
                 template === 'advanced5'  && aField !== 'vacation' && aField !== 'overtime'
                 ||
                 template === 'advanced6'  && aField !== 'overtime'
             ){

                this.currentAdvance[aField].this = this.round(Number(this.currentAdvance[aField].rate) * Number(this.currentAdvance[aField].hours));
                total = Number(total) + Number(this.currentAdvance[aField].this);
             }
        }
    }
    if (this.current.stubsAmount > 1) {
        this.additionStubs.total.def = this.round(Number(total) + Number(this.additionStubs.paythis.def));
    }
    for (var i = 1; i <= this.current.stubsAmount; i++) {
        this.additionStubs.total[i] = this.round(Number(total) + Number(this.additionStubs.paythis[i]));
    }
};

Stubs.prototype.calculateDeductions = function (index) {
    this.additionStubs.ficafedtax[index] = this.round(0);
    this.additionStubs.ficamedtax[index] = this.round(0);
    this.additionStubs.ficasstax[index] = this.round(0);
    this.additionStubs.sttax[index] = this.round(0);
    this.additionStubs.casditax[index] = this.round(0);
    this.additionStubs.deductions[index] = this.round(0);
    if (this.current.contractor === 0) {
        this.getFederalTaxOptions();
        var subtractedGross = this.additionStubs.total[index] - this.current.federalTaxOptions.subtract;
        if (subtractedGross > 0) {
            this.additionStubs.ficafedtax[index] = (subtractedGross * this.current.federalTaxOptions.rate).toFixed(2);
        }
        this.additionStubs.ficamedtax[index] = this.round(this.additionStubs.total[index] * 0.0145);
        this.additionStubs.ficasstax[index] = this.round(this.additionStubs.total[index] * 0.062);
        this.additionStubs.sttax[index] = this.round(this.additionStubs.total[index] * this.current.state.tax);
        if(this.current.state.abbr === 'CA') {
            this.additionStubs.casditax[index] = this.round(this.additionStubs.total[index] * 0.009);
            if(this.additionStubs.casditax[index] > 939.40) {
                this.additionStubs.casditax[index] = this.round(939.40);
            }
        }

        this.additionStubs.deductions[index] = this.round(Number(this.additionStubs.ficamedtax[index])
            + Number(this.additionStubs.ficasstax[index])
            + Number(this.additionStubs.ficafedtax[index])
            + Number(this.additionStubs.sttax[index])
            + Number(this.additionStubs.casditax[index])
            + Number(this.currentTaxAdvance.medical.rate)
            + Number(this.currentTaxAdvance.retire.rate)
            + Number(this.currentTaxAdvance.childsup.rate)
            + Number(this.currentTaxAdvance.optional.rate)
            + Number(this.currentTax.deductionother.rate)
        );
    }
};

Stubs.prototype.calculateNetpay = function (index) {
    var template = $('input[name="stubs[template]"]').val();
    if (this.current.contractor === 0) {
        if(template == 'advanced4' || template == 'advanced5') {
            this.additionStubs.netpay[index] = this.round(Number(this.additionStubs.total[index]) - (Number(this.additionStubs.deductions[index]) + Number(this.additionStubsAdvance.deductiontotal[index])))
        }else {
            this.additionStubs.netpay[index] = this.round(Number(this.additionStubs.total[index]) - Number(this.additionStubs.deductions[index]));
        }
    } else {
        this.additionStubs.netpay[index] = this.round(0);
    }
};

Stubs.prototype.calculateYTD = function () {
    if (this.current.stubsAmount === 1) {
        this.calculateYTDTotal(1);
    } else {
        this.calculateYTDTotal('def');
        for (var i = this.current.stubsAmount; i >= 1; i--) {
            this.calculateYTDTotal(i);
        }
    }
    for (var i = 1; i <= this.current.stubsAmount; i++) {
        this.additionStubs.ytdficafedtax[i] = this.round(0);
        this.additionStubs.ytdficamedtax[i] = this.round(0);
        this.additionStubs.ytdficasstax[i] = this.round(0);
        this.additionStubs.ytdsttax[i] = this.round(0);
        this.additionStubs.ytdcasditax[i] = this.round(0);
        this.additionStubs.ytddeductions[i] = this.round(0);
        this.additionStubs.ytdnetpay[i] = this.round(0);
        this.currentTaxAdvance.medical.ytd[i] = this.round(0);
        this.currentTaxAdvance.retire.ytd[i] = this.round(0);
        this.currentTaxAdvance.childsup.ytd[i] = this.round(0);
        this.currentTaxAdvance.optional.ytd[i] = this.round(0);
        this.currentTax.deductionother.ytd[i] = this.round(0);
    }
    if (this.current.contractor === 0) {
        if (this.current.stubsAmount === 1) {
            this.calculateDeductionYTD(1);
            this.calculateNetpayYTD(1);
        } else {
            this.calculateDeductionYTD('def');
            this.calculateNetpayYTD('def');
            for (var i = this.current.stubsAmount; i >= 1; i--) {
                this.calculateDeductionYTD(i);
                this.calculateNetpayYTD(i);
            }
        }
    } else {
        for (var i = 2; i <= this.current.stubsAmount; i++) {
            this.calculateDeductionYTD2(i);
            this.calculateNetpayYTD(i);
        }
    }
};

Stubs.prototype.countPeriodAmount = function (index) {
    var periodAmount = 0;
    if (this.current.stubsAmount === 1) {
        periodAmount = this.current.periodAmount;
    } else if (index === 'def') {
        periodAmount = this.additionStubs.periodAmount.def;
    }
    return periodAmount;
};

Stubs.prototype.countValueForYtdTotal = function (index, period) {
    if (this.advanced) {
        this.additionStubsAdvance.payytd[index] = this.round(Number(this.additionStubs.paythis[index]) * Number(period));
        var periodYtd;
        for (var aField in this.currentAdvance) {
            periodYtd = period;
            if (Number(this.currentAdvance[aField].period)) {
                periodYtd = Number(this.currentAdvance[aField].period);
            }
            this.additionStubsAdvance[aField + 'ytd'][index] = this.round(Number(this.currentAdvance[aField].this) * Number(periodYtd));
        }
        this.additionStubs.ytdtotal[index] = this.round(Number(this.additionStubsAdvance.payytd[index])
            + Number(this.additionStubsAdvance.overtimeytd[index])
            + Number(this.additionStubsAdvance.holidayytd[index])
            + Number(this.additionStubsAdvance.vacationytd[index])
            + Number(this.additionStubsAdvance.bonusytd[index])
            + Number(this.additionStubsAdvance.floatytd[index])
            + Number(this.additionStubsAdvance.customField1ytd[index])
            + Number(this.additionStubsAdvance.customField2ytd[index])
            + Number(this.additionStubsAdvance.customField3ytd[index])
            + Number(this.additionStubsAdvance.customField4ytd[index])
        );
    } else {
        this.additionStubs.ytdtotal[index] = this.round(Number(this.additionStubs.total[index]) * Number(period));
    }
};

Stubs.prototype.calculateYTDTotal = function (index) {
    index = index || false;
    var periodAmount = this.countPeriodAmount(index);
    if (periodAmount) {
        this.countValueForYtdTotal(index, periodAmount);
    } else {
        var prewStubIndex = index + 1;
        var maxAmount;
        if (index === this.current.stubsAmount) {
            prewStubIndex = 'def';
            maxAmount = this.generateDefPaymentPeriodAmount();
        } else {
            maxAmount = this.generateDefPaymentPeriodAmount(prewStubIndex);
        }
        if (maxAmount == this.current.period.amount) {
            this.countValueForYtdTotal(index, 1);
        } else {
            if (this.advanced) {
                this.additionStubsAdvance.payytd[index] = this.round(Number(this.additionStubsAdvance.payytd[prewStubIndex]) + Number(this.additionStubs.paythis[index]));
                for (var aField in this.currentAdvance) {
                    if (Number(this.currentAdvance[aField].period)) {
                        this.additionStubsAdvance[aField + 'ytd'][index] = this.round(Number(this.currentAdvance[aField].this) * Number(this.currentAdvance[aField].period));
                    } else {
                        this.additionStubsAdvance[aField + 'ytd'][index] = this.round(Number(this.additionStubsAdvance[aField + 'ytd'][prewStubIndex]) + Number(this.currentAdvance[aField].this));
                    }
                }
                this.additionStubs.ytdtotal[index] = this.round(Number(this.additionStubsAdvance.payytd[index])
                    + Number(this.additionStubsAdvance.overtimeytd[index])
                    + Number(this.additionStubsAdvance.holidayytd[index])
                    + Number(this.additionStubsAdvance.vacationytd[index])
                    + Number(this.additionStubsAdvance.bonusytd[index])
                    + Number(this.additionStubsAdvance.floatytd[index])
                    + Number(this.additionStubsAdvance.customField1ytd[index])
                    + Number(this.additionStubsAdvance.customField2ytd[index])
                    + Number(this.additionStubsAdvance.customField3ytd[index])
                    + Number(this.additionStubsAdvance.customField4ytd[index])
                );
            } else {
                this.additionStubs.ytdtotal[index] = this.round(Number(this.additionStubs.ytdtotal[prewStubIndex]) + Number(this.additionStubs.total[index]));
            }
        }
    }
};

Stubs.prototype.countValueForYtdDeduction = function (index, period) {
    this.additionStubs.ytdficafedtax[index] = this.round(Number(this.additionStubs.ficafedtax[index]) * Number(period));
    this.additionStubs.ytdficamedtax[index] = this.round(Number(this.additionStubs.ficamedtax[index]) * Number(period));
    this.additionStubs.ytdficasstax[index] = this.round(Number(this.additionStubs.ficasstax[index]) * Number(period));
    this.additionStubs.ytdsttax[index] = this.round(Number(this.additionStubs.sttax[index]) * Number(period));
    if(this.current.state.abbr === 'CA') {
        this.additionStubs.ytdcasditax[index] = this.round(Number(this.additionStubs.casditax[index]) * Number(period));
        if(this.additionStubs.ytdcasditax[index] > 939.40) {
            this.additionStubs.ytdcasditax[index] = this.round(939.40);
        }
    }
    if (this.advanced) {
        var periodYtd
        for (var tField in this.currentTaxAdvance) {
            periodYtd = period;
            if (Number(this.currentTaxAdvance[tField].period)) {
                periodYtd = this.currentTaxAdvance[tField].period;
            }
            this.currentTaxAdvance[tField].ytd[index] = this.round(Number(this.currentTaxAdvance[tField].rate) * Number(periodYtd));
        }
    }else{
        var periodYtd
        for (var tField in this.currentTax) {
            periodYtd = period;
            if (Number(this.currentTax[tField].period)) {
                periodYtd = this.currentTax[tField].period;
            }
            this.currentTax[tField].ytd[index] = this.round(Number(this.currentTax[tField].rate) * Number(periodYtd));
        }
    }
};

Stubs.prototype.calculateDeductionYTD = function (index) {
    index = index || false;
    this.additionStubs.ytdficafedtax[index] = this.round(0);
    this.additionStubs.ytdficamedtax[index] = this.round(0);
    this.additionStubs.ytdficasstax[index] = this.round(0);
    this.additionStubs.ytdsttax[index] = this.round(0);
    this.additionStubs.ytdcasditax[index] = this.round(0);
    this.additionStubs.ytddeductions[index] = this.round(0);
    if (this.current.contractor === 0) {
        var periodAmount = this.countPeriodAmount(index);
        if (periodAmount) {
            this.countValueForYtdDeduction(index, periodAmount);

        } else {
            var prewStubIndex = index + 1;
            var maxAmount;
            if (index === this.current.stubsAmount) {
                prewStubIndex = 'def';
                maxAmount = this.generateDefPaymentPeriodAmount();
            } else {
                maxAmount = this.generateDefPaymentPeriodAmount(prewStubIndex);
            }
            if (maxAmount == this.current.period.amount) {
                this.countValueForYtdDeduction(index, 1);
            } else {
                this.additionStubs.ytdficafedtax[index] = this.round(Number(this.additionStubs.ytdficafedtax[prewStubIndex]) + Number(this.additionStubs.ficafedtax[index]));
                this.additionStubs.ytdficamedtax[index] = this.round(Number(this.additionStubs.ytdficamedtax[prewStubIndex]) + Number(this.additionStubs.ficamedtax[index]));
                this.additionStubs.ytdficasstax[index] = this.round(Number(this.additionStubs.ytdficasstax[prewStubIndex]) + Number(this.additionStubs.ficasstax[index]));
                this.additionStubs.ytdsttax[index] = this.round(Number(this.additionStubs.ytdsttax[prewStubIndex]) + Number(this.additionStubs.sttax[index]));
                if(this.current.state.abbr === 'CA') {
                    this.additionStubs.ytdcasditax[index] = this.round(Number(this.additionStubs.ytdcasditax[prewStubIndex]) + Number(this.additionStubs.casditax[index]));
                    if(this.additionStubs.ytdcasditax[index] > 939.40) {
                        this.additionStubs.ytdcasditax[index] = this.round(939.40);
                    }
                }
                if (this.advanced) {
                    for (var tField in this.currentTaxAdvance) {
                        if (Number(this.currentTaxAdvance[tField].period)) {
                            this.currentTaxAdvance[tField].ytd[index] = this.round(Number(this.currentTaxAdvance[tField].rate) * Number(this.currentTaxAdvance[tField].period));
                        } else {
                            this.currentTaxAdvance[tField].ytd[index] = this.round(Number(this.currentTaxAdvance[tField].ytd[prewStubIndex]) + Number(this.currentTaxAdvance[tField].rate));
                        }
                    }
                }else{
                    for (var tField in this.currentTax) {
                        if (Number(this.currentTax[tField].period)) {
                            this.currentTax[tField].ytd[index] = this.round(Number(this.currentTax[tField].rate) * Number(this.currentTax[tField].period));
                        } else {
                            this.currentTax[tField].ytd[index] = this.round(Number(this.currentTax[tField].ytd[prewStubIndex]) + Number(this.currentTax[tField].rate));
                        }
                    }
                }
            }
        }
        this.additionStubs.ytddeductions[index] = this.round(Number(this.additionStubs.ytdficamedtax[index])
            + Number(this.additionStubs.ytdficasstax[index])
            + Number(this.additionStubs.ytdficafedtax[index])
            + Number(this.additionStubs.ytdsttax[index])
            + Number(this.additionStubs.ytdcasditax[index])
            + Number(this.currentTaxAdvance.medical.ytd[index])
            + Number(this.currentTaxAdvance.retire.ytd[index])
            + Number(this.currentTaxAdvance.childsup.ytd[index])
            + Number(this.currentTaxAdvance.optional.ytd[index])
            + Number(this.currentTax.deductionother.ytd[index])
        );
    }
};

Stubs.prototype.calculateDeductionYTD2 = function (index) {
    index = index || false;
    this.additionStubs.ytdficafedtax[index] = this.round(0);
    this.additionStubs.ytdficamedtax[index] = this.round(0);
    this.additionStubs.ytdficasstax[index] = this.round(0);
    this.additionStubs.ytdsttax[index] = this.round(0);
    this.additionStubs.ytdcasditax[index] = this.round(0);
    this.additionStubs.ytddeductions[index] = this.round(0);
    this.additionStubs.ytddeductions[index] = this.round(Number(this.additionStubs.ytdficamedtax[index])
        + Number(this.additionStubs.ytdficasstax[index])
        + Number(this.additionStubs.ytdficafedtax[index])
        + Number(this.additionStubs.ytdsttax[index])
        + Number(this.additionStubs.ytdcasditax[index])
        + Number(this.currentTaxAdvance.medical.ytd[index])
        + Number(this.currentTaxAdvance.retire.ytd[index])
        + Number(this.currentTaxAdvance.childsup.ytd[index])
        + Number(this.currentTaxAdvance.optional.ytd[index])
        + Number(this.currentTax.deductionother.ytd[index])
    );
};

Stubs.prototype.calculateNetpayYTD = function (index) {
    if (this.current.contractor === 0) {
        this.additionStubs.ytdnetpay[index] = this.round(Number(this.additionStubs.ytdtotal[index]) - Number(this.additionStubs.ytddeductions[index]));
    } else {
        this.additionStubs.ytdnetpay[index] = this.round(0);
    }
};

//calculation



Stubs.prototype.refreshFields = function (idRefreshField) {
    idRefreshField = idRefreshField || false;
    this.refreshCurrentStubsFields(idRefreshField);
    this.refreshAdditionStubsFields(idRefreshField);
    this.refreshAdditionTaxStubsFields(idRefreshField);

    this.refreshCurrentStubsAdvenceFields(idRefreshField);
    this.refreshAdditionStubsAdvenceFields();

    if (this.additionStubs.extended[1]) {
        this.updateExtendedInfo();
    }
    //$('#contractorStatus').val(this.current.contractor);
    if ($('#this_total').length > 0) {
        $('#this_total').val(this.additionStubs.total[1]);
        $('#this_ytdtotal').val(this.additionStubs.ytdtotal[1]);
        $('#this_deductions').val(this.additionStubs.deductions[1]);
        $('#this_ytddeductions').val(this.additionStubs.ytddeductions[1]);
        $('#this_netpay').val(this.additionStubs.netpay[1]);
        $('#this_ytdnetpay').val(this.additionStubs.ytdnetpay[1]);
    }
    if ($('input#statename').length) {
        if (this.current.state.abbr !== '') {
            $('input#statename').val(this.current.state.state);
            if ($('#statenamerepide')) {
                $('#statenamerepide').html(this.current.state.state);
            }
        }else {
            $('input#statename').val('');
            if ($('#statenamerepide')) {
                $('#statenamerepide').html('');
            }
        }
    }
};

Stubs.prototype.refreshAdditionTaxStubsFields = function (idRefreshField) {
    if (this.advanced) {
        for (var aField in this.currentTaxAdvance ) {
            if (idRefreshField !== aField + 'rate') {
                $('#' + aField + 'rate').val(this.currentTaxAdvance[aField].rate);
            }
            for (var i = 1; i <= this.current.stubsAmount; i++) {
                $('#' + aField + 'ytd' + ((i === 1) ? '' : i)).val(this.currentTaxAdvance[aField].ytd[i]);
            }
        }
    }else{
        for (var aField in this.currentTax ) {
            if (idRefreshField !== aField + 'rate') {
                $('#' + aField + 'rate').val(this.currentTax[aField].rate);
            }
            for (var i = 1; i <= this.current.stubsAmount; i++) {
                $('#' + aField + 'ytd' + ((i === 1) ? '' : i)).val(this.currentTax[aField].ytd[i]);
            }
        }
    }
};

Stubs.prototype.refreshAdditionStubsFields = function (idRefreshField) {
    for (var field in this.additionStubs) {
        for (var i = 1; i <= this.maxStubsAmount; i++) {
            if (i <= this.current.stubsAmount) { /*show stubs*/
                if (!idRefreshField || idRefreshField !== field) {
                    if (i === 1 && field === 'paymentPeriodDate') {
                        var array = this.additionStubs.paymentPeriodDate[1].split(' - ');
                        $('#' + field + 'Begin').val(array[0]);
                        $('#' + field + 'End').val(array[1]);
                    }
                    $('#' + field + ((i === 1) ? '': i)).val(this.additionStubs[field][i]);
                }
            } else { /*hide stubs*/
                $('#' + field + i).val('');
            }
        }
        if (this.current.stubsAmount > 1) {
            $('#' + field + 'def').val(this.additionStubs[field].def);
        } else {
            $('#' + field + 'def').val('');
        }
    }
};

Stubs.prototype.refreshAdditionStubsAdvenceFields = function () {
    if (this.advanced) {
        for (var aField in this.additionStubsAdvance ) {
            for (var i = 1; i <= this.maxStubsAmount; i++) {
                if (i <= this.current.stubsAmount) { /*show stubs*/
                    $('#' + aField + ((i === 1) ? '': i)).val(this.additionStubsAdvance[aField][i]);
                } else { /*hide stubs*/
                    $('#' + aField + i).val('');
                }
            }
            if (this.current.stubsAmount > 1) {
                $('#' + aField + 'def').val(this.additionStubsAdvance[aField].def);
            } else {
                $('#' + aField + 'def').val('');
            }
        }
    }
};

Stubs.prototype.refreshCurrentStubsFields = function (idRefreshField) {
    if (idRefreshField !== 'payrate') {
        $('#payrate').val(this.current.payrate);
    }
    if (idRefreshField !== 'annual') {
        $('#annual').val(this.current.annual);
    }
};

Stubs.prototype.refreshCurrentStubsAdvenceFields = function (idRefreshField) {
    if (this.advanced) {
        for (var aField in this.currentAdvance ) {
            if (!idRefreshField || idRefreshField !== aField) {
                $('#' + aField + 'rate').val(this.currentAdvance[aField].rate);
                $('#' + aField + 'hours').val(this.currentAdvance[aField].hours);
                $('#' + aField + 'this').val(this.currentAdvance[aField].this);
            }
        }
    }
};

//sets
Stubs.prototype.setPayHours = function (index, oldPeriod) {
    if ((index !== 'def' && index <= this.current.stubsAmount)) {
        if (this.switchCal) {
            this.additionStubs.payhours[index] = Number(Number(this.additionStubs.payhours[index]/oldPeriod.hourMultiplier) * Number(this.current.period.hourMultiplier)).toFixed(0);
        }
    } else if (index === 'def' && this.current.stubsAmount > 1) {
        this.additionStubs.payhours[index] = this.additionStubs.payhours[this.current.stubsAmount];
    } else {
        this.additionStubs.payhours[index] = this.additionStubs.payhours[1];
    }
    if (this.advanced) {
        this.additionStubs.payhours[index] = this.round(this.additionStubs.payhours[index]);
    }
};

Stubs.prototype.setPayHoursAdvance = function (oldPeriod) {
    if (this.advanced && this.switchCal) {
        for (var aField in this.currentAdvance) {
            this.currentAdvance[aField].hours = this.round((Number(this.currentAdvance[aField].hours)/Number(oldPeriod.hourMultiplier)) * Number(this.current.period.hourMultiplier));
        }
    }
};

Stubs.prototype.setPaymentDate = function (index) {
    if (Number(index) === 1) {
        this.additionStubs.paymentPeriodDate[index] = this.getPaymentDatePeriod(this.additionStubs.paymentDate[index]);
    } else {
        if (this.current.stubsAmount > 1 && (index === 'def' || index <= this.current.stubsAmount)) {
            if (index === 'def') {
                this.additionStubs.paymentDate[index] = this.getPrewPaymentDate(this.additionStubs.paymentDate[this.current.stubsAmount]);
            } else if (index <= this.current.stubsAmount){
                this.additionStubs.paymentDate[index] = this.getPrewPaymentDate(this.additionStubs.paymentDate[index - 1]);
            }
            this.additionStubs.paymentPeriodDate[index] = this.getPaymentDatePeriod(this.additionStubs.paymentDate[index]);
        } else {
            this.additionStubs.paymentDate[index] = '';
            this.additionStubs.paymentPeriodDate[index] = '';
        }
    }
};

Stubs.prototype.setAllStubNumber = function (index) {
    if (index <= this.current.stubsAmount) {
        this.additionStubs.stubNumber[index] = Number(this.additionStubs.stubNumber[index - 1]) - (Math.floor((Math.random()*15)+1)+10);
    } else {
        this.additionStubs.stubNumber[index] = '';
    }
    $('#stubNumber' + index).val(this.additionStubs.stubNumber[index]);
};

Stubs.prototype.switchCalculator = function (value) {
    if (value == 'on') {
        value = true;
    } else {
        value = false;
    }

    if(window.location.pathname === '/requests/editstub'){
        value = true;
    }

    this.switchCal = value;
    $('.readonly').each(function () {
        $(this).attr('readonly', value);
        $('input#paythis').attr('readonly', value);
    });

    if (value) {
        this.updatePaymentDate(this.additionStubs.paymentDate[1]);
        this.calculate();
        this.updateExtendedInfo('paymentDate');
    } else {
        this.calculate();
        this.updateExtendedInfo();
    }
};