<?php 
    
$conn = new mysqli("localhost","root","","restro");
if($conn)
{
    $select_qry = "select * from dishes";

    $qry_data = $conn->query($select_qry);

    if($qry_data)
    {
        $total_num_of_items = mysqli_num_rows($qry_data);
        $items_per_pages = 4;
        $total_num_of_pages = ceil($total_num_of_items/$items_per_pages);
        
    }
    else
    {
        echo "Error while running the query<br>";
    }
}
else
{
    echo "Error connecting to database<br>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
<div id="main-div">
    <div id="image-div">
        <img src="../img/pexels-ella-olsson-1640773.jpg" alt="">
    </div>
    <div id="menu-div" class="font-style">
        <table id="menu-table">
            <tr>
                <th id="dishes_page_db.php" class="active" onclick="get_dishes(this.id);">Dishes</th>
                <th id="beverages_page_db.php" class="passive" onclick="get_beverages(this.id);">Beverages</th>
                <th id="desserts_page_db.php" class="passive" onclick="get_desserts(this.id);">Desserts</th>
                <th id="snacks_page_db.php" class="passive" onclick="get_snacks(this.id);">Snacks</th>
            </tr>
        </table>
        <br><br><br>
        <div id="dish-div">
            <!-- Here the iframe of different webpages gets inserted-->
            <iframe src="../database/dishes_page_db.php" frameborder=0 id="iframe-id"></iframe>
        </div>
    </div>
    
    <!-- <div id="pagination-div">
        
    </div>     -->
    <div id="gallery-div1">
        
    <div id="gallery-para-div">
        <p class="gallery-para">Our gallery</p>
    </div>

        <div class="img-div" id="div1">
            <div class="para-div">
                <p>Dish name</p>
            </div>
            <div id="img1-div" class="img-size">
                <img src="../img/pexels-steve-3789885.jpg" alt="food-image" onmouseover=on_hover(this) onmouseleave=on_leave(this)>
            </div>
        </div>

        <div class="img-div" id="div2">
            <div class="para-div">
                <p>Dish name</p>
            </div>
            <div id="img2-div" class="img-size">
                <img src="../img/pexels-marc-roy-1832016.jpg" alt="food-image" onmouseover=on_hover(this) onmouseleave=on_leave(this)>
            </div>
        </div>

        <div class="img-div" id="div3">
            <div class="para-div">
                <p>Dish name</p>
            </div>
            <div id="img3-div" class="img-size">
                <img src="../img/pexels-sebastian-coman-photography-3659862.jpg" alt="food-image" onmouseover=on_hover(this) onmouseleave=on_leave(this)>
            </div>
        </div>
    </div>


    <div id="gallery-div2">
        
        <div class="img-div" id="div4">
            <div class="para-div">
                <p>Dish name</p>
            </div>
            <div id="img4-div" class="img-size">
                <img src="../img/pexels-valeria-boltneva-842571.jpg" alt="food-image" onmouseover=on_hover(this) onmouseleave=on_leave(this)>
            </div>
        </div>

        <div class="img-div" id="div5">
            <div class="para-div">
                <p>Dish name</p>
            </div>
            <div id="img5-div" class="img-size">
                <img src="../img/pexels-j-a-n-n-g-u-y-e-n-🍁-699953.jpg" alt="food-image" onmouseover=on_hover(this) onmouseleave=on_leave(this)>
            </div>
        </div>

        <div class="img-div" id="div6">
            <div class="para-div">
                <p>Dish name</p>
            </div>
            <div id="img6-div" class="img-size">
                <img src="../img/pexels-pixabay-248444.jpg" alt="food-image" onmouseover=on_hover(this) onmouseleave=on_leave(this)>
            </div>
        </div>
        
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
<script src="../js/menu.js"></script>
</body>
</html>