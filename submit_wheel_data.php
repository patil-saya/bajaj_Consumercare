<?php

// $data['success'] = true;
// $data['message'] = 'success';
// echo json_encode($data);

$connection = new mysqli("127.0.0.1","jnnwdsaahs","G54jU2s32B","jnnwdsaahs"); 
//$connection = new mysqli("localhost","root","","bajaj_consumer"); // Establishing Connection with Database Server 

//print_r($_POST); die;

if(isset($_POST['result'])){ // Fetching variables of the form which travels in URL
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $result = $_POST['result'];
    $address = $_POST['address'];
    if($fullname !='' && $email !=''){
        //Insert Query of SQL
        $connection->query("insert into spinwheel_records(fullname, email, phoneno, result, address) values ('$fullname', '$email', '$phoneno', '$result', '$address')");
        // echo "<br/><br/><span>Data Inserted successfully...!!</span>";
        $last_id = $connection->insert_id;
        $code = 'NA';
        if(strpos($result, 'Amazon') !== false){
            $getCode = $connection->query("select * from spinwheel_codes where user_id is null limit 1");
            $user_code = $getCode->fetch_assoc(); 
            $code = $user_code['code'];

            $connection->query("update spinwheel_codes set user_id='$last_id' where code='$code'");
        }

        $data['success'] = true;
        $data['message'] = 'success';
        $data['result'] = $result;
        $data['code'] = $code;
        echo json_encode($data);
        //echo 'success';
    }
    else{
        // echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
        $data['success'] = false;
        $data['errors'] = "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
        echo json_encode($data);
        //echo 'error';
    }
}
mysqli_close($connection); // Closing Connection with Server
?>