<?php

require('mailin.php');
    $mailin = new Mailin("https://api.sendinblue.com/v2.0","qQWzcECODa0yP3rV");
    $data = array( "id" => 2,
      "to" => "kunjan@protto.in",
      "replyto" => "noreply@protto.in",
      "attr" => array("NAME"=>"Allan Pinto", "BIKE"=>"Yamaha FZ", "TIME"=>"9am - 12noon", "DATE"=>"2018/09/29", "BOOKID"=>"36483627846235", "ADDRESS"=>"sdkfhds khkdsfhdshfk dshk sdhfk dshfk dshdf ss", "TYPE"=>"ProWet", "AMOUNT"=>"1499"),
      "headers" => array("Content-Type"=> "text/html;charset=iso-8859-1")
    );

    var_dump($mailin->send_transactional_template($data));
    
?>