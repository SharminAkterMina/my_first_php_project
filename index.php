<?php
   $name = $_POST['name'];
   $roll = $_POST['roll'];
   $age= $_POST['age'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $des = $_POST['des']; 
    
   // database connection

    $conn = new mysqli('localhost', 'root', '', 'sajek_trip');
    
    if ($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into student (name, age) values (?, ?)");
        $stmt->bind_param('ss', $name, $age);
        $stmt->execute();
        echo "form filled successfully...";
        $stmt->close();
        $conn->close();

    }
    
    








?>