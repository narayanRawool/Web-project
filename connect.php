<?php
       $Name = $_post['Name'];
       $Email = $_post['Email'];
       $Subject = $_post['Subject'];
       $Message = $_post['Message'];


       //Database connection
      $conn = new mysqli('localhost','root','','mango');
      if($conn->connect_error){
        die('Connection failed :'.$conn ->connect_error);
      }else{
        $stmt = $conn->prepare("insert into contact(Name,Email,Subject,Message)values(?,?,?,?)");
        $stmt->bind_param("ssss",$Name,$Email,$Subject,$Message);
        $stmt->execute();
        echo "Contact Successfully...";
        $stmt->close();
        $conn->close();

      }

?>