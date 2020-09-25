<?php


//    echo "yes";
//    echo $_POST;
//
//    $var = new FormData($_POST);


     foreach($_POST as $key => $val){

         $result =    $key.': '.$val   ;
         echo $result;
     }



        // echo $_GET['name'];


?>