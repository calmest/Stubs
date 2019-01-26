<?php

namespace App\Http\Controllers;

use App\MyStub;
use App\Order;
use App\Template;
use Auth;
//use Barryvdh\DomPDF\Facade as PDF;
use DB;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
//use Novanti\LaravelPDF\PDFFacade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class OrderController extends Controller
{

    public function  generatePin($length) {
       $key = '';
       $keys = array_merge(range(0, 9), range('a', 'z'));
      for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
         return $key;
    }

    public function createOrder(Request $request){

          // $data = $request->all();
        // //
        // $OrderCreation = new Order;
        // $update  = array(
        //     'user_id' => Auth::User()->id,
        //     'download_link' => 'dhdue',
        //     'template_name' => $request->template_name,
        //     'template' => $request->save
        //      );
        // $OrderCreation->save($update);

        $code = $request->tempCode;
        $check = Order::where('code', $code)->exists();
        if ($check) {
            return response()->json($code);
        }else{
           $order = new Order;

        $order->user_id = Auth::User()->id;
        $order->download_link = $this->generatePin(25);;
        $order->template_name = $request->template_name;
        $order->template = $request->save;
        $order->code = $code;
        $order->save();

        return response()->json($code);
        }

        //generate code


        //return $data;
    }


    public function downloads($token,$id)
    {


        $getToken = Order::where('download_link', $token)->where('id', $id)->first();
        if ($getToken) {
            $getData = Order::find($id);
            $userId = Template::where('template_name', $getData->template_name)->first();
            $style = $userId->css;
            $template = $getData->template;
            $name = $getData->template_name;
            // $pdf = PDF::loadView('pages.preview',['template' => $getData->template,'name' =>$getData->template_name,'style' => $style])->setPaper('a4', 'portrait');

            // $fileName = ($getData->template_name . '_stub');
            // return $pdf->stream($fileName . '.pdf');
            $pdf = PDF::loadView('pages.preview',
            ['template' => $getData->template,
            'name' =>$getData->name,
            'style' => $userId->css
            ]
        )
        //->grayscale()->pageSize('A2')->orientation('portrait')->lowquality();

        ->setPaper('a4')
        ->setOrientation('portrait')
        ->setOption('footer-right', 'Page [page] of [toPage]     ')
        ->setOption('footer-left', '     Printed: [date] | © 2019 CreateMyStubs')
        ->setOption('footer-font-size', 8)
        ->setOption('header-font-size', 14)
        ->setOption('footer-font-name', 'Arial')
        ->setOption('margin-top', 10)
        ->setOption('margin-left', 5)
        ->setOption('margin-right', 5)
        ->setOption('lowquality', false)
        ->setOption('dpi', 150)
        ->setOption('image-dpi', 600)
        ->setOption('images', true)
        ->setOption('image-quality', 200)
        ->setOption('enable-javascript', true)
        ->setOption('javascript-delay', 5000)
        ->setOption('enable-smart-shrinking', true)
        ->setOption('no-stop-slow-scripts', true)
        ->setOption('grayscale', true)
        ->setOption('header-line', true)
        ->setOption('header-spacing', 1)
        ->setOption('footer-spacing', 1)
        ->setOption('header-center', 'YOUR PAY STUB')
        ->setOption('footer-line', true)
        ->setOption('enable-forms', true);
        $fileName = ($getData->template_name . '_stub');
        return $pdf->stream($fileName . '.pdf');

        //return view('pages.preview',compact('template' ,'name','style' ));




        }else{
            return redirect()->back();
        }
        /*
        $pdf = PDF::loadView('pages.preview',
            ['template' => $getData->template,
             'name' =>$getData->name,
             'style' => $userId->css
            ]
            )->setPaper('a4', 'portrait');

        $fileName = ($getData->template_name . '_stub');
        return $pdf->stream($fileName . '.pdf');
        */
        /*
        $pdf = PDF::loadView('pages.preview',
            ['template' => $getData->template,
            'name' =>$getData->name,
            'style' => $userId->css
            ]
            )->setPaper('a4', 'portrait');

        $fileName = ($getData->template_name . '_stub');
        return $pdf->stream($fileName . '.pdf');
        */


    }

    public function stripeCharge(Request $request)
    {
       $stripeCharge = $request->token;
        $code = $request->template;
        $data = array('status' => 1);
        Order::where('code', $code)->update($data);
        //return response()->json($stripeCharge);
       return $stripeCharge;
       // $order_id = 'reject';
       // return $order_id;
    }


    public function convert()
    {

        $pdf = PDF::loadView('pages.preview');
        return $pdf->download('invoice.pdf');



        //  if(\Auth::check()){
        //     $user = \Auth::user();
        //     $user_id = $user->id;
        //     $result = DB::table('orders')->where('orders.id' ,'=','')->where('user_id' ,'=', $user_id)->get();

        //     // return view('orders/downloads',compact('user', 'result'));
        //     */

        //     $getData = Order::find($id);
        //     $pdf = PDF::loadView('pages.preview', ['template' => $getData->template,'name' =>$getData->name])->setPaper('a4', 'portrait');

        //     $fileName = ($getData->template_name . '_stub');
        //     return $pdf->stream($fileName . '.pdf');

        //     //return $pdf->download('testing.pdf');

        // /*
        // }else {
        //     return view('orders/downloads');
        // }
        // */
    }


}
