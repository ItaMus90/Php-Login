<?php 
    $dns;
    $dbroot;
    $dbpass;
  
    try{
        $db = new PDO($dns,$dbroot,$dbpass);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected to cryingab_users database";
    }catch(PDOException $ex){
        echo "Connected Faild".$ex->getMessage();
    }

?>
