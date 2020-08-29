<?php
session_start();
class Flight extends dbobject
{
//    public $baseUrl = "http://localhost:3000";
    public $baseUrl = "http://localhost/foshizi_amadues/php_server";
//    public $baseUrl = "http://amadeus.foshizitours.com/php_server";
    private $merchant_id = "FOSHI-061011431020";
    private $secret      = "tk-BQRO3FSG%IJAEW%";
    public function getAirports($data)
    {
        $sql = "SELECT app_airport.name,app_airport.airport_code,app_airport.country_code,app_cities.city_name FROM app_airport JOIN app_cities ON app_airport.city_code = app_cities.city_code WHERE app_airport.type_code = 'A'";
        $result = $this->db_query($sql);
        $info = [];
        foreach($result as $row)
        {
            $info[]  = array($row['name']." ".$row['city_name'],$row['airport_code'],$row['country_code'],$row['city_name']);
        }
        file_put_contents("airports.json",json_encode($info));
        return json_encode($info);
    }
    
    public function filterAirport($data)
    {
        $query = $data['q'];
        $curl      = curl_init();
        curl_setopt_array( $curl, array(
//           CURLOPT_URL => "192.168.5.35/agentOne/api/".$endpoint,
          CURLOPT_URL => "https://wakanow-api-locations-production-prod.azurewebsites.net/api/locations/airport/".$query,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_POSTREDIR => 3,
         
        ));

        $response   = curl_exec($curl);
        $err        = curl_error($curl);

        curl_close($curl);

        if($err) 
        {
            $keep = array("response_code"=>78,"message"=>"Server error");
            return  json_encode($keep);
        }
//        $xml = new SimpleXMLElement($response);
        $transform = [];
        foreach(json_decode($response,TRUE) as $row)
        {
            $transform[] = array($row['AirportCode'],$row['Description'],$row['CityCountry'],$row['City'],$row['Country']);
        }
        return json_encode($transform);
    }
    
    public function getAllAirports($data)
    {
        $sql    = "SELECT * FROM app_airport";
        $result = $this->db_query($sql);
        $info   = [];
        foreach($result as $row)
        {
            $country = $this->getitemlabel("country","country_code",$row['country_code'],"country_name");
//            $city    = $this->getitemlabel("cities","city_code",$row['city_code'],"city_name");  
            
            $info[]  = array("code"=>$row['airport_code'], "name"=>$row['name'],"country"=>$country);
        }
        return json_encode($info);
    }
    
