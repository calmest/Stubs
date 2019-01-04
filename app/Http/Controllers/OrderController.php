<?php

namespace App\Http\Controllers;

use App\Order;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function convert()
    {

        $pdf = PDF::loadView('pages.preview');
        return $pdf->download('invoice.pdf');
         
    }

    
}
