<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Partners\PartnerController;
use App\Http\Controllers\StatecityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Partners\AvailablebedController;
use App\Http\Controllers\PartnerlistController;
use App\Http\Controllers\Partners\AmbulanceController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\Partners\DoctorController;
use App\Http\Controllers\Partners\ClinicdetailsController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\Partners\PaymentmethodController;
use App\Http\Controllers\Partners\LanguageController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\TpamasterController;
use App\Http\Controllers\InsurancemasterController;
use App\Http\Controllers\DoctormasterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\CallhistoryController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\VersionController;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */

// Route::middleware('auth:api')->get('/users', function (Request $request) {
//     return $request->users();
// });

Route::group(['prefix' => 'v1'], function () {
            Route::get('/category/list', [CategoryController::class, 'categoryList']);

            Route::group(['prefix' => 'admin'], function () { //partner
            
            Route::post('/login', [PartnerController::class, 'login']);    
            Route::post('/verifyotp', [PartnerController::class, 'verifyotp']);

    Route::group(['middleware' => 'assign.guard:api', 'jwt.verify'], function () {
            Route::get('/profile', [PartnerController::class, 'userProfile']);
            Route::put('/admin/update', [PartnerController::class, 'updateUser']);
            Route::get('/partner_type', [PartnerController::class, 'typeList']);

            Route::get('/bedlist', [AvailablebedController::class, 'bedList']);    
            Route::post('/createBed', [AvailablebedController::class, 'createBed']);
            Route::get('/viewBed/{id}', [AvailablebedController::class, 'viewBed']);
            Route::put('/updateBed/{id}', [AvailablebedController::class, 'updateBed']);
            Route::delete('/deleteBed/{id}', [AvailablebedController::class, 'deleteBed']);

             // Route::get('/ambulancelist', [AmbulanceController::class, 'ambulanceList']);    
           //  Route::post('/createAmbulance', [AmbulanceController::class, 'createAmbulance']);
           //  Route::get('/viewAmbulance/{id}', [AmbulanceController::class, 'viewAmbulance']);
           //   Route::put('/updateAmbulance/{id}', [AmbulanceController::class, 'updateAmbulance']);
           //   Route::delete('/deleteAmbulance/{id}', [AmbulanceController::class, 'deleteAm bulance']);
              
            Route::post('/upload', [UploadController::class, 'store']);
            Route::resource('/upload', UploadController::class);
             
            Route::get('/cliniclist', [ClinicdetailsController::class, 'cliniclist']);    
            Route::post('/createClinic', [ClinicdetailsController::class, 'createClinic']);
            Route::get('/viewClinic/{id}', [ClinicdetailsController::class, 'viewClinic']);
            Route::put('/updateClinic/{id}', [ClinicdetailsController::class, 'updateClinic']);
             
           // Route::get('/doctorlist', [DoctorController::class, 'doctorlist']);    
            Route::post('/createDoctor', [DoctorController::class, 'createDoctor']);
            Route::get('/viewDoctor/{id}', [DoctorController::class, 'viewDoctor']);
            Route::put('/updateDoctor/{id}', [DoctorController::class, 'updateDoctor']);
            Route::delete('/deleteDoctor/{id}', [DoctorController::class, 'deleteDoctor']);
             
            Route::get('/enquiryList', [EnquiryController::class, 'enquiryList']);

            Route::get('/paymethod', [PaymentmethodController::class, 'paymethod']);
            Route::get('/languages', [LanguageController::class, 'languages']);

        });
    });

        Route::group(['prefix' => 'user'], function () { //customer
            Route::post('/login', [AuthController::class, 'login']);
            Route::post('/verifyotp', [AuthController::class, 'verifyotp']);
            Route::post('/register', [AuthController::class, 'register']);
        
            Route::get('/state/list', [StatecityController::class, 'stateList']);
            Route::get('/city/list/{id}', [StatecityController::class, 'cityList']);
            Route::get('/type', [PartnerlistController::class, 'typeList']);
            Route::post('get_filtered_list', [PartnerlistController::class, 'get_filtered_list']);
            Route::get('specialities',[SpecialityController::class,'specialityList']);
            //tpa master 
            Route::get('/tpamaster', [TpamasterController::class, 'tpamasterList']);
              Route::get('treatments',[TreatmentController::class,'treatmentList']);

            //insurance master 
            Route::get('insurancemaster',[InsurancemasterController::class,'insurancemasterList']);
            Route::get('get_tpa_list/{id}', [InsurancemasterController::class, 'get_tpa_list']);
            //doctor master 
            Route::get('doctormaster',[DoctormasterController::class,'doctormasterList']);

             Route::get('get_bed_details',[RoomController::class,'getbeddetails']);
            Route::get('get_beds_of_partner',[RoomController::class,'get_beds_of_partner']);

              Route::get('/version', [VersionController::class, 'getAppVersion']);
            
            Route::group(['middleware' => ['assign.guard:app_api', 'jwt.verify']], function () {

            Route::get('/profile', [AuthController::class, 'userProfile']);
            Route::post('/me', [AuthController::class, 'userProfile']);
            Route::put('/user/update', [AuthController::class, 'updateUser']);
            Route::post('/logout', [AuthController::class, 'logout']);
            Route::post('/refresh', [AuthController::class, 'refresh']);

           //Route::post('me', 'Api\AuthController@me');

            Route::get('/partner/list', [PartnerlistController::class, 'partnerList']);
            //Route::get('get_filtered_list', [PartnerlistController::class, 'get_filtered_list']);
  
            Route::post('/upload', [UploadController::class, 'store']);
            Route::resource('/upload', UploadController::class);


          //  Route::get('/profile/check/{id}', [AuthController::class, 'profile_completed']);

            Route::post('/createRating', [RatingController::class, 'createRating']);
            
            Route::get('/ratings/{id}', [RatingController::class, 'ratingList']);

            Route::post('/createEnquiry', [EnquiryController::class, 'createEnquiry']);

            Route::post('/add_favourite', [BookmarkController::class, 'addBookmark']);
            Route::post('/remove_favourite', [BookmarkController::class, 'addBookmark']);
            Route::get('/favourite_list', [BookmarkController::class, 'bookmarkList']);

           

            //Discount 
            Route::post('share_patient_details',[DiscountController::class,'share_patient_details']);
            Route::get('verifyotp_discount',[DiscountController::class,'verifyotp_discount']);
            Route::get('discount_list_user',[DiscountController::class,'discount_list_user']);
            Route::post('resend_otp_discount',[DiscountController::class,'resend_otp_discount']);
            

            Route::post('/create_call', [CallhistoryController::class, 'create_call']);
            Route::get('/call_history',[CallhistoryController::class,'call_history']);

            });
        });
});