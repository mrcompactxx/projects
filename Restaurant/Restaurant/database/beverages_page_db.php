<?php

session_start();

if(isset($_POST["items_to_skip"]))
{
    $items_to_skip = $_POST["items_to_skip"];
}
else
{
    $items_to_skip = 0;
}
if(isset($_POST["items_to_display"]))
{
    $items_to_display = $_POST["items_to_display"];
}
else
{
    $items_to_display = 0;
}
if(isset($_POST["clicked"]))
{
    $clicked = $_POST["clicked"];
}
else
{
    $clicked = "false";
}
if(isset($_POST["beverages"]))
{
    $beverages = $_POST["beverages"];
}
else
{
    $beverages = "false";
}
if(isset($_POST["beverages_page"]))
{
    $beverages_page = $_POST["beverages_page"];
}

$conn = new mysqli("localhost","root","","restro");
if($beverages=="false")
{
    $sql = "select * from beverages limit ?,?";
    $prep_qry = $conn->prepare($sql);
    $prep_qry->bind_param("ii",$items_to_skip,$items_to_display);
    if($prep_qry->execute())
    {
        $result = $prep_qry->get_result();
    }
    else{
        echo "Error while executing query<br>";
    }
}
else
{
    $conn = new mysqli("localhost","root","","restro");
    $sql = "select * from beverages limit 0,4";
    $prep_qry = $conn->prepare($sql);
    if($prep_qry->execute())
    {
        $result = $prep_qry->get_result();
    }
    else
    {
        echo "Error while executing query<br>";
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/beverages.css">
</head>
<body>
    <div id="main-div">
        <div id="beverages-div">
            <table id="table-id">
                <?php 
                $num=1;
                while($row = $result->fetch_assoc())
                { 
                ?>
                <tr>
                    <td><?php echo $row["NAME"] ?></td>
                    <td><?php echo $row["PRICE"] ?></td>
                </tr>
                <?php }?>
            </table>
            
        </div>
    </div>
</body>
</html>