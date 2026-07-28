<?php

namespace App;

class Helpers {

    public static function send_sms($message, $number) {
        // Account details
        $apiKey = urlencode('7U+cDIKBNWI-H1NSOvUQrcLLdwZAGYSBzAI7kPQGHs');

        // Message details
        $numbers = array($number);
        $sender = urlencode('CMPHSP');
        $message = rawurlencode($message);

        $numbers = implode(',', $numbers);

        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
//print_r($data);exit;        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        // print_r($response);exit;
        curl_close($ch);
        // Process your response here
        //echo $response;
    }

    public static function distance_matrix($lat1,$lon1,$lat2,$lon2)
    {
        // echo 'https://maps.googleapis.com/maps/api/distancematrix/json?destinations='.$lat2.','.$lon2.'&origins='.$lat1.','.$lon1.'&key=AIzaSyAIDOKltUhBJrXEYdPicuHjEUsfuQ6HF-s';exit;

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://maps.googleapis.com/maps/api/distancematrix/json?destinations='.$lat2.','.$lon2.'&origins='.$lat1.','.$lon1.'&key=AIzaSyB3xnnkjQ_TI1AKy1UFSF3pT72ydex_jTE',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $a=json_decode($response);
       // print_r($a);exit;
        $elements = $a->rows[0]->elements;
        $distance = $elements[0]->distance->text;
        $duration = $elements[0]->duration->text;
       // print_r($response);exit;
        return $duration;
    }
     public static function api_sms($otp, $number) {
        // Account details
        //$apiKey = urlencode('7U+cDIKBNWI-H1NSOvUQrcLLdwZAGYSBzAI7kPQGHs');

        // Message details
        $numbers = array($number);
        $sender = urlencode('MEDICX');
      //  $message = rawurlencode($message);
        $numbers = implode(',', $numbers);


        // Prepare data for POST request
        // $data = array(
        //  'username' => "MEDICX",
        //  'password'=>"Med@456" ,
        //  'from' => $sender, 
        //  'to' => $numbers,
        //  "text" => $message,
        //  "pe_id"=>'1701164214164569374',
        //  "template_id"=>'1707164276148992334');

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://49.50.67.32/smsapi/httpapi.jsp?username=MEDICX&password=Med@456&from=MEDICX&to='.$numbers.'&text=Greetings!%20'.$otp.'%20is%20OTP%20to%20Register%20/%20Login%20to%20Medic24x7.%20Your%20OTP%20is%20valid%20for%2030%20Mins.&pe_id=1701164214164569374&template_id=1707164276148992334',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Cookie: JSESSIONID=4EE29991B88DEA9B347634FD42E31E13'
  ),
));

$response = curl_exec($curl);

    }

    public static function numberTowords($num) {
        $ones = array(
            1 => "one",
            2 => "two",
            3 => "three",
            4 => "four",
            5 => "five",
            6 => "six",
            7 => "seven",
            8 => "eight",
            9 => "nine",
            10 => "ten",
            11 => "eleven",
            12 => "twelve",
            13 => "thirteen",
            14 => "fourteen",
            15 => "fifteen",
            16 => "sixteen",
            17 => "seventeen",
            18 => "eighteen",
            19 => "nineteen"
        );
        $tens = array(
            1 => "ten",
            2 => "twenty",
            3 => "thirty",
            4 => "forty",
            5 => "fifty",
            6 => "sixty",
            7 => "seventy",
            8 => "eighty",
            9 => "ninety"
        );
        $hundreds = array(
            "hundred",
            "thousand",
            "million",
            "billion",
            "trillion",
            "quadrillion"
        ); //limit t quadrillion 
        $num = number_format($num, 2, ".", ",");
        $num_arr = explode(".", $num);
        $wholenum = $num_arr[0];
        $decnum = $num_arr[1];
        $whole_arr = array_reverse(explode(",", $wholenum));
        krsort($whole_arr);
        $rettxt = "";
        foreach ($whole_arr as $key => $i) {
            if ($i < 20) {
                $rettxt .= $ones[$i];
            } elseif ($i < 100) {
                $rettxt .= $tens[substr($i, 0, 1)];
                $rettxt .= " " . $ones[substr($i, 1, 1)];
            } else {
                $rettxt .= $ones[substr($i, 0, 1)] . " " . $hundreds[0];
                $rettxt .= " " . $tens[substr($i, 1, 1)];
                $rettxt .= " " . $ones[substr($i, 2, 1)];
            }
            if ($key > 0) {
                $rettxt .= " " . $hundreds[$key] . " ";
            }
        }
        if ($decnum > 0) {
            $rettxt .= " and ";
            if ($decnum < 20) {
                $rettxt .= $ones[$decnum];
            } elseif ($decnum < 100) {
                $rettxt .= $tens[substr($decnum, 0, 1)];
                $rettxt .= " " . $ones[substr($decnum, 1, 1)];
            }
        }
        return $rettxt;
    }

}

?>