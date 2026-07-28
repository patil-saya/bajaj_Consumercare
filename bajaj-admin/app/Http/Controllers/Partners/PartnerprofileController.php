<?php
namespace App\Http\Controllers\Partners;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\City;
use App\Models\State;
use App\Models\Tpamaster;
use App\Models\insurance_master;
use App\Models\Speciality;
use App\Models\Doctor;
use App\Models\Discount;
use App\Models\Adminlog;
use App\Models\Adminbilling;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
//use App\Http\Controllers\Helpers;
use App\Helpers;
use App\Models\Upload;
use App\Models\AvailableBed;
use App\Models\Bedtype;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;
use Session;


class PartnerprofileController extends ApiController
{
   
    public function userProfile() {

        $id = Session::get('user_id');

        $requests = User::select('partners.*')->where('partners.id',$id)->get();
        // print_r($requests);exit;

        $city = City::select('*')->where('is_delete',0)->orderby('city')->get();
        $state = State::select('*')->where('is_delete',0)->orderby('state')->get();   
//added is delete condition
        $tpa_list = Tpamaster::select('*')->where('is_delete',0)->orderby('tpa_name')->get(); 
        $insurance_list = Insurance_master::select('*')->where('is_delete',0)->orderby('name_of_insurance')->get();
        $speciality_list = Speciality::select('*')->where('is_delete',0)->orderby('name')->get(); 
        $doctor_list = Doctor::select('*')->where('is_delete',0)->orderby('doctor_name')->get();  
        $partner_beds= AvailableBed::select('*')->where('partner_id',$id)->orderby('id')->get();
        $admin_person = Adminbilling::select('*')->where('partner_id',$id)->where('type',1)->get();
        //print_r($admin_person);exit;
        $billing_person = Adminbilling::select('*')->where('partner_id',$id)->where('type',2)->get();
        // $beds_inserted= AvailableBed::select('category_id')->where('partner_id',$id)->orderby('id')->get()->toArray();
        //  $arr=array();
        //  foreach($beds_inserted as $val)
        //  {
        //     $news=array_push($arr,$val['category_id']);
        //  }

        $bed_type= Bedtype::select('*')->where('is_delete',0)->orderby('category')->get();

        $partner_tpa = User::select('tpa','insurance_id','speciality','doctors')->where('id',$id)->first();   
        $array = explode(',',$partner_tpa->tpa);
        $array1 = explode(',',$partner_tpa->insurance_id);
        $array2 = explode(',',$partner_tpa->speciality);
        $array3 = explode(',',$partner_tpa->doctors);

        $selected_tpa_list = Tpamaster::select('tpa_name')->where('is_delete',0)->wherein('id',$array)->orderby('tpa_name')->get();
        $selected_insurance_list = Insurance_master::select('name_of_insurance')->where('is_delete',0)->wherein('id',$array1)->orderby('name_of_insurance')->get();
        $selected_speciality_list = Speciality::select('name')->where('is_delete',0)->wherein('id',$array2)->orderby('name')->get();
        $selected_doctor_list = Doctor::select('doctor_name')->where('is_delete',0)->wherein('id',$array3)->orderby('doctor_name')->get();    

        $patient = array();

        return view('managehopital', compact('requests','city','tpa_list','selected_tpa_list','insurance_list','selected_insurance_list','speciality_list','selected_speciality_list','doctor_list','selected_doctor_list','bed_type','partner_beds','state','admin_person','billing_person','patient'));
    }
    
