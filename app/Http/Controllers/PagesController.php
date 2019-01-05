<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use Resources\Js\App;
use File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use App\Template;
=======
use App\Template;
use App\User;
use File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Resources\Js\App;
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c

class PagesController extends Controller
{
    public function index() {
        $title = 'Instantly Generate Pay Check Stubs';
        return view('pages.index')->with('title', $title);
    }

    public function resendpaystub() {
        $title = 'FORGOTTEN YOUR DOWNLOAD LINK?';
        return view('pages.resendpaystub')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'SERVICES',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function contact() {
        $title = 'CONTACT US';
        return view('pages.contact')->with('title', $title);
    }

    public function faq() {
        $title = 'FREQUENTLY ASKED QUESTIONS';
        return view('pages.faq')->with('title', $title);
    }

    public function legal() {
        return view('pages.legal');
    }

<<<<<<< HEAD
    public function test() {
        return view('pages.test');
    }

    public function infoTest(Request $request) {
         $userName = $request->name;
        $userDes = $request->description;

        return view('pages.info', compact('userName', 'userDes'));

    }

=======
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
    public function privacy() {
        return view('pages.privacy');
    }

    public function support() {
        $title = 'SUPPORT';
        return view('pages.support')->with('title', $title);
    }

<<<<<<< HEAD
    public function profile() {
        return view('pages.profile');
    }
=======
    
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c

    public function stubs() {
        return view('pages.stubs');
    }

    public function company() {
        return view('pages.company');
    }

    public function employee() {
        return view('pages.employee');
    }

    public function reviews() {
        return view('pages.reviews');
    }

    public function generateStubs() {
        return view('pages.generateStubs');
    }

    public function paystubs() {
        return view('pages.paystubs');
    }

    public function classic(){
        return view('pages.classic');
    }
    public function tests() {
        return view('pages.tests');
    }

    public function template1() {
        return view('templates.template1');
    }

    public function modern() {
        return view('pages.modern');
    }

    public function modern2() {
        return view('pages.modern2');
    }

    public function modern3() {
        return view('pages.modern3');
    }

    public function classic2() {
        return view('pages.classic2');
    }

    public function classic3() {
        return view('pages.classic3');
    }

    public function classic4() {
        return view('pages.classic4');
    }

    public function classic5() {
        return view('pages.classic5');
    }

    public function classic6() {
        return view('pages.classic6');
    }

    public function advanced() {
        return view('pages.advanced');
    }

    public function advanced2() {
        return view('pages.advanced2');
    }

    public function advanced3() {
        return view('pages.advanced3');
    }

    public function advanced4() {
        return view('pages.advanced4');
    }

    public function order() {
        return view('pages.order');
    }

<<<<<<< HEAD
    public function selecttpl() {
        //return view('generateStubs.selecttpl');
        /*$file = File::get('\resources\views\templates\template1.blade.php');
        $response = Response::make($file, 200);
        $response->header('Content-Type', 'text/php; charset=utf-8');
        return $response;*/

        /*return response()->json([
            "status" => "success",
            "template" => "[template]"
        ]);*/

        //return view('templates.template1');

        $path = resource_path() . '/views/templates/template5.blade.php';

        if(!File::exists($path)) {
           return response()->json(['message' => 'Image not found.'], 404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

            return $response;
=======
    public function generateTemplate() {
        return view('pages.generateStubs');
    }

    public function selecttpl(Request $request) {

        $name = $request->template;
        //return $RqTpl;
        $data = Template::where('template_name',$name)->first();
        if ($data) {
         return $data->template;           
        }else{
            return '';
        }

      
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
    }

    public function selectTemplate($id){
        // here you query the template and show the user on the next tab
        $get_template = new Template();
    	$data = $get_template->getTemplate();

    	// return response
    	return response()->json($data);
    }
}
