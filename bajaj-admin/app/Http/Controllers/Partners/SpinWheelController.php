<?php

namespace App\Http\Controllers\Partners;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\SpinWheel;
use App\Models\Upload;
use App\Models\Adminlog;
use App\Models\DischargeBillParticulars;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;
use App\Models\Treatment;
use Session;

class SpinWheelController extends Controller
{
    public function index(){
     
      $session_id = Session::get('user_id');

      $records=DB::table('spinwheel_records')->select('*')->get()->toArray();
      
      $url = 'all_records';
      return view('home', compact('url','records'));
      
  }

  public function change_status(Request $request){
  
    //return $request;die;
    //dd($request);
    $session_id = Session::get('user_id');
    $patient = SpinWheel::find($request->id); 

    $spinwheel = SpinWheel::find($request->id);
    $spinwheel->status = $request->user_status;  
    $spinwheel->update();

    $session_name = Session::get('user_name');

    $query=DB::table('spinwheel_records')->select('fullname')->where('id',$request->id)->first();

    $log = new Adminlog();
    $log->table_name = "spinwheel_records";
    $log->record_id  = $request->id;
    $log->admin_user_id  = $session_id;
    $log->action = "status_changed";
    $log->entity = "partner";
    $log->description = $session_name." changed status of ". $query->fullname ." to ". $request->user_status;
    $log->save();                         

    return 'success';                     
  }

  public function spinwheel_data(Request $request){
      //print_r($request->input('length')); die;
    $session_id = Session::get('user_id');
      $com = new SpinWheel;
      $columns = [
        0 => "created_at",
        1 => "fullname",
        2 => "email",
        3 => "phoneno",
        4 => "result",
        5 => "status",
        7 => "id",
      ];
      //treatment_needed
      $totalData = SpinWheel::count();
      $totalFiltered = $totalData;
      $limit = $request->input('length');
      $start = $request->input('start');
      $order = $columns[$request->input('order.0.column')];
      $dir = $request->input('order.0.dir');

      if (empty($request->input('search.value'))) {
        $spinwheels = SpinWheel::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
      } else {

          $search = $request->input('search.value');

          $spinwheel_qr = SpinWheel::select('*');
          $spinwheel_qr->where(function ($query) use ($columns, $search) {
            foreach ($columns as $col):
                $query->orWhere($col, 'like', '%' . $search . '%');
            endforeach;
             return $query;
        });

          $spinwheel_qr->offset($start)
                  ->limit($limit)
                  ->orderBy($order, $dir);
          $spinwheels = $spinwheel_qr->get();

          $totalFiltered_qr = SpinWheel::select('id');
          $totalFiltered_qr->where(function ($query) use ($columns, $search) {
            foreach ($columns as $col):
                $query->orWhere($col, 'like', '%' . $search . '%');
            endforeach;
            return $query;
            });
          $totalFiltered = $totalFiltered_qr->count();
      }

      $data = array();
      if (!empty($spinwheels)) {
          foreach ($spinwheels as $spinwheel) {
              $history = $spinwheel->toArray();
              $nestedData['id'] = $spinwheel->id;
              $nestedData['fullname'] = $spinwheel->fullname;
              $nestedData['email'] = $spinwheel->email;
              $nestedData['phoneno'] = $spinwheel->phoneno;
              $nestedData['result'] = $spinwheel->result;
              $nestedData['status'] = $spinwheel->status;
              $nestedData['created_at'] = date('d/m/Y H:i:s', strtotime($spinwheel->created_at));
              $nestedData['updated_at'] = date('d/m/Y', strtotime($spinwheel->updated_at));
              
              $status_action = '<span style="color: #4285f4;padding-left: 0px;padding-right: 8px;" type="button" class="" data-toggle="modal" data-id="' . $spinwheel->id . '" data-target="#status_modal" onclick="statusModel(' . $spinwheel->id . ',`' . $spinwheel->fullname . '`);">Change Status</span>';

              $nestedData['action'] = $status_action;

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