    public function selectedSegment($data)
    {
        $itinerary = json_encode($data['book']);
        $session   = $data['cookie'];
        $id        = uniqid();
        $sql       = "INSERT INTO app_selected_itinerary (id,itinerary,created,session_id) VALUES ('$id','$itinerary',NOW(),'$session')";
        $count  = $this->db_query($sql,false);
        if($count > 0)
        {
            // hjhjh;
            return json_encode(array("response_code"=>0,"id"=>$id,"sess_time"=>time() + (60 * 14)));
        }
        else
        {
            return json_encode(array("response_code"=>59,"response_message"=>"unable to process itinerary"));
        }
    }
    public function signOut($data)
    {
        $this->makeRequest($arr_data,"signOut",$data['session']);
    }
    public function bookFlight($data)
    {
        $mgarr = [];
        $phone = "";
        $email = "";
        $cc    = 0;
        
        foreach($data['form']['adult'] as $row)
        {
            if($cc == 0)
            {
                $phone = $row['phone_number'];
                $email = $row['email'];
            }

            if(preg_match('/[^a-zA-Z]/', $row['first_name'].$row['surname']))
            {
                return json_encode(array("response_code"=>44,"response_message"=>"kindly enter latin characters for adult passenger"));
            }

            $adt_char_first_len = strlen($row['first_name']);
            $adt_char_last_len = strlen($row['surname']);
            if($adt_char_first_len > 30)
            {
                $diff = ($adt_char_first_len) - 30;
                $row['first_name'] = substr($row['first_name'],0,-$diff);
            }
            if($adt_char_last_len > 24)
            {
                $diff = ($adt_char_last_len) - 24;
                $row['surname'] = substr($row['surname'],0,-$diff);
            }
            $mgarr[] = array('passengerTypeCode'=>'ADT','passengerName'=>array('givenName'=>$row['first_name'],'NamePrefix'=>$row['prefix'],'Surname'=>$row['surname']),'birthDate'=>$row['dob'],'telephone'=>array('areacity'=>'234','phoneNumber'=>$phone),'email'=>$email);

            
            
            $cc++;
        }
        if(isset($data['form']['child']))
        {

            $adt_char_first_len = strlen($row['first_name']);
            $adt_char_last_len = strlen($row['surname']);
            if($adt_char_first_len > 30)
            {
                $diff = ($adt_char_first_len) - 22;
                $row['first_name'] = substr($row['first_name'],0,-$diff);
            }
            if($adt_char_last_len > 24)
            {
                $diff = ($adt_char_last_len) - 21;
                $row['surname'] = substr($row['surname'],0,-$diff);
            }
            

            foreach($data['form']['child'] as $row)
            {
                $mgarr[] = array('passengerTypeCode'=>'CHD','passengerName'=>array('givenName'=>$row['first_name'],'NamePrefix'=>$row['prefix'],'Surname'=>$row['surname']),'birthDate'=>$row['dob'],'telephone'=>array('areacity'=>'212','phoneNumber'=>$phone),'email'=>$email);
                if(preg_match('/[^a-zA-Z]/', $row['first_name'].$row['surname']))
                {
                    return json_encode(array("response_code"=>44,"response_message"=>"kindly enter latin characters for child passenger"));
                }
            }
        }
        if(isset($data['form']['infant']))
        {
            foreach($data['form']['infant'] as $row)
            {
                $mgarr[] = array('passengerTypeCode'=>'INF','passengerName'=>array('givenName'=>$row['first_name'],'NamePrefix'=>$row['prefix'],'Surname'=>$row['surname']),'birthDate'=>$row['dob'],'telephone'=>array('areacity'=>'212','phoneNumber'=>$phone),'email'=>$email);
                if(preg_match('/[^a-zA-Z]/', $row['first_name'].$row['surname']))
                {
                    return json_encode(array("response_code"=>44,"response_message"=>"kindly enter latin characters for infant passenger"));
                }
            }
        }
        file_put_contents("dkj.txt",json_encode($data));
        
        $mgarr = array("recommendationID"=>$data['rec'],"combinationID"=>$data['com'],"transactionID"=>date('Ymdhis'),"travelerInfo"=>$mgarr);
        $serv_resp = $this->makeRequest($mgarr,"bookFlight",$data['session']);
     
        if($serv_resp["code"] == 0)
        {
            if($serv_resp["message"]["responseCode"] == 0)
            {
                $this->makeRequest("","signOut",$data['session']);
                $data = $serv_resp["message"]["data"];
                file_put_contents('errs.txt',json_encode($serv_resp));
                $referenceID = $serv_resp["message"]["data"]['merchantTransactionID'];
                $transaction_id = $referenceID;//$this->savePassenger($data);
                return json_encode(array("response_code"=>0,"response_message"=>$serv_resp["message"]["responseMessage"],"data"=>array("trans_id"=>$transaction_id)));
            }else{
                return json_encode(array("response_code"=>$serv_resp["message"]["responseCode"],"response_message"=>$serv_resp["message"]["responseMessage"]));
            }
        }
        else
        {
            return json_encode(array("response_code"=>452,"response_message"=>"Server Error"));
        }
    }
    public function makePayment($data)
    {
        $trans_id = $data['payment_id'];
//        $sql      = "UPDATE app_transaction_table SET response_code = '0', response_message = 'Successful' WHERE transaction_id = '$trans_id'";
//        $this->db_query($sql,false);
        // email receipt to customer
        // display the receipt for printing
        $data = array("gatewayTransactionID"=>"000000222FOSHIZI_BK191126100344","merchantTransactionID"=>$trans_id);
        $ress = $this->makeRequest($data,"commitBooking","");
        file_put_contents('brit.txt',json_encode($ress));
        if($ress['message']['responseCode'] == "0")
        {
            return json_encode($ress['message']);
        }else
        {
            return json_encode($ress['message']);
        }
        
    }
   
