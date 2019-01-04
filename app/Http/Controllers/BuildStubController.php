<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use App\Template;
use App\MyStub;

class BuildStubController extends Controller
{
    /*
    |---------------------------------------------
    | SHOW STUB BUILD INDEX
    |---------------------------------------------
    */
    public function index(){
    	$template = Template::orderBy('id', 'DESC')->get();
    	return view('stubs.index', compact('template'));
    }

    /*
    |---------------------------------------------
    | SHOW STUBS TEMPLATES
    |---------------------------------------------
    */
    public function showTemplate($id){
    	// if($id == 1){
    		return view('templates.template'.$id);
    	// }else{
    		// return view('stubs.template-default');
    	// }
    }


    /*
    |---------------------------------------------
    | GET ALL STUB TEMPLATE
    |---------------------------------------------
    */
    public function getAllTemplate(){
    	$template 	= new Template();
    	$data 		= $template->getAllTemplate();

    	// return response
    	return response()->json($data);
    }

    /*
    |---------------------------------------------
    | GENERATE TEMPLATE
    |---------------------------------------------
    */
    public function generateStubTemplate(){
    	$template 	= new Template();
    	$data 		= $template->createDefaultTemplate();

    	// return response
    	return response()->json($data);
    }

    /*
    |---------------------------------------------
    | GENERATE STUBS FILES
    |---------------------------------------------
    */
    public function captureStubs(Request $request){
    	$element_id 	= $request->element_id;
    	$pathToImage 	= 'stubs-'.time().'.jpg';
    	$appUrl 		= env("APP_URL").'/instant/build/stubs';

    	// $bowser_shot = new Browsershot();
    	// $bowser_shot->url($appUrl)
    	// ->select($element_id)
    	// ->save($pathToImage);
        // Browsershot::html('<h1>Hello world!!</h1>')->save('example.pdf');

        Browsershot::url('http://localhost:9909/instant/build/stubs')
        ->select('.widget')
        ->save($pathToImage);

		$data = [
			'status' 	=> 'success',
			'message' 	=> 'Stub generated successfully!',
		];

    	// return response
    	return response()->json($data);
    }


    /*
    |---------------------------------------------
    | SAVE STUB
    |---------------------------------------------
    */
    public function saveStub(Request $request){
        $my_stub    = new MyStub();
        $data       = $my_stub->addNewStub($request);

        // return response
        return response()->json($data);
    }

    /*
    |---------------------------------------------
    | BUILD MY STUB
    |---------------------------------------------
    */
    public function orderDetails(Request $request){
        $template_name = $request->stubs['template'];
        $template_qty = $request->stubs['header']['stubsAmount'] + 1;
        $template_total = $template_qty * 8.99;
        //return $request->all();
        return view('stubs.orders', compact('template_name','template_qty','template_total'));
    }

    public function createOrder(Request $request){
        return $request->all();
    }

    public function stripeCharge(Request $request)
    {
    	$stripeCharge = $request->token;
        //return response()->json($stripeCharge);
       return $stripeCharge;
       // $order_id = 'reject';
       // return $order_id;
    }

    /*
    |---------------------------------------------
    | Generate order and redirect
    |---------------------------------------------
    */
    public function payment(Request $request){

        return $request->all();

        // return redirect('/order/details');
    }
}
