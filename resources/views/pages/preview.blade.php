<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
    <!-- Scripts -->
       <script src="{{ asset('js/jquery-1.9.1.min.js') }}" ></script>
       <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
       <script src="{{ asset('js/bootstrap-noconflict.js') }}" ></script>
       <script src="{{ asset('js/bootbox.min.js') }}" ></script>
       <script src="{{ asset('js/notify.min.js') }}" ></script>
       <script src="{{ asset('js/jquery-ui-no-conflict.min.js') }}" ></script>
       <script src="{{ asset('js/jquery.bootstrap.wizard.min.js') }}" ></script>
       <script src="{{ asset('js/jquery.yiiactiveform.js') }}" ></script>
       <script src="{{ asset('js/jquery.metadata.js') }}"></script>
       <script src="{{ asset('js/jquery.rating.js') }}" ></script>
       <script src="{{ asset('js/intro.js') }}" ></script>
       <script src="{{ asset('js/characterLimitFields.js') }}" ></script>
       <script src="{{ asset('js/moment.min.js') }}" ></script>

       <script src="{{ asset('js/jquery.formatter.min.js') }}" ></script>
       <script src="{{ asset('js/states.js') }}" ></script>
       <script src="{{ asset('js/taxes.js') }}" ></script>
       <script src="{{ asset('js/previewStubs.js') }}" ></script>
       <script src="{{ asset('js/jspdf.min.js') }}" ></script>
       <script src="{{ asset('js/html2canvas.min.js') }}" ></script>
       <script src="{{ asset('js/html2pdf.bundle.min.js') }}" ></script>
       <script src="{{ asset('js/html2pdf.min.js') }}" ></script>
       <script src="{{ asset('js/classStubs.js') }}" ></script>
       <script src="{{ asset('js/modalStubs.js') }}"></script>
       <script src="{{ asset('js/generateStubs.js') }}" ></script>
       <script src="{{ asset('js/toastr.js') }}" ></script>
       <script src="{{ asset('js/toastr.js') }}" ></script>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

       <!-- Minified version of `es6-promise-auto` below. -->
       <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
  <link rel="stylesheet" href="">
</head>
<body id="app">
  <br>
  <br>
  <br>
  <br>


    <button id="cmd" class="btn btn-success">generate PDF</button>
 
  <script>
var doc = new jsPDF();
var specialElementHandlers = {
    '#app': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>
</body>
</html>

