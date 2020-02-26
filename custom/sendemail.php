<?php

require_once 'elasticemail/ElasticEmailClient.php';

ElasticEmailClient\ApiClient::SetApiKey("7cd4b7a8-baa3-45ec-955f-a8a0346be3b6");

function SendEmail($subject, $from, $fromName, $text, $html) {	
        $EEemail = new ElasticEmailClient\Email();
        
        try
        {
            $response = $EEemail->Send($subject, $from, $fromName, null, null, null, null, null, null, array(), array(), array(), array(), array(), array(), null, null, $html, $text, null, null, null, null, null, null);		
        }
        catch (Exception $e)
        {
            echo 'Something went wrong: ', $e->getMessage(), '\n';
            
            return;
        }		
        
        echo 'MsgID to store locally: ', $response->messageid, '\n'; // Available only if sent to a single recipient
        echo 'TransactionID to store locally: ', $response->transactionid;
    }
    
    $subject = "Test Protto";
    $fromEmail = "administrator@protto.in";
    $fromName = "Protto";
    $bodyText = "This is the body";
    $bodyHtml = "<h1>This is the body</h1>";

    SendEmail($subject, $fromEmail, $fromName, $bodyText, $bodyHtml);

?>