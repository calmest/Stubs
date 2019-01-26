<?php

namespace App\Http\Controllers;


use App\MyStub;
use App\Order;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PDF;

class UsersController extends Controller
{
   //get routes for users

   public function mystubs()
   {
    $id = Auth::User()->id;
    $orders = Order::with('Parent')->where('user_id', '=', $id)->where('status', 1)->orderBy('created_at', 'asc')->paginate(10);
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

                    $notification = array('message' => 'Successful... You Have Changed your Password !',
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

}
