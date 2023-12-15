<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$passwrd = $_POST['password'];
$hashed_passwrd = password_hash($passwrd,PASSWORD_DEFAULT);

$servername = 'localhost';
$username = 'root';
$pass = '';
$db_name = 'restro';



$conn = new mysqli($servername,$username,$pass,$db_name);
if($conn){
    $check_qry = "select email from login_data where email=?";
    $prep_qry = $conn->prepare($check_qry);
    $prep_qry->bind_param('s',$email);


    if($prep_qry->execute()){
        $r_set = $prep_qry->get_result();
        $user_data = $r_set->fetch_assoc();
        if($user_data==null)
        {
            $prep_qry = "insert into login_data(first_name,last_name,email,pass) values(?,?,?,?);";
            $insert_qry = $conn->prepare($prep_qry);
            if(isset($pass))
            {
                echo $pass;
            }
            else
            {
                echo "not set";
            }
            $insert_qry->bind_param('ssss',$first_name,$last_name,$email,$hashed_passwrd);
            if($insert_qry->execute())
            {
                echo 2;
            }
            else
            {
                echo "error while data inserting";
            }
        }
        else
        {
            $email_id = $user_data['email'];
            if($email==$email_id)
            {
                echo 1;
            }
            else
            {

            }
            
        }
        
        
    }
    else
    {
        echo "error in query<br>";
    }
}
else
{
    echo "Error while connecting to database<br>";
}

$conn->close();

?>