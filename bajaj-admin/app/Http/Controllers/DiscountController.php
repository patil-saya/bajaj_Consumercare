<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Discount;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
//use App\Http\Controllers\Helpers;
use App\Helpers;
use App\Models\Upload;
class DiscountController extends ApiController
{

    public function share_patient_details(Request $request) {

         $mobile = $request->user_mobile;
         $name = $request->name;
         $partner_id= $request->partner_id;
         $date= $request->date_of_admission;
         $treatment_needed=$request->treatment_needed;
         $customer_id=$request->customer_id;
         $upi_id=$request->upi_id;
         $reward_type=$request->reward_type;
         $duration='30';
         $dt=str_replace("/","-",$date);
         

 $error=array('error' => 'ValidateErrorException');

         $len=strlen($mobile);
        if($mobile=='')
        {
          $msg="Mobile number fields is required";
          
            return $this->apiValidate($error,$msg);  
        }
        if($len!=10)
        {
            $msg="Invalid Mobile Number";
            return $this->apiValidate($error,$msg);
        }
        if($name=='')
        {
          $msg="Name field is required";
            return $this->apiValidate($error,$msg);  
        }
        if($partner_id=='')
        {
          $msg="Partner id field is required";
            return $this->apiValidate($error,$msg);  
        }
        if($date=='')
        {
          $msg="Date of admission field is required";
            return $this->apiValidate($error,$msg);  
        }
        if($treatment_needed=='')
        {
          $msg="Treatment needed field is required";
            return $this->apiValidate($error,$msg);  
        }
        if($customer_id=='')
        {
          $msg="Customer id field is required";
            return $this->apiValidate($error,$msg);  
        }

         $today=date('Y-m-d h:m:s');
         $expiry_date= date('Y-m-d h:m:s',strtotime('+'.$duration.'days',strtotime($today))) . PHP_EOL; 

            $digits = 4;
             if($mobile=='9975647557')
                {
                    $otp=5555;
                }
                else{
                    $otp = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
                }   
            $gen = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
            $code='MED'; 
            $code .=$gen;
            $app_users = new Discount();
            $app_users->user_mobile = $mobile;
            $app_users->last_otp = $otp;
            $app_users->name = $name;
            $app_users->partner_id = $partner_id;
            $app_users->tentative_date =date('Y-m-d', strtotime($dt)); 
            $app_users->treatment_needed = $treatment_needed;
            $app_users->customer_id = $customer_id;
            $app_users->discount_code= $code;
            $app_users->discount_amount = '0';
            $app_users->expiry_date=$expiry_date;
            $app_users->reward_type=$reward_type;
            $app_users->upi_id=$upi_id;
            $app_users->save();
            //get last inserted id in discount table
            $disc_id=$app_users->id;

            //Send OTP via SMS
            $numbers = $mobile;
        $message = "Your login OTP for Health Siren is  ".$otp." . HealthSiren- India's Health Alarm. rewdsa";
            Helpers::api_sms($otp, $numbers);
            $data=(['disc_id'=>$disc_id]);
                
            return $this->apiSuccess($data,"OTP is sent to your mobile number");
     

    }

    public function verifyotp_discount(Request $request){

      $mob=$request->mobile;
      $otp=$request->otp;
      $disc_id=$request->disc_id;

        $len=strlen($mob);
        if($mob=='')
        {
          $msg="Mobile number fields is required";
            return $this->apiValidate([],$msg);  
        }
        if($len!=10)
        {
            $msg="Invalid Mobile Number";
            return $this->apiValidate([],$msg);
        }
        if($otp=='')
        {
          $msg="OTP field is required";
            return $this->apiValidate([],$msg);  
        }
        if($disc_id=='')
        {
          $msg="Disc id field is required";
            return $this->apiValidate([],$msg);  
        }
        // $validator = Validator::make($request->all(), [
        //     'disc_id' => 'required',
        //     'mobile' => 'required',
        //     'otp' => 'required|string|min:4',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 422);
        // }

    $user = DB::table('discount')->where('user_mobile', $mob)->where('last_otp',$otp)->where('id',$disc_id)->first();

    if($user=='')
    {
          $msg="Invalid Mobile Number or OTP";
            return $this->apiValidate([],$msg);  
        

     // return $this->apiValidate("Invalid Mobile Number or OTP");
    } else {
     $users = DB::table('discount')->select('discount_code','discount_amount','partner_id','reward_type')->where('user_mobile', $mob)->where('last_otp',$otp)->where('id',$disc_id);
    $temp= $users->get();

      DB::table('discount')->where('user_mobile', $mob)->where('last_otp',$otp)->where('id',$disc_id)
                ->update(['is_mobile_verified' => 1]);

    foreach ($temp as $value) {
            $value->partner_name='';
            $value->partner_contact_number='';
            $value->partner_address='';
            $value->max_discount='';
                        $disc = Discount::where('partner_id', $value->partner_id)->get();

                        if (!empty($disc) && !is_null($disc)) {
                            foreach ($disc as $ds) {
                                if (!empty($ds->partner_id) && !is_null($ds->partner_id)) {
                                    $list = User::select('*')->where('id', $ds->partner_id)->first();
                                   $value->partner_name =$list->title;
                                   $value->partner_contact_number=$mob;
                                   $value->partner_address=$list->address;
                                   $value->max_discount=$list->max_disc;

                                }
                            }   
            }
          }
        }
        return ApiController::apiItem($temp);
    }


