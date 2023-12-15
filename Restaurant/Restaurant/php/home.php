<?php

$conn = new mysqli("localhost","root","","restro");

if($conn){
  $qry = "select * from dishes limit 0,4";
  $prep_qry = $conn->prepare($qry);
  if($prep_qry->execute()){
    $data = $prep_qry->get_result();
  }
  else{
    echo "Error while fetching data";
  }
}
else{
  echo "Error while connecting to database";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="../js/home.js"></script>
<link rel="stylesheet" href="../css/home.css">
</head>
<body>
<div id="section-01-div">
  <div id="navbar">
  <ul>
    <li class="btn btn-three"><a href="#home-id">Home</li>
    <li class="btn btn-three"><a onclick=menu_redirect()>Menu</li>
    <li class="btn btn-three"><a onclick=about_redirect()>About</li>
    <li class="btn btn-three"><a onclick=contact_redirect()>Contact</li>
  </ul>
  </div>

  <div id="food-img-div">
    <img src="../img/pexels-ella-olsson-1640773.jpg" alt="">
  </div>
  
  <div id="book-div">
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div id="main-book-div">
      <p id="reserve-para-id" class="para">Wanna reserve yourself a seat?</p>
      <!-- <button id="book-btn-id" class="btn" onclick=book()>Book seat</button> -->
      <button class="book-btn" role="button" onclick=book()>Book seat</button>
    </div>
  </div>

</div>

<div id="more-info-div">
  
  <div id="menu-div">
    <h1 id="headline" class="para">check out our trending dishes</h1>
    <br>
    <br>
    <br>
    <br>
    <div id="data-div">
      <table>
      <?php
      while($row = $data->fetch_assoc()){
      ?> 
        <tr>
          <td><?php echo $row["NAME"]?></td>
          <td><?php echo $row["PRICE"]?></td>
        </tr>
        <?php
      }
        ?>
      </table>
    </div>
    <br>
    <br>
    <div id="more-menu-btn-div">
        <button onclick=menu_redirect() id="more-btn-id" class="para">More</button>
    </div>
  </div>
</div>
 <br>
 <br>
 <br>
 <br>
 <br>
<div id="about-us-div">
  <br>
  <br>
  <h1 id="about-headline" class="para">About us</h1>
    <div id="about-img-div">
      <img src="../img/about_pic_01.jpg" alt="People eating food">
    </div>
    <div id="para-div">
      <p id="about-para">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex odio provident enim, sit reprehenderit culpa architecto itaque distinctio nam recusandae numquam corporis id officiis, deserunt nostrum non doloremque possimus rem, unde nemo veniam! Dolores distinctio tempore eveniet maiores error dolore dolor voluptates exercitationem officia quam!
      </p>
      </div>
      <div id="about-btn-div">
        <button id="about-btn" onclick=about_us_redirect()>Know more</button>
      </div>
</div>

<br>
<br>
<br><br><br><br><br><br><br><br><br>

<div id="reserve-div">
  <div id="reserve-img">
    <img src="../img/mainpage.jpg" alt="">
  </div>
  <div id="reserve-para">
    <p class="font-style">Come join us</p>
    <p id="resv-para2" class="font-style">reserve your table</p>

    <button id="resv-btn" class="book-btn" onclick=book()>Reserve</button>
  </div>
</div>
  
<br><br><br><br><br><br><br>
<div id="contact-us-div">
  <h1 id="contact-us-para" class="para">Contact us</h1>
  <br>
  <br>
  <br>

  <div id="contact-form">
    <p id="contact-label1">Email:</p>
    <br>
    <input type="email" id="email-id" class="form-input">
    <br>
    <br>
    <p id="contact-label2">
    Message:
    </p>
    <br>

    <input type="text" id="message-id" class="form-input">
  </div>
  <br>
  <br>
  <div id="contact-btn">
    <input type="button" value="Send" onclick=send()></button>
  </div>



</div>
<div id="footer-div">
    <div id="contact-div">
        <h1 id="contact">Contact us</h1>
        <br>
        <br>
        <br>
        <p class="info-font">
        <b>Address:</b>
        798 South Park Avenue, New York, USA 
        </p>
        
        <p class="info-font">
            <b>Email:</b>
            companyabc@email.com
        </p>
    </div>
    <br><br><br><br>
        <p id="para1" class="info-font">©  2020 Company - All Rights Reserved.</p>
    </div>
</body>


</html>