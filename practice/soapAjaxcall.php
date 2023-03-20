<?php
require_once 'classes/SoapAPI.class.php';

$soapApi = new  SoapApi();

if (isset($_POST['functionName'])){

$functionName = $_POST['functionName'] ;

switch ($functionName){

    case 'searchCustomer':
        $soapApi->SearchCustomer();
        break;
}

}