    public function updateUser(Request $request) {

        // dd($request->all());die;
        $res = str_replace( array( '\'', '(',')', ';', '<', '>' ), ' ',$request->get('location'));
        $loc=explode(',',$res);
        $hospital_name=$request->get('hospitalName');
        $address=$request->get('address');
        $pincode=$request->get('zipCode');
        $city=$request->get('city_id');
        $state=$request->get('state_id');
        $mobile=$request->get('mobile');
        $email=$request->get('email');
        $gst=$request->get('gst');
        $address2=$request->get('address2');
        $location_name=$request->get('location_name');
        $place_id=$request->get('place_id');
        $admin_name=$request->get('admin_name');
        $admin_contact=$request->get('admin_contact');
        $billing_person_name=$request->get('billing_person_name');
        $billing_person_contact=$request->get('billing_person_contact');
        $id=session::get('user_id');
       
        if (User::where('id', $id)->exists()) {
        
            $user = User::find($id);
            $user->title = is_null($hospital_name) ? $user->title : $hospital_name;
            $user->address = is_null($address) ? $user->address : $address;
            $user->city = is_null($city) ? $user->city : $city;
            $user->pincode = is_null($pincode) ? $user->pincode : $pincode;
            $user->state= is_null($state) ? $user->state : $state;
            $user->mobile= is_null($mobile) ? $user->mobile : $mobile;
            $user->email= is_null($email) ? $user->email : $email;
            $user->gst_number= is_null($gst) ? $user->gst : $gst;
            $user->address2= is_null($address2) ? $user->address2 : $address2;
            $user->location_name= is_null($location_name) ? $user->location_name : $location_name;
            $user->place_id= is_null($place_id) ? $user->place_id : $place_id;

            $user->admin_name= is_null($admin_name) ? $user->admin_name : $admin_name;
            $user->admin_contact= is_null($admin_contact) ? $user->admin_contact : $admin_contact;
            $user->billing_person_name= is_null($billing_person_name) ? $user->billing_person_name : $billing_person_name;
            $user->billing_person_contact= is_null($billing_person_contact) ? $user->billing_person_contact : $billing_person_contact;
           
            if($request->get('location')){
                $user->latitude= is_null($loc['0']) ? $user->latitude : trim($loc['0']);
                $user->longitude= is_null($loc['1']) ? $user->longitude : trim($loc['1']);
            }
            $user->save();

              $log = new Adminlog();
              $log->table_name = "partners";
              $log->record_id  = $id;
              $log->action = "profile update";
              $log->entity = "partner";
              $log->description = $hospital_name." updated profile ";
              $log->save();   
            /* $billing_contact=$request->get('billing_contact');
            $billingPersonName=$request->get('billingPersonName');
            $adminName=$request->get('adminName');
            $admin_contact=$request->get('admin_contact');
        
            if($billingPersonName != '')
            {

            DB::table('admin_billing')->where('type',2)->delete(); 

            $admin = new Adminbilling ;
            $admin->name=$billingPersonName;
            $admin->user_mobile=$billing_contact;
            $admin->type=2;
            $admin->partner_id=$id;
            $admin->save();
            }

            if($adminName !='')
            {

            DB::table('admin_billing')->where('type',1)->delete(); 

            $admin = new Adminbilling;
            $admin->name=$adminName;
            $admin->user_mobile=$admin_contact;
            $admin->type=1;
            $admin->partner_id=$id;
            $admin->save();
            }*/
            $tabProfile = $request->get('tabProfile');
            return back()->with(['tabProfile'=>$tabProfile])->with('profile','Profile updated successfully');
            // return redirect('profile');
        } 
    }

