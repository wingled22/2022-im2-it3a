<?php

        require_once "dbconnect.php";

        $catName = $_POST['name'];
        $catStatus = $_POST['status'];

        $sql = "INSERT INTO category (name, status) values ('$catName', '$catStatus')";
    
        $res  = $conn->query($sql);
        if($res)
            header('Location: form.html');
        else    
            echo "error happened";
?>