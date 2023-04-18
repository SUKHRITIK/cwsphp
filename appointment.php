<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $number = $_POST['number'];
    $time = $_POST['time'];

    $conn = new mysqli('localhost','root','','login');
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into form2(fname,lname,email,Password,mobile,date,number,time)values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssiiii",$fname,$lname,$email,$Password,$mobile,$date,$number,$time);
        $stmt->execute();
        echo "<h2>Your msg is sent...</h2>";
        $stmt->close();
        $conn->close();
    }
   

?>