    public function loadCountries()
    {
        $sql    = "SELECT country_code,country_name FROM app_tbl_countries";
        $result = $this->db_query($sql);
        $data   = array();
        foreach($result as $row)
        {
            $data[] = array("code"=>$row['country_code'],"name"=>$row["country_name"]);
        }
        return json_encode($data);
    }
    
    public function receiptData($data)
    {
        $trans_id = $data['trans_id'];
        $sql     = "SELECT * FROM app_transaction_table WHERE transaction_id = '$trans_id' LIMIT 1";
        $result  = $this->db_query($sql);
        $flight_code = $result[0]["flight_reservation_id"];
        $receipt = array();
        $receipt["passengers"] = $this->getPassengers($trans_id);
        $receipt["flight"]    = $this->getFlight($trans_id);
        $receipt["fare"]    = $result;
        return json_encode($receipt);
    }
    public function getPassengers($flight_code)
    {
        $sql    = "SELECT * FROM app_passenger_booking WHERE transaction_id = '$flight_code'";
        $result = $this->db_query($sql);
        return $result;
    }
    public function getFlight($flight_code)
    {
        $sql    = "SELECT * FROM app_flight_booking WHERE transaction_id = '$flight_code'";
        $result = $this->db_query($sql);
        return $result;
    }
    public function generateAuthentication()
    {
        $string = $this->merchant_id.":".$this->secret;
        return hash('sha512',$string);
    }
    public function makeRequest($arr_data,$endpoint,$session = "")
    {
//        echo "duces ".$_SESSION['session_cookie'];
        file_put_contents("manjaro.txt",json_encode($arr_data));
        $curl      = curl_init();
        curl_setopt_array( $curl, array(
          CURLOPT_URL => $this->baseUrl."/".$endpoint,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_POSTREDIR => 3,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($arr_data),
          CURLOPT_HEADERFUNCTION => function($curl, $header) use (&$headers)
          {
            $len = strlen($header);
            $header = explode(':', $header, 2);
            if (count($header) < 2) // ignore invalid headers
              return $len;

            $headers[strtolower(trim($header[0]))][] = trim($header[1]);

            return $len;
          },
          CURLOPT_HTTPHEADER => array(
            "content-type: application/json",
              "merchantid: ".$this->merchant_id,
            "access-token: ".$this->generateAuthentication()."",
            "x-cookie: ".$session.""
          ),
        ));
        
         $response   = curl_exec($curl);
        $err        = curl_error($curl);
        
        curl_close($curl);
        file_put_contents('grret.txt',$response);
            if($err)
            {   
                
                return array("code"=>785,"message"=>"error");
            }
            else
            {
                $response = json_decode($response,TRUE);
                
                return array("code"=>0,"message"=>$response);
            }
        
        
        
    }
    public function getACity($data)
    {
        $code = $data['codes'];
        $dd   = "SELECT city_name FROM app_cities WHERE city_code = '$code' LIMIT 1";
        $rs   = $this->db_query($dd);
        $info = [];
        return $rs[0]['city_name'];
    }
    
    
    public function searchFlight($data)
    {
        $routes = array();
        $direction = $data['direction'];
        if($direction == 0)
        {
            $routes[]       = array("departureDateTime"=>$data['departure'],"originLocation"=>$data['origin'],"destinationLocation"=>$data['destination']);
        }else
        {
           $routes[]       = array("departureDateTime"=>$data['departure'],"originLocation"=>$data['origin'],"destinationLocation"=>$data['destination']); 
            $routes[]       = array("departureDateTime"=>$data['return'],"originLocation"=>$data['destination'],"destinationLocation"=>$data['origin']);
        }
        
        $cabin = $data["cabin"];

        foreach($data['passengers'] as $rec)
        {
            $passengers[] = $rec;
        }
        $arr_data  = array("routes"=>$routes,"passengers"=>$passengers,"cabin"=>$cabin);
        
        file_put_contents('wizzy.txt',json_encode($arr_data));
        $curl      = curl_init();
        curl_setopt_array( $curl, array(
//           CURLOPT_URL => "192.168.5.35/agentOne/api/".$endpoint,
          CURLOPT_URL => $this->baseUrl."/searchFlight",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_POSTREDIR => 3,
          CURLOPT_CONNECTTIMEOUT=> 0,

        // Execute the cURL request for a maximum of 50 seconds
          CURLOPT_TIMEOUT=> 0,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($arr_data),
          CURLOPT_HEADERFUNCTION => function($curl, $header) use (&$headers)
          {
            $len = strlen($header);
            $header = explode(':', $header, 2);
            if (count($header) < 2) // ignore invalid headers
              return $len;

            $headers[strtolower(trim($header[0]))][] = trim($header[1]);

            return $len;
          },
          CURLOPT_HTTPHEADER => array(
            "content-type: application/json",
            "merchantid: ".$this->merchant_id,
            "access-token: ".$this->generateAuthentication()."",
            "x-cookie:".(($data["sess"] != "null" && $data["sess"] != "" && $data["sess"] != "undefined")?$data["sess"]:"").""
          ),
        ));
        
        $response   = curl_exec($curl);
        $err        = curl_error($curl);

        curl_close($curl);
        
        file_put_contents('keppa.txt',$response);
        if($err) 
        {
            file_put_contents('sly.txt',$err);
            $keep = array("response_code"=>78,"message"=>"Server error");
            return  json_encode($keep);
        }
        else 
        {
            $rep         = json_decode($response,TRUE);
            if($rep['responseCode'] == 0)
            {
                file_put_contents("log.txt",json_encode($headers));
                $keep = array("response_code"=>0,"message"=>"OK","result"=>$rep['data']['flightResult'],"session"=>$headers["x-cookies"][0],"expire_time"=>time() + (60 * 14));
                
            }else
            {
                $keep = array("response_code"=>$rep['responseCode'],"message"=>$rep["responseMessage"]);
            }
          return  json_encode($keep);
        }
    }
    
