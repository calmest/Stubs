<?php

namespace App\Http\Controllers;

use App\Template;
use App\User;
use File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Resources\Js\App;

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

    public function privacy() {
        return view('pages.privacy');
    }

    public function support() {
        $title = 'SUPPORT';
        return view('pages.support')->with('title', $title);
    }

    

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

      
    }

    public function selectTemplate($id){
        // here you query the template and show the user on the next tab
        $get_template = new Template();
    	$data = $get_template->getTemplate();

    	// return response
    	return response()->json($data);
    }
}
