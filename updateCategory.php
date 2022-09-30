<?php
    require_once "dbconnect.php";
    $catID = $_GET['id'];

    // var_dump($catID);
    $sqlQuery = "SELECT * from category WHERE id = $catID";
    
    $res = $conn->query($sqlQuery);


    if($_POST){
        var_dump($_POST);
    }
?>

<form action="" method="post">

    <input type="text" placeholder="Enter Category name" name="name" value="">
    <br>
    <input type="text"  name="status" placeholder="Enter category status" value="">
    <br>
   
    <input type="submit">
</form>