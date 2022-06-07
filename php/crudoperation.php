<?php 
    require_once("./php/connection.php");


        try{

            $connection = getConnection();
            //  -*-*-*-*-*-*-**-*- Create new row in table Service -*-*-*-*-*-*-**-*-

            if(isset($_POST["bAdd"]))
            {
                $connection = new PDO("mysql:host=$servername;dbname=$db",$user,$pass);;
                $query="INSERT INTO service VALUES(:nums,:noms)";
                $stat=$connection->prepare($query);
                $stat->bindParam(':nums',$nums);
                $stat->bindParam('noms',$noms);
                $nums=$_POST['text1'];
                $noms=$_POST['text2'];
                $stat->execute();
                if(isset($_POST['text1'])){
                    $stat->execute();
                }
                else{
                    echo "Num du service required";
                }

                 // -*-*-*-*-*-*-**-*- Delete row in table Service -*-*-*-*-*-*-**-*-

                 if(isset($_POST["bDelete"]))
                 {
                     $connection = new PDO("mysql:host=$servername;dbname=$db",$user,$pass);;
                     $query="DELETE FROM service WHERE nums=:a , noms=:b";
                     $stat=$connection->prepare($query);
                     $stat->bindParam(":a",$_POST["nums"]);
                     $stat->bindParam(":b",$_POST["noms"]);
                     $nums=$_POST['text1'];
                     $noms=$_POST['text2'];
                     $stat->execute();
                    echo "service deleted";

            }
        }

    }
        catch(PDOException $e){
            echo "Error" . $e->getMessage();
        }

       
       

?>