    public function add_bed(Request $request) {  

        if(empty($request->get('category_id'))){
            return redirect()->back()->withErrors(['error' => 'No bed added']);            
        }
        // $validated = $request->validate([
        //     'category_id' => 'required',
        //     'total_beds' => 'required',
        //     'beds_occupied' => 'required',
        //     'price' => 'required',
        //     'deposite' => 'required',
        //     'total_beds' => 'required',
        // ]);

        // return $request;
        // die;
        
        // $validator = Validator::make($request->all(), [
        //     "category_id"    => "required",
        //     "category_id.*"  => "required",
        //     "total_beds"    => "required",
        //     "total_beds.*"  => "required",
        //     "beds_occupied"    => "required",
        //     "beds_occupied.*"  => "required",
        //     "price"    => "required",
        //     "price.*"  => "required",
            
        // ]);

        $bed_type=$request->get('category_id');
        $total_bed=$request->get('total_beds');
        $beds_occupied=$request->get('beds_occupied');
        $price=$request->get('price');
        $deposite=$request->get('deposite');

        $id=session::get('user_id');

        // $array=array($bed_type,$total_bed,$beds_occupied,$price,$deposite);
        // $dups = array();
        // foreach(array_count_values($bed_type) as $val => $c)
        // {
        //  if($c > 1) 
        //     {
        //     $dups[] = $val;
        //     return back()->with('error', 'Duplicate entry for bed type');
        //     }    
            
        // }

        $total_elements=sizeof($bed_type);
        
        for($i=0;$i<$total_elements;$i++)
        {
            $partner_beds= AvailableBed::select('id')->where('partner_id',$id)->where('category_id',$bed_type[$i])->orderby('id')->first();
        
            if($partner_beds) 
            {   
                $beds = AvailableBed::find($partner_beds->id);
                $beds->partner_id =is_null($id) ? $beds->partner_id : $id;  
                $beds->category_id =is_null($bed_type[$i]) ? $beds->category_id:$bed_type[$i];
                $beds->total_beds =is_null($total_bed[$i]) ? $beds->total_beds:$total_bed[$i]; 
                $beds->beds_occupied = is_null($beds_occupied[$i]) ? $beds->beds_occupied:$beds_occupied[$i];
                $beds->price = is_null($price[$i]) ? $beds->price:$price[$i];
                $beds->deposite = is_null($deposite[$i]) ? $beds->deposite:$deposite[$i]; 
                $beds->save();
            }
            else {
                $beds = new AvailableBed;
                $beds->partner_id = $id;
                $beds->category_id =$bed_type[$i];
                $beds->total_beds = $total_bed[$i];
                $beds->beds_occupied = $beds_occupied[$i];
                $beds->price = $price[$i];
                $beds->deposite = $deposite[$i];
                $beds->save();
            }
        }
        $tabBedsanddesposits = $request->get('tabBedsanddesposits');
        if($partner_beds)
        {
            return back()->with(['tabBedsanddesposits'=>$tabBedsanddesposits])->with('success','Beds and deposits updated successfully');
        }
        else
        {   
            return back()->with(['tabBedsanddesposits'=>$tabBedsanddesposits])->with('success','Beds and deposits added successfully');
        }    
            
        
        //return redirect()->back()->withInput(['tab' => $tab]);
        //return redirect()->back(); //redirect('profile');
        
    }

    public function remove_bed(Request $request)
    {
        DB::table('available_beds')->where('id', $request->id)->delete();
    }

    public function add_tpa(Request $request) {

        $tpa_list = Tpamaster::select('id')->where('tpa_name',$request->id)->first()->toArray();
        $id=session::get('user_id');
 
        if (User::where('id', $id)->exists()) {

            $tpa_id = User::select('tpa')->where('id',$id)->first();   

            $user = User::find($id);
            $array = explode(',',$tpa_id->tpa);
            $a=explode(' ',$tpa_list['id']);
            $b=implode(' ',$a);

            if (strpos($tpa_id,$b) == false) {
                $tpa=$tpa_id->tpa;
                if($tpa !='') {
                    $tpa.=',';
                }
                $tpa.=$tpa_list['id'];
                $user->tpa=$tpa;
            }
            $user->save();
        }
    }

    public function remove_tpa(Request $request) {

        $tpa_list = Tpamaster::select('id')->where('tpa_name',$request->id)->first()->toArray();
        $id=session::get('user_id');
 
        if (User::where('id', $id)->exists()) {

            $tpa_id = User::select('tpa')->where('id',$id)->first();   

            $user = User::find($id);
            $array = explode(',',$tpa_id->tpa);
            $a=explode(' ',$tpa_list['id']);
            $b=implode(' ',$a);

            if (strpos($tpa_id,$b) == true) {
                $array_values=array_Search($b, $array);
                unset($array[$array_values]);
         
                $ar3=$array;
                if (!empty($ar3) && !is_null($ar3)) {
                    $commaList3 = implode(',',$ar3);
                    $user->tpa=$commaList3;
                } else {
                    $user->tpa='';
                }
            }
            $user->save();
        }
    }

    public function add_insurance(Request $request) {

        $tpa_list = insurance_master::select('id')->where('name_of_insurance',$request->id)->first()->toArray();
        $id=session::get('user_id');
 
        if (User::where('id', $id)->exists()) {

            $insurance_id = User::select('insurance_id')->where('id',$id)->first();   

            $user = User::find($id);
            $array = explode(',',$insurance_id->insurance_id);
            $a=explode(' ',$tpa_list['id']);
            $b=implode(' ',$a);

            if (strpos($insurance_id,$b) == false) {
           
                $tpa=$insurance_id->insurance_id;
                if($tpa !='') {
                    $tpa.=',';
                }
                $tpa.=$tpa_list['id'];
                $user->insurance_id=$tpa;
            }
            $user->save();
        }
    }

