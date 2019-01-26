<?php

namespace App\Http\Controllers;

use App\MyStub;
use App\Template;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class BuildStubController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
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
    public function  generatePin($length) {
       $key = '';
       $keys = array_merge(range(0, 9));
      for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
         return $key;
    }


    public function orderDetails(Request $request){
    $template_name = $request->stubs['template'];
    $template_qty = $request->stubs['header']['stubsAmount'] + 1;
    //$template_depsit o= $request->extend[1];
    $template_total = $template_qty * 8.99;
    $code = $this->generatePin(6);


    $name = $request->template;
        //return $RqTpl;
        $data = Template::where('template_name','complete')->first();
        if ($data) {
          return view('stubs.complete', compact('template_name','template_qty','template_total', 'code'));
        }else{
            return '';
        }
    }




    public function preview()
    {
        return view('pages.preview');
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
