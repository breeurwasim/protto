<?php
$url = 'https://api.elasticemail.com/v2/email/send';

try{
        $post = array('apikey' => '7cd4b7a8-baa3-45ec-955f-a8a0346be3b6',
                      'to' => 'kunjan@protto.in',
                      'template' => 'WelcomeEmail',
                      'merge_username' => 'Allan Pinto',
                      'isTransactional' => false);
        
        $ch = curl_init();
            
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $post,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_SSL_VERIFYPEER => false
        ));
        
        $result=curl_exec ($ch);
        curl_close ($ch);
        
        echo $result;    
}
catch(Exception $ex){
    echo $ex->getMessage();
}
?>