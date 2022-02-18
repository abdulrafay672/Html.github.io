<?php
include('database.php');

$name=$_POST['name'];
$lastname=$_POST['l_name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$re_password=$_POST['re_password'];
$room_type=$_POST['room_type'];

if($room_type=="teacher"){


   $sql="SELECT *FROM teacher where t_email='".$email."'";
      
   $result = $conn->query($sql);
//   echo $result;



   
   if($result->num_rows > 0){
    echo"<script> alert('teacher already registered with this email: ".$email."') </script>";
    // echo  "teacher already registered with this email: ".$email;

    
   }else{
       
    $sql = "INSERT INTO teacher(t_name, t_last_name,t_email,t_pass) VALUES ('".$name."','".$lastname."','".$email."','".$password."')";
    
    if ($conn->query($sql) === TRUE) {
        echo('<script>alert("New teacher registered..!")</script>');
    } else {  
    echo('<script>alert("Error: "'.$sql.'" \n "'.$conn->error.'"")</script>');
    }
  
   }// email validation

}// teacher
else{
    $sql = "INSERT INTO student(st_name, st_last_name,st_email,st_pass) VALUES ('".$name."','".$lastname."','".$email."','".$password."')";
    
    if ($conn->query($sql) === TRUE) {
        echo('<script>alert("New Student registered..!")</script>');
    } else {  
    echo('<script>alert("Error: "'.$sql.'" \n "'.$conn->error.'"")</script>');
    }
    


}// student


// echo "hello;"

?>