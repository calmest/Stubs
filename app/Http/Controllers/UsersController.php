<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class UsersController extends Controller
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
        $rules = array(
            'name' => '',
            'password' => 'min:6',
            'companyname' => '',
            'companystreetaddress' => '',
            'companycityaddress' => '',
            'employeename' => '',
            'employeestreetaddress' => '',
            'employeecityaddress' => '',
            'password-repeat' => 'required|same:password'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())

            return Redirect::to('users/create')->withInput()->withErrors($validator->messages());

        User::create(array(
            'name' => Input::get('name'),
            'password' => Hash::make(Input::get('password')),
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if ($user == null)

            return Redirect::to('users');

        return View::make('profile')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        if ($user == null)

            return Redirect::to('users');

        return View::make('edit')->with('id', $id);
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
        $rules = [
            'name' => 'unique:users',
            'password' => 'min:6',
            'companyname' => 'nullable',
            'companystreetaddress' => 'nullable',
            'companycityaddress' => 'nullable',
            'employeename' => 'nullable',
            'employeestreetaddress' => 'nullable',
            'employeecityaddress' => 'nullable'
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
            return Redirect::to('users/{{ $id }}/edit')->withInput()->withErrors($validator->messages());

        $user = User::find($id);

        if (Input::has('name')) $user->name = Input::get('name');
        if (Input::has('password')) $user->password = Hash::make(Input::get('name'));
        if (Input::has('companyname')) $user->companyname = Input::get('companyname');
        if (Input::has('companystreetaddress')) $user->companystreetaddress = Input::get('companystreetaddress');
        if (Input::has('companycityaddress')) $user->companycityaddress = Input::get('companycityaddress');
        if (Input::has('employeename')) $user->employeename = Input::get('employeename');
        if (Input::has('employeestreetaddress')) $user->employeestreetaddress = Input::get('employeestreetaddress');
        if (Input::has('employeecityaddress')) $user->employeecityaddress = Input::get('employeecityaddress');
        $user->save();

        return Redirect::to('/profile')->with('success', 'Profile Successfully Updated')
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
=======

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Order;
use App\User;
use Auth;
use DB;
use PDF;

class UsersController extends Controller
{
   //get routes for users

   public function mystubs()
   {
       $orders = Order::orderBy('order_purchased_at', 'desc')->paginate(10);
       return view('profile.mystubs')->with('orders', $orders);
   }
   public function profile()  
   {
        return view('profile.profile');
   }

   public function company()
   {

        $userDetails = User::where('id', Auth::User()->id)->first();
        return view('profile.company')->with('userDetails', $userDetails);
   }

   public function employee() 
   {
       return view('profile.employee');
   }

   //post routes for users

   public function update_UserProfile(Request $request) 
   {

        $userId = Auth::User()->id;
        $check = User::where('id', $userId);
        $action = $request->UpdateProfile;
        switch ($action) {
            case 'Profile':
              $data = array(
                  'name' => $request->name.' '.$request->lastname,
                  'email' => $request->email 
              );

              User::where('id', $userId)->update($data);

              return redirect()->back();
                break;

            case 'Password':

            $cpassword = $request->oldpass;
            $newpassword = $request->newpass;
            $cnewpassword = $request->newpassR;
              
              if (User::where('id', $userId)){
               if (Hash::check($cpassword, Auth::user()->password, [])) {
                 if($newpassword == $cnewpassword){
                   $data = array(
                     'password' => bcrypt($request->input('newpass')),
                   );

                   User::where('id', $userId)->update($data);

                    $notification = array('message' => 'Successful... You Have Channged your Password !',
                         'alert' => 'success' 
                        );
                   return redirect()->back()->with($notification);
                 }else{

                    $notification = array('message' => 'New Password & Confirm Password No Match ',
                         'alert' => 'info' 
                        );
                   return redirect()->back()->with($notification);
                 }
               }else{

                  $notification = array( 'message' => 'Old Password is invaild ',
                     'alert' => 'error' 
                    );
                 return redirect()->back()->with($notification);
               }
              }
                break;
            
            default:
            
                break;
        }   
   }


   public function update_Company(Request $request)
   {

     $userId = Auth::User()->id;
       $data = array(
              'companyname' => $request->companyname,
              'companystreetaddress' => $request->companystreetaddress,
              'companycityaddress' => $request->cityaddress, 
          );

          User::where('id', $userId)->update($data);
            return redirect()->back();
         

   }

   public function update_employee(Request $request)
   {
        $userId = Auth::User()->id;
        $data = array(
            'employeename' => $request->employeename,
            'employeestreetaddress' => $request->emstreetaddress,
            'employeecityaddress' => $request->emcityaddress, 
            // 'companycityaddress' => $request->ssn, 
            // 'companycityaddress' => $request->employeeid, 
            // 'companycityaddress' => $request->payrate, 
            // 'companycityaddress' => $request->payfrequency, 
        );

             User::where('id', $userId)->update($data);



              return redirect()->back();

        // return 'Successfully updated';
        //    return $request->all();
   }

>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
}