    public function ping($data)
    {
        $in = $this->makeRequest(array(),"signIn","");
        file_put_contents("ping_log.txt",json_encode($in));
        if($in["code"] == 0)
        {
            if($in["message"]["responseCode"] == 0)
            {
                return json_encode(array("response_code"=>0,"response_message"=>"success","session_id"=>$in["message"]["data"]["sessionID"],"expire_time"=>time() + (60 * 14)));
            }else
            {
                return json_encode(array("response_code"=>574,"response_message"=>"Ping Error: unable to connect to GDS provider"));
            }
        }else
        {
             return json_encode(array("response_code"=>574,"response_message"=>"API Error: unable to connect to GDS provider"));
        }
    }
    
    public function getCities($data)
    {
        $code = $data['code'];
        $sql = "SELECT city_name FROM app_cities WHERE city_code = '$code' LIMIT 1";
        $result = $this->db_query($sql);

        return $result[0]["city_name"];
    }
    public function getAirportName($data)
    {
        $code = $data['code'];
        $sql = "SELECT name FROM app_airport WHERE airport_code = '$code' LIMIT 1";
        $result = $this->db_query($sql);

        return $result[0]["name"];
    }
    public function packageData($data)
    {
        $new_data = array();
        $new_data['direction']   = $data['direction'];
        $new_data['departure']   = explode("T",$data['departure'])[0];
        $new_data['origin']      = explode("T",$data['origin'])[0];
        $new_data['destination'] = $data['destination'];
        $new_data['return']      = $data['return'];
        $new_data['passengers']  = $data['passengers'];
        $new_data['cabin']       = $data['cabin'];
        $new_data['op']          = "Flight.searchFlight";
        // return json_encode($new_data);
        $json_encoded_data = json_encode($new_data);
        // If there is a child passenger, check if the count of child is > adult count
        file_put_contents("pass_cnt.txt",json_encode($data['passengers']));
        if(in_array("INF",$data['passengers']))
        {
            $search_res = array_count_values($data['passengers']);
            if($search_res["INF"] > $search_res["ADT"])
            {
                $keep = array("response_code"=>718,"response_message"=>"The number of children selected must not be greater than adult.");
                return  json_encode($keep); 
            }
        }
        $encrypt_data = $this->EncryptData("mykey",$json_encoded_data);
         $keep = array("response_code"=>0,"response_message"=>$encrypt_data);
         return  json_encode($keep); 
    }
    public function getAirlineName($data)
    {
        $code = $data['code'];
        $sql = "SELECT airline_name FROM app_airline WHERE airline_code = '$code' LIMIT 1";
        $result = $this->db_query($sql);

        return $result[0]["airline_name"];
    }
}