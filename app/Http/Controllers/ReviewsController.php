<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->paginate(10);
        return view('reviews.index')->with('reviews', $reviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'body' => 'required'
        ]);

        // Create Review
        $review = new Review;
        $review->name = $request->input('name');
        $review->body = $request->input('body');
        $review->user_id = auth()->user()->id;
        $review->save();

        return redirect('/reviews')->with('success', 'Review Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        return view('reviews.show')->with('review', $review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);

        // Check for correct user
        if(auth()->user()->id !== $review->user_id){
            return redirect('/reviews')->with('error', 'Unauthorized Page');
        }

        return view('reviews.edit')->with('review', $review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'body' => 'required'
        ]);

        // Create Review
        $review = Review::find($id);
        $review->name = $request->input('name');
        $review->body = $request->input('body');
        $review->save();

        return redirect('/reviews')->with('success', 'Review Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);

        // Check for correct user
        if(auth()->user()->id !== $review->user_id){
            return redirect('/reviews')->with('error', 'Unauthorized Page');
        }

        $review->delete();
        return redirect('/reviews')->with('success', 'Review Deleted');
    }
}
