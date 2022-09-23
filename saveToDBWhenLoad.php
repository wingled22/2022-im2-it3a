<?php
    require_once "dbconnect.php";

    $sql = "INSERT INTO category (name, status) values ('king', 'nino')";

    $res  = $conn->query($sql);
    if($res)
        echo "Data saved";
    else    
        echo "error happened";

?>

