<?php

namespace App\Http\Controllers;

use App\Order;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use PDF;
use Auth;
=======
use Auth;
use Barryvdh\DomPDF\Facade as PDF;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }



    public function downloads($id)
    {
        /*
        if(\Auth::check()){
            $user = \Auth::user();
            $user_id = $user->id;
            $result = DB::table('orders')->where('orders.id' ,'=','')->where('user_id' ,'=', $user_id)->get();

            // return view('orders/downloads',compact('user', 'result'));
            */

            $order = Order::find($id);
            $pdf = PDF::loadView('orders.downloads', ['order' => $order])->setPaper('a4', 'portrait');

            $fileName = ($order->id . '_stub');
            return $pdf->stream($fileName . '.pdf');

            //return $pdf->download('testing.pdf');

        /*
        }else {
            return view('orders/downloads');
        }
        */
    }

<<<<<<< HEAD
    public function mystubs()
    {
        $orders = Order::orderBy('order_purchased_at', 'desc')->paginate(10);
        return view('profile.mystubs')->with('orders', $orders);
    }

    public function company() {
        return view('profile.company');
    }

    public function employee() {
        return view('profile.employee');
    }
=======
    public function convert()
    {

        $pdf = PDF::loadView('pages.preview');
        return $pdf->download('invoice.pdf');
         
    }

    
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
}