    public function remove_insurance(Request $request) {

        $tpa_list = insurance_master::select('id')->where('name_of_insurance',$request->id)->first()->toArray();
        $id=session::get('user_id');
 
        if (User::where('id', $id)->exists()) {
            $tpa_id = User::select('insurance_id')->where('id',$id)->first();   

            $user = User::find($id);
            $array = explode(',',$tpa_id->insurance_id);
            $a=explode(' ',$tpa_list['id']);
            $b=implode(' ',$a);

            if (strpos($tpa_id,$b) == true) {
                $array_values=array_Search($b, $array);
                unset($array[$array_values]);
         
                $ar3=$array;
                if (!empty($ar3) && !is_null($ar3)) {
                    $commaList3 = implode(',',$ar3);
                    $user->insurance_id=$commaList3;
                } else {
                    $user->insurance_id='';
                }
            }
            $user->save();
        }
    }

    public function add_speciality(Request $request) {
        $tpa_list = Speciality::select('id')->where('name',$request->id)->first()->toArray();
        $id=session::get('user_id');
 
        if (User::where('id', $id)->exists()) {
            $speciality = User::select('speciality')->where('id',$id)->first();   

            $user = User::find($id);
            $array = explode(',',$speciality->speciality);
            $a=explode(' ',$tpa_list['id']);
            $b=implode(' ',$a);

            if (strpos($speciality,$b) == false) {
           
                $tpa=$speciality->speciality;
                if($tpa !='') {
                    $tpa.=',';
                }
                $tpa.=$tpa_list['id'];
                $user->speciality=$tpa;
            }
            $user->save();
        }
    }

    public function remove_speciality(Request $request) {

        $tpa_list = Speciality::select('id')->where('name',$request->id)->first()->toArray();
        $id=session::get('user_id');
 
        if (User::where('id', $id)->exists()) {

            $speciality = User::select('speciality')->where('id',$id)->first();   

            $user = User::find($id);
            $array = explode(',',$speciality->speciality);
            $a=explode(' ',$tpa_list['id']);
            $b=implode(' ',$a);

            if (strpos($speciality,$b) == true) {
                $array_values=array_Search($b, $array);
                unset($array[$array_values]);
         
                $ar3=$array;
                if (!empty($ar3) && !is_null($ar3)) {
                    $commaList3 = implode(',',$ar3);
                    $user->speciality=$commaList3;
                } else {
                    $user->speciality='';
                }
            } 
            $user->save();
        }
    }

    public function add_doctor(Request $request) {
        $tpa_list = Doctor::select('id')->where('doctor_name',$request->id)->first()->toArray();
        $id=session::get('user_id');
 
        if (User::where('id', $id)->exists()) {
            $doctors = User::select('doctors')->where('id',$id)->first();   

            $user = User::find($id);
            $array = explode(',',$doctors->doctors);
            $a=explode(' ',$tpa_list['id']);
            $b=implode(' ',$a);

            if (strpos($doctors,$b) == false) {
                $tpa=$doctors->doctors;
                if($tpa !='') {
                    $tpa.=',';
                }
                $tpa.=$tpa_list['id'];
                $user->doctors=$tpa;
            }
            $user->save();
        }
    }

    public function remove_doctor(Request $request) {

        $tpa_list = Doctor::select('id')->where('doctor_name',$request->id)->first()->toArray();
        $id=session::get('user_id');
    
        if (User::where('id', $id)->exists()) {

            $doctors = User::select('doctors')->where('id',$id)->first();   

            $user = User::find($id);
            $array = explode(',',$doctors->doctors);
            $a=explode(' ',$tpa_list['id']);
            $b=implode(' ',$a);

            if (strpos($doctors,$b) == true) {
                $array_values=array_Search($b, $array);
                unset($array[$array_values]);
         
                $ar3=$array;
                if (!empty($ar3) && !is_null($ar3)) {
                    $commaList3 = implode(',',$ar3);
                    $user->doctors=$commaList3;
                } else {
                    $user->doctors='';
                }
            }
            $user->save();
        }
    }

