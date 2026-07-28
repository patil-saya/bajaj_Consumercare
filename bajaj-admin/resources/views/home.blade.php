@extends('layouts.app')
@section('content')
<body>

<div class="table-responsive">   
<table id="partner"  class="display res " style="width:100%">
      <thead class="thead">
      <tr>
        <th>Date</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone No.</th>
        <th>Result</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
   
    </tbody>
  </table>
</div>

<!-- Admit model -->
            <!-- The Modal -->
                <div class="modal modalBg" id="status_modal">
                    <div class="modal-dialog">
                        <div class="modal-content"> 
                            <!-- Modal Header -->
                            <div class="modal-header mheader">
                                <span class="modal-title mh-title" id="fullname">Admit Patient</span>
                                <button type="button" style="color:#fff;" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <form role="form" id="status_form" action="{{ url('change_status') }}" method="post">
                            <input type="hidden" name="id" id="record_id" value=""/>
                            <!-- @csrf -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="patient_id">Select Status*</label>
                                            <select name="user_status" class="form-control dropdownhieght" id="user_status" data-error="#partnerError">
                                                <option value="">Select Status</option>
                                                <option value="New">New</option>
                                                <option value="Called">Called</option>
                                                <option value="Rewarded">Rewarded</option>
                                                <option value="Rejected">Rejected</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="alert-danger modal_error" style="padding: 0.5em; font-weight: bold; text-align: center;"> </div>   

                                        <div class="alert-success alert-dismissible response_alert" style="padding: 0.5em; font-weight: bold; text-align: center;">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="cutom_button_submit" name="admit" value="admit">Update Status</button>
                                        </div>
                                    </div>
                                </div>      
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
            </div>
            </div>

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<script type="text/javascript">
    jQuery(document).ready(function () {
    $('.modal_error').hide();
    $('.response_alert').hide();

    $('.discharge_error').hide();
    $('.discharge_response').hide();
    $('.disc_error').hide();
    $('.mycart').hide();

    $("#partner").DataTable({
        responsive: !0,
        processing: !0,
        serverSide: !0,
        "pageLength": 10,
        "order": [[ 0, "desc" ]],
        "dom": 'Brfrtip',
            "buttons": [
                {
                    "extend": 'excel',
                    "text": '<button class="btn">Export<i class="customExcelIcon" style="padding-left:41px; font-size:26px;"></i></button>',
                    "titleAttr": 'Excel',
                    "action": newexportaction
                },
            ],
        language: { search: "" },
        "ajax": {
        "url": "{{url('all_records')}}",
                "dataType": "json",
                "type": "POST",
                "data": function (d) {
                    d._token = "{{csrf_token()}}";
                },
                "deferLoading": 57,
                "initComplete": function (settings, json) {
                    // $(".preloader").fadeOut();
                }
        },
        columns: [//{data: "id"},
        {data: "created_at"},
        {data: "fullname"},
        {data: "email"},
        {data: "phoneno"},
        {data: "result"},
        {data: "status"},
        {data: "action"}
        ],
        'columnDefs': [{
        'targets': [], // column index (start from 0)
                'orderable': true, // set orderable false for selected columns
                createdRow: function (row, data, dataIndex) {
                // Set the data-status attribute, and add a class
                }
        }]
    });
    function newexportaction(e, dt, button, config) {
         var self = this;
         var oldStart = dt.settings()[0]._iDisplayStart;
         dt.one('preXhr', function (e, s, data) {
             // Just this once, load all data from the server...
             data.start = 0;
             data.length = 2147483647;
             dt.one('preDraw', function (e, settings) {
                 // Call the original action function
                 if (button[0].className.indexOf('buttons-copy') >= 0) {
                     $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                     $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                     $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                     $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-print') >= 0) {
                     $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
                 }
                 dt.one('preXhr', function (e, s, data) {
                     // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                     // Set the property to what it was before exporting.
                     settings._iDisplayStart = oldStart;
                     data.start = oldStart;
                 });
                 // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
                 setTimeout(dt.ajax.reload, 0);
                 // Prevent rendering of the full data to the DOM
                 return false;
             });
         });
         // Requery the server with the new one-time export settings
         dt.ajax.reload();
     }
    $('.dataTables_filter input').attr("placeholder", "Search");
    $('#status_form').validate({
        rules: {
            user_status: 'required',
        },
        messages: {
            user_status: 'Status is required',
        },

        submitHandler: function(form) {
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function(response) {
                    if(response=='success'){
                        //$('#status_modal').modal('hide');
                        $('.modal_error').hide();
                        $('.response_alert').show();
                        $('.response_alert').html('Status Changed Successfully..!');
                        setTimeout(function () {
                            location.reload(true);
                        }, 2000);
                    }else{
                        $('.modal_error').show();
                        $('.modal_error').html(response);
                    }
                }            
            });
        }
    });

    $("#reload_table").click(function (e) {
        $('#partner').DataTable().draw(true);
    })
    
});
</script>

<!-- script to fetch id for discharge form -->

<script type="text/javascript">
function statusModel(id,name){
    //console.log(name);
    $("#record_id").val(id);
    $("#fullname").text('User: '+name);
} 
</script>

</body>
</html>
@stop