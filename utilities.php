<?php
 ini_set('max_execution_time', 30);
include_once("libs/dbfunctions.php");
// Include all classes in the classes folder
//error_reporting(1);
foreach (glob("class/*.php") as $filename) {
	include_once($filename);
}
//error_reporting(E_ALL);
//$bd = new dbobject();
//$dds = $bd->DecryptData($_SESSION['crypto_key_sess'],$_REQUEST['op']);
//$token_class = explode(".", $dds);
//    if(!class_exists($token_class[0]))
//    {
//        echo json_encode(array('response_code'=>789,'response_message'=>'Token has been tampered with'));
//        exit();
//    }

//echo "fdgfhj";
// User.login
$op = $_REQUEST['op'];
//user.register
//$op =  $dbobject->DecryptData("pacific",$op);
$operation  = array();
$operation = explode(".", $op);


// getting data for the class method
$params = array();
$params = $_REQUEST;
$data = [$params];


//////////////////////////////
/// callling the method of  the class
$foo = new $operation[0];
echo call_user_func_array(array($foo, trim($operation[1])), $data);
//}else
//{
//	echo "invalid token";
//}