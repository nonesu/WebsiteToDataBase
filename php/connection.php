<?php
                                    // -*-*-*-*-*-* Connect to database *-*-*-*-*-*
    function getConnection(){
    
    }
        $user = "Ahmed";
        $pass = "azert123456";
        $servername="localhost";
        $db="GestionService_Employe";
    try{
        
        $connection = new PDO("mysql:host=$servername;dbname=$db",$user,$pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }

    catch(PDOException $e){
        echo "Error ".$e->getMessage();
    }
    $connection=NULL;
    return $connection;
    

?>
