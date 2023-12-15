<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div id="main-div">
    <div id="img-div">
        <img src="../img/reservation_bg.jpg" alt="background-image" id="reservation-img-id" height="100%" width="100%">
    </div>
    <div id="login-main-div">
        <div id="login-div">
            <label id="first-name">First name: </label>
            <br>
            <input type="text" id="first-name-id" placeholder="Enter first name">
            <br>
            <label id="last-name">Last name: </label>
            <br>
            <input type="text" id="last-name-id" placeholder="Enter last name">
            <br>
            <label id="email">Email: </label>
            <br>
            <input type="text" id="email-id" placeholder="Enter email">
            <br>
            <label id="Password: ">Password: </label>
            <br>
            <input type="text" id="password-id" placeholder="Enter password">
            <br>
            <br>
            <input type="button" id="signup-btn" value="sign up" onclick=signup()>
        </div>

    </div>

</div>
<script src="../js/login.js"></script>
</body>
</html>