<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$seats = $_POST['seats'];
$date = $_POST['date'];
$time = $_POST['time'];
$curr_date = $_POST['current_date'];
$insert_qry = "insert into reservations(cust_name,cust_email,cust_no,cust_seat,resv_date,resv_time,booked_at) values(?,?,?,?,?,?,?)";

$servername= "localhost";
$username = "root";
$pass = "";
$db_name = "restro";


$conn = new mysqli($servername,$username,$pass,$db_name);
if($conn){
    echo "connection successful<br>";
    $prep_qry = $conn->prepare($insert_qry);
    $prep_qry->bind_param('ssiisss',$name,$email,$number,$seats,$date,$time,$curr_date);
    if($prep_qry->execute()){
        echo "Data inserted";
    }
    else{
        echo "Error while inserting data<br>";
    }
}
else{
    echo "Error while connecting to database";
    echo $conn->error;
}

$conn->close();
?>