    public function getCity(Request $request) {
        $city = City::select('*')->where('state_id',$request->state_id)->orderby('city')->pluck("city","id");
        return response()->json($city);
    }


    public function getbed(Request $request) {
        $id=Session::get('user_id');
        $bed = AvailableBed::select('*')->where('partner_id',$id)->where('category_id',$request->cat_id)->pluck("category_id");
        if($bed) {
            return response()->json($bed);
        }else {
            $a="na";
            return response()->json($a);
        }
    }
    //test comment 
    public function discharged_data(Request $request) {
        //print_r($request->input('length')); die;
        $session_id = Session::get('user_id');
        $com = new Discount;
        $columns = [
            0 => "created_at",
            1 => "patient_id",
            2 => "name",
            3 => "discount_code",
            4 => "discount_amount",
            5 => "total_amount",
            6 => "tpa_paid",
            7 => "date_of_admission",
            8 => "date_of_discharge",
            9 => "updated_at",
            10 => "bill_pdf",
            11 => "id",
            12 => "patient_disc_per",
           
        ];
        //treatment_needed
        $totalData = Discount::where([['date_of_discharge','!=',null],['partner_id', $session_id]])->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
        $discharged = Discount::where([['date_of_discharge','!=',null],['partner_id', $session_id]])
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {

            $search = $request->input('search.value');

            $discharge_qr = Discount::select('*')->where([['date_of_discharge','!=',null],['partner_id', $session_id]]);

             $discharge_qr->where(function ($query) use ($columns, $search) {
            foreach ($columns as $col):
                $query->orWhere($col, 'like', '%' . $search . '%');
            endforeach;
             return $query;
        });

            $discharge_qr->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir);
            $discharged = $discharge_qr->get();

            $totalFiltered_qr = Discount::select('id')->where([['date_of_discharge','!=',null],['partner_id', $session_id]]);
            $totalFiltered_qr->where(function ($query) use ($columns, $search) {
            foreach ($columns as $col):
                $query->orWhere($col, 'like', '%' . $search . '%');
            endforeach;
            return $query;
            });
            $totalFiltered = $totalFiltered_qr->count();
        }

        $data = array();
        if (!empty($discharged)) {
            foreach ($discharged as $discharge) {
                $history = $discharge->toArray();
                $nestedData['id'] = $discharge->id;
                $nestedData['created_at'] = (strtotime($discharge->created_at)!=null)?date('d/m/Y', strtotime($discharge->created_at)):'-';
                $nestedData['patient_id'] = $discharge->patient_id;
                $nestedData['name'] = $discharge->name;
                $nestedData['discount_code'] = $discharge->discount_code;
                $nestedData['discount_amount'] = $discharge->discount_amount;
                $nestedData['total_amount'] = $discharge->total_amount;
                $nestedData['tpa_paid'] = $discharge->tpa_paid;
                $nestedData['date_of_admission'] = (strtotime($discharge->date_of_admission)!=null)?date('d/m/Y', strtotime($discharge->date_of_admission)):'-';
                $nestedData['date_of_discharge'] = (strtotime($discharge->date_of_discharge)!=null)?date('d/m/Y', strtotime($discharge->date_of_discharge)):'-';
                
                $treatment = Speciality::find($discharge->treatment_needed);
                $nestedData['treatment_needed'] = $treatment['name']; 
                //$nestedData['category'] = $discount->researcgCategory->cat_name;
                $nestedData['updated_at'] = (strtotime($discharge->updated_at)!=null)?date('d/m/Y', strtotime($discharge->updated_at)):'-';

                $uploaded_bill = Upload::find($discharge->bill_pdf);
                if($discharge->bill_pdf){
                    $nestedData['bill_pdf'] = "<a style='color: #4285f4' href='" . url('').'/'.$uploaded_bill->path ."' download>Download</a>";
                } else {
                    $nestedData['bill_pdf'] = "<a style='color: #d4d2d2' class='action' href=''>Download</a>";
                }

                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
        return Response()->json($json_data);
    }
}