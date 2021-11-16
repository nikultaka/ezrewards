<?php
require_once './Requests/library/Requests.php';
require_once './Requests/src/Autoload.php';
Requests::register_autoloader();

function addNewMember($data)
{
    if($_SESSION["Member"] == "DirectMember"){
        $Url = 'https://rewards.endurancezone.com/AwareIM/REST/EzRewards/NewMember';
    }
    else{
        $Url = 'https://rewards.endurancezone.com/AwareIM/REST/EzRewards/PartnerMember';
    }

    $response = Requests::post($Url,
    array(),
    $data);
    $output=simplexml_load_string($response->body);
    return $output;

}

?>