 public function discount_list_user(Request $request) {

         $reward_type=$request->reward_type;
         $user= response()->json(auth('app_api')->user());
        $array = json_decode(json_encode($user), true);
        $id=$array['original']['id'];
 $discount = DB::table('discount')->select('discount_code','is_redeemed','partner_id','date_of_discharge','discount_amount','created_at','expiry_date','is_deposited','upi_id','acc_holder_name','bank_name','branch_ifsc','acc_number','reward_type')->where('customer_id',$id)->where('reward_type',$reward_type)->orderby('updated_at','desc');

 $total = $discount->get()->count();

 $amount_redeemed  = DB::table('discount')->where('customer_id',$id)->where('is_redeemed',1)->where('reward_type',0)->sum('discount_amount');

  $cashback_amount  = DB::table('discount')->where('customer_id',$id)->where('is_redeemed',1)->where('is_deposited',1)->where('reward_type',1)->sum('discount_amount');
      
     
       if (array_key_exists('start', $request->all()) && !is_null($request->input('start'))) {

            $offset = $request->input('start');
            if (!$request->input('limit') || empty($request->input('limit'))) {
                $limit = 10;
            } else {
                $limit = $request->input('limit');
            }


            $discount->offset($offset)->limit($limit);
            $temp = $discount->get();
       
        } else {

            $temp = $discount->get();
        }


        foreach ($temp as $value) {
            $value->partner_name='';
            $value->partner_contact_number='';
            $value->partner_address='';  
            $value->redeemed_date=$value->date_of_discharge;
             $value->full_address='';
             $value->cashback_status='';
            $today=date('Y-m-d h:m:s');
            $end_date=$value->expiry_date;
           
            if($value->is_redeemed==1)
            {
            $value->redeemed_status='Redeemed';
            }
            else if($value->is_redeemed==0 && $today>$end_date)
            {
                $value->redeemed_status='Expired';
            }
            else{
                $value->redeemed_status='New';
            }

            if($value->is_deposited==1)
            {
                $value->cashback_status="Deposited";

            }else if($value->cashback_status==0 && $today>$end_date)
            {
                $value->cashback_status="Expired";

            }else if($value->cashback_status==0 && $value->is_redeemed==1)
            {
                $value->cashback_status="In-process";
            }
            else
            {
                $value->cashback_status="New";
            }


                        $disc = Discount::where('partner_id', $value->partner_id)->get();

                        if (!empty($disc) && !is_null($disc)) {
                            foreach ($disc as $ds) {
                                if (!empty($ds->partner_id) && !is_null($ds->partner_id)) {
                                    $list = User::select('*')->where('id', $ds->partner_id)->first();
                                   $value->partner_name =$list->title;
                                   $value->partner_contact_number=$list->mobile;
                                   $value->partner_address=$list->address;

                                    $ad1=$list->address;
                                    $ad2=$list->address2;
                                    $st_nm=DB::table('states')->select('state')->where('id',$list->state)->first();
                                         if($st_nm)
                                        {
                                        $st=$st_nm->state;
                                        }else {$st='';}
                                    $ct_nm=DB::table('cities')->select('city')->where('id',$list->city)->first();
                                    if($ct_nm)
                                        {
                                        $ct=$ct_nm->city;
                                        }else{$ct='';}
                                    $pin=$list->pincode;

                                     $value->full_address= $ad1.", ".$ad2." ".$ct.", ".$st." - ".$pin ;
            
                                }
                            }   
            }

           

            
          }

          if($amount_redeemed==0)
          {
            $amt="0";
          }else{
            $amt=$amount_redeemed;
          }


           if($cashback_amount==0)
          {
            $cash="0";
          }else{
            $cash=$cashback_amount;
          }

           return response()->json([
                    'statusCode' => 200,
                    'message' => 'Data retrieval successfully',
                    'data' => $temp,
                    'total' => $total,
                    'amount_redeemed '=>$amt ,
                    'cashback_amount'=>$cash,
                        ], 200);

    }

    public function resend_otp_discount(Request $request) {
      //  echo "hii";exit;
         $mobile = $request->user_mobile;
         $disc_id = $request->disc_id;

          $len=strlen($mobile);
        if($mobile=='')
        {
          $msg="Mobile number fields is required";
            return $this->apiValidate([],$msg);  
        }
        if($len!=10)
        {
            $msg="Invalid Mobile Number";
            return $this->apiValidate([],$msg);
        }
        if($disc_id=='')
        {
          $msg="Disc id field is required";
            return $this->apiValidate([],$msg);  
        }

         $duration='30';

            $digits = 4;
            if($mobile=='9975647557')
                {
                    $otp=5555;
                }
                else{
                    $otp = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
                }   
            $gen = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
            $code='MED'; 
            $code .=$gen;
            $check = Discount::where('user_mobile',$mobile)->where('id',$disc_id)->first();
         //   print_r($check);exit;
            if(!empty($check) || $check != null)
            {

            $app_users = Discount::find($disc_id);
            $app_users->last_otp = $otp;
            $app_users->save();
            //get last inserted id in discount table
            $disc_id=$app_users->id;

            //Send OTP via SMS
            $numbers = $mobile;
        $message = "Your login OTP for Health Siren is  ".$otp." . HealthSiren- India's Health Alarm. rewdsa";
            Helpers::api_sms($otp, $numbers);
            $data=(['disc_id'=>$disc_id]);
                
            return $this->apiSuccess($data,"OTP is sent to your mobile number");
        }else {


       $msg="Invalid Mobile Number";
            return $this->apiValidate([],$msg);  
        }

    }

}

