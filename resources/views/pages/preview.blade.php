<!DOCTYPE html>
<html>

    <style>
        .prevback {
            position: absolute;
        }

           a{
              display: none !important;
           }


        div .all_preset{
           display: block;
           margin-top: 100% !important;
        }

        div .all_preset:nth-child(1){

            margin-top: 50px ;
         }

         .carousel-control.left::before, .carousel-control.right::before{
           display: none !important;
         }

         .carousel-control a{
           display: none !important;
           opacity: 0;
         }
    </style>



    {{-- <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-yii.css') }}" rel="stylesheet"> --}}
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">


    <div class="prevback">

        {!! $style !!}
        {!! $template !!}

    </div>


</html>
